<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@Rlearning.org';

$email_subject = 'New form submission';

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message .\n";
            
$to = 'rahulgorai8768@gmail.com';

$headers = "from: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: Rlearning-contact.html")

?>

