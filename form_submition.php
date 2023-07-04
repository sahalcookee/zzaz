<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('phpmailer/mailer.php');
$mail_success = 0;
if (@$_POST['name']) {
  $name = $_POST['name'] ?? "";
  $lastname = $_POST['lastname'] ?? "";
  $email = $_POST['email'] ?? "";
  $phone = $_POST['phone'] ?? "";
  $message = $_POST['message'] ?? "";
  $subject = "ZAZZ solutions";
  $position = @$_POST['position'] ?: "";
  $attachment = [];
  if (isset($_FILES['attachment'])) {
    $attachment['file_name'] = $_FILES['attachment']['name'];
    $attachment['file_tmp'] = $_FILES['attachment']['tmp_name'];
  }

  //$to = "vk.muhammedajmal@gmail.com,connect.naseeb@gmail.com";
  $body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Untitled Document</title>
</head>

<body>
<table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='192' align='left' valign='top'>Name</td>
    <td width='25' align='left' valign='top'>:</td>
    <td width='283' align='left' valign='top'>" . $name . " " . $lastname . "</td>
  </tr>
  <tr>
    <td align='left' valign='top'>Email</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$email</td>
  </tr>
  <tr>
    <td align='left' valign='top'>Phone</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$phone</td>
  </tr>
  
  <tr>
    <td align='left' valign='top'>Message</td>
    <td align='left' valign='top'>:</td>
    <td align='left' valign='top'>$message</td>
  </tr>";
  if ($position) {
    $body .= "<tr>
      <td align='left' valign='top'>Position</td>
      <td align='left' valign='top'>:</td>
      <td align='left' valign='top'>$position</td>
    </tr>";
  }
  $body  .= "</table>
          </body>
          </html>";
  // Always set content-type when sending HTML email
  /*$headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: do_not_reply@worldctravel.com' . "\r\n";
                $headers .='Reply-To: do_not_reply@worldctravel.com' . "\r\n";
                //$headers .= 'Cc: myboss@example.com' . "\r\n";
                
                $mail_success = mail($to,$subject,$message,$headers);*/
}
if (send_email($subject, $body, $attachment)) {
  if ($position) {
    return header("Location:career.php?mail_sent=true");
  } else {
    return header("Location:contact.php?mail_sent=true");
  }
}
