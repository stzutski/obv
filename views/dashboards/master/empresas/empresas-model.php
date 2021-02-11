<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Empresas;


if(getVar('uid')!=''){

	$empresa = new Empresas();
	$res = $empresa->getItemById('empresas',array('id_empresa',getVar('uid')));
	if(count($res)>0){
		$_formData = $res[0];
	}else{
		$_erroForm['getItemById'] = 'CADASTRO NÃO ENCONTRADO!';
	}

}






 ?>
