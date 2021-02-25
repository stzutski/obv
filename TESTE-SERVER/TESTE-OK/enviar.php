<?php 

//require_once('configs.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->Host = 'mail.actoweb.com.br';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->CharSet = 'UTF-8';
$mail->Username = 'obv@actoweb.com.br';
$mail->Password = 'Nv32125//*+';
$mail->setFrom('obv@actoweb.com.br', 'ObaVisto!');
$mail->addReplyTo('obv@actoweb.com.br', 'ObaVisto!');


$mail->addAddress('roberto.rsc@gmail.com', 'Roberto Stzutski');
//Content
$mail->isHTML(true);                                  
$mail->Subject = 'ObaVisto! - Confirme seu cadastro';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Body    = file_get_contents('bem-vindo.html');
$mail->AltBody = 'Clique no link contigo na mensagem';


//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}



?>
