<?php
$to      = 'eckos997@gmail.com';
$subject = 'the subject';
$message = $_POST['first'] . ' ' . $_POST['second'];
$headers = 'From kek';

mail($to, $subject, $message, $headers);
?>
