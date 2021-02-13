<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Admins;


//pagina com os dados do cadastro da empresa
if(getVar('uid')!=''){

	$admins = new Admins();
	$res = $admins->getItemById('usuarios',array('id_usuario',getVar('uid')));
	if(count($res)>0){
		$_formData = $res[0];
	}else{
		$_erroForm['getItemById'] = 'CADASTRO NÃO ENCONTRADO!';
	}
}

//pagina com a tabela de empresas cadastradas
if(getVar('opt')=='lista'){

	$admins 				= new Admins();
	$res 						= $admins->listaAdmins();
	$listaAdmins 	  = $res;


}






 ?>
