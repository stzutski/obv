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
  
  
  
  
  
  
  
  
  
}




?>
