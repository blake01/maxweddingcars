{% extends "_base.html" %}

{% block php %}
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
  {% endblock %}

  {% block title %}Wedding Cars for Hire || Enquire{% endblock %}

  {% block main %}
  <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
    <section class="borderless">
      <h1>Thank You for your Enquiry</h1>
      <p>Your enquiry has been successfully submitted. We will endeavour to respond  within 24 hours. </p>
      <p>Meanwhile, please feel free to continue browsing our site.</p>
    </section>
  </div>
  {% endblock %}

  {% block closing_php %}
  <?php
}
?>
{% endblock %}
