<?php
    $to = 'migun248@gmail.com';
    $subject = 'the subject';
    $message = 'hai anjing';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>