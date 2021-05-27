<?php
    $to = '';
    $email= $_POST['email'];
    $message= $_POST['message'];
    $subject= $_POST['subject'];
    ini_set( 'sendmail_from', $to );
    ini_set( 'SMTP', "mail.bigpond.com" );
    ini_set( 'smtp_port', 25 );
    $headers= "From: " . $email; // Sender's E-mail

    if (mail($to, $subject, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{

        echo $headers;
        echo $message;
        echo $subject;
    }

?>
