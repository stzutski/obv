<?php 

require_once('configs.php');

require_once('php/classes/phpmailer/PHPMailerAutoload.php');

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'mail.robertostzutski.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'suporte@actoweb.com.br';
//Password to use for SMTP authentication
$mail->Password = 'Nv32125//*+';
//Set who the message is to be sent from
$mail->setFrom('suporte@actoweb.com.br', 'Suporte ActoWeb');
//Set an alternative reply-to address
$mail->addReplyTo('suporte@actoweb.com.br', 'Suporte ActoWeb');
//Set who the message is to be sent to
$mail->addAddress('roberto.rsc@gmail.com', 'Roberto Stzutski');
//Set the subject line
$mail->Subject = 'Teste de Configuração de Notificações do Servidor';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('content.html', __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body 321321654654987987';
//Attach an image file
$mail->addAttachment('php/classes/phpmailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}



?>
