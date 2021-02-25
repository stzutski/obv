<?php 
  use \php\classes\DB\Sql;
  use \php\classes\site\CadUserCli;
  use \php\classes\site\Notifica;

//SE O HASH DE RECUPERACAO FOR RECEBIDO EXECUTA ROTINA DE NOVA SENHA
if(getVar('h')!=''){
  
  
  $_user = new CadUserCli();
  
  //confere o hash e retorna o ID USUARIO caso o hash seja valido
  $_resChkHash = $_user->getUserByHash(getVar('h'));
  
  if($_resChkHash==false){//se retorno falto (FALTOU INFORMAR O HASH)
  
    $_updaPasswordStatus = false;
  
  }elseif($_resChkHash==0){//se retorno for ZERO (ou hash invalido ou expirado)
  
    $_updaPasswordStatus = 0;
  
  }elseif($_resChkHash>0){//se retorno > ZERO (obtem o ID USUARIO) e procede
    
    //anota o ID USUARIO retornado
    $_idUSer = $_resChkHash;
    
    //gera uma senha temporaria para o usuario
    $_pwdTMP = genPwd();
    
    //ecripta a senha para o banco de dados
    $_pwdTMPencripted = mkpwd($_pwdTMP);    
    
    //gera e salva uma senha temporaria
    $res_updPwd       = $_user->savePwdTmp($_idUSer,$_pwdTMPencripted);
    
    if($res_updPwd==false){//se FALSO ou ID USUARIO ou SENHA TMP nao foram informadas
      
      $_updaPasswordStatus = 0;
      
    }elseif($res_updPwd==0){//se ZERO (ocorreu algum erro durante a atualizacao com a senha temporaria)
      
      $_updaPasswordStatus = 0;
      
    }elseif($res_updPwd>0){//se > que ZERO (é o ID do usuario recem alterado)
      
      $_updaPasswordStatus = 1;//PODEMOS ENVIAR A NOTIFICACAO POR EMAIL COM A SENHA TEMPORÁRIA
      
    }
  }
  
  
  //se FALSE
  if($_updaPasswordStatus==0){
    
    echo header('location:'.URLAPP.'user/pwdrecovery/sent/err');
    
  }
  
  //caso > ZERO envia msg para usuário informando a nova senha
  if($_updaPasswordStatus==1){
    
    $_idUsuario = $res_updPwd;
    
    //obtem dados do usuario através do ID USUARIO
    $userData   = $_user->getUserById($_idUsuario);
    
    $notifica   = new Notifica();
    $notifica->to        = $userData['email_usuario'];
    $notifica->from      = MAILFROM;
    $notifica->subject   = 'Senha Temporária!';
    $notifica->mailVars  = array(
                          'emailUsuario'=>$userData['email_usuario'],
                          'dataSolicitacao'=>date('d/m/Y H:i:s'),
                          'senhaTemporaria'=>$_pwdTMP,
                          'linkMeuPerfil'=>URLAPP,
                          'logoMail'=>LOGOMAIL,
                          'mailSuporte'=>MAILSUPORTE); 

    if($notifica->mailUserTmpPwd()){
      //redireciona o cliente para a tela de confirmacao
      echo header('location:'.URLAPP.'user/pwdrecovery/sent/ok');
    } 
    
  }
    
  
}
else//CASO CONTRARIO EXECUTA ROTINA DE GERACAO DO HASH E ENVIO POR EMAIL
{


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
          
            $_user        = new CadUserCli();
            $_hashData    = $_user->passRecovery($_emailUsuario);
            $hash         = $_hashData['hash'];
            $urlHash      = $_hashData['urlHash'];
            $_userData    = $_hashData['userdata'];
            $_timeLimit   = $_hashData['hrlimit'];
            
            logsys("HASH RECEBIDO============ ($hash) ====");
            logsys("DADOS DO USUARIO==== ".json_encode($_userData));
            
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
                //notifica o usuario
                $notifica            = new Notifica();
                $notifica->to        = $_userData['email_usuario'];
                $notifica->from      = MAILFROM;
                $notifica->subject   = 'Recuperação da senha!';
                $notifica->mailVars  = array(
                                      'emailUsuario'=>$_userData['email_usuario'],
                                      'logoMail'=>LOGOMAIL,
                                      'mailSuporte'=>MAILSUPORTE,
                                      'horarioLimite'=>$_hashData['hrlimit'],
                                      'linkRecuperacao'=>URLAPP .'user/pwdrecovery/h/'. $linkRecovery);        
                
                if($notifica->mailPwdRecovery()){  
                    $errMsg = '<h6 class="cblue">CONFIRA SUA CAIXA DE ENTRADA!</h6>';
                    logsys("Email enviado com sucesso check inbox");
                    $_SESSION['hrec'] = $hash;
                    header('location:'.URLAPP.'user/new-pwd/sent/ok');
                }
                else
                {
                    $errMsg = '<h6 class="cred">Ocorreu um erro tente novamente dentro de alguns minutos</h6>';
                    logsys("Erro no procedimento! tente mais tarde");
                    header('location:'.URLAPP.'user/new-pwd/sent/err');
                }
            
          }
          else
          {   
              //caso hash não tenha sido gerado  (usuário invalido)
              logsys("HASH nao gerado (usuario invalido)");
              $errMsg = '<h6 class="cred">Usuário não encontrado</h6>';
              header('location:'.URLAPP.'user/new-pwd/sent/uerr');
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
              $argsRecPass['subject']  = 'Recuperação de Senha';
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

}

?>
