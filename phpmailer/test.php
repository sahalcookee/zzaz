<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "notification.coinioc@gmail.com";
$mail->Password = "sdayiqgogtbhkuiy";
$mail->SetFrom("notification.coinioc@gmail.com");
$mail->Subject = "Test";
$mail->Body = "<h1>hello</h1>";
$mail->AddAddress("vk.muhammedajmal@gmail.com");
$mail->IsHTML(true);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }