<?php
if(isset($_POST['submit'])){
    $to = 'khatwanip111@gmail.com'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone_number = $_POST['phone'];
    $subject = 'Query';
    $message = 'Dear Prashant,' . "\n\n" . $_POST['message'] . "\n\n" . "Thanks and Regards\n" . $name . "\n" . $phone_number;
    $headers = 'From:' . $from;
    mail($to,$subject,$message,$headers);
    }
?>
