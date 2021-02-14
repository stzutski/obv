<?php 
  use \php\classes\DB\Sql;
  $estados = new Sql();

  $res = $_POST;
  echo json_encode($res);
?>
