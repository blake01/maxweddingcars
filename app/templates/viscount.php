{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || 7 Seater Viscount{% endblock %}

{% block img_tags %}
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_interior.jpg" alt="Viscount Interior">
</div>
{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/viscount" />
<meta property="og:title"              content="Maxweddingcars - 7 Seater Viscount" />
<meta property="og:description"        content="he latest addition to our fleet is the superb Viscount." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/viscount/viscount.jpg" />
{% endblock %}

{% block cartitle %}7 Seater Viscount{% endblock %}

{% block car_description %}
<p>The latest addition to our fleet is the superb Viscount.</p>
<p>Finished in Old English white with a cream leather interior, this very rare car
can carry <b>seven passengers, plus the chauffeur</b>.</p>
<p>The headroom and interior space of the Viscount make for ease of
access with the fullest of Wedding dresses whilst the rear section of
the roof can be lowered providing an excellent photo opportunity.</p>
<p>The car can be hired individually or paired with our Vintage style Tourers.</p>

<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
<div class="clearfix"></div>
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg">
  <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="land rover wedding car" src="/img/landrover/exterior.jpg">
  <a href="landrover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}