<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  if (!isset($_REQUEST['email'])) {
    header( "Location: http://www.supergamecraze.com/error.html" );
  }
  elseif (empty($email) || empty($message)) {
    ?>



    <?php
  }
  else {
    mail( "aaron-inc@Charter.net", "Feedback Form Results",
          $message, "From: $email" );
    header( "Location: http://www.supergamecraze.com/thankyou.html" );
  }
?>



<?php
$to = "<$email>";
$subject = "Test mail";
$message = "Thanks for the mail.";
$from = "<$email>";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?> 
