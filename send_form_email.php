
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "maxchauffeurhire@googlemail.com";
    $email_subject = "Wedding Enquiry from Website";
     
     
    function died($error) {
        // your error code can go here
        echo "There were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        print( 'Please <a href="javascript: history.go(-1)">Go Back</a> and correct these errors.  <br /><br />');
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
		//!isset($_POST['car']) ||
        !isset($_POST['telephone']) ||
		!isset($_POST['addressLine1']) ||
		!isset($_POST['postcode']) ||
        !isset($_POST['destination1'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
	$date1 = $_POST['date1']; $date2 = $_POST['date2']; $date3 = $_POST['date3'];
	if (isset($_POST['car'])) {
        $cars = $_POST['car']; // required
    } else {
        $cars = array();
    }
    $addressLine1 = $_POST['addressLine1']; // required
	$addressLine2 = $_POST['addressLine2']; 
	$addressLine3 = $_POST['addressLine3']; 
	$postcode = $_POST['postcode']; // required
	$destination1 = $_POST['destination1']; // required
	$destination2 = $_POST['destination2'];
	$comments = $_POST['comments'];
	
    $error_message = "";
 
    $string_exp = "/^[A-Za-z .'-]+$/";
	$num_exp = "/^[0-9\s]/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }

   if(!preg_match($num_exp,$telephone)) {
    $error_message .= 'The Telephone Number you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  
    $email_message = "Enquiry details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	switch ($date2) {
		case '1': $date2 = 'January'; break;
		case '2': $date2 = 'February'; break;
		case '3': $date2 = 'March'; break;
		case '4': $date2 = 'April'; break;
		case '5': $date2 = 'May'; break;
		case '6': $date2 = 'June'; break;
		case '7': $date2 = 'July'; break;
		case '8': $date2 = 'August'; break;
		case '9': $date2 = 'September'; break;
		case '10': $date2 = 'October'; break;
		case '11': $date2 = 'November'; break;
		case '12': $date2 = 'December'; break;
		default: $date2 = $date2; break;
	}

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    if ($cars) {
	    foreach ($cars as $car) $email_message .= $car." Required\n";
	}
	$email_message .= "Day: ".clean_string($date1)."\n";
	$email_message .= "Month: ".clean_string($date2)."\n";
	$email_message .= "Year: ".clean_string($date3)."\n";
    $email_message .= "Pickup Address Line 1: ".clean_string($addressLine1)."\n";
	$email_message .= "Pickup Address Line 2: ".clean_string($addressLine2)."\n";
    $email_message .= "Pickup Address Line 3: ".clean_string($addressLine3)."\n";
	$email_message .= "Postcode: ".clean_string($postcode)."\n";
	$email_message .= "Wedding/Ceremony Venue: ".clean_string($destination1)."\n";
	$email_message .= "Reception Venue (if specified): ".clean_string($destination2)."\n";
	$email_message .= "Addtional Comments: ".clean_string($comments)."\n";	
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>

<html lang="en">
<head>
    <meta content="text/html; charset="utf-8">
    <title>Wedding Cars for Hire || Enquire</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
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
    <link href="assets/style.css" rel="stylesheet" type="text/css">
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
            
<h2>Thank You for your Enquiry</h2>
<p>Your enquiry has been successfully submitted. We will endeavour to respond  within 24 hours. </p>
<p>Meanwhile, please feel free to continue browsing our site.</p>

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
<?php
}
?>
