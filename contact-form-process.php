<?php


#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "from: $user_name.";
$emailed_message = "$message";
mail("cr4yfish.public@protonmail.com", "Website: Neue Einreichung von: $headers", "$emailed_message");

header("Location: kontakt.html");
exit();

?>