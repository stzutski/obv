<?php

$_GET_modulo = getVar('modulo');
$_GET_opt    = getVar('opt');
$_GET_uid    = getVar('uid');
$_GET_do     = getVar('do');
$_GET_api    = getVar('api');
$_GET_ajax   = getVar('ajax');
$_POST_do    = postVar('do');


if(!$_GET_modulo){//include dashboard

  include_once("{$dashBoardPath}dashboard-".USEDASHBOARD.".php");
  
}else{
  
  if(!$_GET_api){
    $_include_module = $dashBoardPath . "$_GET_modulo/$_GET_opt" . ".php";
  }
  if($_GET_api!='')
  {
    $_include_module = $dashBoardPath . "$_GET_modulo/$_GET_opt-$_GET_api" . ".php";
  }

  include_once( $_include_module );
  
}





?>
