
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
	$cars =  $_POST['car']; //required
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
	foreach ($cars as $car) $email_message .= $car." Required\n";
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

<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta content="text/html; charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Blake Hemingway">
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
    <!--Styling -->
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <link rel="icon" type="image/png" href="http://www.maxweddingcars.co.uk/favicon.png" />
    <link href="/css/style.css?v=060915" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta property="og:site_name" content="Maxweddingcars" />
    
</head>

<body>

    <div class="centerer" id="container">
        <header>
            <div id="title">
              <img alt="Max Hemingway Wedding Car Hire" src="/img/beauford_bonnet_header_140.jpg">
              <h1><a href="/">Maxweddingcars</a></h1>
              <div id="mobile-nav-toggle" class="visible-xs">
                <i class="fa fa-bars"></i>
                <p>Menu</p>
              </div>
              <h2 id="telephone"><i class="fa fa-phone"></i> 01924 370485</h2>
            </div>
            <nav>
              <ul>
                <a href="/">
                  <li><i class="fa fa-home"></i> Home</li>
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

        <main class="row">
        <div id="inner-wrap">
            
<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
<section>
<h1>Thank You for your Enquiry</h1>
<p>Your enquiry has been successfully submitted. We will endeavour to respond  within 24 hours. </p>
<p>Meanwhile, please feel free to continue browsing our site.</p>
</section>
<footer>
Max Hemingway<br>
01924 370485<br>
Bradford Road, Wakefield, West Yorkshire, WF12AS<br>
Email: <a href=
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

        </div>
        </main>
        
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
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=444675232397235";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
 
    <!-- Include js plugin -->
    <script src="/owl-carousel/owl.carousel.js"></script>
    
    <script src="/js/maxweddingcars.js"></script>
    
</body>
</html>
<?php
}
?>
