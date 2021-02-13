<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Empresas;


/*
 * determina qual o tipo de operacao devera ser feita
 * */
$_postOption = postVar('opt');

//operacao de inserção ou atualização de dados
if($_postOption=='save')
{

	//recebe dados do form via post
	$_formData = $_POST;

	//dados para a query
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

	//valida dados recebidos pelo post e em caso de erro retorna as msgs correspondentes
	if(postVar('razao_empresa')=='')    { $_erroForm['razao_empresa'] = 'Você deve preencher o campo Razão Social';}
	if(postVar('fantasia_empresa')=='') { $_erroForm['fantasia_empresa'] = 'Você deve preencher o campo Nome Fantasia';}
	if(postVar('email_empresa')=='')    { $_erroForm['email_empresa'] = 'Você deve preencher o campo E-mail';}

	//se nenhum erro ocorreu então procede com o cadastro ou atualizacao dos dados
	if(count($_erroForm)==0){

		//instancia classe do modulo em uso
		$empresa = new Empresas();


		// OPCOES DA CLASSE
		// $res = $empresa->getEmpresaById(1);
		// $res = $empresa->save($campos,'tabela');
		// $res = $empresa->save($campos,'tabela',array('id_empresa',999));
		// $res = $empresa->deleteById('empresas',array('id_empresa',999));
		// $res = $empresa->getItemById('empresas',array('id_empresa',123));
		// $res = $empresa->getList('empresas','ORDER BY desc_empresa ASC');

		if(postVar('uid_empresa')!=''){//ATUALIZA CADASTRO

			//atualiza registro no banco de dados
			$res = $empresa->saveEmpresa($campos,'empresas',array('id_empresa',postVar('uid_empresa')));
			if($res==1){
				notificacaoJs('success','Processado com Sucesso','modulo/empresas/opt/cadastro/uid/'.postVar('uid_empresa'));
			}
			if($res==0){
				notificacaoJs('log','Nada alterado!','modulo/empresas/opt/cadastro/uid/'.postVar('uid_empresa')."/error/".$res[1]);
			}
			if($res[1]!='')
			{
				notificacaoJs('log',"<h5>Erro Número (".arrayVar($res,1).")</h5><p>Erro no Processamento, aguarde alguns minutos e tente novamente se o erro persistir, contate o suporte e informe o código deste erro.<p>",'modulo/empresas/opt/cadastro/uid/'.postVar('uid_empresa')."/error/".$res[1]."000");
			}


		}else{//NOVO CADASTRO

			//cria um novo registro na tabela
			$res = $empresa->saveEmpresa($campos,'empresas');
			if($res){
				notificacaoJs('success','Processado com Sucesso','modulo/empresas/opt/cadastro/uid/'.$res);
			}else{
				notificacaoJs('error','ERRO no processamento','modulo/empresas/opt/cadastro/uid/'.$res);
			}
		}


	}

}//end (if) SAVE

?>
