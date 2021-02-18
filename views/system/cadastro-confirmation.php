<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ObaVisto Descricao">
    <meta name="keywords" content="ObaVisto Palavras Chave">
    <meta name="author" content="obavisto">
    <base href="<?php echo URLAPP;?>">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Confirme Seu Cadastro - <?php echo TITLEAPP;?></title>
    <!-- Google font-->
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
    <!-- Plugins css start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css-register.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="login-card">
            <div>
              <div><a class="logo" href="<?php echo URLAPP;?>"><img style="max-width:200px;height:auto;" class="img-fluid for-light" src="assets/images/logo/logo-login.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main">
                
                                  
                                  
                  <div class="stepwizard">
                      <div class="stepwizard-row setup-panel">
                          <div class="stepwizard-step">
                              <a href="<?php echo URLAPP;?>user/new/#" type="button" class="btn btn-primary btn-circle step-1">1</a>
                              <p>Passo 1</p>
                          </div>
                          <div class="stepwizard-step">
                              <a href="<?php echo URLAPP;?>user/new/#" type="button" class="btn btn-primary btn-circle step-2" disabled="disabled">2</a>
                              <p>Passo 2</p>
                          </div>
                          <div class="stepwizard-step">
                              <a href="<?php echo URLAPP;?>user/new/#" type="button" class="btn btn-primary btn-circle step-3" disabled="disabled">3</a>
                              <p>Passo 3</p>
                          </div>
                      </div>
                  </div>                

                  <div id="step-confirmation" class="form-card emlConfirmation">
                    
                      <?php if($_statusCad==false && isSet($_errMessage) && $_errMessage!=''){?>
                        
                      <center>
                      <h4>Ops!</h4>
                      <br />
                      <h6><?php echo $_errMessage;?></h6>
                      <?php echo md5('ZjkxNDliMjU3MTY4ZWI4NDU2MzY0OWVjNmM5ZjljZWY9PT0=');?>
                      </center>
                        
                        
                      <?php }?>
                    
                    
                      <?php if($_statusCad==false && !isSet($_errMessage)){?>
                      <center>
                      <h4>Dados enviados com sucesso!</h4>
                      <br />
                      <p style="font-size:10pt;">Dentro de instantes enviaremos uma mensagem de confirmação para o seu endereço de email.
                      <br />
                      <br />
                      Clique no link contido na mensagem para confirmar o seu cadastro.
                      <br />
                      <br />
                      <i class="fa fa-square-o" style="font-size:60pt;color:#ff8d1a;"></i>
                      <br />
                      <br />
                      <b>Não recebeu a mensagem?</b> Confira a pasta Spam as vezes ela aparece por lá! Ou <a href="<?php echo URLAPP . 'user/activation/code/'.getVar('code').''; ?>">clique aqui</a> para solicitar uma novo envio.
                      <?php if(isSet($_errMessage)&&$_errMessage!=''){echo "<br /><br /><h6>$_errMessage</h6>";}?>
                      </p>
                      </center>
                      <?php }?>
                      
                      
                      
                      <?php if($_statusCad==true){?>
                        
                      <center>
                      <h4>Cadastro Confirmado!</h4>
                      <br />
                      <p style="font-size:10pt;">Seu cadastro encontra-se ativo.
                      <br />
                      <br />
                      <a href="<?php echo URLAPP;?>">Clique aqui</a> para fazer o login.
                      <br />
                      <br />
                      <br />
                      <br />
                      <i class="fa fa-check-square-o" style="font-size:60pt;color:#0866E2;"></i>
                      <br />
                      <br />
                      <b>Esqueceu a senha?</b><br /><a href="<?php echo URLAPP . 'user/activation/code/'.getVar('code').''; ?>">Clique aqui</a> para recuperar sua senha.
                      <?php if(isSet($_errMessage)&&$_errMessage!=''){echo "<br /><br /><h4>$_errMessage</h4>";}?>
                      </p>
                      </center>
                        
                        
                      <?php }?>
                  </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>var appPath='<?php echo URLAPP;?>';</script>
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
      <script src="assets/js/masks.js"></script>
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <script src="assets/js/sigup.scripts.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>
