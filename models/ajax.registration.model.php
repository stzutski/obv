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
  
    //recebe dados do post
    $data     = $_POST;
    $dataUser = array();
    
    foreach ($_POST['register'] as $key => $value) {
      $dataUser[$key] = $value;
    }
    
    //confere dados recebidos
    $msgErro = array();
    if($dataUser['nome_usuario']=='' || strlen($dataUser['nome_usuario'])<4){
        $msgErro[]  = 'O campo nome não foi informado';
    }
    if($dataUser['sobrenome_usuario']=='' || strlen($dataUser['sobrenome_usuario'])<4){
        $msgErro[]  = 'O campo sobrenome não foi informado';  
    }
    if(validaCPF($dataUser['cpf'])==false){
        $msgErro[]  = 'Informe um CPF Válido'; 
    }
    if(ValidaData($dataUser['nascimento'])==false){
        $msgErro[]  = 'A data de nascimento não é válida'; 
    }
    if(validaEmail($dataUser['email_usuario'])==false){
        $msgErro[]  = 'E endereço de e-mail informado não é válido'; 
    }
    if($dataUser['uf']=='' || strlen($dataUser['uf'])!=2){
        $msgErro[]  = 'Estado(UF) não selecionado'; 
    }
    if($dataUser['cidade']=='' || strlen($dataUser['cidade'])!=4){
        $msgErro[]  = 'O campo cidade não foi selecionado'; 
    }
    if($dataUser['password']=='' || $dataUser['password']<6){
        $msgErro[]  = 'Sua senha deve ter pelo menos 6 caracteres'; 
    }
    if($dataUser['password'] != $dataUser['passwordcnf']){
        $msgErro[]  = 'O campo senha e confira a senha devem ser idênticos'; 
    }
    
    //caso existam erros no dados do formulário exibe mensagem de erro
    if(count($msgErro)>0){
      $msgAlert='';
      for ($i = 0; $i < count($msgErro); $i++)
      {
          $msgAlert .= $msgErro[$i]."\n";
      }
      echo "alert($msgAlert)";
    }
    else //CASO NENHUM ERRO ENTÃO PROSSEGUE COM O CADASTRO
    {
      
      $usercli = new CadUserCli();
      $addUser = $usercli->cadastraUsuario($dataUser);
      echo $addUser;
      
    }
    
    //$ret = 'ERROR|0000';//erro desconhecido
    //$ret = 'ERROR|1000';//dados incompletos
    //$ret = 'ERROR|1001';//email ja cadastrado
    //$ret = 'ERROR|1002';//email invalido
    //$ret = 'ERROR|1100';//erro no processamento (tente mais tarde)
    //$ret = 'YXBwL29iYXZpc3Rvcm9iZXJ0by5yc2NAZ21haWwuY29tLmJy';
    
}
?>
