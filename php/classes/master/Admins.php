<?php
namespace php\classes\master;

use \php\classes\DB\Sql;

class Admins {


  public static function printAdmin(){
    $db = new Sql();

      //return "<H4>Cadatrado com sucesso via classe ;) !</H4>";
      return Sql::emTeste();
  }


}

?>
