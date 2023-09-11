<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_email($subject, $message, $attachment = [])
{
    $to_email = "zzazatsolutions@gmail.com";
    $from_name = "zzaz solutions";
    $user_name = "email.cookee@gmail.com";
    $password = "jfacsrmjveosmuaf";
    $host = "smtp.gmail.com";
    $port = 465;

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = $host;
    $mail->Port = $port; // or 587
    $mail->IsHTML(true);
    $mail->Username = $user_name;
    $mail->Password = $password;
    $mail->SetFrom($user_name, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress($to_email);
    $mail->IsHTML(true);
    if ($attachment) {
        $mail->addAttachment($attachment['file_tmp'], $attachment['file_name']);
    }

    return $mail->Send();
    /*if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message has been sent";
        }*/
}
