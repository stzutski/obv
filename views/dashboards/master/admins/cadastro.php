<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  <span>
                  Administradores de empresa, são usuário com privilégios de gestão de clientes, empresa e os serviços
                  oferecidos.Eles também podem criar sub administradores apenas com permissão de trabalho 
                  <code>"EX: FUNCIONÁRIOS DA EMPRESA"</code>.
                  </span>
                  <h6 class="font-danger"><small>
                    * Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou 
                  <button type="button" class="btn btn-danger btn-xs">Clique aqui para excluir</button>
                  </small>
                  </h6>
                  <small>Campos com * são obrigatórios</small>
                  </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
             
             <div class="col-sm-12">
                  <?php //if(isArray($_erroForm) && count($_erroForm)>0){ echo boxPostErrors(); }?>
                  <?php if(is_array($_erroForm)){ echo boxPostErrors($_erroForm); } ?>
                  <?php
                  //retorna dados do cadastro com base no ID


                   ?>               
    <!-- start card -->
    <div class="card">

      <div class="card-body">



          <form class="form-horizontal needs-validation" novalidate="" id="frm-admins" name="frm-admins" method="post" action="<?php echo getLocation('urlPost');?>">
          <input type="hidden" id="do" name="do" value="admins" />
          <input type="hidden" id="opt" name="opt" value="save" />
          <input type="hidden" id="uid_admin" name="uid_admin" value="<?php echo getVar('uid');?>" />
                    
            <fieldset>

              <!-- Form Name -->
              <h6 class="m-t-10">Cadastro de Administradores</h6>
              <hr>


              <!-- Text field-->
              <div class="form-group row">

                  <div class="col-lg-6">
                  <label class="control-label text-lg-left" for="textinput">Nome *</label>
                  <input id="nome_usuario" name="nome_usuario" type="text" placeholder="Nome admin" 
                  class="form-control btn-square input-md"  required="" value="<?php echo arrayVar($_formData,'nome_usuario');?>">
                  </div>

                  <div class="col-lg-6">
                  <label class="control-label text-lg-left" for="textinput">Sobrenome *</label>
                  <input id="sobrenome_usuario" name="sobrenome_usuario" type="text" placeholder="Sobrenome" 
                  class="form-control btn-square input-md"  required="" value="<?php echo arrayVar($_formData,'sobrenome_usuario');?>">
                  </div>
                
              </div>



              <!-- Text field-->
              <div class="form-group row">

                  <div class="col-lg-6">
                  <label class="control-label text-lg-left" for="textinput">Email *</label>
                  <input id="email_usuario" name="email_usuario" type="text" placeholder="email@doadmin.com.br" 
                  class="form-control btn-square input-md"  required="" value="<?php echo arrayVar($_formData,'email_usuario');?>">
                  </div>


                  <div class="col-lg-6">
                  <label class="control-label text-lg-left" for="textinput">Telefone</label>
                  <input id="telefone_usuario" name="telefone_usuario" type="text" placeholder="+55 XX XXXXXXXXX" 
                  class="form-control btn-square input-md"  value="<?php echo arrayVar($_formData,'telefone_usuario');?>">
                  </div>
                
              </div>


              <?php 
              if(getVar('uid')!=''){
                  $_classBoxPwd   = ' itemNoDisplay';
                  $_classBoxPwdHd = '';
                  $_required      = '';
              }else{
                  $_classBoxPwd   = '';
                  $_classBoxPwdHd = ' itemNoDisplay';
                  $_required      = ' required=""';
              }
              ?>

              <!-- Select Basic -->
              <div class="form-group row">
                  
                  <div class="col-lg-12 chk-hd-pwd <?php echo $_classBoxPwdHd;?>">
                  <label class="control-label text-lg-left" for="sw-hd-pwd"><b>Atualizar Senha?</b></label>
                  <input id="sw-hd-pwd" name="sw-hd-pwd" type="checkbox" value="1">
                  </div>                  
                  
                  
                  <div class="col-lg-6 hd-pwd <?php echo $_classBoxPwd;?>">
                  <label class="control-label text-lg-left" for="textinput">Senha do Admin * <span id="password_strength"></span></label>
                  <input autocomplete="off" id="pwd_usuario" name="pwd_usuario" type="password" 
                  class="form-control btn-square input-md pwdfield pwdf"<?php echo $_required;?> value="" onkeyup="CheckPasswordStrength(this.value)">
                  <small class="form-text text-muted" id="pwdHelp" style="color:red!important;">Mínimo 6 caracteres.</small>
                  </div>

                  <div class="col-lg-6 hd-pwd <?php echo $_classBoxPwd;?>">
                  <label class="control-label text-lg-left" for="textinput">Confirme a Senha * <span class="cnf-pwdfield-msg"></span></label>
                  <input autocomplete="off" id="conf_pwd_usuario" name="conf_pwd_usuario" type="password" 
                  class="form-control btn-square input-md cnf-pwdfield pwdf"<?php echo $_required;?> value="">
                  <small class="form-text text-muted" id="pwdHelp" style="color:red!important;">Digite novamente sua senha.</small>
                  </div>
                  
              </div>


              <!-- Text field-->
              <div class="form-group row">
                  <div class="col-lg-12">
                  <label class="control-label text-lg-left" for="textinput">Status *</label>
                  <?php $var_stats = arrayVar($_formData,'status_usuario');?>
                  <select id="status_usuario" name="status_usuario" 
                  class="form-control" required="">
                  <option value=""<?php echo selselr($var_stats,'')?>>selecione</option>
                  <option value="1"<?php echo selselr($var_stats,'1')?>>Ativo</option>
                  <option value="0"<?php echo selselr($var_stats,'0')?>>Inativo</option>
                  </select>
                  </div>
              </div>


              <div class="form-group row">
                <div class="col-lg-12">
                  <button type="submit" id="singlebutton" name="singlebutton" 
                  class="btn btn-primary">SALVAR DADOS</button>
                </div>
              </div>


            </fieldset>
          </form>




      </div>
      
      
      </div> <!--end card-->





            </div>
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
