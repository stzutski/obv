<?php 
  use \php\classes\DB\Sql;
  use \php\classes\site\CadUserCli;
  use \php\classes\site\Notifica;

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
    
    //Conferencia de erros
    if(count($msgErro)>0){
      $msgAlert='';
      for ($i = 0; $i < count($msgErro); $i++)
      {
          $msgAlert .= $msgErro[$i]."\n";
      }
      echo "alert($msgAlert)";
    }
    else //CASO NENHUM ERRO:: rotina de cadastro e notificacao
    {
      
      $usercli = new CadUserCli();
      $codAtivacao = $usercli->cadastraUsuario($dataUser);
      
      if($codAtivacao){//recebe codigo de ativacao
        
        logsys('RECEBIDO CODIGO DE ATIVACAO DO NOVO USUARIO: '.$codAtivacao);
        
        //notifica o usuario
        $notifica            = new Notifica();
        $notifica->to        = $dataUser['email_usuario'];
        $notifica->from      = MAILFROM;
        $notifica->subject   = 'Bem vindo ao ObaVisto!';
        $notifica->mailVars  = array(
                                  'nomeUsuario'=>$dataUser['nome_usuario'],
                                  'sobrenomeUsuario'=>$dataUser['sobrenome_usuario'],
                                  'emailUsuario'=>$dataUser['email_usuario'],
                                  'logoMail'=>LOGOMAIL,
                                  'mailSuporte'=>MAILSUPORTE,
                                  'codigoDeAtivacao'=>URLAPP.'?user=activation&code='.$codAtivacao);
        
        //guarda dados em session caso necessite reenvio
        $_mailVars = json_encode($notifica->mailVars);
        $_SESSION['resendActivation']   = $_mailVars;
        
        if($notifica->mailUserBemVindo()){//redireciona o cliente para a tela de confirmacao
          echo 'window.location="'.URLAPP.'?user=confirm&code='.$codAtivacao.'"';
        }
      }
      
      
    }//fim da rotina de cadastro e notificacao
    
    
}
?>
