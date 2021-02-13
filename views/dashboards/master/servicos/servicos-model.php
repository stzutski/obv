<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Servicos;


//pagina com os dados do cadastro da empresa
if(getVar('uid')!=''){

	$servicos = new Servicos();
	$res = $servicos->getItemById('servicos',array('id_servico',getVar('uid')));
	if(count($res)>0){
		$_formData = $res[0];
	}else{
		$_erroForm['getItemById'] = 'CADASTRO NÃO ENCONTRADO!';
	}
}

//pagina com a tabela de servicos cadastrados
if(getVar('opt')=='lista'){

	$servicos 			= new Servicos();
	$res 						= $servicos->listaServicos();
	$listaServicos 	= $res;

}







 ?>
