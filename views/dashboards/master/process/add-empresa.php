<?php 
$not = array('type'=>'success','message'=>'CADASTRADO COM SUCESSO');
$_SESSION['notify'] = $not;
header('location: '.URLAPP.'modulo/empresas/opt/lista');
?>
