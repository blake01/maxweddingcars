{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Vintage Style Tourers{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/vintage" />
<meta property="og:title"              content="Maxweddingcars - Vintage Style Tourers" />
<meta property="og:description"        content="Our Vintage Style Tourers represent the ultimate in Wedding transport." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/vintage/beaufordpair.jpg" />
{% endblock %}

{% block img_tags %}
<div>
  <img alt="Two Wedding Cars" class="lazyOwl" data-src="/img/vintage/beaufordpair.jpg">
</div>
<div>
  <img alt="Fully Convertible Wedding Car at Newmillerdam, Wakefield" class="lazyOwl" data-src="/img/vintage/beaufordnewmillerdam.jpg">
</div>
<div>
  <img alt="Fully Convertible Wedding Car with soft-top hood on" class="lazyOwl" data-src="/img/vintage/beaufordroof.jpg">
</div>
<div>
  <img alt="Fully Convertible Wedding Car at a Wedding Reception" class="lazyOwl" data-src="/img/vintage/beaufordwedding.jpg">
</div>
<div>
  <img alt="Fully Convertible Wedding Car at Sandal Castle, Wakefield" class="lazyOwl" data-src="/img/vintage/beaufordsandal.jpg">
</div>
<div>
  <img alt="Fully Convertible Wedding Car Interior" class="lazyOwl" data-src="/img/vintage/beaufordinterior.jpg">
</div>
<div>
  <img alt="Part-Hardtop Wedding Car 2" class="lazyOwl" data-src="/img/vintage/beaufordfront.jpg">
</div>
<div>
  <img alt="Part-Hardtop Wedding Car 3" class="lazyOwl" data-src="/img/vintage/beaufordrear.jpg">
</div>
{% endblock %}

{% block cartitle %}Vintage Style Tourers{% endblock %}

{% block car_description %}
<p>Our Vintage Style Tourers represent the ultimate in Wedding transport.</p>
<p>Finished in Old English White with cream leather interiors, these cars will provide a superb
  backdrop to your wedding photographs. Enjoy the experience of travelling in style in these elegant vehicles, which may be hired individually, as a matching pair, or with our 7 seater Viscount.
</p>
<p>Should the weather be unkind, these cars have soft top hoods (see pictures) to
  protect you from the elements at any time of year.
</p>
<p>Our Tourers are four door &lsquo;long bodied&rsquo; versions of the marque, affording greater rear space for your comfort.</p>
<p>These cars each seat <b>three passengers, plus the chauffeur</b>.</p>
<p>See our 7 seater Viscount or Land Rover Discovery if you require additional transport for Bridesmaids, the Groom, Parents or your guests.</p>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="viscount wedding car" src="/img/viscount/viscount.jpg" srcset="/img/small/viscount/viscount.jpg 1x, /img/viscount/viscount.jpg 2x">
  <a href="viscount" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="land rover wedding car" src="/img/landrover/exterior.jpg" srcset="/img/small/landrover/exterior.jpg 1x, /img/landrover/exterior.jpg 2x">
  <a href="landrover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
