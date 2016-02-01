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
<p>Finished in old English white with cream leather interiors, these cars will provide a superb
  backdrop to your Wedding photographs. Enjoy the experience of travelling in style in these elegant vehicles, which may be hired individually or as a matching pair.
</p>
<p>Should the weather be unkind, these cars have soft top hoods (see pictures) to
  protect you from the elements at any time of year.
</p>
<p>Our Tourers are four door &lsquo;long bodied&rsquo; versions of the marque, affording greater rear space for your comfort.</p>
<p>These cars each seat <b>three passengers, plus the chauffeur</b>.</p>
<p>See our Mercedes Benz Limousine if you require additional transport for several Bridesmaids.</p>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
<h3>Share on Social Media</h3>
<div class="pin">
  <a data-pin-do="buttonPin" data-pin-color="red" data-pin-count="beside" href="https://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fvintage&media=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fimg%2Fvintage%2Fbeaufordpair.jpg&description=Vintage%20Style%20Wedding%20Cars"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
</div>
<div class="fb-share-button" data-href="http://www.maxweddingcars.co.uk/vintage" data-layout="button_count"></div>
<div class="clearfix"></div>
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="mercedes wedding car" src="/img/stretch-merc/side.jpg">
  <a href="seven_seat_mercedes" class="btn btn-default"><i class="fa fa-search"></i>View</a>
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