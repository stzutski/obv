<?php

use \php\classes\DB\ProcSql;
use \php\classes\master\Admins;


/*
 * determina qual o tipo de operacao devera ser feita
 * */
$_postOption = postVar('opt');

//operacao de inserção ou atualização de dados
if($_postOption=='save')
{

	//recebe dados do form via post
	$_formData = $_POST;
  //var_dump($_formData);
  //exit;

	//dados para a query
	$campos = array();
	$campos['nome_usuario']       = postVar('nome_usuario');
	$campos['sobrenome_usuario']  = postVar('sobrenome_usuario');
	$campos['email_usuario']      = postVar('email_usuario');
	$campos['telefone_usuario']   = postVar('telefone_usuario');
	$campos['pwd_usuario']        = postVar('pwd_usuario');
  $campos['permissao_usuario']  = 'admin';
  $campos['dt_usuario']         = '';
  $campos['lst_login_usuario']  = '';
  $campos['status_usuario']     = postVar('status_usuario');
	

	//valida dados recebidos pelo post e em caso de erro retorna as msgs correspondentes
	if(postVar('nome_usuario')=='')       { $_erroForm['nome_usuario']      = 'Informe o nome do Administrador';}
	if(postVar('sobrenome_usuario')=='')  { $_erroForm['sobrenome_usuario'] = 'Informe o Sobre Nome do Administrador';}
	if(postVar('email_usuario')=='')      { $_erroForm['email_usuario']     = 'Informe o e-mail do Administrador';}
	if(postVar('status_usuario')=='')     { $_erroForm['status_usuario']    = 'Selecione o Status do Administrador';}
  
  //validacao de atualizacao de senha do administrador
  if(postVar('sw-hd-pwd')!='' && postVar('pwd_usuario')!=''){
  
      if(postVar('sw-hd-pwd') !='' postVar('pwd_usuario')!=''){//senhas não são iguais

        $_erroForm['pwd_usuario']       = 'O campo Senha e Confirme a Senha não são iguais';

      }else{
      
      if(postVar('pwd_usuario')=='')      { $_erroForm['pwd_usuario']      = 'Informe uma senha para este Adminstrador!';}
      if(strlen(postVar('pwd_usuario'))<6){ $_erroForm['pwd_usuario']      = 'Sua senha deve ter 6 caracteres ou mais!';}
        
      }
    
    
  }
  
  if(postVar('uid_admin')!='' && ( postVar('sw-hd-pwd')!='' && postVar('pwd_usuario')!='' ) ){//conferencia para ATUALIZAÇÃO da senha
    
    if(postVar('pwd_usuario')=='')      { $_erroForm['pwd_usuario']       = 'Informe a Senha do Administrador';}
    $szPwd = postVar('pwd_usuario');
    if(strlen($szPwd)<6)                { $_erroForm['pwd_usuario']       = 'Sua senha deve ter 6 caracteres ou mais!';}
    
  }
  else
  {//conferencia para cadastro da senha de novos usuários
    
      if(postVar('pwd_usuario')=='')      { $_erroForm['pwd_usuario']       = 'Informe a Senha do Administrador';}
      if(strlen(postVar('pwd_usuario'))<6){ $_erroForm['pwd_usuario']       = 'Sua senha deve ter 6 caracteres ou mais!';}
      $vpwd = postVar('pwd_usuario');
      $vcwd = postVar('conf_pwd_usuario');
      if( $vpwd != $vcwd )              {$_erroForm['pwd_usuario']       = 'O campo Senha e Confirme não conferem!';}
      
  }


	//se nenhum erro ocorreu então procede com o cadastro ou atualizacao dos dados
	if(count($_erroForm)==0){

		//instancia classe do modulo em uso
		$admins = new Admins();


		// OPCOES DA CLASSE
		// $res = $empresa->getEmpresaById(1);
		// $res = $empresa->save($campos,'tabela');
		// $res = $empresa->save($campos,'tabela',array('id_empresa',999));
		// $res = $empresa->deleteById('empresas',array('id_empresa',999));
		// $res = $empresa->getItemById('empresas',array('id_empresa',123));
		// $res = $empresa->getList('empresas','ORDER BY desc_empresa ASC');

		if(postVar('uid_admin')!=''){//ATUALIZA CADASTRO

			//atualiza registro no banco de dados
			$res = $admins->saveAdmin($campos,'usuarios',array('id_usuario',postVar('uid_admin')));
			if($res==1){
				notificacaoJs('success','Processado com Sucesso','modulo/admins/opt/cadastro/uid/'.postVar('uid_admin'));
			}
			if($res==0){
				notificacaoJs('log','Nada alterado!','modulo/admins/opt/cadastro/uid/'.postVar('uid_admin')."/error/".$res[1]);
			}
			if($res[1]!='')
			{
				notificacaoJs('log',"<h5>Erro Número (".arrayVar($res,1).")</h5><p>Erro no Processamento, aguarde alguns minutos e tente novamente se o erro persistir, contate o suporte e informe o código deste erro.<p>",'modulo/admins/opt/cadastro/uid/'.postVar('uid_admin')."/error/".$res[1]."000");
			}

		}else{//NOVO CADASTRO

			//cria um novo registro na tabela
			$res = $admins->saveAdmin($campos,'usuarios');
			if($res){
				notificacaoJs('success','Processado com Sucesso','modulo/admins/opt/cadastro/uid/'.$res);
			}else{
				notificacaoJs('error','ERRO no processamento','modulo/admins/opt/cadastro/uid/'.$res);
			}
		}


	}

}//end (if) SAVE

?>
