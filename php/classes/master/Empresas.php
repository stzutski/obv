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




}

?>
