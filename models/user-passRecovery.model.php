<?php 
  use \php\classes\DB\Sql;
  use \php\classes\site\CadUserCli;


if(postVar('lstpwd')!=''){
    
    $errMsg       = '';
    $stsRecovery  = false;
    $_emailUsuario= postVar('lstpwd');
    
    logsys("End de email recebido: $_emailUsuario");
  
  
    //recebe dados do formulário de contato
    
    //se email informado não possuir formato válido
    if(!validaEmail($_emailUsuario)){
      
      logsys("End de email INVALIDO");
      
      $stsRecovery = false;
      $errMsg = '<h6 class="cred">O email informado não é válido</h6>';
    
    }
    else//caso email seja valido
    {
      logsys("End de email VALIDO");
    
      $_user  = new CadUserCli();
      $hash   = $_user->passRecovery($_emailUsuario);
      
      logsys("HASH RECEBIDO============ ($hash) ====");
      
      if($hash===false){
        logsys("HASH FALSE ocorreu um erro");
        $stsRecovery  = false;
        $errMsg       = '<h6 class="cred">Ocorreu um erro tente novamente dentro de alguns minutos</h6>';
      }
      elseif($hash==='0'){
        logsys("HASH 0 usuario nao encontrado");
        $stsRecovery  = false;
        $errMsg       = '<h6 class="cred">Usuário não encontrado</h6>';
      }
      else{
        logsys("HASH TRUE link gerado");
        $stsRecovery  = true;
        $errMsg       = '<h6 class="cblue">Link gerado!</h6>';
        $linkRecovery = $hash;
      }
    }
    
    //se link de confirmação existir
    if($stsRecovery==true && $linkRecovery!=''){
      
    logsys("iniciando rotina de envio de email");
      
    //envia email para o usuário  
    $argsRecPass['to']       = 'roberto.rsc@gmail.com';
    $argsRecPass['subject']  = 'ObaVisto! - Recuperação de Senha';
    $argsRecPass['from']     = 'website.demonstracao@gmail.com';
    $argsRecPass['template'] = 'views/mails/rec-password.php';
    $argsRecPass['message']  = '';
    $argsRecPass['mailvars'] = array(
    'nomeUsuario'=>'fulano de tal',
    'emailUsuario'=>postVar('lstpwd'),
    'linkRecuperacao'=>$linkRecovery,
    'mailSuporte'=>MAILSUPORTE);  
    
      if(sndMail($argsRecPass)){//se email enviado com sucesso
        $errMsg       = '<h6 class="cblue">CONFIRA SUA CAIXA DE ENTRADA!</h6>';
        logsys("Email enviado com sucesso check inbox");
      }else{
        $errMsg       = '<h6 class="cred">Ocorreu um erro tente novamente dentro de alguns minutos</h6>';
        logsys("Erro no procedimento! tente mais tarde");
      }
      
    }else{//caso hash não tenha sido gerado  (usuário invalido)
      
        logsys("HASH nao gerado (usuario invalido)");
        $errMsg       = '<h6 class="cred">Usuário não encontrado</h6>';
        
    }

}

if(postVar('uhsh')!=''){
  
    //rotina de RE-ENVIO DE SENHA
    $sql = new Sql();
    $res = $sql->select('SELECT * FROM usuarios AS a pwd_recovery AS b
                        WHERE a.id_usuario = b.id_usuario AND
                        b.hash_recovery = :hash_recovery',array(':hash_recovery'=>postVar('uhsh')));
                        
    if(count($res)==1){

        //envia email para o usuário  
        $argsRecPass['to']       = $res[0]['email_usuario'];
        $argsRecPass['subject']  = 'ObaVisto! - Recuperação de Senha';
        $argsRecPass['from']     = 'website.demonstracao@gmail.com';
        $argsRecPass['template'] = 'views/mails/rec-password.php';
        $argsRecPass['message']  = '';
        $argsRecPass['mailvars'] = array(
        'nomeUsuario'=>$res[0]['nome_usuario'],
        'emailUsuario'=>$res[0]['email_usuario'],
        'linkRecuperacao'=>postVar('uhsh'),
        'mailSuporte'=>MAILSUPORTE);  
        
          if(sndMail($argsRecPass)){//se email enviado com sucesso
            echo 'Mensagem enviada!';
          }else{
            echo 'Ocorreu um erro tente novamente mais tarde';
          }        
      
    }else{
        echo 'Ocorreu um erro no processamento tente novamente mais tarde!';
    }
  
}



?>
