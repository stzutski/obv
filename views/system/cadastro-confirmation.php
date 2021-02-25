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
    <title><?php echo TITLEAPP;?> - Confirmação do Cadastro</title>
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
  <div id="loading">
  <img id="loading-image" src="assets/images/Preloader_12.gif" alt="Loading..." />
  </div>     
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
                              <a type="button" style="color:#fff;" class="btn btn-primary btn-circle step-1">1</a>
                              <p>Passo 1</p>
                          </div>
                          <div class="stepwizard-step">
                              <a type="button" style="color:#fff;" class="btn btn-primary btn-circle step-2" disabled="disabled">2</a>
                              <p>Passo 2</p>
                          </div>
                          <div class="stepwizard-step">
                              <a type="button" style="color:#fff;" class="btn btn-primary btn-circle step-3" disabled="disabled">3</a>
                              <p>Passo 3</p>
                          </div>
                      </div>
                  </div>                

                  <div id="step-confirmation" class="form-card emlConfirmation">
                    

                      <?php if(isSet($_statusCad) && $_statusCad=='0'){?>
                      <center>
                      <h4>Ops, algo deu errado!</h4>
                      <br />
                      <p style="font-size:10pt;">Não foi possível ativar o seu cadastro.
                      <br />
                      Certifique-se de ter informado corretamente a URL do link de ativação contido no email.
                      <br />
                      <br />
                      <i class="fa fa-square-o" style="font-size:60pt;color:#ff8d1a;"></i>
                      <br />
                      <br />
                      <span class="note2Hidden">Informe o endereço de email utilizado em seu cadastro e clique em SOLICITAR NOVO LINK.</span>
                      </p>
                      <p id="box_notifyRsnd" style="">
                      Se o email informado corresponder a um cadastro válido em nossa plataforma, enviaremos uma mensagem com o link de ativação!
                      </p>                      
                      <form class="theme-form" id="recAct" method="post">
                        <div class="form-group">
                          <input style="text-align:center;" class="form-control b-alert" id="umail" type="text" name="umail" placeholder="seu@email.com" required="">
                        </div>
                        <div class="form-row">
                          <div class="col-12">
                            <button class="btn btn-primary btn-block" id="btreclnk" type="button">SOLICITAR NOVO LINK</button>
                          </div>
                        </div>                        
                      </form>                      
                      <p>
                      <br />
                      Caso o erro persista envie uma mensagem para nosso suporte: <?php echo MAILSUPORTE;?>
                      </p>

                      
                      
                      </center>
                      <?php }?>
                      
                    
                      <?php if(isSet($_statusCad) && $_statusCad=='1'){?>
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
                      Caso não veja o e-mail na sua caixa de entrada, confira se não está na caixa de spam ou promoções. <a href="<?php echo URLAPP . 'user/confirm/code/'.getVar('code').'/rsnd/mail'; ?>">clique aqui</a> para solicitar uma novo envio.
                      </p>
                      </center>
                      <?php }?>
                      
                      
                      
                      <?php if(isSet($_statusCad) && $_statusCad=='2'){?>
                        
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
                      <b>Esqueceu a senha?</b><br /><a href="<?php echo URLAPP . 'user/new-pwd'; ?>">Clique aqui</a> para recuperar sua senha.
                      </p>
                      </center>
                      
                      
                        
                      <?php }?>
                      <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="<?php echo URLAPP . 'user/login'?>">Acessar</a></p>
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
<?php 
if(isSet($_statusCad)){
  logsys("Status $ _statusCad($_statusCad) FOOTER ");
}
?>
