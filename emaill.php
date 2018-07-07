<?php
require_once('PHPMailer/PHPMailerAutoload.php');
//require_once('PHPMailer/src/SMTP.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;;
$mail->SMTPSecure = 'ss1';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'sathyak97.11@gmail.com';
$mail->Password = 'sathya123';
$mail->SetFrom('sathyak.gmx@gmail.com');
$mail->Subject = 'hai Sathya';
$mail->Body = 'testing';
$mail->ADDAddress('sathyakrishnasamy1997@gmail.com');


$mail->Send();

?>

















<?php/*
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.gmail.com;smtp2.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sathyakrishnasamy1997@gmail.com';                 // SMTP username
    $mail->Password = 'sathya4485';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('subaselvam00@gmail.com', 'Mailer');
    $mail->addAddress('visruthipari@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}*/
?>