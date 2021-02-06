<?php 
// funcao que carrega as classes automaticamente
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

function mkQString($url){
  $_varname='';
  $a = explode('/',$url);
  for ($i = 0; $i < sizeof($a); $i++)
  {
    if($i % 2 == 0){
        $_varname = $a[$i];
    }else{
        $_GET[$_varname] = $a[$i];
    }
  }
}
if(isSet($_GET['vurl'])){
    if($_GET['vurl']!=''){
        mkQString($_GET['vurl']);
    }
}


function getVar($varname){
  if(isSet($_GET[$varname])){if($_GET[$varname]=='' || $_GET[$varname]!=''){return $_GET[$varname];}}
  else
  {return false;}
}
function postVar($varname){
  if(isSet($_POST[$varname])){if($_POST[$varname]=='' || $_POST[$varname]!=''){return $_POST[$varname];}}
  else{return false;}
}
function sessionVar($varname){
  if(isSet($_SESSION[$varname])){if($_SESSION[$varname]=='' || $_SESSION[$varname]!=''){return $_SESSION[$varname];}}
  else{return false;}
}
function dataVar($_RESOURCE,$varname){
  if(isSet($_RESOURCE[$varname])){if($_RESOURCE[$varname]=='' || $_RESOURCE[$varname]!=''){return $_RESOURCE[$varname];}}
  else{return false;}
}
function arrayVar($_ARRAY,$varname){
  if(isSet($_ARRAY[$varname])){if($_ARRAY[$varname]=='' || $_ARRAY[$varname]!=''){return $_ARRAY[$varname];}}
  else{return false;}
}






?>
