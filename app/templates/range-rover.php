{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Range Rover Vogue{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/range-rover" />
<meta property="og:title"              content="Maxweddingcars - Range Rover Vogue" />
<meta property="og:description"        content="The Range Rover Vogue makes a superb Groom's or Bridesmaid's car, and also suits the Bride who is seeking out the unusual." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/landrover/range-rover-exterior.jpg" />
{% endblock %}

{% block img_tags %}
<div>
  <img src="/img/landrover/range-rover-exterior.jpg" class="lazyOwl" alt="Range Rover Vogue">
</div>
<div>
  <img src="/img/landrover/range_rover_interior.jpg" class="lazyOwl" alt="Range Rover Interior">
</div>
{% endblock %}

{% block cartitle %}Range Rover Vogue{% endblock %}

{% block car_description %}
<p>A truly first-class travel experience. If you're looking for a Chauffeur
driven Wedding car which stands out from the crowd, look no further.
Our Range Rover is refined and sophisticated whilst the luxurious interior
gives a sense of calm.</p>

<p>With its air suspension, climate control, panoramic roof, privacy glass and
beautifully appointed ivory leather interior, this car has the ability to
transport up to four passengers plus the Chauffeur in total luxury.
The Range Rover Vogue makes a superb Groom's or Bridesmaid's car, and also
suits the Bride who is seeking out the unusual.</p>
<hr>
<iframe width="100%" height="275" src="https://www.youtube.com/embed/AEnQETarOjM?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<hr>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
{% endblock %}

{% block other_cars %}

<div class="extra-car">
  <img alt="vintage style tourer" src="/img/small/vintage/beaufordpair.jpg" srcset="/img/small/vintage/beaufordpair.jpg 1x, /img/vintage/beaufordpair.jpg 2x">
  <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="viscount wedding car" src="/img/viscount/viscount_front_1_opt.jpg" srcset="/img/small/viscount/viscount_front_1_opt.jpg 1x, /img/viscount/viscount_front_1_opt.jpg 2x">
  <a href="viscount" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
