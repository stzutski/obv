<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  <span>
                    Administradores de empresa, são usuário com privilégios de gestão de clientes, empresa e os serviços oferecidos.  
                    Eles também podem criar sub administradores apenas com permissão de trabalho <code>"EX: FUNCIONÁRIOS DA EMPRESA"</code>.
                  </span>
                  <h6 class="font-danger"><small>* Para alterar um cadastro clique sobre o nome do administrador.</small></h6>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">

          <!-- start card -->
          <div class="card">            


            <div class="row starter-main">
            
             
             <div class="col-sm-12">
               
                             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="display" id="basic-8">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Empresa</th>
                        <th>Desde</th>
                        <th>Ult.Login</th>
                      </tr>
                    </thead>
<tbody>
                        <?php
                          if(!arrayVar($listaAdmins)){
                            echo '<tr><td colspan="6"><center>NENHUM REGISTRO ENCONTRADO!<center><td></tr>';
                          }
                          else
                          {

                            for ($i=0; $i < count($listaAdmins); $i++)
                            {
                              $administradores = '';
                              $dadosAdmin   = $listaAdmins[$i];
                              $_dtADMa      = $dadosAdmin['admins'];
                              $_dtADM       = $_dtADMa[0];
                              if(is_array($_dtADM) && count($_dtADM)>0)
                              {
                                $_liAdmin     = "<ul style=\"margin:0px\"><li><a href=\"modulo/empresas/opt/cadastro/uid/$_dtADM[id_empresa]\">$_dtADM[desc_empresa]</a></li></ul>";  
                              }else{
                                $_liAdmin     = 'N/D';
                              }

                        ?>

                      <tr>
                        <td><a href="modulo/admins/opt/cadastro/uid/<?php echo arrayVar($dadosAdmin,'id_usuario'); ?>"><?php echo arrayVar($dadosAdmin,'nome_usuario'); ?></a></td>
                        <td><?php echo arrayVar($dadosAdmin,'email_usuario'); ?></td>
                        <td><?php echo arrayVar($dadosAdmin,'telefone_usuario'); ?></td>
                        <td><?php echo $_liAdmin;?></td>
                        <td><?php echo arrayVar($dadosAdmin,'dt_usuario'); ?></td>
                        <td><?php echo arrayVar($dadosAdmin,'lst_login_usuario'); ?></td>
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
              
              
              </div> <!--endcard-->



            </div>
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
