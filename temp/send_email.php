<?php
if(isset($_POST['email'])) {
 
    $email_to = "nikoloz.sanakoevi@gmail.com";
    $email_subject = "rawrawrwar";
 
    function died($error) {
        echo "შეცდომა! ";
        echo $error."<br /><br />";
        die();
    }
 
 
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['text'])) {
        died('rip');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $text = $_POST['text']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'აკრიფე ნორმალური ემაილი პლზ<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'ეგ რა სახელია<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= ';დდდდდდდდდდდდდდ<br />';
  }
 
  if(strlen($text) < 2) {
    $error_message .= 'ხხხხხხხხხხხხხხხხხხხხხხხ<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Text: ".clean_string($text)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
გაიგზავნა.
 
<?php
 
}
?>
