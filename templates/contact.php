{% extends "base.html" %}

{% block title %}Wedding Car Hire Leeds | Max Wedding Cars | Ring 01924 370485 For Vintage Car Hire Leeds{% endblock %}

{% block keywords %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block description %}Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds{% endblock %}

{% block main %}
<h2>Enquire / Get A Quote</h2>

<p>For an immediate response to your enquiry, and to obtain a quotation without delay, please telephone us on 01924 370485 (7 day service).</p>

<p>Alternatively, please complete the form below and we will endeavour to respond within 24 hours.<br>
<br></p>

<form action="send_form_email.php" id="contactform" method="post" name="contactform" onsubmit="return validate(this)">
    <table id="contact_form">
        <tr>
            <td valign="top" width="206"><label for="name">Full Name *</label></td>

            <td colspan="3" valign="top"><input maxlength="50" name="name" size="28" type="text"></td>
        </tr>

        <tr>
            <td valign="top"><label for="email">Email Address *</label></td>

            <td colspan="3" valign="top"><input maxlength="80" name="email" size="28" type="email"></td>
        </tr>

        <tr>
            <td valign="top"><label for="telephone">Telephone Number</label> *</td>

            <td class="smallText" colspan="3" valign="top"><input maxlength="28" name="telephone" size="28" type="text"> &nbsp;Including Area Code</td>
        </tr>

        <tr>
            <td valign="top">Car(s) Required *</td>

            <td class="smallText" colspan="3" valign="top"><label><input id="Beauford" name="car[]" type="checkbox" value="Beauford"> &nbsp;Vintage Style
            Tourer(s)<br></label> <label><input id="Seven_Seater_Mercedes" name="car[]" type="checkbox" value="Seven_Seater_Mercedes"> &nbsp;Mercedes Benz
            Seven Passenger Limousine<br></label> <label><input id="Mercedes" name="car[]" type="checkbox" value="Mercedes"> &nbsp;Mercedes
            Benz<br></label></td>
        </tr>

        <tr>
            <td valign="top">Date of Hire *</td>

            <td width="49"><select id="date1" name="date1">
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
            </select></td>

            <td width="49"><select id="date2" name="date2">
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
            </select></td>

            <td width="257"><select id="date3" name="date3">
                <?php
                $now_year = date("Y");
                $max_year = $now_year + 3;
                for($y = $now_year; $y < $max_year; $y++) {
                    echo "<option value='$y'>$y</option>";
                }
                ?>
            </select></td>
        </tr>

        <tr>
            <td valign="top">Pickup Address *</td>

            <td class="smallText" colspan="3" valign="top"><label><input id="addressLine1" name="addressLine1" size="28" type="text"> &nbsp;Address Line
            1</label></td>
        </tr>

        <tr>
            <td valign="top">&nbsp;</td>

            <td class="smallText" colspan="3" valign="top"><label><input id="addressLine2" name="addressLine2" size="28" type="text"> &nbsp;Address Line
            2</label></td>
        </tr>

        <tr>
            <td valign="top">&nbsp;</td>

            <td class="smallText" colspan="3" valign="top"><label><input id="addressLine3" name="addressLine3" size="28" type="text">
            &nbsp;Town/City</label></td>
        </tr>

        <tr>
            <td valign="top">Postcode *</td>

            <td class="smallText" colspan="3" valign="top"><label><input id="postcode" name="postcode" size="28" type="text"></label></td>
        </tr>

        <tr>
            <td valign="top">Wedding/Ceremony Venue *</td>

            <td colspan="3" valign="top"><label><input id="destination1" name="destination1" size="28" type="text"></label></td>
        </tr>

        <tr>
            <td valign="top">Reception Venue (if applicable)</td>

            <td colspan="3" valign="top"><label><input id="destination2" name="destination2" size="28" type="text"></label></td>
        </tr>

        <tr>
            <td valign="top"><label for="comments">Addtional Comments (optional)</label></td>

            <td colspan="3" valign="top">
            <textarea cols="40" name="comments" rows="4">
</textarea></td>
        </tr>

        <tr>
            <td colspan="4" style="text-align:center"><br>
            <input type="submit" value=" Submit Enquiry ">&nbsp;&nbsp; <input type="reset" value=" Reset Form "></td>
        </tr>
    </table>
</form>
{% endblock %}