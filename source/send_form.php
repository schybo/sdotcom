<?php
if(isset($_POST['first_name'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "brent.scheibelhut@gmail.com";
    $email_subject = "Notification from brentscheibelhut.com";


    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['description'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $first_name = $_POST['fname']; // required
    $telephone = $_POST['phone']; // not required
    $comments = $_POST['description']; // required

    $error_message = "";
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
echo (int) mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->

'Thank you for contacting us. We'll get in touch ASAP'

<?php
}
?>