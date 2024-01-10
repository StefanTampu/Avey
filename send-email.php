<?php

$errors = '';
$myemail = 'info@aveyconstruction.ca';
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

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message sent! - Avey Construction | Toronto Home Remodeling and Renovation Services</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Resources/Avey-logo-page-icon.png">
</head>
<body>
    <header>
        <nav class="page-container">
            <a href="index.html">
                <img src="Resources/Avey-logo.png" id="nav-logo" alt="Avey Navigation Logo">
            </a>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul id="nav-links">
                <li><a href="index.html" class="reg-nav">Home</a></li>
                <li><a href="about.html" class="reg-nav">About</a></li>
                <li><a href="services.html" class="reg-nav">Services</a></li>
                <li><a href="gallery.html" class="reg-nav">Gallery</a></li>
                <li id="call-container">
                    <button id="nav-call">Call Us</button>
                    <a href="tel: 226-606-9636" id="nav-call-number"><h5>226-606-9636</h5></a>
                </li>
                <li><a href="contact.html"><button id="nav-contact">Contact</button></a></li>
            </ul>
        </nav>
    </header>
    <main class="page-container">
        <h1>Message Sent</h1>
        <h3>Thank you for contacting us. We will get back to you as soon as possible.</h3>
    </main>
    <footer>
        <div class="page-container">
            <a href="index.html">
                <img src="Resources/Avey-logo.png" id="footer-logo" alt="Avey Footer Logo">
            </a>
            <div class="footer-group" id="footer-about">
                <h3>About Avey</h3>
                <p>Elevate your spaces with our construction expertise: bathroom remodeling, kitchen remodeling, basement finish and condo renovation. Experience exceptional craftsmanship and personalized results.</p>
                <br>
                <h4>Our Instagram:</h4>
                <a href="https://www.instagram.com/avey.construction/" target="_blank" id="footer-instagram-link" margin-bottom="0px"></a>
            </div>
            <div class="footer-group">
                <h3>Quick Links</h3>
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="services.html">Services</a>
                <a href="gallery.html">Gallery</a>
                <a href="contact.html">Contact</a>
            </div>
            <div class="footer-group">
                <h3>Services</h3>
                <a href="bathroom-renovation-gallery.html">Bathroom Remodeling</a>
                <a href="kitchen-renovation-gallery.html">Kitchen Remodeling</a>
                <a href="basement-finish-gallery.htm">Basement Finish</a>
                <a href="condo-renovation-gallery.html">Condo Renovation</a>
                <a href="3d-modeling-gallery.html">3D Renovation Modeling</a>
            </div>
            <div class="footer-group">
                <h3>Contact</h3>
                <a href="mailto:info@aveyconstruction.ca"><h4>Email Address</h4></a>
                <p>info@aveyconstruction.ca</p>
                <br>
                <a href="tel: +1226-606-9636"><h4>Phone Number</h4></a>
                <p>226-606-9636</p>
                <br>
                <a href="https://maps.app.goo.gl/wzzEUw2QDiznD5nq7" target="_blank"><h4>Office Address</h4></a>
                <p>309-1338 York Mills Road</p>
                <p>Toronto, ON - M3A 3R3 </p>
            </div>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html> 
';


?>