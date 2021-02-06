<?php
//header page
require_once('configs.php');

//echo $_GET['vurl'];

//include header
require_once(VIEWSPATH . 'common/header.php');


//include corpo do app
require_once("routes.php");
//require_once(VIEWSPATH . 'tests/content2.php');


//include rodape
require_once(VIEWSPATH . 'common/footer.php');

?>
