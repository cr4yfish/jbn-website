<?php


#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "from: $user_name.";
$emailed_message = "$message";
mail("cr4yfish1@gmail.com", "message Form Submission $headers", "$emailed_message");

header("Location: kontakt.html");
exit();

?>