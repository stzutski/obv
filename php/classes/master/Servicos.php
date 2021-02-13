<?php
namespace php\classes\master;

use \php\classes\DB\Sql;
use \php\classes\DB\ProcSql;
use \php\classes\model\Model;


class Servicos extends ProcSql {

  //cadastra ou atualiza Servico
  public function saveServico($campos=array(),$table='',$uid=array()){
    $res = $this->save($campos,$table,$uid);
    return $res;
  }

  //retorna a lista de Servicos cadastrados
  public function listaServicos(){
    $res = false;
    $res = $this->getList('servicos');//ProcSql
    return $res;
  }



}

?>
