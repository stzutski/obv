<?php
//header page
require_once('configs.php');


// INCLUDE DO ARQUIVO DE PROCESSAMENTO DO MODULO EM USO
// SOMENTE SERÁ CARREGADO DURANTE O PROCESSAMENTO DE UM POST 
// EXEMPLO ADD UPDATE
if(postVar('do')!=''){
  $_pathProcess = getLocation('fileProcess');
  include_once($_pathProcess);  
}

  //include header
  require_once(VIEWSPATH . 'common/header.php');


  //include corpo do app
  require_once("routes.php");
  //require_once(VIEWSPATH . 'tests/content2.php');


  //include rodape
  require_once(VIEWSPATH . 'common/footer.php');


?>
