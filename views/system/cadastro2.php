<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <base href="<?php echo URLAPP;?>">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Cadastro <?php echo TITLEAPP;?></title>
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
                              <a href="<?php echo URLAPP;?>user/new/#" type="button" class="btn btn-default btn-circle step-2" disabled="disabled">2</a>
                              <p>Passo 2</p>
                          </div>
                          <div class="stepwizard-step">
                              <a href="<?php echo URLAPP;?>user/new/#" type="button" class="btn btn-default btn-circle step-3" disabled="disabled">3</a>
                              <p>Passo 3</p>
                          </div>
                      </div>
                  </div>                
                
                
                
                
             
                <form class="theme-form hideThis" id="userRegistration" method="POST" action="<?php echo URLAPP . 'user/registration/new/user'?>">
                  <div id="step-1" class="form-card">
                      <h4>Seus dados</h4>
                      <p>Informe seu dados para criar sua conta</p>
                      <div class="form-group">
                        <label class="col-form-label pt-0">Seu Nome</label>
                        <div class="form-row">
                          <div class="col-6">
                            <input onfocus="validaCard(1)" class="form-control b-alert" type="text" id="userNome" name="register[nome_usuario]" required="" placeholder="Nome">
                          </div>
                          <div class="col-6">
                            <input onfocus="validaCard(1)" class="form-control b-alert" type="text" id="userSobrenome" name="register[sobrenome_usuario]" required="" placeholder="Sobrenome">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">CPF</label>
                        <input onfocus="validaCard(1)" <?php echo jsMask('cpf',14);?>  class="form-control b-alert" id="userCpf" type="text" name="register[cpf]" required="">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Dt. Nascimento</label>
                        <input onfocus="validaCard(1)"name="register[nascimento]" class="datepicker-here form-control b-alert" id="userNasc" type="text" data-language="br" data-multiple-dates-separator=", " data-position="top left" placeholder="00/00/0000" onKeyDown="Mascara(this,Data);" onKeyPress="Mascara(this,Data);" onKeyUp="Mascara(this,Data);">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Endereço de e-mail</label>
                        <input onfocus="validaCard(1)" class="form-control b-alert" id="userEmail" type="email" name="register[email_usuario]" required="">
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-12">
                            <button onMouseOver="validaCard(1)" class="btn btn-primary btn-block bt-next" id="btNext1" data-from="step-1" data-go="step-2" disabled="" type="button">AVANÇAR</button>
                          </div>
                        </div>
                      </div>  

                      
                      <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="<?php echo URLAPP . 'user/login'?>">Acessar</a></p>
                  </div>
                
                
                  <div id="step-2" class="form-card" style="display:none">
                    <input type="hidden" id="userLocal" value="" />
                      <h4>Localização e Senha</h4>
                      <p>Informe seu dados para criar sua conta</p>
                      <div class="form-group">
                        <label class="col-form-label pt-0">Estado / Cidade</label>
                        <div class="form-row">
                          <div class="col-6">
                            <?php $var_uf='';?>
                            <select onchange="validaCard(2)" id="ufCli" name="register[uf]" class="form-control b-alert">
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </select>                            
                          </div>
                          <div class="col-6">
                            <select onchange="validaCard(2)" id="cidadeCli" name="register[cidade]" class="form-control b-alert">
                            <option value="">Selecione o Estado</option>
                            </select> 
                             
                          </div>                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Como nos conheceu?</label>
                            <select onchange="validaCard(2)" id="userFrom" name="register[referencia]" class="form-control b-alert">
                            <option value="">Selecione</option>
                            <option value="google">Google</option>
                            <option value="indicacao">Indicação de Amigo</option>
                            <option value="agencia">Agência de viagem</option>
                            <option value="revista">Matéria em revista</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="mailing">Mailing</option>
                            <option value="outros">Outros</option>
                            </select>                          
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Senha <small>(Min 6, máx 15 caracteres) <span id="password_strength"></span></small> </label>
                        <input onblur="validaCard(2)" maxlength="15" class="form-control b-alert" type="password" id="clipwd" name="register[password]" required="" onkeyup="CheckPasswordStrength(this.value)">
                        <div class="show-hide"><span class="show"></span></div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Confirme a senha <small><span class="cnf-pwdfield-msg"></span></small></label>
                        <input onblur="validaCard(2)" maxlength="15" class="form-control b-alert" type="password" id="clipwdcnf" name="register[passwordcnf]" required="">
                        <div class="show-hide"><span class="show"></span></div>
                      </div>
                      
                      
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-6">
                            <button class="btn btn-primary btn-block bt-next" data-from="step-2" data-go="step-1" type="button">RETORNAR</button>
                          </div>
                          <div class="col-6">
                            <button onMouseOver="validaCard(2)" class="btn btn-primary btn-block bt-next" id="btNext2" disabled="" data-from="step-2" data-go="step-3" type="button">AVANÇAR</button>
                          </div>
                        </div>
                      </div>                      
                      
                      <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="<?php echo URLAPP . 'user/login'?>">Acessar</a></p>
                  </div>
                
                
                  <div id="step-3" class="form-card" style="display:none">
                      <h4>Confira seus Dados</h4>
                      <p>Informe seu dados para criar sua conta
                      <br />
                      <small id="notificaErros" style="color:red;display:none;">Oops! Volte e corrija as informações em destaque</small></p>
                      
                      <div class="form-group mb-0">
                      <p><b>Nome Completo:</b> <span id="rv_nome"></span><br/ >
                      <b>CPF:</b> <span id="rv_cpf"></span><br/ >
                      <b>Nascimento:</b> <span id="rv_nasc"></span><br/ >
                      <b>E-mail:</b> <span id="rv_email">valor</span><br/ >
                      <b>Localização:</b> <span id="rv_local"></span><br/ >
                      <b>Como nos conheçeu:</b> <span id="rv_ref"></span><br/ >
                      <b>Senha:</b> <span id="rv_pwd"></span><br/ >
                      </div>
                      
                      <div class="form-group mb-0">
                        <div class="checkbox p-0">
                          <p>Concorde com os termos para prosseguir.</p>
                          <input id="checkbox1" name="aceitaTermos" value="SIM" type="checkbox">
                          <label class="text-muted" name="register[termos]" for="checkbox1">Concordo: <a class="ml-2" href="<?php echo URLAPP . 'politicas.pdf'?>" target="_politicas">Política de Privacidade</a></label>
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-6">
                            <button class="btn btn-primary btn-block bt-next" data-from="step-3" data-go="step-2" type="button">RETORNAR</button>
                          </div>
                          <div class="col-6">
                            <button class="btn btn-primary btn-block" id="btSubmit" data-from="step-1" data-go="step-2" disabled="" type="button">FINALIZAR</button>
                          </div>
                        </div>
                      </div>                      
                      
                      <p class="mt-4 mb-0">Já cadastrado?<a class="ml-2" href="<?php echo URLAPP . 'user/login'?>">Acessar</a></p>
                  </div>
                
                <input type="hidden" id="cherr" />                
                <input type="hidden" id="rv_ckmail" />                
                </form>
              
              
              
              
              
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
      <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
      <script src="assets/js/datepicker/date-picker/datepicker.br.js"></script>
      <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
      <script src="assets/js/masks.js"></script>
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <script src="assets/js/sigup.scripts.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
    </div>
  </body>
</html>
