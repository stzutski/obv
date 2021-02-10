<?php
namespace php\classes\master;

use \php\classes\DB\Sql;
use \php\classes\model\Model;

class Empresas extends Model {
  public $campot;


  public function save($campos=array()){

    $strQuery   = $this->queryBuilder($campos);
    $columns    = arrayVar($strQuery,'columns');
    $values     = arrayVar($strQuery,'values');
    $update     = arrayVar($strQuery,'update');
    $bindValues = arrayVar($strQuery,'bindArray');
    //$bindValues[':EITA'] = 'eitanois';

    $sql = new Sql();
    if(postVar('uid_empresa')=='')
    {
    $queryStr = "INSERT INTO empresas SET ( $columns ) VALUES ( $values )";

    //$res = $sql->query($queryStr,$bindValues);
    }
    if(postVar('uid_empresa')!='')
    {
    $queryStr = "UPDATE empresas SET $update";

    //$res = $sql->query($queryStr,$bindValues);
    }

    var_dump($queryStr, $bindValues, $update);
    exit;

  }



  public function getEmpresaById($idEmpresa=''){

    if($idEmpresa!=''){
      $sql = new Sql();
      $res = $sql->select("SELECT * FROM empresas WHERE id_empresa = :IDEMPRESA", array(
        ':IDEMPRESA'=>$idEmpresa
      ));

      if(count($res)>0){

        // var_dump($res);
        // exit;

        $this->setData($res);

      }else{
        return 'nada encontrado';
      }
    }
    else
    {
      return 'id nao informado';
    }

  }


  public static function printAdmin(){
    $db = new Sql();

      //return "<H4>Cadatrado com sucesso via classe ;) !</H4>";
      return Sql::emTeste();
  }


}

?>
