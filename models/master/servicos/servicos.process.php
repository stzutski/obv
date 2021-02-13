<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Servicos;


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
	$campos['nome_servico']          = postVar('nome_servico');
	$campos['desc_servico']          = postVar('desc_servico');
	$campos['nomeplano_servico']     = postVar('nomeplano_servico');
	$campos['valor_servico']         = postVar('valor_servico');
	$campos['status_servico']        = postVar('status_servico');

	//valida dados recebidos pelo post e em caso de erro retorna as msgs correspondentes
	if(postVar('nome_servico')=='')      { $_erroForm['nome_servico'] = 'Você deve informar o nome do servico';}
	if(postVar('desc_servico')=='')      { $_erroForm['desc_servico'] = 'Informe uma breve descrição do serviço';}
	if(postVar('nomeplano_servico')=='') { $_erroForm['nomeplano_servico'] = 'Informe a modalidade do servico';}
	if(postVar('valor_servico')=='')     { $_erroForm['valor_servico'] = 'Informe o valor do Serviço';}

	//se nenhum erro ocorreu então procede com o cadastro ou atualizacao dos dados
	if(count($_erroForm)==0){

		//instancia classe do modulo em uso
		$empresa = new Servicos();


		// OPCOES DA CLASSE
		// $res = $empresa->getEmpresaById(1);
		// $res = $empresa->save($campos,'tabela');
		// $res = $empresa->save($campos,'tabela',array('id_empresa',999));
		// $res = $empresa->deleteById('empresas',array('id_empresa',999));
		// $res = $empresa->getItemById('empresas',array('id_empresa',123));
		// $res = $empresa->getList('empresas','ORDER BY desc_empresa ASC');

		if(postVar('uid_servico')!=''){//ATUALIZA CADASTRO

			//atualiza registro no banco de dados
			$res = $empresa->saveServico($campos,'servicos',array('id_servico',postVar('uid_servico')));
			if($res==1){
				notificacaoJs('success','Processado com Sucesso','modulo/servicos/opt/cadastro/uid/'.postVar('uid_servico'));
			}
			if($res==0){
				notificacaoJs('log','Nada alterado!','modulo/servicos/opt/cadastro/uid/'.postVar('uid_servico')."/error/".$res[1]);
			}
			if($res[1]!='')
			{
				notificacaoJs('log',"<h5>Erro Número (".arrayVar($res,1).")</h5><p>Erro no Processamento, aguarde alguns minutos e tente novamente se o erro persistir, contate o suporte e informe o código deste erro.<p>",'modulo/servicos/opt/cadastro/uid/'.postVar('uid_servico')."/error/".$res[1]."000");
			}


		}else{//NOVO CADASTRO

			//cria um novo registro na tabela
			$res = $empresa->saveServico($campos,'servicos');
			if($res){
				notificacaoJs('success','Processado com Sucesso','modulo/servicos/opt/cadastro/uid/'.$res);
			}else{
				notificacaoJs('error','ERRO no processamento','modulo/servicos/opt/cadastro/uid/'.$res);
			}
		}


	}

}//end (if) SAVE

?>
