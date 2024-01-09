<?php

$errors = '';
$myemail = 'stefan_tampu@yahoo.com';
if (empty($_POST['first-name']) ||
    empty($_POST['last-name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['location']) ||
    empty($_POST['subject']) || 
    empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$fName = $_POST["first-name"];
$lName = $_POST["last-name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$location = $_POST["location"];
$subject = $_POST["subject"];
$message = $_POST["message"];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email))
{
    $errors .= "\n Error: Invalid email address";
}

$email_body = "$fName $lName just submitted a contact form through the Avey website.".
" Here are the details:\n Name: $fName $lName \n ".
"Email: $email\n Phone: $phone\n Location: $location\n Message:\n $message";

$mailheader = "From: $email\n";

mail($myemail, $subject, $email_body, $mailheader)
or die("Error!");

echo"Message sent";

?>