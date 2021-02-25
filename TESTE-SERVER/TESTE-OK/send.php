<?php 

//require_once('configs.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;
//Set the hostname of the mail server
$mail->Host = 'mail.actoweb.com.br';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';

$mail->CharSet = 'UTF-8';
//Username to use for SMTP authentication
$mail->Username = 'obv@actoweb.com.br';
//Password to use for SMTP authentication
$mail->Password = 'Nv32125//*+';
//Set who the message is to be sent from
$mail->setFrom('obv@actoweb.com.br', 'ObaVisto!');
//Set an alternative reply-to address
$mail->addReplyTo('obv@actoweb.com.br', 'ObaVisto!');
//Set who the message is to be sent to
$mail->addAddress('roberto.rsc@gmail.com', 'Roberto Stzutski');
//Set the subject line


//Content
//Set email format to HTML
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
