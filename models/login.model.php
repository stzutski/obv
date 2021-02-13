<?php 

use \php\classes\DB\Sql;

$res = postVar('login');

$user_login   = strtolower(trim(addslashes($res['userlogin'])));
$user_passwd  = mkpwd(trim(addslashes($res['password'])));


//instancia sql
$_loginAuth = new Sql();
$res = $_loginAuth->select('SELECT * FROM usuarios 
                            WHERE email_usuario = :email_usuario 
                            AND pwd_usuario = :pwd_usuario
                            AND status_usuario = :status_usuario', array(
                            ':email_usuario'=>$user_login,
                            ':pwd_usuario'=>$user_passwd,
                            ':status_usuario'=>1));
                            
if(count($res)>0){
  $_userData = $res[0];
  $_SESSION['usersys']  = $_userData['email_usuario'];
  $_SESSION['userid']   = $_userData['id_usuario'];
  $_SESSION['_ulevel']  = $_userData['permissao_usuario'];

  header('location:' . URLAPP);
  exit;

}else{
  
  header('location:' . URLAPP . 'user/login/result/error');
}
?>
