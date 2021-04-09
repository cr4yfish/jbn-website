<?php

#Receive user input
$user_name = $_POST['user_name'];
$message = $_POST['message'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$user_name  = filter_email_header($user_name);

#Send email
$headers = "From: $user_name";
$sent = mail('cr4yfish1@gmail.com', 'message Form Submission', $message, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your message.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your message. Please try again.</p>
</body>
</html>
<?php
}
?>