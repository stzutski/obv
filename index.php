<?php
//header page
require_once('configs.php');

//echo $_GET['vurl'];

//include header
require_once(VIEWSPATH . 'header.php');


//include corpo do app
require_once(VIEWSPATH . 'home-master.php');


//include rodape
require_once(VIEWSPATH . 'footer.php');

?>
