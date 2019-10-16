<?php

$name=$_Post['name'];
$sender_email=$_Post["email"];
$message=$_Post["message"];

// $email_from="yalini97@yahoo.com";
$email_subject="New Form Submission";
$email_body="User Name: $name.\n"."User Email: $sender_email.\n"."User Message: $message.\n";

$to = "yalini97@yahoo.com";
$headers="From $sender_email\r\n";
// $headers="Reply-To $sender_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");
?>
