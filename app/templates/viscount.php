{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || 6 Seater Viscount{% endblock %}

{% block img_tags %}
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_front_1_opt.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_front_opt.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_quarter_opt.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_side_opt.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_side_1_opt.jpg" alt="Viscount Exterior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_open_door_opt.jpg" alt="Viscount Interior">
</div>
<div>
  <img class="lazyOwl" data-src="/img/viscount/viscount_interior_1_opt.jpg" alt="Viscount Interior">
</div>
{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/viscount" />
<meta property="og:title"              content="Maxweddingcars - 6 Seater Viscount" />
<meta property="og:description"        content="The latest addition to our fleet is the superb Viscount." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/viscount/viscount.jpg" />
{% endblock %}

{% block cartitle %}6 Seater Viscount{% endblock %}

{% block car_description %}
<p>Finished in Old English white with a cream leather interior, this very rare car
can carry <b>six passengers, plus the chauffeur</b>.</p>
<p>The headroom and interior space of the Viscount make for ease of
access with the fullest of Wedding dresses whilst the rear section of
the roof can be lowered providing an excellent photo opportunity.</p>
<p>The car can be hired individually or paired with our Vintage style Tourers.</p>
<hr>
<iframe width="100%" height="275" src="https://www.youtube.com/embed/-ZBX7bpVCXo?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<hr>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
<div class="clearfix"></div>
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="vintage style tourer" src="/img/small/vintage/beaufordpair.jpg" srcset="/img/small/vintage/beaufordpair.jpg 1x, /img/vintage/beaufordpair.jpg 2x">
  <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="range rover wedding car" src="/img/landrover/range-rover-exterior.jpg" srcset="/img/small/landrover/range-rover-exterior.jpg 1x, /img/landrover/range-rover-exterior.jpg 2x">
  <a href="range-rover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
