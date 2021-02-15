<?php 
  use \php\classes\DB\Sql;
  use \php\classes\site\CadUserCli;

/*
 * receber dados do post
 * validar dados recebidos
 * se erro nos formato dos dados
 *  retorna msg de erro
 * se OK
 *  #cria um usuario na tabela usuarios
 *  #consulta o email informado na usuarios e retorna o ID do usuario
 *  #cria um cliente na tabela clientes
 *  
 * 
 * */

//user/registration/chk/email/eml/roberto.rsc@gmail.com
//http://localhost/labs/obv/user/registration/chk/eml

if(postVar('chk')=='mail' &&  postVar('eml')!=''){
    $usercli = new CadUserCli();
    $checkmail = $usercli->consultaEmail( postVar('eml') );
    echo $checkmail;
}

if(getVar('new')=='user'){
    $data = $_POST;
    echo json_encode($data);
}
?>
