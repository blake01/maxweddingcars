{% extends "_car.html" %}

{% block title %}Wedding Cars for Hire || Mercedes Benz{% endblock %}

{% block img_tags %}
<div>
<img src="/img/merc/Merc-Large.gif" alt="Mercedes Benz Exterior">
</div>
<div>
<img src="/img/merc/Merc-Interior.gif" alt="Mercedes Benz Interior">
</div>
{% endblock %}

{% block head %}
<meta property="og:url"                content="http://www.maxweddingcars.co.uk/mercedes" />
<meta property="og:title"              content="Mercedes-Benz" />
<meta property="og:description"        content="If your wedding theme is less traditional you may prefer the elegant yet modern style of our Mercedes Benz." />
<meta property="og:image"              content="http://www.maxweddingcars.co.uk/img/merc/Merc-Large.gif" />
{% endblock %}

{% block cartitle %}Mercedes-Benz{% endblock %}

{% block car_description %}
<p>If your wedding theme is less traditional you may prefer the elegant yet modern style of our Mercedes 
Benz. Finished in brilliant silver, this air conditioned saloon is equally  suited to both Church and Civil Weddings.</p>
<p> In addition to providing stylish transport for the bride, this car can also provide a cost effective 
solution for transporting your bridesmaids/ guests when a second car is required.</p>
<p>This vehicle seats <b>four passengers, plus the chauffeur</b>.</p>
<h3>Get a Quote</h3>
<div id="call-to-action">
<a href="tel:01924370485"><button type="button" class="btn btn-primary" id="first-button"><i class="fa fa-phone"></i>01924 370485</button></a>
<a href="contact"><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i>Enquire</button></a>
<div class="clearfix"></div>
</div>
<h3>Share on Social Media</h3>
<div class="pin">
<a data-pin-do="buttonPin" data-pin-color="red" data-pin-count="beside" href="https://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fmercedes&media=http%3A%2F%2Fwww.maxweddingcars.co.uk%2Fimg%2Fmerc%2FMerc-Large.gif&description=Mercedes%20Benz%20Wedding%20Car"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
</div>
<div class="fb-share-button" data-href="http://www.maxweddingcars.co.uk/mercedes" data-layout="button_count"></div>
<div class="clearfix"></div>
<br>
{% endblock %}

{% block other_cars %}
<div class="extra-car">
<img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg">
<a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
<img alt="mercedes wedding car" src="/img/stretch-merc/side.jpg">
<a href="seven_seat_mercedes" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>

<div class="extra-car">
<img alt="land rover wedding car" src="/img/landrover/exterior.jpg">
<a href="landrover" class="btn btn-default"><i class="fa fa-search"></i>View</a>
</div>
{% endblock %}