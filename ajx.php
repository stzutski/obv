<?php 
//rotinas em ajax

//cadastro de usuario via formulario ajax
if(getVar('user')=='registration'){
  include_once('models/ajax.registration.model.php');
  exit;
} 

//consulta campo select nome da cidade com base na UF  
if(getVar('consulta')=='cidades'){
  require_once('models/ajax.cidades.model.php');
  exit;
}
?>
