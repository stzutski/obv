<?php
function campoSelect($dados=array(),$campo='',$valor='',$selected=''){

  $option       = '<option value="">Selecione</option>'."\n";
  $att_selected = '';

  if(count($dados)>0 && $campo!='' && $valor!=''){
      for ($i = 0; $i < count($dados); $i++)
      {
          $dataRow =  $dados[$i];
          $opt_valor = $dataRow[$valor];
          $opt_campo = $dataRow[$campo];
          $att_selected = '';
          if($selected!='' && $selected==$opt_valor){$att_selected=' SELECTED';}
          $option = $option.'<option '.$att_selected.' value="'.$opt_valor.'">'.$opt_campo.'</option>'."\n";
      }
  }

  return $option;
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


/*
 * funcao para selecionar option em campo select
 * */
function selselr($a='',$b=''){
    $selected='';
    if($a!=''&&$b!=''){
      if($a==$b){$selected = ' selected';}
    }
    return $selected;
}

?>
