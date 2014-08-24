
<html lang="en">
<head>
    <meta content="text/html; charset="utf-8">
    <title>Wedding Car Hire Leeds | Max Wedding Cars | Ring 01924 370485 For Vintage Car Hire Leeds</title>
    <meta content="Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds" name="keywords">
    <meta content="Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds" name="description">
    <!-- Wedding Cars Leeds, Wedding Car Hire Leeds, Vintage Wedding Cars Leeds, Chauffeur Driven Car Hire Leeds, Chauffeur Driven Wedding Cars Leeds, Vintage Car Hire Leeds, Classic Car Hire Leeds, Wedding Limos Leeds, Wedding Limo Hire Leeds -->
    <meta content="index,follow" name="robots">
    <meta content="7 days" name="revisit-after">
    <meta content="GB-LDS" name="geo.region">
    <meta content="Leeds" name="geo.placename">
    <meta content="53.801279;-1.548567" name="geo.position">
    <meta content="53.801279, -1.548567" name="ICBM">
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="assets/style.css?v=240814" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
    
</head>

<body class="oneColFixCtr">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="centerer" id="container">
        <div id="header">
            <img alt="Max Hemingway Wedding Car Hire" src="Header.jpg">

            <div id="headerhome">
                <a href="/">Home</a>
            </div>

            <div id="headerenq">
                <a href="contact">Enquire</a>
            </div>

            <div id="headerloc">
                <a href="locations">Locations</a>
            </div>
        </div>

        <div class="sidebar">
            <h4>Click on images for further details</h4>

            <p><a href="vintage"><img alt="vintage style tourer" src="Sidebar/beaufordsidebar.jpg"></a></p>

            <p>Vintage Style Tourers</p>

            <p><a href="seven_seat_mercedes"><img alt="mercedes wedding car" src="Sidebar/stretchmercsidebar.jpg"></a></p>

            <p>Mercedes-Benz Seven Passenger Limousine</p>

            <p><a href="mercedes"><img alt="mercedes wedding car" src="Sidebar/mercsidebar.jpg"></a></p>

            <p>Mercedes-Benz</p>

            <div class="fb-like-box" data-colorscheme="light" data-header="true" data-href=
            "https://www.facebook.com/pages/Maxweddingcars/259756950891843?fref=ts" data-show-border="true" data-show-faces="true" data-stream="false"
            data-width="250"></div>
        </div>

        <div class="text">
            
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
<script src="assets/validate.js"></script>

        </div><!-- end #container -->
    </div>

    <div class="centerer">
        <footer class="footer">
            Max Hemingway<br>
            01924 370485<br>
            Bradford Road, Wakefield, West Yorkshire, WF12AS<br>
            Email: <a class="style4" href=
            "mailto:max@maxweddingcars.co.uk?subject=Enquiry%20R.E.%20Chauffeur%20Driven%20Car%20Hire">max@maxweddingcars.co.uk</a><br>
            Site Design &copy; 2014 Blake Hemingway<br>
            <span class="footer1">Serving all areas of Yorkshire: View <a href="locations.php">Our Locations</a></span>

            <div style="text-align: center">
                <br />

                <h1 style="text-align: center; font-size: 9px; color:#666; font-family: Arial, Helvetica, sans-serif;">Wedding Cars Leeds ~ Wedding Car Hire
                Leeds ~ Vintage Wedding Cars Leeds ~ Chauffeur Driven Car Hire Leeds ~ Chauffeur Driven Wedding Cars Leeds ~ Vintage Car Hire Leeds ~ Classic
                Car Hire Leeds<br>
                Wedding Limos Leeds ~ Wedding Limo Hire Leeds</h1>

                <p style="text-align: center; font-size: 9px; font-family: Arial, Helvetica, sans-serif;"><a href="http://www.uniteldirect.co.uk/" style=
                "font-size: 9px; color:#666;" target="_blank" title="SEO By Unitel Direct">SEO By Unitel Direct</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=
                "http://www.businessinternetfinder.com/" style="font-size: 9px; color:#666;" target="_blank" title="Business Internet Finder">Business Internet
                Finder</a><a href="http://www.thetradefinder.co.uk/" style="font-size: 9px; color:#666;" target="_blank" title="Trade Finder">&nbsp;And Trade
                Finder</a></p>
            </div>
        </footer>
    </div><!-- Start of StatCounter Code -->
    <script type="text/javascript">
        var sc_project=3538675;
        var sc_invisible=1;
        var sc_security="0d87c190";
    </script> 
    <script src="http://www.statcounter.com/counter/counter_xhtml.js" type="text/javascript"></script>
    <noscript>
        <div class="statcounter">
            <a class="statcounter" href="http://statcounter.com/tumblr/" title="tumblr hit tracking tool"><img alt="tumblr hit tracking tool" class="statcounter"
            src="http://c.statcounter.com/3538675/0/0d87c190/1/"></a>
        </div>
    </noscript> <!-- End of StatCounter Code -->
</body>
</html>