{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Mercedes Benz Seven Passenger Limousine{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/seven_seat_mercedes" />
<meta property="og:title"              content="Maxweddingcars - Mercedes-Benz Seven Passenger Limousine" />
<meta property="og:description"        content="This superb vehicle, finished in Pearl white, can carry seven passengers plus the chauffeur in total comfort." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/stretch-merc/merc-stretch-quarter-front.jpg" />
{% endblock %}

{% block img_tags %}
<div>
  <img class="lazyOwl" data-src="/img/stretch-merc/side.jpg" alt="Mercedes Benz Exterior" />
</div>
<div>
  <img class="lazyOwl" data-src="/img/stretch-merc/merc-stretch-quarter-front.jpg" alt="Mercedes Benz Front" />
</div>
<div>
  <img class="lazyOwl" data-src="/img/stretch-merc/merc-stretch-quarter-rear.jpg" alt="Mercedes Benz Rear" />
</div>
{% endblock %}

{% block cartitle %}Mercedes-Benz Seven Passenger Limousine{% endblock %}

{% block car_description %}
<p>This superb vehicle, finished in Pearl white, can carry <b>seven passengers plus the chauffeur</b> in total comfort. Whilst it is an ideal and particularly spacious Bridal car able to accommodate the largest of bridal gowns, it represents a highly cost effective and efficient solution should you wish to transport several Bridesmaids/Parents/Guests.</p>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
<h3>Share on Social Media</h3>
<div class="pin">
  <a data-pin-do="buttonPin" data-pin-color="red" data-pin-count="beside" href="https://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fseven_seat_mercedes&media=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fimg%2Fstretch-merc%2Fmerc-stretch-quarter-front.jpg&description=Mercedes%20Benz%20Limousine%20Wedding%20Car"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
</div>
<div class="fb-share-button" data-href="http://www.maxweddingcars.co.uk/seven_seat_mercedes" data-layout="button_count"></div>
<div class="clearfix"></div>
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg">
  <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="mercedes wedding car" src="/img/merc/Merc-Large.gif">
  <a href="mercedes" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="land rover wedding car" src="/img/landrover/exterior.jpg">
  <a href="landrover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
