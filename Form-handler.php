<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$email_sub = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'ishikamate9923@gmail.com';

$email_subject = "New Form Submission";

$email_body="User Name: $name.\n";
             "User Email: $visitor_email.\n";
              " User Subject: $email_sub.\n";
               "User Message: $message.\n";
               
$to = "ishikamate744@gmail.com";

$headers = "From: $email_form\r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>