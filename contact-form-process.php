<?php
if (isset($_POST['Email'])) {


    $email_to = "jugendinitiative.bremen@gmx.de";
    $email_subject = "JBN Website: Neue Einreichung";

    function problem($error)
    {
        echo "Es gab Fehler mit Ihrer Einreichung. ";
        echo "Fehler:.<br><br>";
        echo $error . "<br><br>";
        echo "Bitte korrigieren sie die Fehler und versuchen Sie es erneut.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Message'])
    ) {
        problem('Es scheint fehler mit Ihreren Eingaben zu geben.');
    }

    $name = $_POST['Name']; // required
    $message = $_POST['Message']; // required

    $error_message = "";


    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Dieser Name scheint mit unserem System nicht zu funktionieren.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'Ihre Nachricht konnte von unserem System nicht verarbeitet werden.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_message, $headers);
?>

    Vielen Dank für Ihre Einreichung!

<?php
}
?>