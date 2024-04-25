<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendEmail($reciever_mail, $mail_content ,$subject) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wassimjha5@gmail.com';
    $mail->Password = 'flqn axkd njbm dpti';
    $mail->SMTPSecure = 'ssl'; // Utilisez tls ou ssl selon votre configuration
    $mail->Port = 465; // Port SMTP Gmail pour SSL
    $mail->setFrom('wassimjha5@gmail.com');
    $mail->addAddress($reciever_mail);
    $mail->isHTML(true);
    $mail->Subject = $subject; // Sujet de l'e-mail
    $mail->Body = $mail_content; // Contenu de l'e-mail
    try {
        $mail->send();
        return true; // Succès de l'envoi
    } catch (Exception $e) {
        return false; // Échec de l'envoi
    }
}
?>
