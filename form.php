<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["first-name"]);
    $lastname = htmlspecialchars($_POST["last-name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars(($_POST["phone"]));
    $location = htmlspecialchars($_POST["location"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($location) || empty($subject) || empty($message)){
        exit();
        header("Location: ../index.html");
    }

    $to = "info@aveyconstruction.ca";
    $headers = "From:" . $email;
    $email_body = "You have received a new message from $firstname $lastname.\n".
        "Email address: $email.\n".
        "Phone number: $phone.\n".
        "Location: $location.\n".
        "Here is the message:\n $message".

    mail($to, $subject, $email_body, $headers);

    if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}

    header("Location: ../index.html");
}
else {
    header("Location: ../index.html");
}
?>