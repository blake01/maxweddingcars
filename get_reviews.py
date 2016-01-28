# Get all 5 star ratings for maxweddingcars.co.uk
from __future__ import unicode_literals
import requests
import json
import urllib
from dateutil.parser import parse as dateparse
from jinja2 import Environment
from cgi import escape
import os

e = Environment()

html = """
  <div class="review">
    <img src="{{ img_src }}" alt="{{ name }} Facebook profile picture">
    <div class="review-head">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <h3>{{ name }}</h3>
        <em>{{ review_date }}</em>
    </div>
    <div class="clearfix"></div>
    <p>{{ review_text }}</p>
  </div>
"""

def get_fb_data(api_call, extra_params={}):
    host = 'https://graph.facebook.com'
    token_file = open('permanentaccesstoken.js')
    token_file_json = json.load(token_file)
    token = token_file_json['data'][0]['access_token']
    params = {'access_token': token}
    params.update(extra_params)
    get_string = urllib.urlencode(params)
    url = '%s/v2.5/%s?%s'%(host, api_call, get_string)
    r = requests.get(url, allow_redirects=True, stream=True)
    return r

print 'Retrieving all reviews from Facebook'
all_maxweddingcars_reviews_api_call = '259756950891843/ratings/'
reviews_data_packet = get_fb_data(all_maxweddingcars_reviews_api_call)
reviews = json.loads(reviews_data_packet.content)

outfile = open('templates/reviews_partial.html', 'w')
try:
    os.makedirs('deploy/fb')
except OSError:
    # Already exists
    pass

write_count = 0

for review in reviews['data']:
    # Take only 5 star reviews
    if review['rating'] == 5:
        # Get profile picture
        profile_pic_api_call = '%s/picture'%(review['reviewer']['id'])
        # Check if the picture is a silhouette
        img_metadata_packet = get_fb_data(profile_pic_api_call, {'fields':'is_silhouette', 'redirect':False})
        is_silhouette = json.loads(img_metadata_packet.content)['data']['is_silhouette']
        if not is_silhouette and write_count < 10:
            img_data_packet = get_fb_data(profile_pic_api_call, {'type':'large'})
            file_name = '/fb/%s.jpg'%(review['reviewer']['id'])
            with open('deploy' + file_name, 'wb') as f:
                for chunk in img_data_packet:
                    f.write(chunk)
            # Get other details and render template
            date_and_time = dateparse(review['created_time'], fuzzy=True)
            review_html = e.from_string(html).render(
                img_src = file_name,
                name = review['reviewer']['name'].encode('ascii', 'xmlcharrefreplace'),
                review_date = date_and_time.strftime("%d/%m/%y"),
                review_text = review['review_text'].encode('ascii', 'xmlcharrefreplace')
            )
            write_count += 1
            print 'Writing HTML for review %s'%(write_count)
            outfile.write(review_html.encode('utf8'))

outfile.close()
