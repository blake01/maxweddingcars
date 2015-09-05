{% extends "_base.html" %}

{% block title %}Wedding Cars Leeds | Maxweddingcars | Ring 01924 370485 For Classic Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block description %}Wedding Cars Leeds with Maxweddingcars. We have built a formidable reputation based on reliability and superior levels of service. We supply only the very best wedding cars including our Vintage style Tourers, Rolls Royce and Mercedes Benz. Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block main %}
<h1 class="mainhead">Wedding Car Hire in West Yorkshire</h1>
<p>At Maxweddingcars, we have built a formidable reputation based on reliability and superior levels of service.
We supply only the very best wedding cars including our Vintage style Tourers, Mercedes Benz and Mercedes Benz Limousine.</p>
<hr>
<h2 class="mainhead">Based in Wakefield, nr. Leeds</h2>
<p>Established in 1983, we are now  recognised as the Chauffeur Company of choice specialising in Weddings and Civil Partnerships in and around the Yorkshire area. Our cars are, however, available to hire for any occasion, including proms, birthdays, anniversaries or any other special occasion.</p>
<hr>
<h3 class="mainhead">Vintage Style Wedding Cars, Impeccable Service</h3>
<p>We can take care of all your  transport requirements by adopting a flexible approach &amp; tailoring  an affordable package to meet your specific needs.
All our wedding cars are, of course, tastefully trimmed and may be co-ordinated to match your personal Wedding theme. Our cars are available for inspection by appointment.</p>
<hr>
<h3 class="mainhead">Pricing/Reduced Rates</h3>
<p>Whilst our rates are highly competitive, we never compromise on the quality of our service or our cars, all of which are superb.</p>
<p>We will match any genuine 'like for like' quotation for Weddings in the Wakefield area.</p>
<p>We  also offer reduced rates for mid week Weddings and/or when more than one car is required.</p>
<hr>
<h3 class="mainhead">2015 Weddings</h3>
<p>Subject to availability, we can offer a special reduced rate on 2015 Weddings.</p>
<p>Call us on the number above or fill in our <a href="contact.php">enquiry form</a> to obtain a bespoke quote.</p>
<hr>
<h3 class="mainhead">Recent Reviews</h3>
<p>Here is just one of the many unsolicited reviews we have received.</p>
<?php

$r = rand(1, 7);
$reviews = array(
"Absolutely Fantastic! Friendly service, accommodated all our needs and the cars are magnificent. Max offered to take me and my wife on a 10 minute journey after the wedding by ourselves just to catch up together on the hectic day away from it all which was great and the cars stayed with us to provide us with some great photo opportunities. Thank you Max so much we will definitely be recommending you and will definitely use you again in the future should we need your services for any other events!",
"I couldn't recommend max wedding cars more. 5 star service. So friendly and professional. Everyone loved the cars!!!!! Fab fab fab x",
"Fantastic bloke, attention to detail and customer care is second to non. Max will look after you and bring a touch of class to your event. Superb.",
"Excellent experience and such friendly drivers x",
"Many thanks to Max and our driver Mel for getting the bridesmaid and mother of the bride to church on time. Mel was super - friendly, funny and polite - we especially enjoyed the sweeties! Megan",
"Max, thank you for driving at our wedding on Friday. The car was great but you were also great company. Will make sure we recommend to friends in the West Yorkshire area. Thanks. Ashley and Amy Branche",
"Max is great, friendly and we absolutely loved the cars, I have never seen so much effort put into keeping them so lovely. I can't wait for our big day in sept :-)");

$rand_key = array_rand($reviews);
echo "<p class='review'>&ldquo;" . $reviews[$rand_key] . "&rdquo;</p>";
?>
<p>See more on our <a href="https://www.facebook.com/pages/Maxweddingcars/259756950891843?sk=reviews" target="_blank">Facebook page</a>.</p>
<hr>
{% endblock %}