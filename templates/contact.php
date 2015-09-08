{% extends "_base.html" %}

{% block title %}Wedding Car Hire Leeds | Max Wedding Cars | Ring 01924 370485 For Vintage Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block description %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block main %}
<section>
<h1>Enquire / Get A Quote</h1>

<p>For an immediate response to your enquiry, and to obtain a quotation without delay, please telephone us on 01924 370485 (7 day service).</p>

<p>Alternatively, please complete the form below and we will endeavour to respond within 24 hours.</p>
</section>
<section>

<form action="send_form_email.php" id="contactform" method="post" name="contactform" onsubmit="return validate(this)">
    <div>
        <label for="name">Full Name *</label>
        <input name="name" type="text" required>
    </div>
    
    <div>
        <label for="email">Email Address *</label>
        <input name="email" type="email" required>
    </div>

    <div>
        <label for="telephone">Telephone Number *</label>
        <input name="telephone" type="text" placeholder="Including Area Code" required>
    </div>
    
    <div>
        <div class="label">Car(s) Required *</div>
        <div class="input">
          <label><input id="Beauford" name="car[]" type="checkbox" value="Beauford"> &nbsp;Vintage Style Tourer(s)</label>
          <label><input id="Seven_Seater_Mercedes" name="car[]" type="checkbox" value="Seven_Seater_Mercedes"> &nbsp;Mercedes Benz Seven Passenger Limousine</label>
          <label><input id="Mercedes" name="car[]" type="checkbox" value="Mercedes"> &nbsp;Mercedes Benz</label>
          <label><input id="LandRover" name="car[]" type="checkbox" value="LandRover"> &nbsp;Land Rover Discovery</label>
        </div>
    </div>

    <div>
        <div class="label">Date of Hire *</div>
        <div class="input">
            <select id="date1" name="date1">
                <?php
                $now_day = date("d");
                for($d = 1; $d <= 31; $d++) {
                    if ($d == $now_day) {
                        echo "<option selected='$d'>$d</option>";
                    } else {
                        echo "<option value='$d'>$d</option>";
                    }
                }
                ?>
            </select>
            <select id="date2" name="date2">
                <?php
                $now_month = date("M");
                $cal_info = cal_info(0);
                $months = $cal_info['abbrevmonths'];
                foreach ($months as $month) {
                    if ($month == $now_month) {
                        echo "<option selected='$month'>$month</option>";
                    } else {
                        echo "<option value='$month'>$month</option>";
                    }
                }
                ?>
            </select>
            <select id="date3" name="date3">
                <?php
                $now_year = date("Y");
                $max_year = $now_year + 3;
                for($y = $now_year; $y < $max_year; $y++) {
                    echo "<option value='$y'>$y</option>";
                }
                ?>
            </select>
        </div>
    </div>
    
    <div>
        <div class="label">Pickup Address *</div>
        <div class="input">
            <label><input class="force-full-width" id="addressLine1" name="addressLine1" type="text" placeholder="Address Line 1" required></label>
            <label><input class="force-full-width" id="addressLine2" name="addressLine2" type="text" placeholder="Address Line 2"></label>
            <label><input class="force-full-width" id="addressLine3" name="addressLine3" type="text" placeholder="Town/City" required></label></td>
        </div>
    </div>
    
    <div>
        <label for="postcode">Postcode *</label>
        <input name="postcode" type="text" required>
    </div>
    
    <div>
        <label for="destination1">Wedding/Ceremony Venue *</label>  
        <input name="destination1" type="text" required>
    </div>
    
    <div>
        <label for="destination2">Reception Venue (if applicable)</label>
        <input name="destination2" type="text">
    </div>

    <div>
        <label for="comments">Addtional Comments (optional)</label>
        <textarea class="input" cols="28" name="comments" rows="4"></textarea>
    </div>
    
    <input class="button" type="submit" value=" Submit Enquiry ">
    <input class="button" type="reset" value=" Reset Form ">
    
</form>
</section>
<script src="js/validate.js"></script>
{% endblock %}