{% extends "_base.html" %}

{% block title %}Wedding Car Hire Leeds | Max Wedding Cars | Call 01924 370485 For Vintage Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block description %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block main %}
<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
  <section>
    <h1>Enquire / Get A Quote</h1>

    <p>For an immediate response to your enquiry, and to obtain a quotation without delay, please telephone us on 01924 370485 (7 day service).</p>

    <p>Alternatively, please complete the form below and we will endeavour to respond within 24 hours.</p>
  </section>

  <form action="send_form_email.php" id="contactform" method="post" name="contactform" onsubmit="return validate(this)">
    <div>
      <label for="f-name">Full Name&nbsp;*</label>
      <input id="f-name" name="name" type="text" required>
    </div>

    <div>
      <label for="f-email">Email Address&nbsp;*</label>
      <input id="f-email" name="email" type="email" required>
    </div>

    <div>
      <label for="f-telephone">Telephone Number&nbsp;*</label>
      <input id="f-telephone" name="telephone" type="text" placeholder="UK Landline inc. Area Code or Mobile " required>
    </div>

    <div>
      <div class="label">Car(s) Required&nbsp;*</div>
      <div class="input">
        <label><input id="Beauford" name="car[]" type="checkbox" value="Beauford"> &nbsp;Vintage Style Tourer(s)</label>
        <label><input id="Viscount" name="car[]" type="checkbox" value="Viscount"> &nbsp;6 Seater Viscount</label>
        <label><input id="LandRover" name="car[]" type="checkbox" value="LandRover"> &nbsp;Range Rover Vogue</label>
      </div>
    </div>

    <div>
      <div class="label">Date of Hire&nbsp;*</div>
      <div class="input">
        <select id="date1" name="date1">
          <?php
          $now_day = date("d");
          for($d = 1; $d <= 31; $d++) {
            if ($d == $now_day) {
              echo "<option value='$d' selected>$d</option>";
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
              echo "<option value='$month' selected>$month</option>";
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
      <label for="f-postcode">Pickup Postcode&nbsp;*</label>
      <input id="f-postcode" name="postcode" type="text" required>
    </div>

    <div>
      <label for="f-destination1">Wedding/Ceremony Venue&nbsp;*</label>
      <input id="f-destination1" name="destination1" type="text" required>
    </div>

    <div>
      <label for="f-destination2">Reception Venue (if applicable)</label>
      <input id="f-destination2" name="destination2" type="text">
    </div>

    <div>
      <label for="f-comments">Addtional Comments (optional)</label>
      <textarea id="f-comments" class="input" cols="28" name="comments" rows="4"></textarea>
    </div>

    <button class="button btn btn-primary" type="submit" ><i class="fa fa-send"></i>Submit Enquiry</button>

  </form>
</div>
{% endblock %}
