{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Land Rover{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/landrover" />
<meta property="og:title"              content="Maxweddingcars - Land Rover Discovery" />
<meta property="og:description"        content="The Land Rover Discovery makes a superb Groom's or Bridesmaid's car, and also suits the Bride who is seeking out the unusual." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/landrover/exterior.jpg" />
{% endblock %}

{% block img_tags %}
<div>
  <img src="/img/landrover/exterior.jpg" alt="Land Rover Discovery">
</div>
{% endblock %}

{% block cartitle %}Land Rover Discovery{% endblock %}

{% block car_description %}
<p>With its air suspension, climate control, privacy glass and almond leather interior, this car has the ability to transport up to <b>six passengers plus the chauffeur</b> in total luxury.
  It makes a superb Groom's or Bridesmaid's car, and also suits the Bride who is seeking out the unusual.</p>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
{% endblock %}

{% block other_cars %}

<div class="extra-car">
  <img alt="vintage style tourer" src="/img/small/vintage/beaufordpair.jpg" srcset="/img/small/vintage/beaufordpair.jpg 1x, /img/vintage/beaufordpair.jpg 2x">
  <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="viscount wedding car" src="/img/viscount/viscount.jpg" srcset="/img/small/viscount/viscount.jpg 1x, /img/viscount/viscount.jpg 2x">
  <a href="viscount" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
