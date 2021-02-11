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
function arrayVar($_ARRAY,$varname=''){
  if($varname==''){
    if(isSet($_ARRAY)){return true;}else{return false;}
  }else{
    if(isSet($_ARRAY[$varname])){
        if($_ARRAY[$varname]=='' || $_ARRAY[$varname]!=''){
          return $_ARRAY[$varname];
        }
    }
    else
    {
      return false;
    }
  }
}


function urlPostModulo($modulo=''){
  $_uid = '';
  if(getVar('uid')){$_uid = '/uid/' . getVar('uid'); }
  $url = URLAPP . 'modulo/' . getVar('modulo') . '/opt/' . getVar('opt') . $_uid;
  return $url;
}

/*
 * funcao para montar diversas urls do app
 * */
function getLocation($target='',$args=array()){

  $res = '';

  if($target=='urlPost'){
    $_uid = '';
    if(getVar('uid')){$_uid = '/uid/' . getVar('uid'); }
    $res = URLAPP . 'modulo/' . getVar('modulo') . '/opt/' . getVar('opt') . $_uid;
  }

  if($target=='fileProcess'){
    $res = 'models/'. USEDASHBOARD . '/' . getVar('modulo') .'/' . postVar('do') . '.process.php';
  }

  return $res;
}

/*
funcao para SETAR a notificação
*/
function notificacaoJs($type='log',$message='MSG NAO INFORMADA',$location=''){

  if($type!=''){
    $not = array('type'=>$type,'message'=>$message);
    $_SESSION['notify'] = $not;
  }
  if($location!=''){
    header('location: '.URLAPP.$location);
  }

}



/*
 * funcao para gerar a tag script de notificacao JS
 * */
function notifyJs(){
    $scriptTag = '';
    $_notify = sessionVar('notify');

    if( ($_notify['type']=='error' && postVar('do')!='') || ( $_notify['type']!='error' && postVar('do')=='' ) )
    {
      if($_notify['type']!=''){
      $scriptTag  = '<script type="text/javascript">'."\n";
      //$scriptTag .= 'setTimeout(function (){'."\n";
      $scriptTag .= "alertify.".$_notify['type']."(\"".addslashes($_notify['message'])."\");";
      //$scriptTag .= "\n}, 1000);";
      $scriptTag .= "\n</script>";
      }
      unset($_SESSION['notify']);
    }
    return $scriptTag;
    var_dump($scriptTag);
    exit;
}

/*
 * funcao para imprimir title do error do campo no formulario
 * */
function titleError($campoId=''){
  global $_erroForm;
  if(arrayVar($_erroForm,$campoId)){
      return "title=\"$_erroForm[$campoId]\"";
  }
}


/*
 * funcao para exibir o box com msgs de erros da submissao do formulario
 * */
function boxPostErrors($_erroForm=array())
{
  //global $_erroForm;
  $_errorBox='';
  if(count($_erroForm)>0){
    //$_errorBox  = '<div class="alert-danger alert dark alert-dismissible fade show" role="alert">';
    $_errorBox  = '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:#BD2130!important;">';
    $_errorBox  .= '<h6>ERROS ENCONTRADOS!</h6><br />';
    $_errorBox  .= "<ul class=\"frm-erro-notify\">\n";
    $ne=1;
    foreach ($_erroForm as $key => $value) {
      $_errorBox .= "<li>$value</li>\n";
      $ne++;
    }

    $_errorBox .= "</ul>";
    $_errorBox .= '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
    $_errorBox .= '</div>';
  }
  return $_errorBox;
}



/*
 * funcao para mascaras em JS dos campos do formulario
 * */
function jsMask($tipo='',$max='')
{
  $mask = '';
  if($max!=''){$max = "maxlength=\"$max\"";}
  if($tipo=='inteiro')
  {
  $mask = 'onKeyDown="Mascara(this,Integer);" onKeyPress="Mascara(this,Integer);" onKeyUp="Mascara(this,Integer);"';
  }
  if($tipo=='cep')
  {
  $mask = 'onKeyDown="Mascara(this,Cep);" onKeyPress="Mascara(this,Cep);" onKeyUp="Mascara(this,Cep);"';
  }
  if($tipo=='cnpj')
  {
  $mask = 'onKeyDown="Mascara(this,Cnpj);" onKeyPress="Mascara(this,Cnpj);" onKeyUp="Mascara(this,Cnpj);"';
  }
  if($tipo=='cpf')
  {
  $mask = 'onKeyDown="Mascara(this,Cpf);" onKeyPress="Mascara(this,Cpf);" onKeyUp="Mascara(this,Cpf);"';
  }
  if($tipo=='data')
  {
  $mask = 'onKeyDown="Mascara(this,Data);" onKeyPress="Mascara(this,Data);" onKeyUp="Mascara(this,Data);"';
  }
  if($tipo=='hora')
  {
  $mask = 'onKeyDown="Mascara(this,Hora);" onKeyPress="Mascara(this,Hora);" onKeyUp="Mascara(this,Hora);"';
  }
  if($tipo=='valor')
  {
  $mask = 'onKeyDown="Mascara(this,Valor);" onKeyPress="Mascara(this,Valor);" onKeyUp="Mascara(this,Valor);"';
  }
  if($tipo=='telefone')
  {
  $mask = 'onKeyDown="Mascara(this,Telefone);" onKeyPress="Mascara(this,Telefone);" onKeyUp="Mascara(this,Telefone);"';
  }
  if($tipo=='website')
  {
  $mask = 'onKeyDown="Mascara(this,Site);" onKeyPress="Mascara(this,Site);" onKeyUp="Mascara(this,Site);"';
  }
  if($tipo=='email')
  {
  $mask = 'onKeyDown="Mascara(this,Email);" onKeyPress="Mascara(this,Email);" onKeyUp="Mascara(this,Email);"';
  }

  $mask = "$mask $max";

  return $mask;
}


/*
 * funcao para destacar erros no formulario
 * */
function showErrorForms($errors=array())
{
  $_erros = '';
  foreach ($errors as $key => $value) {
    $_erros .= "$('#$key').css(\"border\",\"1px solid red\");\n";
  }
  $tag_realce = "<script type=\"text/javascript\">\n".$_erros."</script>\n";
  if($_erros!=''){
      return $tag_realce;
  }
}

?>
