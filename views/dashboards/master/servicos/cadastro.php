<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  
                  <span>
                  Os serviços aqui cadastrados irão estar disponíveis no painel de controle dos administradores da empresa
                  a ativação do serviço fica condicionada ao administrador da empresa. Só o<code>"USUÁRIO MASTER"</code> pode
                  configurar
                  os tipos de serviços que estarão disponíveis para as empresas.
                  </span>
                  <h6 class="font-primary"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button
                  type="button" class="btn btn-danger btn-xs">Clique aqui para INATIVAR este serviço</button></small></h6>                  
                  <small>Campos com * são obrigatórios</small>

                </div>

              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
             
             <div class="col-sm-12">
               
                         
                <!-- start view content  -->

                <div class="card-body">

                  <form class="form-horizontal">
                    <fieldset>

                      <!-- Form Name -->
                      <h6 class="m-t-10">Cadastro se Serviço</h6>
                      <hr>


                      <!-- Text input-->
                      <div class="form-group row">
                        <label class="col-lg-12 control-label text-lg-left" for="textinput">Nome do Serviço</label>
                        <div class="col-lg-12">
                          <input id="textinput" name="textinput" type="text" placeholder="Ex: Visto E-1"
                            class="form-control btn-square input-md">

                        </div>
                      </div>


                      <!-- Text input-->
                      <div class="form-group row">
                        <label class="col-lg-12 control-label text-lg-left" for="email">Breve Descrição do Serviço</label>
                        <div class="col-lg-12">
                          <input id="email" name="email" type="text" placeholder="Ex: Assessoria para emissão de visto E-1"
                            class="form-control btn-square input-md">

                        </div>
                      </div>


                      <!-- Text input-->
                      <div class="form-group row">
                        <label class="col-lg-12 control-label text-lg-left" for="textinput">Plano</label>
                        <div class="col-lg-12">
                          <input id="textinput" name="textinput" type="text" placeholder="ex: Individual"
                            class="form-control btn-square input-md">

                        </div>
                      </div>



                      <!-- Text input-->
                      <div class="form-group row">
                        <label class="col-lg-12 control-label text-lg-left" for="textinput">Valor</label>
                        <div class="col-lg-12">
                          <input id="textinput" name="textinput" type="text" placeholder="1500,00"
                            class="form-control btn-square input-md">

                        </div>
                      </div>


                      <!-- Select Basic -->
                      <div class="form-group row">
                        <label class="col-lg-12 control-label text-lg-left" for="selectbasic">Disponível</label>
                        <div class="col-lg-12">
                          <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                            <option value="">Selecione</option>
                            <option value="1">SIM</option>
                            <option value="2">NÃO</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <div class="col-lg-12">
                          <button id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                        </div>
                      </div>


                    </fieldset>
                  </form>

                  <br />
                  <br />
                  <br />
                  <br />

                  <h5>Etapas do Serviço</h5>
                  <h6 class="font-primary"><small>* Para cadastrar uma nova etapa para este serviço <a
                        href="servicos/cadastro/etapas/0"><b>clique aqui</b> <i data-feather="plus-square"></i>  </a></small></h6>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome Etapa</th>
                          <th scope="col">Descrição</th>
                          <th scope="col">Responsável</th>
                          <th scope="col">Pré Requisito</th>
                          <th scope="col">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Baixar E-book manual</td>
                          <td>Manual do cliente</td>
                          <td>CLIENTE</td>
                          <td>NÃO</td>
                          <td><a href="servicos/cadastro/etapas/1"><i data-feather="edit"></i> </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Contratar Serviço</td>
                          <td>Compra online no site</td>
                          <td>CLIENTE</td>
                          <td>NÃO</td>
                          <td><a href="servicos/cadastro/etapas/2"><i data-feather="edit"></i> </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Confirmação do Pgto.</td>
                          <td>Confirmação do Gateway de Pgto.</td>
                          <td>SISTEMA</td>
                          <td>SIM ETAPA(2)</td>
                          <td><a href="servicos/cadastro/etapas/3"><i data-feather="edit"></i> </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Envio de Docs.</td>
                          <td>Upload do docs.</td>
                          <td>CLIENTE</td>
                          <td>SIM ETAPA(3)</td>
                          <td><a href="servicos/cadastro/etapas/4"><i data-feather="edit"></i> </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Conferência dos docs.</td>
                          <td>Confirmação dos dados</td>
                          <td>EQUIPE</td>
                          <td>SIM ETAPA(4)</td>
                          <td><a href="servicos/cadastro/etapas/5"><i data-feather="edit"></i> </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>






                </div>


                <!-- end view content  -->



            </div>
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
