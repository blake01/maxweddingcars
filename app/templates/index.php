{% extends "_base.html" %}

{% block title %}Wedding Cars Leeds | Maxweddingcars | Ring 01924 370485 For Classic Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}
{% block description %}Wedding Cars Leeds with Maxweddingcars. We supply only the very best wedding cars including our Vintage style Tourers, 7 seater Viscount, and our late model Land Rover Discovery.{% endblock %}

{% block main %}
<div class="col-sm-6 pull-left">
  <section class="no-top-padding">
    <h1>Wedding Car Hire in Yorkshire</h1>
    <p>At Maxweddingcars, we have built a formidable reputation based on reliability and superior levels of service.
      We supply only the very best wedding cars including our Vintage style Tourers, 7 seater Viscount, and our late model Land Rover Discovery.
    </p>
  </section>
</div>
<div class="col-sm-6 sidebar pull-right">
  <h2>Browse Our Cars</h2>
  <div class="sidebar-car">
    <img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg">
    <a href="vintage" class="btn btn-default"><i class="fa fa-search"></i>View Vintage Style Tourers</a>
  </div>

  <div class="sidebar-car">
    <img alt="viscount wedding car" src="/img/viscount/viscount.jpg">
    <a href="viscount" class="btn btn-default"><i class="fa fa-search"></i>View 7 Seater Viscount</a>
  </div>

  <div class="sidebar-car">
    <img alt="land rover wedding car" src="/img/landrover/exterior.jpg">
    <a href="landrover" class="btn btn-default"><i class="fa fa-search"></i>View Land Rover Discovery</a>
  </div>

</div>
<div class="clearfix visible-xs"></div>
<hr class="visible-xs">
<div class="col-sm-6 pull-left">
  <section>
    <h2>Read Our Reviews</h2>
    <div id="owl-example" class="owl-carousel">
      {% include 'reviews_partial.html' %}
    </div>
  </section>
  <section>
    <h2>Get a Quote</h2>
    <p>Simply call us or use our online enquiry form to get a quotation or arrange to view our cars.</p>
    {% include '_call_to_action.html' %}
  </section>
  <h2>More About Maxweddingcars</h2>
  <section>
    <h3>Based in Wakefield, nr. Leeds</h3>
    <p>Established in 1983, we are now  recognised as the Chauffeur Company of choice specialising in Weddings and Civil Partnerships in and around the Yorkshire area. Our cars are, however, available to hire for any occasion, including proms, birthdays, anniversaries or any other special occasion.</p>
  </section>
  <section>
    <h3>Pricing/Reduced Rates</h3>
    <p>Whilst our rates are highly competitive, we never compromise on the quality of our service or our cars, all of which are superb. We will match any genuine 'like for like' quotation for Weddings in the Wakefield area. We  also offer reduced rates for mid week Weddings and/or when more than one car is required.</p>
  </section>
  <section class="borderless">
    <h3>Vintage Style Wedding Cars, Impeccable Service</h3>
    <p>We can take care of all your  transport requirements by adopting a flexible approach &amp; tailoring  an affordable package to meet your specific needs.
      All our wedding cars are, of course, tastefully trimmed and may be co-ordinated to match your personal Wedding theme. Our cars are available for inspection by appointment.
    </p>
  </section>
</div>
{% endblock %}
