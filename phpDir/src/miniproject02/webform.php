<?php


if(isset($_POST['submit'])) {
    $to = "s2200117@edu.bc.fi";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = wordwrap($_POST['message'], 50, "\r\n");
    $headers = 'From: '."$email" . "\r\n" .
    'Reply-To: '. "$to" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

?>

<div>Your message has been sent</div>