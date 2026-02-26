{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Vintage Style Tourer{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/vintage" />
<meta property="og:title"              content="Maxweddingcars - Vintage Style Tourer" />
<meta property="og:description"        content="Our Vintage Style Tourer represents the ultimate in Wedding transport." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/vintage/beaufordpair.jpg" />
{% endblock %}

{% block img_tags %}
<div>
  <img alt="Part-Hardtop Wedding Car 1" class="lazyOwl" data-src="/img/vintage/hardtop1.jpg">
</div>
<div>
  <img alt="Part-Hardtop Wedding Car 2" class="lazyOwl" data-src="/img/vintage/hardtop2.jpg">
</div>
<div>
  <img alt="Part-Hardtop Wedding Car 3" class="lazyOwl" data-src="/img/vintage/beaufordfront.jpg">
</div>
<div>
  <img alt="Part-Hardtop Wedding Car 4" class="lazyOwl" data-src="/img/vintage/beaufordrear.jpg">
</div>
{% endblock %}

{% block cartitle %}Vintage Style Tourer{% endblock %}

{% block car_description %}
<p>Our Vintage Style Tourer represents the ultimate in Wedding transport.</p>
<p>Finished in Old English White with a cream leather interior, this car provides a superb
  backdrop to your wedding photographs. Enjoy the experience of travelling in style in this elegant vehicle, which may be hired individually or as a matching pair with our 6 seater Viscount.
</p>
<p>Should the weather be unkind, this car has a soft top hood (see pictures) to
  protect you from the elements at any time of year.
</p>
<p>Our Tourer is a four door ‘long bodied’ version of the marque seating <b>three passengers, plus the chauffeur</b>, whilst affording greater rear space for your comfort.</p>
<p>See our 6 seater Viscount or Range Rover Vogue if you require additional transport for Bridesmaids, the Groom, Parents or your guests.</p>
<hr>
<iframe width="100%" height="275" src="https://www.youtube.com/embed/VgRdROvQq6c?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<hr>
<h3>Get a Quote</h3>
{% include '_call_to_action.html' %}
{% endblock %}

{% block other_cars %}
<div class="extra-car">
  <img alt="viscount wedding car" src="/img/viscount/viscount_front_1_opt.jpg" srcset="/img/small/viscount/viscount_front_1_opt.jpg 1x, /img/viscount/viscount_front_1_opt.jpg 2x">
  <a href="viscount" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
  <img alt="range rover wedding car" src="/img/landrover/range-rover-exterior.jpg" srcset="/img/small/landrover/range-rover-exterior.jpg 1x, /img/landrover/range-rover-exterior.jpg 2x">
  <a href="range-rover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}
