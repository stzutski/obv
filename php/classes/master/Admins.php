<?php
namespace php\classes\master;

use \php\classes\DB\Sql;
use \php\classes\DB\ProcSql;
use \php\classes\model\Model;


class Admins extends ProcSql {

  //cadastra ou atualiza o Admin
  public function saveAdmin($campos=array(),$table='',$uid=array()){
        
    $res = $this->save($campos,$table,$uid);
    return $res;
  }
  
  //retorna a lista de admins cadastrados
  public function listaAdmins(){
    $res = false;
    $res = $this->getList('usuarios');//ProcSql

    for ($i=0; $i < count($res) ; $i++) {
      $adminEmpresa         = $this->getAdminData( $res[$i]['id_usuario'] );
      if($adminEmpresa){
        $res[$i]['admins']  = $adminEmpresa;
      }else{
        $res[$i]['admins']  = false;
      }
    }
    
    return $res;
  }  
  
  //retorna um array com a os dados da empresa vinculada ao administrador (com base no uid_usuario)
  public function getAdminData($uid_usuario=''){
    
    if($uid_usuario!='')
    {
      $res = false;
      $admins = array();
      $sql = new Sql();
      //SELECT * FROM admins_empresas as a, usuarios as b WHERE b.id_empresa = :uid_empresa AND a.id_empresa = b.id_empresa
      $res = $sql->select(
        'SELECT * FROM admins_empresas as a, empresas as b 
        WHERE a.id_usuario = :uid_usuario AND a.id_empresa = b.id_empresa', array(':uid_usuario'=>$uid_usuario));
      
      if(count($res)>0){
        return $res;
      }else{//nenhuma empresa para o usuario selecionada
        return false;
      }
    }

  }


}

?>
