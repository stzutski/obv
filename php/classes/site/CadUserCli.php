<?php  
namespace php\classes\site;

use \php\classes\DB\Sql;

class CadUserCli {
  
  //consulta se o email informado ja esta em uso
  public function consultaEmail($email){
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
      
      $sql = new Sql();
      $res = $sql->select('SELECT * FROM usuarios 
                          WHERE email_usuario = :email_usuario',array(
                          ':email_usuario'=>$email));
      
      if(count($res)>0){
        return 1001;//caso SIM email ja esta em uso
      }else{
        return 0;//tudo certo email NAO ESTA em uso
      }

    }else{
        return 1002;//email informado nao e valido
    }
  
  }//fim do consultaEmail
  
  
  public function addNewUser($args=array()){
    
    //conferimos se o email informado não esta em uso
    $sql = new Sql();
    $res = $sql->select('SELECT * FROM usuarios WHERE email_usuario = :email_usuario',array(':email_usuario'=>$args['email_usuario']));
    if(count($res)==0){
    
      //geramos uma chave de validacao com base no email do usuario
      //esta chave será utilizada para a ativação do cadastro dele
      $userKEY= encode($args['email_usuario']);
      
      $query  = 'INSERT INTO usuarios (
                id_empresa, nome_usuario, sobrenome_usuario, email_usuario, 
                pwd_usuario, permissao_usuario, dt_usuario, cod_ativacao_usuario, status_usuario) 
                VALUES (
                :id_empresa, :nome_usuario, :sobrenome_usuario, :email_usuario,
                :pwd_usuario, :permissao_usuario, :dt_usuario, :cod_ativacao_usuario, :status_usuario)'; 
                
      $params = array(
                ':id_empresa'=>UIDEMPRESA,
                ':nome_usuario'=>$args['nome_usuario'],
                ':sobrenome_usuario'=>$args['sobrenome_usuario'],
                ':email_usuario'=>$args['email_usuario'],
                ':pwd_usuario'=>mkpwd($args['password']),
                ':permissao_usuario'=>'cliente',
                ':dt_usuario'=>time(),
                ':cod_ativacao_usuario'=>$args['cod_ativacao'],
                ':status_usuario'=>0);
                
      
      $res    = $sql->query($query,$params);  
      
      return $res;  
    }else{//SE EMAIL JA CADASTRADO RETORNA FALSE
      return 'erro1001';
    }
    
  }
  
  public function addNewClient($args=array()){
    
    $query_addCli = 'INSERT INTO clientes (
                    id_usuario,
                    id_empresa,
                    nome_cliente,
                    sobrenome_cliente,
                    cpf_cliente,
                    uf_cliente,
                    cidade_cliente,
                    dt_cliente,
                    status_cliente) VALUES (
                    :id_usuario,     
                    :id_empresa,
                    :nome_cliente,
                    :sobrenome_cliente,
                    :cpf_cliente,
                    :uf_cliente,
                    :cidade_cliente,
                    :dt_cliente,
                    :status_cliente)';
      
      $paramsAddCli = array(
                    ':id_usuario'=>$args['id_usuario'],
                    ':id_empresa'=>UIDEMPRESA,
                    ':nome_cliente'=>$args['nome_usuario'],
                    ':sobrenome_cliente'=>$args['sobrenome_usuario'],
                    ':cpf_cliente'=>$args['cpf'],
                    ':uf_cliente'=>$args['uf'],
                    ':cidade_cliente'=>$args['cidade'],
                    ':dt_cliente'=>time(),
                    ':status_cliente'=>0);
      
      $sql = new Sql();
      $res = $sql->query($query_addCli, $paramsAddCli);    
      
      return $res;
    
  }
  
    //metodo para remocao de usuarios
    public function delUser($id_usuario){
      $sql    = new Sql();
      $remUse = $sql->query('DELETE FROM usuarios WHERE id_usuario = :id_usuario', array(':id_usuario'=>$id_usuario));
      if(!is_array($remUse)){
          return true;
      }else{
          return false;
      }
    }

    //metodo para remocao de cliente com base no ID USUARIO
    public function delClientUser($id_usuario){
      $sql    = new Sql();
      $remCli = $sql->query('DELETE FROM clientes WHERE id_usuario = :id_usuario', array(':id_usuario'=>$id_usuario));
      if(!is_array($remCli)){
          return true;
      }else{
          return false;
      }
    }
  
  
  

    //cadastro de novo usuário atraves do site
    public function cadastraUsuario($args){
      
      $userArgs = $args;
      $cliArgs  = $args;
      
      //geramos uma chave de validacao com base no email do usuario
      //esta chave será utilizada para a ativação do cadastro dele
      $codAtivacao              = encode($args['email_usuario']);      
      $userArgs['cod_ativacao'] = md5($codAtivacao);      
      
      //#1 cadastra o usuario e retorna o seu ID
      $usuario = $this->addNewUser($userArgs);
      
      if($usuario == 'erro1001'){
          return 'alert("O email informado já esta em uso!")';
      }
      elseif($usuario!='erro1001' && $usuario > 0)
      {
        
        $cliArgs['id_usuario'] = $usuario;
        
        //#2 cadastra o usuário como cliente e retorna o ID CLIENTE
        $cliente = $this->addNewClient($cliArgs);
        
        //#3 confere a criacao dos registros USUARIO <=> CLIENTE
        if(is_array($cliente))
        {//se for retornado um array significa que ocorreu um erro
          
          //por segurança apaga qualque registro possível para o usuario que recem tentou se cadastrar
          //assim nada impedirá de informar o mesmo endereço de email durante a nova tentativa de cadastro
          $this->delUser($usuario);
          $this->delClientUser($usuario);      
          
              
          return 'alert("01 ERRO TENTE NOVAMENTE MAIS TARDE!!!")';
          
        }
        elseif($cliente>0)
        { 
          //caso contrario procede com a rotina
          //confere se a tabela de clientes possui um registro vinculado a tabela usuarios através de ID_USUARIO
          $sql = new Sql();
          $res = $sql->select('SELECT * FROM clientes WHERE id_usuario = :id_usuario',array(':id_usuario'=>$usuario));
          
            if(is_array($res) && count($res)==0)
            {
              //SE NENHUM REGISTRO FOR ENCONTRADO ENTÃO OCORREU ERRO NO CADASTRO DO CLIENTE
              //sera necessário remover o registro do usuario para que no futuro ele possa novamente se cadastrar
              //utilizando o mesmo e-mail
              
              $this->delUser($usuario);
              $this->delClientUser($usuario); 
              
              return 'alert("02 ERRO TENTE NOVAMENTE MAIS TARDE!!!")';
              
            }
            elseif(count($res)==1)
            {
              //SE APENAS 1 REGISTRO FOR ENCONTRATO!!!
              //return 'alert("TUDO CERTO!!!")';
              return 'window.location="'.URLAPP.'?user=confirm&code='.$codAtivacao.'"';
              
            }
          
        }
        
      }//final cadastro 
   
    }//final cadastraUsuario
    
    
}

?>
