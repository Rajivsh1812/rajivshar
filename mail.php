<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['tel'];
$formcontent="From: $name \n Message: $message\n tel";
$recipient = "anuragsh1812@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>