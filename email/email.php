<?php
session_start();

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'frelix77750@gmail.com';                                    // SMTP username
    $mail->Password = '7775094115';                                    // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('frelix77750@gmail.com', 'Mayuresh Gawai');
    $mail->addAddress($email, 'Mayuresh Gawai');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('frelix77750@gmail.com', 'Mayuresh Gawai');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Test Mail';
    $gen = rand(1000,10000);
    echo $gen;
    $_SESSION["otp3"] = $gen;
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'.$_SESSION["otp3"];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $t = $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

}