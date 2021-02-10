<?php

use \php\classes\master\Empresas;


$campos = array();
$campos['desc_empresa']         = postVar('desc_empresa');
$campos['desc_empresa']         = postVar('desc_empresa');
$campos['razao_empresa']        = postVar('razao_empresa');
$campos['fantasia_empresa']     = postVar('fantasia_empresa');
$campos['cnpj_empresa']         = postVar('cnpj_empresa');
$campos['ie_empresa']           = postVar('ie_empresa');
$campos['im_empresa']           = postVar('im_empresa');
$campos['regime_empresa']       = postVar('regime_empresa');
$campos['telcom_empresa']       = postVar('telcom_empresa');
$campos['telcel_empresa']       = postVar('telcel_empresa');
$campos['email_empresa']        = postVar('email_empresa');
$campos['website_empresa']      = postVar('website_empresa');
$campos['fb_empresa']           = postVar('fb_empresa');
$campos['instagram_empresa']    = postVar('instagram_empresa');
$campos['youtube_empresa']      = postVar('youtube_empresa');
$campos['twitter_empresa']      = postVar('twitter_empresa');
$campos['endereco_empresa']     = postVar('endereco_empresa');
$campos['numero_empresa']       = postVar('numero_empresa');
$campos['complemento_empresa']  = postVar('complemento_empresa');
$campos['cep_empresa']          = postVar('cep_empresa');
$campos['bairro_empresa']       = postVar('bairro_empresa');
$campos['cidade_empresa']       = postVar('cidade_empresa');
$campos['uf_empresa']           = postVar('uf_empresa');
$campos['pais_empresa']         = postVar('pais_empresa');
$campos['dt_empresa']           = postVar('dt_empresa');
$campos['status_empresa']       = postVar('status_empresa');



$empresa = new Empresas();

//$res = $empresa->getEmpresaById(1);
$res = $empresa->save($campos);



// $desc = $empresa->getValues();
// $eee = $empresa->getrazao_empresa();
// var_dump($eee);
// exit;



/*
 * opcao de execucao
 * */
$_postOption = postVar('opt');


if($_postOption=='save')//rotina de cadastro ou alteracao do registro
{

  //recebe dados do form via post
$_formData = $_POST;

//valida dados
if(postVar('razao_empresa')=='')    { $_erroForm['razao_empresa'] = 'Você deve preencher o campo Razão Social';}
if(postVar('fantasia_empresa')=='') { $_erroForm['fantasia_empresa'] = 'Você deve preencher o campo Nome Fantasia';}
if(postVar('email_empresa')=='')    { $_erroForm['email_empresa'] = 'Você deve preencher o campo E-mail';}


//se nenhum erro então procede com o cadastro ou atualizacao dos dados
if(count($_erroForm)==0){

//$empresa->setData();


  if(postVar('uid_empresa')!=''){//ATUALIZA CADASTRO


  }else{//NOVO CADASTRO


  }




}







}

//$msgInfo = Admins::printAdmin();
$msgInfo = Sql::emTeste();
///$msgInfo = 'xxxxxxxxx';

if(count($_erroForm)==0){

  $not = array('type'=>'success','message'=>$msgInfo);
  $_SESSION['notify'] = $not;
  header('location: '.URLAPP.'modulo/empresas/opt/cadastro');

}else{

  $not = array('type'=>'error','message'=>$msgInfo);
  $_SESSION['notify'] = $not;

}













?>
