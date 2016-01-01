{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Mercedes Benz{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/landrover" />
<meta property="og:title"              content="Land Rover Discovery" />
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
<p>This Land Rover Discovery is the latest addition to our fleet.
With its air suspension, climate control, privacy glass and almond leather interior, it has the ability to transport up to six in total luxury. It makes a superb Groom's or Bridesmaid's car, and also suits the Bride who is seeking out the unusual.</p>
<h3>Get a Quote</h3>
<div id="call-to-action">
<a href="tel:01924370485"><button type="button" class="btn btn-primary" id="first-button"><i class="fa fa-phone"></i>01924 370485</button></a>
<a href="contact"><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i>Enquire</button></a>
<div class="clearfix"></div>
</div>
<h3>Share on Social Media</h3>
<a data-pin-do="buttonPin" data-pin-color="red" data-pin-count="beside" href="https://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Flandrover&media=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fimg%2Flandrover%2Fexterior.jpg&description=Land%20Rover%20Discovery%20Wedding%20Car"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
<div class="fb-share-button" data-href="http://www.maxweddingcars.co.uk/vintage" data-layout="button_count"></div>
<div class="clearfix"></div>
<br>
{% endblock %}

{% block other_cars %}

<div class="extra-car">
<img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg">
<button type="button" class="btn btn-default"><a href="vintage"><i class="fa fa-search"></i>View</a></button>
</div>

<div class="extra-car">
<img alt="mercedes wedding car" src="/img/stretch-merc/side.jpg">
<button type="button" class="btn btn-default"><a href="seven_seat_mercedes"><i class="fa fa-search"></i>View</a></button>
</div>

<div class="extra-car">
<img alt="mercedes wedding car" src="/img/merc/Merc-Large.gif">
<button type="button" class="btn btn-default"><a href="mercedes"><i class="fa fa-search"></i>View</a></button>
</div>
{% endblock %}