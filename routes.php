<?php
// TODO: atualizar este arquivo



/*
/
/modulo/empresas/opt/lista
/modulo/empresas/opt/cadastro
/modulo/empresas/opt/cadastro/uid/xxx

/modulo/admins/opt/lista
/modulo/admins/opt/cadastro
/modulo/admins/opt/cadastro/uid/xxx

/modulo/admins/opt/lista
/modulo/admins/opt/cadastro
/modulo/admins/opt/cadastro/uid/xxx

/modulo/servicos/opt/lista
/modulo/servicos/opt/cadastro
/modulo/servicos/opt/cadastro/uid/xxx
/modulo/servicos/opt/lista-etapas
/modulo/servicos/opt/add-etapas
/modulo/servicos/opt/alt-etapas/uid/xxx

/modulo/gateways/opt/lista
/modulo/gateways/opt/config/api/xxxxxxx

/modulo/configuracoes/opt/configure
/do=logout




/modulo/financeiro/opt/lista
/modulo/servicos/opt/lista
/modulo/clientes/opt/lista
/modulo/clientes/opt/cadastro/uid
/modulo/suporte/opt/tickets
/modulo/suporte/opt/chat
/modulo/suporte/opt/video-chamada
/modulo/tarefas/opt/lista
/modulo/filemanager/opt/arquivos
/modulo/logs/opt/lista




*/


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
