<?php
namespace php\classes\master;

use \php\classes\DB\Sql;
use \php\classes\DB\ProcSql;
use \php\classes\model\Model;


class Empresas extends ProcSql {

  //cadastra ou atualiza empresa
  public function saveEmpresa($campos=array(),$table='',$uid=array()){
    $res = $this->save($campos,$table,$uid);
    return $res;
  }

  //retorna a lista de empresas cadastradas
  public function listaEmpresas(){
    $res = false;
    $res = $this->getList('empresas');//ProcSql

    for ($i=0; $i < count($res) ; $i++) {
      $adminEmpresa         = $this->getAdminData( $res[$i]['id_empresa'] );
      if($adminEmpresa){
        $res[$i]['admins']  = $adminEmpresa;
      }else{
        $res[$i]['admins']  = false;
      }
    }
    
    return $res;
  }

  //retorna um array com a lista de administradores da empresa informada (uid_empresa)
  public function getAdminData($uid_empresa=''){
    if($uid_empresa!='')
    {
      $res = false;
      $admins = array();
      $sql = new Sql();
      //SELECT * FROM admins_empresas as a, usuarios as b WHERE b.id_empresa = :uid_empresa AND a.id_empresa = b.id_empresa
      $res = $sql->select(
        'SELECT * FROM admins_empresas as a, usuarios as b
        WHERE a.id_empresa = :uid_empresa
        AND a.id_usuario = b.id_usuario', array(':uid_empresa'=>$uid_empresa));

      if(count($res)>0){
        return $res;
      }else{//nenhum admin para a empresa selecionada
        return false;
      }
    }
  }



}

?>
