<?php

#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "From: $user_name";
mail('cr4yfish1@gmail.com', 'message Form Submission', $message);


?>
