<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  <span>
                    Gateways de Pagamento os sistemas responsáveis pelo receber pagamentos online em cartão, transferência ou
                    boleto.
                    <b>NOTA:</b> Não é possível adicionar novos gateways de pagamento através deste painel de administração, entretanto é
                    possível alterar as configurações já existentes.<br />
                  </span>
                  <h6 class="font-primary"><small>* Para alterar / visualizar um cadastro clique sobre o nome do Gateway.</small></h6>

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

                <!-- start view content  -->

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="display" id="basic-8">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Descrição</th>
                          <th>Plano</th>
                          <th>Valor</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if(!arrayVar($listaServicos)){
                          echo '<tr><td colspan="6"><center>NENHUM REGISTRO ENCONTRADO!<center><td></tr>';
                          }
                          else
                          {// code...}

                            for ($i=0; $i < count($listaServicos); $i++)
                            {
                              $dadosDoServico = $listaServicos[$i];
                        ?>

                            <tr>
                              <td><a href="modulo/servicos/opt/cadastro/uid/<?php echo arrayVar($dadosDoServico,'id_servico'); ?>"><?php echo arrayVar($dadosDoServico,'nome_servico'); ?></a></td>
                              <td><?php echo arrayVar($dadosDoServico,'nome_servico'); ?></td>
                              <td><?php echo arrayVar($dadosDoServico,'nomeplano_servico'); ?></td>
                              <td><?php echo arrayVar($dadosDoServico,'valor_servico'); ?></td>
                              <td><?php echo arrayVar($dadosDoServico,'status_servico'); ?></td>
                            </tr>

                        <?php
                            }
                          }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Nome</th>
                          <th>Descrição</th>
                          <th>Plano</th>
                          <th>Valor</th>
                          <th>Status</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                
                </div><!--endRow-->


                <!-- end view content  -->



            </div>



            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
