<?php 

use \php\classes\DB\Sql;
use \php\classes\site\Notifica;

//recebe os dados para consulta no banco de dados
$_code    = getVar('code');
$_resend  = getVar('rsnd');

if($_code!=''){

    logsys("Activation: REVALIDANDO rsend: ($_resend) code:($_code) ");

    //verifica se cadastro realmente nao esta ativo
    //consulta no banco
    $res='';
    $_activation = new Sql();

    $res = $_activation->select('SELECT * FROM usuarios 
                                WHERE 
                                cod_ativacao_usuario = :cod_ativacao_usuario',array(
                                ':cod_ativacao_usuario'=>$_code));


    logsys("Activation: RESULTADOS ENCONTRADOS (".count($res).")");


    if(count($res)===0){

      logsys("Activation: nenhum cadastro localizado");
      $_statusCad = 0;//sinaliza como INVALIDO

    }

    if(count($res)=='1'){

      logsys("Activation: encontrado 1 cadastro para ser ATIVADO");
      //array com os dados do usuário localizado
      $userData = $res[0];  

      if($userData['status_usuario']==1){
      
        logsys("Activation: cadastro já esta ativo basta logar");
        $_statusCad = 2;//sinaliza como já ativo
      
      }elseif($userData['status_usuario']==0){//caso AINDA inativo envia msg novamente
        
        $_statusCad = 1;//sinaliza como inativo
        
            if($_resend=='mail'){
            
              //notifica o usuario
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
        
              if($notifica->mailUserBemVindo()){
                //redireciona o cliente para a tela de confirmacao
                echo header('location:'.URLAPP.'?user=confirm&code=' . $userData['cod_ativacao_usuario']);
              }    
        
        } 
        
        
           
      }
    }
    
}
?>
