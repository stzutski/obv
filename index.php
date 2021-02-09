<?php
//header page
require_once('configs.php');


if(postVar('do')!=''){
  $_pathProcess = getLocation('fileProcess');
  //var_dump($_pathProcess);
  //exit;
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
