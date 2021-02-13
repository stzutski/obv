<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  <span>
                  Empresas são unidades de negócio podem ter um administrador e múltiplos funcionários.<br />
                  Cada empresa deve ter o seu núcleo próprio de contas a receber e atendimento ao cliente.
                  Somente os Administradores podem cadastrar <code>"FUNCIONÁRIOS DA EMPRESA"</code>.
                  </span>
                  <h6 class="font-primary"><small>* Para alterar um cadastro clique sobre o nome da empresa.</small></h6>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">

             <div class="col-sm-12">


            <!-- start card -->
            <div class="card">            


                <!-- start view content  -->

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="display" id="basic-8">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Telefone</th>
                          <th>Website</th>
                          <th>Admin</th>
                          <th>Desde</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if(!arrayVar($listaEmpresas)){
                          echo '<tr><td colspan="6"><center>NENHUM REGISTRO ENCONTRADO!<center><td></tr>';
                          }
                          else
                          {// code...}

                            for ($i=0; $i < count($listaEmpresas); $i++)
                            {
                              $administradores = '';
                              $dadosEmpresa = $listaEmpresas[$i];
                              $_dtADMa      = $dadosEmpresa['admins'];
                              $_dtADM       = $_dtADMa[0];
                              if(is_array($_dtADM) && count($_dtADM)>0)
                              {
                                $_liAdmin     = "<ul style=\"margin:0px\"><li><a href=\"modulo/admins/opt/cadastro/uid/$_dtADM[id_usuario]\">$_dtADM[nome_usuario]</a></li></ul>";  
                              }else{
                                $_liAdmin     = 'N/D';
                              }

                        ?>
                            <tr>
                            <td><a href="modulo/empresas/opt/cadastro/uid/<?php echo arrayVar($dadosEmpresa,'id_empresa'); ?>"><?php echo arrayVar($dadosEmpresa,'fantasia_empresa'); ?></a></td>
                            <td><?php echo arrayVar($dadosEmpresa,'email_empresa'); ?></td>
                            <td><?php echo arrayVar($dadosEmpresa,'telco_empresa'); ?></td>
                            <td><a href="obavisto.com.br"><?php echo arrayVar($dadosEmpresa,'website_empresa'); ?></a></td>
                            <td style="padding:0px;"><?php echo $_liAdmin;?></td>
                            <td>06/02/2021</td>
                            </tr>

                        <?php
                            }
                          }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Telefone</th>
                          <th>Empresa</th>
                          <th>Desde</th>
                          <th>Ult.Login</th>
                        </tr>
                      </tfoot>
                    </table>
                </div>
                </div>
                
                </div><!--endCard-->


                <!-- end view content  -->



            </div>



            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
