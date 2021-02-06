<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="res/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="res/assets/images/favicon.png" type="image/x-icon">
    <title>{$titleApp}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="res/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/style.css">
    <link id="color" rel="stylesheet" href="res/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="res/assets/css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="login-card">
            <div>
              <div><a class="logo" href="{$urlApp}"><img class="img-fluid for-light" src="res/assets/images/logo/logo-login.png" alt="looginpage"><img class="img-fluid for-dark" src="res/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main">
                <form class="theme-form" method="POST" action="{$urlFormCadastro}">
                  <h4>Criar Conta</h4>
                  <p>Informe seu dados para criar sua conta</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Seu Nome</label>
                    <div class="form-row">
                      <div class="col-6">
                        <input class="form-control" type="text" required="" placeholder="Nome">
                      </div>
                      <div class="col-6">
                        <input class="form-control" type="text" required="" placeholder="Sobrenome">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Telefone</label>
                    <input class="form-control" type="text" required="" placeholder="(99) 99999-9999">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Endereço de e-mail</label>
                    <input class="form-control" type="email" required="" placeholder="seu@email.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Senha</label>
                    <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Concordo: <a class="ml-2" href="{$urlPoliticas}" target="_politicas">Política de Privacidade</a></label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" disabled="true">Criar conta</button>
                  </div>
                  <h6 class="text-muted mt-4 or">Ou acesse com</h6>
                  <div class="social mt-4">
                  </div>
                  <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="{$urlFormLogin}">Acessar</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="res/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="res/assets/js/bootstrap/popper.min.js"></script>
      <script src="res/assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="res/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="res/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="res/assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="res/assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>
