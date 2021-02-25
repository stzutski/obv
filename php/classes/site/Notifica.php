<?php 
namespace php\classes\site;

use \php\classes\DB\Sql;
use \php\classes\phpmailer\PHPMailer;
use \php\classes\phpmailer\SMTP;
use \php\classes\phpmailer\Exception;

class Notifica {



public $to;
public $from;
public $reply;
public $subject;
public $message;
public $mailVars = array();



public function notifica($opt=''){
  
  if($opt==''){return null;}
  if($opt=='mailnewuser'){
    logsys('Opa chamando classe de notificacoes por EMAIL');
  $this->mailUserBemVindo();
  }
}


public function mailUserBemVindo(){
  
  logsys('EXECUTANDO METODO DE ENVIO MSG DE BOAS VINDAS');
  $this->template = 'views/mails/bem-vindo.php';
  $argsMail       = $this->configMailMessage($this->mailVars);
  logsys('Ok agora vamos enviar a MSG');
  $res            = $this->enviaEmail($argsMail['message']);
  return $res;
  
}

public function mailPwdRecovery(){
  
  $this->template = 'views/mails/rec-password.php';
  $argsMail       = $this->configMailMessage($this->mailVars);
  logsys('Ok agora vamos enviar a MSG');
  $res            = $this->enviaEmail($argsMail['message']);
  return $res;
  
}

public function mailUserTmpPwd(){
  
  $this->template = 'views/mails/tmp-password.php';
  $argsMail       = $this->configMailMessage($this->mailVars);
  logsys('Ok agora vamos enviar a MSG com a senha temporária do usuario');
  $res            = $this->enviaEmail($argsMail['message']);
  return $res;
  
}





//funcao para envio de mensagens de email
public function enviaEmail($message){
  
  logsys('Configurando Header e tudo mais....');

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  $mail->CharSet = 'UTF-8';
  
  /* DEFINE O METODO DE ENVIO */
  $provinder='cpanel';
  
  
  if($provinder=='sendgrid'){
  
      $mail->Host = 'smtp.sendgrid.net';
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';
      $mail->SMTPAuth = true;      
      $mail->Username = 'apikey';
      $mail->Password = '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';
      $mail->setFrom('central@actoweb.com.br', 'ObaVisto!');
      $mail->addReplyTo('central@actoweb.com.br', 'ObaVisto!');  
  
  }
  
  if($provinder=='gmail'){

      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 465;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->SMTPAuth = true;
      $mail->Username = 'website.demonstracao@gmail.com';
      $mail->Password = 'Nv183474';
      $mail->setFrom('website.demonstracao@gmail.com', 'ObaVisto!');
      $mail->addReplyTo('website.demonstracao@gmail.com', 'ObaVisto!'); 
  }
  
  if($provinder=='cpanel'){

      $mail->Host = 'mail.actoweb.com.br';
      $mail->Port = 465;
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->SMTPSecure = 'ssl';
      $mail->SMTPAuth = true;
      $mail->Username = 'obv@actoweb.com.br';
      $mail->Password = 'Nv32125//*+';
      $mail->setFrom('obv@actoweb.com.br', 'ObaVisto!');
      $mail->addReplyTo('obv@actoweb.com.br', 'ObaVisto!');  
  
  }

  //MESSAGE
  $mail->addAddress($this->to, '');
  $mail->isHTML(true);                                  
  $mail->Subject = $this->subject;
  $mail->Body    = $message;
  $mail->AltBody = 'Ative a Leitura de mensagens HTML do seu leitor de email';


  //send the message, check for errors
  if (!$mail->send()) {
    logsys('Ops deu erro no envio da msg!!! detalhes do erro:' .$mail->ErrorInfo);
    return false;
  } else {
    logsys('Msg enviada com sucesso!');
    return true;
  }


}

//funcao para configurar o corpo da mensagem
public function configMailMessage($args=array()){
  
  logsys('uhm será necessário configurar variaveis na msg vamos lá');
  
  $msgemail = '';
  $template = $this->template;
  
  //se template for informado deve ser feito o parse da mensagem para email html
  if($template!=''){
    if(file_exists($template)){
      $mailbody = implode('', file($template));
    }else{
      $mailbody = '<h3>template não configurado</h3>';
    }
    $message    = $mailbody;
  }else{//caso contrario é um mensagem com formatacao direta
    $message    = arrayVar($args,'message');
  }

  $mailvars = $args;
  
  //caso existam variaveis para o texto do email substitui pelos valores
  if(is_array($mailvars) && count($mailvars)>0 && $message!=''){
    $msgemail = $message;
    foreach ($mailvars as $key => $value) {
      $msgemail = str_replace('{%'.$key.'%}',$value,$msgemail);
    }
    $msgemail = str_replace('{%URLAPP%}',URLAPP,$msgemail);
    $msgemail = str_replace('{%mailSuporte%}',MAILSUPORTE,$msgemail);
    
  }else{//caso contrario deve ser uma mensagem de texto puro
    $msgemail = $message;
  }  
  $args['message'] = $msgemail;
  
  logsys('MSG configurada devolvendo recursos');
  return $args;
}


}
?>
