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
 * funcao para retornar o nome correto do campo com o seed de protecao
 * */
function _sf($campo=''){
  $field = $campo;
  if(sessionVar('_sf')){
    $field = sessionVar('_sf')."_$campo";
    if($campo==''){return sessionVar('_sf');}
    else
    {return $field;}
  }
}



//FUNCAO PARA GERAR SENHA
function mkpwd($str){
 $str = base64_encode($str.'obav');
 $str = md5($str);
 $str = base64_encode($str.'obav');
 $str = base64_encode(md5($str).'===');
 return $str;
}


//funcao para codificar strings
function encode($str,$seed='app/obavisto'){
  $string   = $seed.$str;
  $string2  = base64_encode($string);
  return $string2;
}

//funcao para decodificar strings
function decode($str,$seed='app/obavisto'){
  $open = str_replace($seed,'',base64_decode( str_replace($seed,'',$str) ) );
  return $open;
}


//funcao para conferencia de um CPF
function validaCPF($cpf = null) {

  // Verifica se um número foi informado
  if(empty($cpf)) {
    return false;
  }

  // Elimina possivel mascara
  $cpf = preg_replace("/[^0-9]/", "", $cpf);
  $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

  // Verifica se o numero de digitos informados é igual a 11
  if (strlen($cpf) != 11) {
    return false;
  }
  // Verifica se nenhuma das sequências invalidas abaixo
  // foi digitada. Caso afirmativo, retorna falso
  else if ($cpf == '00000000000' ||
    $cpf == '11111111111' ||
    $cpf == '22222222222' ||
    $cpf == '33333333333' ||
    $cpf == '44444444444' ||
    $cpf == '55555555555' ||
    $cpf == '66666666666' ||
    $cpf == '77777777777' ||
    $cpf == '88888888888' ||
    $cpf == '99999999999') {
    return false;
   // Calcula os digitos verificadores para verificar se o
   // CPF é válido
   } else {

    for ($t = 9; $t < 11; $t++) {

      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cpf{$c} * (($t + 1) - $c);
      }
      $d = ((10 * $d) % 11) % 10;
      if ($cpf{$c} != $d) {
        return false;
      }
    }

    return true;
  }
}


//funcao para validar datas informadas
/*
 * https://www.linhadecomando.com/php/php-funcao-para-validar-data
 * */
function ValidaData($data){
    // data é menor que 8
    if ( strlen($data) < 8){
        return false;
    }else{
        // verifica se a data possui
        // a barra (/) de separação
        if(strpos($data, "/") !== FALSE){
            //
            $partes = explode("/", $data);
            // pega o dia da data
            $dia = $partes[0];
            // pega o mês da data
            $mes = $partes[1];
            // prevenindo Notice: Undefined offset: 2
            // caso informe data com uma única barra (/)
            $ano = isset($partes[2]) ? $partes[2] : 0;
 
            if (strlen($ano) < 4) {
                return false;
            } else {
                // verifica se a data é válida
                if (checkdate($mes, $dia, $ano)) {
                     return true;
                } else {
                     return false;
                }
            }
        }else{
            return false;
        }
    }
}


//funcao para validar email
function validaEmail($email=''){
  
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
  }else{
      return false;  
  }

}

//funcao para registrar erros na tabela de logs
/*
 * nível das mensagens
 * 0 = msg do sistema
 * 1 = erro
 * 2 = erro grave
 * 3 = erro fatal
 * */
function errorLog($referencia='Não informada',$mensagem='Não informada',$arquivo='N/D',$nivel=0,$empresa=0){
  
  $sql  = new Sql();
  $reg  = $sql->query('INSERT INTO tb_log 
  (id_empresa,log_nivel,datahora,referencia,mensagem,aquivo) 
  VALUES 
  (:id_empresa,:log_nivel,:datahora,:referencia,:mensagem,:arquivo)',
  array(
  ':id_empresa'=>0,
  ':log_nivel'=>$nivel,
  ':datahora'=>date('Y-m-d H:i:s'),
  ':referencia'=>$referencia,
  ':mensagem'=>$mensagem,
  ':arquivo'=>$arquivo));

}

//funcao para anotar no log de atividades
function logsys($str){
  $fp = fopen('sys.log.txt', 'a');
  fwrite($fp, date('d/m/y - H:i:s').' - '.$str."\n");
  fclose($fp);
}


/*
 * funcao para enviar mensagem de email para o usuário com base no template e argumentos
 * */
//function sndMail($to,$from,$replyTo,$subject,$message){
/*
$args['to']       = 'email@destino.com.br';
$args['subject']  = 'Bem vindo';
$args['from']     = 'website.demonstracao@gmail.com';
$args['template'] = 'views/mails/mail.php';
$args['message']  = 'Ola {%usuario%} Seu Cadastro Foi Concluido com Sucesso';
$args['mailvars'] = array('nomeUsuario'=>'fulano de tal','emailUsuario'=>'ze@ze.com.br');


sndMail($args);
*/


function mailPrepare($args=array()){
  
  $msgemail = '';
  $template = arrayVar($args,'template');
  
  //se template for informado deve ser feito o parse da mensagem para email html
  if($template!=''){
    if(file_exists($template)){
      $mailbody = implode('', file($template));
    }else{
      $mailbody = '<h3>template não configurado</h3>';
    }
    $message    = $mailbody;
  }else{//caso contrario é um mensagem com formatacao direta
    $message    = arrayVar($args,'message');
  }

  $mailvars = arrayVar($args,'mailvars');
  
  
  //caso existam variaveis para o texto do email substitui pelos valores
  if(is_array($mailvars) && count($mailvars)>0 && $message!=''){
    $msgemail = $message;
    foreach ($mailvars as $key => $value) {
      $msgemail = str_replace('{%'.$key.'%}',$value,$msgemail);
    }
    $msgemail = str_replace('{%URLAPP%}',URLAPP,$msgemail);
    $msgemail = str_replace('{%mailSuporte%}',MAILSUPORTE,$msgemail);
    
  }else{//caso contrario deve ser uma mensagem de texto puro
    $msgemail = $message;
  }  
  $args['message'] = $msgemail;
  return $args;
}





function sndMail($args=array()){
  

  //prepara a mensagem de email
  $argsMail = mailPrepare($args);

  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

  // Additional headers
  $headers .= 'To: ' . arrayVar($argsMail,'to') . "\r\n";
  $headers .= 'From: ' . arrayVar($argsMail,'from') . "\r\n";
  $headers .= 'Reply-To: ' . arrayVar($argsMail,'replyto') . "\r\n";
  $headers .= 'X-Mailer: PHP/ ' . phpversion();
  //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
  //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

  $to       = arrayVar($argsMail,'to');
  $subject  = arrayVar($argsMail,'subject');
  $message  = arrayVar($argsMail,'message');

  //se destinatario, assunto e mensagem estiverem definidos procede com o envio
  if($to!='' && $subject!='' && $message!=''){

    if(!mail($to, $subject, $message, $headers)){
      return false;
    }else{
      return true;
    }

  //caso contrario aborta e retorna false
  }else{
    return false;
  }

}

?>
