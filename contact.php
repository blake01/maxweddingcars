
<html lang="en">
<head>
    <meta content="text/html; charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blake Hemingway">
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
    <link href="/css/style.css?v=060915" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div id="fb-root"></div>

    <div class="centerer" id="container">
        <header>
            <div id="title">
              <img alt="Max Hemingway Wedding Car Hire" src="/img/beauford_bonnet_header_140.jpg">
              <h1>Maxweddingcars</h1>
              <i id="mobile-nav-toggle" class="visible-xs fa fa-bars"></i>
              <h2><i class="fa fa-phone"></i> 01924 370485</h2>
            </div>
            <nav>
              <ul>
                <a href="/">
                  <li><i class="fa fa-home"></i> Home</li>
                </a>
                <a href="cars">
                  <li class="visible-xs"><i class="fa fa-car"></i> Our Cars</li>
                </a>
                <a href="contact">
                  <li><i class="fa fa-envelope-o"></i> Enquire</li>
                </a>
                <a target="_blank" href="https://www.facebook.com/pages/Maxweddingcars/259756950891843?sk=photos_stream">
                  <li><i class="fa fa-facebook"></i>Facebook Gallery</li>
                </a> 
                <a href="tel:01924370485">
                  <li class="visible-xs"><i class="fa fa-phone"></i> 01924 370485</li>
                </a>  
              </ul>    
            </nav>
        </header>

        <div class="sidebar">
            <h4>Click on images for further details</h4>
            <div class="sidebar-car">
            <p><a href="vintage"><img alt="vintage style tourer" src="/img/vintage/beaufordpair.jpg"></a></p>
            <p>Vintage Style Tourers</p>
            </div>

            <div class="sidebar-car">
            <p><a href="seven_seat_mercedes"><img alt="mercedes wedding car" src="/img/stretch-merc/side.jpg"></a></p>
            <p>Mercedes-Benz Seven Passenger Limousine</p>
            </div>
            
            <div class="sidebar-car">
            <p><a href="mercedes"><img alt="mercedes wedding car" src="/img/merc/Merc-Large.gif"></a></p>
            <p>Mercedes-Benz</p>
            </div>
            
            <div class="sidebar-car">
            <p><a href="landrover"><img alt="land rover wedding car" src="/img/landrover/exterior.jpg"></a></p>
            <p>Land Rover Discovery</p>
            </div>

            <div id="fb-like-box-wrap">
            <div class="fb-like-box" data-colorscheme="light" data-header="true" data-href=
            "https://www.facebook.com/pages/Maxweddingcars/259756950891843?fref=ts" data-show-border="true" data-show-faces="true" data-stream="false"
            data-width="260"></div>
            </div>
        </div>

        <main>
            
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

        </main>
        
        <footer>
            Max Hemingway<br>
            01924 370485<br>
            Bradford Road, Wakefield, West Yorkshire, WF12AS<br>
            Email: <a class="style4" href=
            "mailto:max@maxweddingcars.co.uk?subject=Enquiry%20R.E.%20Chauffeur%20Driven%20Car%20Hire">max@maxweddingcars.co.uk</a><br>
            Site Design &copy; 2015 Blake Hemingway<br>
            <span class="footer1">Serving all areas of Yorkshire: View <a href="locations.php">Our Locations</a></span>

            <div style="text-align: center">
                <br />

                <h1 style="text-align: center; font-size: 9px; color:#666; font-family: Arial, Helvetica, sans-serif;">Wedding Cars Leeds ~ Wedding Car Hire
                Leeds ~ Vintage Wedding Cars Leeds ~ Chauffeur Driven Car Hire Leeds ~ Chauffeur Driven Wedding Cars Leeds ~ Vintage Car Hire Leeds ~ Classic
                Car Hire Leeds<br>
                Wedding Limos Leeds ~ Wedding Limo Hire Leeds</h1>
            </div>
        </footer>
    </div>

    <!-- Start of StatCounter Code -->
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
    </noscript> 
    <!-- End of StatCounter Code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <script src="/js/maxweddingcars.js"></script>
    
</body>
</html>