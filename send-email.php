<?php

$fName = $_POST["f-name"];
$lName = $_POST["l-name"];
$email = $_POST["email"];
$subject = $_POST["email-subject"];
$message = $_POST["message"];

$mailheaders = "From:".$fName.$lName."<".$email.">\r\n";
$recipient = "stefan_tampu@yahoo.com";

mail($recipient, $subject, $message, $mailheaders)
or die("Error!");

echo"Message sent";

?>