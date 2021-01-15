<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$email_from='Styles restaurant';
$email_subject='new message from styles contact';
$email_body="Name $name.\n".
"Email: $email.\n".
"Message: $message.\n";

$to="emmanuelpallares50@gmail.com";
$headers="From: $email_from  \r\n";
$headers.="Reply-To: "$email "\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>