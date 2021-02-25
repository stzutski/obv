<?php
//header page
require_once('configs.php');

if(
    getVar('consulta')=='cidades' || 
    getVar('chk')=='mail' || 
    getVar('user')=='registration'
  ){

require_once('ajx.php');

exit;
  
}



if(!sessionVar('usersys')){//caso operacoes login logout
  
    if(!$_POST){//sem POST não deve ser cadastro ou rotina do login
      
      if(getVar('user')=='' || getVar('user')=='login'){
        require_once('views/system/login.php');
      }
      if(getVar('user')=='new'){
        require_once('views/system/cadastro-form-wizzard.php');
      }
      if(getVar('user')=='confirm'){ 
        require_once('models/user-confirmation.model.php');
        require_once('views/system/cadastro-confirmation.php');
      }
      if(getVar('user')=='activation'){ 
        require_once('models/user-activation.model.php');
        require_once('views/system/cadastro-confirmation.php');
      }
      if(getVar('user')=='new-pwd'){ 
        if(getVar('sent')==''){
        require_once('models/user-passRecovery.model.php');
        }
        require_once('views/system/lost-password.php');
      }        
      if(getVar('user')=='pwdrecovery'){ 
        if(getVar('h')!='' && getVar('sent')==''){
          require_once('models/user-passRecovery.model.php');
        }
        if(getVar('sent')!=''){
          require_once('views/system/tmp-password-ok.php');
        }
      }        


    
    
    }else{//em caso POST pode ser login ou cadastro ou recuperacao de senha
      
      
      if(getVar('user')=='auth'){//rotinas de login
        
        //include rotinas de login
        require_once('models/login.model.php');
        
      }
      if(getVar('user')=='register'){//rotinas cadastro de usuario
        
        echo "<h1>Processando cadastro de usuário</h1>";
        
      }
      if(getVar('user')=='new-pwd'){ /*  ?user=activation&code=  */
        
        require_once('models/user-passRecovery.model.php');
        require_once('views/system/lost-password.php');
      }      
      if(getVar('user')=='new-lnk'){ 
        require_once('models/user-newlink.model.php');
      }      
      
      
    }
    
    //exit;
  
}
else//rotinas para os users LOGADOS
{

  if(getVar('user')=='logout'){
    //session_destroy();
    unset($_SESSION['usersys']);
    header('location'. URLAPP . 'user/login');
    exit;
  }

  // INCLUDE DO ARQUIVO DE PROCESSAMENTO DO MODULO EM USO
  // SOMENTE SERÁ CARREGADO DURANTE O PROCESSAMENTO DE UM POST 
  // EXEMPLO ADD UPDATE
  if(postVar('do')!=''){
    $_pathProcess = getLocation('fileProcess');
    include_once($_pathProcess);  
  }

    //include header
    require_once(VIEWSPATH . 'common/header.php');


    //include corpo do app
    require_once("routes.php");
    //require_once(VIEWSPATH . 'tests/content2.php');


    //include rodape
    require_once(VIEWSPATH . 'common/footer.php');


}
?>
