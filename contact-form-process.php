<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);

#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "FROM_: $user_name.";
$emailed_message = "$message";
$sent_mail = mail("cr4yfish1@gmail.com, message Form Submission $headers, $emailed_message");

if ($sent_mail) {
    header("Location: kontakt.html");
    echo "<script src='script.js' type ='text/javascript'> pop_up_trigger($user_name); </script>";
    exit;
} else {
    header("Location: error.html");
    exit;
}

?>

