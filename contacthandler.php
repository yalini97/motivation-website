

<!-- //$name=$_Post['name'];
// $sender_email=$_Post["email"];
// $message=$_Post["message"];

// // $email_from="yalini97@yahoo.com";
// $email_subject="New Form Submission";
// $email_body="User Name: $name.\n"."User Email: $sender_email.\n"."User Message: $message.\n";

// $to = "yalini97@yahoo.com";
// $headers="From $sender_email\r\n";
// $headers="Reply-To $sender_email \r\n"; -->



<?php

$name=$_Post['name'];
$mailFrom=$_Post['email'];
$message=$_Post['message'];

$mailTo="yalini97@yahoo.com";
$headers="From: ".$mailFrom;
$body = "Message recieved from ".$name.".\n\n".$message;

mail($mailTo,$email_subject,$body,$headers);
header("Location: index.html");



?>