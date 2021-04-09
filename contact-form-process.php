<?php

#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Send email
$headers = "From: $user_name";
mail('cr4yfish1@gmail.com', 'message Form Submission', $message);


?>

<html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your message. Please try again.</p>
</body>
</html>