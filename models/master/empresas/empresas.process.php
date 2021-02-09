<?php 

/*
 * opcao de execucao
 * */
$_postOption = postVar('opt');


if($_postOption=='save')//rotina de cadastro ou alteracao do registro
{



  
  //recebe dados
$_formData['id_empresa']          = postVar('uid_empresa');      
$_formData['id_usuario']          = postVar('uid_empresa');      
$_formData['uid_empresa']         = postVar('uid_empresa');      
$_formData['desc_empresa']        = postVar('uid_empresa');      
$_formData['razao_empresa']       = postVar('razao_empresa');    
$_formData['fantasia_empresa']    = postVar('fantasia_empresa'); 
$_formData['cnpj_empresa']        = postVar('cnpj_empresa');     
$_formData['ie_empresa']          = postVar('ie_empresa');       
$_formData['im_empresa']          = postVar('m_empresa');       
$_formData['regime_empresa']      = postVar('regime_empresa');   
$_formData['telcom_empresa']      = postVar('telcom_empresa');   
$_formData['telcel_empresa']      = postVar('telcel_empresa');   
$_formData['email_empresa']       = postVar('email_empresa');    
$_formData['website_empresa']     = postVar('website_empresa');  
$_formData['fb_empresa']          = postVar('fb_empresa');       
$_formData['instagram_empresa']   = postVar('instagram_empresa');
$_formData['youtube_empresa']     = postVar('youtube_empresa');  
$_formData['twitter_empresa']     = postVar('twitter_empresa');  
$_formData['endereco_empresa']    = postVar('endereco_empresa'); 
$_formData['numero_empresa']      = postVar('numero_empresa');   
$_formData['complemento_empresa'] = postVar('complemento_empresa');
$_formData['cep_empresa']         = postVar('cep_empresa');      
$_formData['bairro_empresa']      = postVar('bairro_empresa');   
$_formData['cidade_empresa']      = postVar('cidade_empresa');   
$_formData['uf_empresa']          = postVar('uf_empresa');       
$_formData['pais_empresa']        = postVar('pais_empresa');     
  
  
  
if(postVar('razao_empresa')==''){ $_erroForm['razao_empresa'] = 'Você deve preencher o campo Razão Social';}  
if(postVar('fantasia_empresa')==''){ $_erroForm['fantasia_empresa'] = 'Você deve preencher o campo Nome Fantasia';}  
if(postVar('email_empresa')==''){ $_erroForm['email_empresa'] = 'Você deve preencher o campo E-mail';}  
  
  

  
  
  
  
}


if(count($_erroForm)==0){

  $not = array('type'=>'success','message'=>'PROCESSADO COM SUCESSO!');
  $_SESSION['notify'] = $not;
  header('location: '.URLAPP.'modulo/empresas/opt/cadastro');
  
}else{

  $not = array('type'=>'error','message'=>'OCORREU UM ERRO!');
  $_SESSION['notify'] = $not;
  
}













?>
