<?php 
namespace php\classes\site;

use \php\classes\DB\Sql;

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

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

  // Additional headers
  $headers .= 'To: ' . $this->to . "\r\n";
  $headers .= 'From: ' . $this->from . "\r\n";
  $headers .= 'Reply-To: ' . $this->reply . "\r\n";
  $headers .= 'X-Mailer: PHP/ ' . phpversion();

  if(!mail($this->to, $this->subject, $message, $headers)){
    logsys('Opa deu algo de errado não deu para enviar a MSG!!!');
    return false;
  }else{
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
