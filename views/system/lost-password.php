<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <base href="<?php echo URLAPP;?> - Recuperar Senha de Acesso">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Login <?php echo TITLEAPP;?> - <?php echo mkpwd(32125);?></title>
    <!-- Google font-->
    <style>
      #loading {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: fixed;
        display: block;
        opacity: 0.8;
        background-color: #fff;
        z-index: 99;
        text-align: center;
      }

      #loading-image {
        position: absolute;
        top: 50%;
        z-index: 100;
      }
    </style>    
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/global-css.css?v=<?php echo mt_rand();?>">
  </head>
  <body>
<div id="loading">
<img id="loading-image" src="assets/images/Preloader_12.gif" alt="Loading..." />
</div>    
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="login-card">
            <div>
              <div><a class="logo" href="<?php echo URLAPP;?>"><img class="img-fluid for-light" style="max-width:160px;height:auto;" src="assets/images/logo/logo-login.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main">

                <?php 
                //$linkRecovery='';
                if(isSet($hash) && $hash!=''){?>
                  
                  <center>
                  <h4>Confira sua caixa de entrada</h4>
                  <p>
                  Em breve enviaremos para <span class="cblue">adasd@asdasda.com.br</span> as informações de recuperação da senha de acesso.
                  <br />
                  <br />
                  <b>Ainda não recebeu?</b> 
                  <br />
                  Não esqueça de conferir a pasta SPAM ou Lixo Eletrônico as vezes aparece por lá ;)
                  <br />
                  <br />
                  <span id="tmPwdRec"></span>
                  <br />
                  </p>
                  <p>
                  Dificuldade no acesso? Envie sua mensagem para:<br /><?php echo MAILSUPORTE;?>
                  </p></center>
                  <form>
                  <input type="hidden" id="cdhsh" value="<?php echo $hash;?>" />
                  </form>

                
                <?php }else{ ?>
                
                
                <form class="theme-form" method="POST" action="<?php echo URLAPP . 'user/new-pwd'?>">
                  <h4>Recuperar Senha de Acesso</h4>
                  <?php if(getVar('result')=='error'){echo '<p style="color:red;">DADOS NÃO CONFEREM</p>';}?>
                  <p>Para iniciar o processo de recuperação de sua senha, informe o endereço de email utilizado em seu cadastro e clique em Recuperar Senha</p>
                  <div class="form-group">
                    <label class="col-form-label">Endereço de e-mail</label>
                    <input class="form-control" type="text" required="" name="lstpwd" value="<?php echo postVar('lstpwd');?>">
                  </div>

                  <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Recuperar Senha</button>
                  </div>

                  <?php 
                  //exibe mensagens
                  if($errMsg!=''){echo '<br /><center>'.$errMsg.'</center>';}
                  ?>

                  <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="<?php echo URLAPP . 'user/login'?>">Acessar</a></p>
                  
                </form>
                
                <?php }?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>apth='<?php echo URLAPP;?>';</script>
      <!-- latest jquery-->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap/popper.min.js"></script>
      <script src="assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <script src="assets/js/recovery.scripts.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>
