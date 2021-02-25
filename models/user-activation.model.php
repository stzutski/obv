<?php 

use \php\classes\DB\Sql;

//recebe os dados para consulta no banco de dados
$userKey  = getVar('code');
$userMail = getVar('mail');

logsys("dados recebidos chave: $userKey");

//consulta no banco
$_activation = new Sql();

$res = $_activation->select('SELECT * FROM usuarios 
                            WHERE cod_ativacao_usuario = :cod_ativacao_usuario',array(
                            ':cod_ativacao_usuario'=>$userKey));



if(count($res)==0){//NENHUM CADASTRO LOCALIZADO (CHAVE OU EMAIL ERRADO)
  
  logsys("nenhum cadastro localizado");
  $_statusCad = 0;//sinaliza como inativo
  $_errMessage= 'Não foi possível ativar este cadastro!<br /><br />Certifique do link estar correto.<br /><br /><a href="#">Clique aqui</a> para solicitar um novo link de ativação';
  
}
elseif(count($res)==1)
{
  
    //array com os dados do usuário localizado
    $userData = $res[0];
    
    logsys("cadastro localizado! [".count($res)."] - id($userData[id_usuario])");

    if($userData['status_usuario']=='1'){//SE USUÁRIO JA ATIVADO

      logsys("Este usuário JÁ ESTA ATIVO");
      logsys("É so mandar fazer o login!");
      $_statusCad = 2;//sinaliza como já ativo

    }

    if($userData['status_usuario']=='0'){//SE AINDA NÃO ATIVADO
      $uid_usuario = $userData['id_usuario'];
      
      logsys("Usuário NÃO esta ativo... vamos ativar?");

      //ATIVA O CADASTRO
      $res_activa = $_activation->query('UPDATE usuarios 
                                        SET status_usuario = 1 
                                        WHERE id_usuario = :id_usuario',array(':id_usuario'=>$uid_usuario));
                                        
                                        
      if($res_activa==1){//CASO RETORNE 1 LINHA AFETADA
        logsys("Usuário ativado com sucesso");
        $_statusCad = 2;//sinaliza como já ativo
        
      }
      else//CASO CONTRARIO OCORREU ALGUM ERRO
      {
        $_statusCad = 0;//sinaliza como inativo
      }     
      logsys("Status $ _statusCad($_statusCad) ");                                   
      
    }

}


?>
