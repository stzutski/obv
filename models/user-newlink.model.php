<?php 

use \php\classes\DB\Sql;
use \php\classes\site\Notifica;

//recebe dados
$_userEmail = postVar('umail');

logsys("Solicitado novo link para usuario: $_userEmail");

//consulta link na tabela de usuarios
$_newlink = new Sql();
$res      = $_newlink->select('SELECT * FROM usuarios 
                            WHERE email_usuario = :email_usuario',array(
                            ':email_usuario'=>$_userEmail));

if(count($res)==0){
//usuario nao encontrado

  logsys("Usuario: $_userEmail nao foi encontrado!!!");
  
  echo '$("#box_notifyRsnd").show();$("#recAct").hide();$(".note2Hidden").hide();';
  
}else{

      logsys("Encontrado $_userEmail ");
      //recebe dados do usuario
      $userData = $res[0];
        
      logsys("Obtendo dados do usuario: ".json_encode($userData));
        
      logsys("iniciando rotina de envio de email para $_userEmail ");
      //gera novo email de validacao
      $notifica            = new Notifica();
      $notifica->to        = $userData['email_usuario'];
      $notifica->from      = MAILFROM;
      $notifica->subject   = 'Bem vindo ao ObaVisto!';
      $notifica->mailVars  = array(
                                'nomeUsuario'=>$userData['nome_usuario'],
                                'sobrenomeUsuario'=>$userData['sobrenome_usuario'],
                                'emailUsuario'=>$userData['email_usuario'],
                                'logoMail'=>LOGOMAIL,
                                'mailSuporte'=>MAILSUPORTE,
                                'codigoDeAtivacao'=>URLAPP.'?user=activation&code='.$userData['cod_ativacao_usuario']);  

      if($notifica->mailUserBemVindo()){//redireciona o cliente para a tela de confirmacao
        logsys("Email enviado com sucesso para ($_userEmail)");
        echo 'window.location="' . URLAPP . '?user=confirm&code=' . $userData['cod_ativacao_usuario'] .'";';
      }else{
        logsys("Não foi possivel enviar a msg para ($_userEmail)");
        echo 'window.location="'.URLAPP.'?user=confirm&code=0000000';
      }
  
}




?>
