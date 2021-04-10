<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);

#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "FROM_: $user_name.";
$emailed_message = "$headers NACHRICHT_: $message";
mail('cr4yfish1@gmail.com', 'message Form Submission', $emailed_message);

$plswork = TRUE;

if ($plswork == TRUE) {
    header("Location: kontakt.html");
    exit;
}

?>

