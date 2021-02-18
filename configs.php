<?php
if(isSet($_GET['u']) && $_GET['u']=='logout'){
  session_start();
  session_destroy();
  session_start();
}else{
  session_start();
}

//gera uma semene para campos do form login e cadastro
if(!isSet($_SESSION['_sf'])){
  $_seed_formField = substr(md5(rand()),2,6);
  $_SESSION['_sf'] = $_seed_formField;
}

$u_level = '';
if(isSet($_SESSION['_ulevel']) && $_SESSION['_ulevel']!=''){$u_level=$_SESSION['_ulevel'];}

define('VIEWSPATH','views/');
define('URLAPP','http://localhost/labs/obv/');
define('TITLEAPP','Oba Visto!');
define('USERLEVEL',$u_level);
define('USEDASHBOARD',$u_level);
define('UIDEMPRESA',1);
$_formData = array();
$_erroForm = array();

$dashBoardPath      = 'views/dashboards/' . USEDASHBOARD . '/';

require_once('php/functions/functions.php');
require_once('php/functions/functions.html.php');

use \php\classes\DB\Sql;

//use \php\classes\master\Admins;

//modulo/empresas/opt/cadastro
?>
