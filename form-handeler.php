<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$emai_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission'; 

$emai_body = "User Name: $name.\n".
                "User Email: $Visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message .\n";

$to = 'holdmenow542gmail.com';
$headers = "From: $emai_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>