<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'info@karlmagne.com';

    $email_subject = 'New Alert: You have received an e-mail.';

    $email_body =   "Sender's Name: $name.\n".
                    "Sender's Email: $email.\n".
                    "Subject: $message.\n";

    $to = 'info.techwarescopesolutions@gmail.com';

    $header = "From: $email_from \r\n";

    $header .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$header);

    header ("Location: index.php");

    }

?>