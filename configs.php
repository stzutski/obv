<?php
$u_level = 'master';
define('VIEWSPATH','views/');
define('URLAPP','http://localhost/labs/obv/');
define('TITLEAPP','Oba Visto!');
define('USERLEVEL',$u_level);
define('USEDASHBOARD',$u_level);

$dashBoardPath = 'views/dashboards/' . USEDASHBOARD . '/';

require_once('php/functions/functions.php');
require_once('php/functions/functions.html.php');

?>
