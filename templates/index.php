{% extends "base.html" %}

{% block title %}Wedding Cars Leeds | Max Wedding Cars | Ring 01924 370485 For Classic Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block description %}Wedding Cars Leeds with Max Hemingway Chauffeur Services. We have built a formidable reputation based on reliability and superior levels of service. We supply only the very best wedding cars including our Vintage style Tourers, Rolls Royce and Mercedes Benz. Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block main %}
<h1 class="mainhead">Wedding Car Hire in West Yorkshire</h1>
<p>At Max Hemingway Chauffeur Services, we have built a formidable reputation based on reliability and superior levels of service.
We supply only the very best wedding cars including our Vintage style Tourers, Rolls Royce &amp; Mercedes Benz. </p>
<h2 class="mainhead">Based in Wakefield, nr. Leeds</h2>
<p>Established in 1983, we are now  recognised as the Chauffeur Company of choice specialising in Weddings and Civil Partnerships in and around the Yorkshire area. Our cars are, however, available to hire for any occasion, including proms, birthdays, anniversaries or any other special occasion.</p>
<h3 class="mainhead">Vintage Style Wedding Cars, Impeccable Service</h3>
<p>We can take care of all your  transport requirements by adopting a flexible approach &amp; tailoring  an affordable package to meet your specific needs.
All our wedding cars are, of course, tastefully trimmed and may be co-ordinated to match your personal Wedding theme. Our cars are available for inspection by appointment.</p>
<p>Whilst our rates are  highly competitive, we never compromise on the quality of our service or our  cars, all of which are superb.</p>
<p>Call us on the number above or fill in our <a href="contact.php">enquiry form</a> to obtain a bespoke quote.</p>
<h3 class="mainhead">Recent Reviews</h3>
<p>Here is just one of the many unsolicited reviews we have received.</p>
<?php

$r = rand(1, 3);
$reviews = array(
"Absolutely Fantastic! 

Friendly service, accommodated all our needs and the cars are magnificent. Max offered to take me and my wife on a 10 minute journey after the wedding by ourselves just to catch up together on the hectic day away from it all which was great and the cars stayed with us to provide us with some great photo opportunities. 

Thank you Max so much we will definitely be recommending you and will definitely use you again in the future should we need your services for any other events!",
"I couldn't recommend max wedding cars more. 5 star service. So friendly and professional. Everyone loved the cars!!!!! Fab fab fab x",
"Max is great, friendly and we absolutely loved the cars, I have never seen so much effort put into keeping them so lovely. I can't wait for our big day in sept :-)");

$rand_key = array_rand($reviews);
echo "<p class='review'>&ldquo;" . $reviews[$rand_key] . "&rdquo;</p>";
?>
<p>See more on our <a href="https://www.facebook.com/pages/Maxweddingcars/259756950891843" target="_blank">Facebook page</a>.</p>
{% endblock %}