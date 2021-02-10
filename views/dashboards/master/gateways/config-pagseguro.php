<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER</h3>
                  <span>
                  IMPORTANTE A CONFIGURAÇÃO DEVE SER FEITA DE ACORDO COM OS PARÂMETROS INFORMADOS PELO GATEWAY 
                  QUALQUER PODE INTERROMPER AS ROTINAS DE RECEBIMENTO DE VALORES <code>"CONSULTE SEU DESENVOLVEDOR"</code>.
                  </span>
                  <h6 class="font-primary"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button
                  type="button" class="btn btn-primary btn-xs">Clique aqui para INATIVAR O GATEWAY</button></small></h6>
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
          <h6 class="m-t-10">CONFIGURAÇÕES DO GATEWAY: <?php echo getVar('api');?></h6>
          <hr>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">E-mails cadastrado na plataforma</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="E-mails cadastrado na plataforma"
                class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="email">API-KEY</label>
            <div class="col-lg-12">
              <input id="email" name="email" type="text" placeholder="API-KEY" class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">API-PASSWORD</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="API-PASSWORD"
                class="form-control btn-square input-md">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="textinput">URL de Retorno</label>
            <div class="col-lg-12">
              <input id="textinput" name="textinput" type="text" placeholder="https://url-de-retorno"
                class="form-control btn-square input-md">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group row">
            <label class="col-lg-12 control-label text-lg-left" for="selectbasic">MODO</label>
            <div class="col-lg-12">
              <select id="selectbasic" name="selectbasic" class="form-control btn-square">
                <option value="">Selecione</option>
                <option value="1">PRODUCÃO</option>
                <option value="2">SANDBOX</option>
                <option value="3">PRODUÇÃO</option>
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

    </div>



      <!-- end view content  -->



</div>
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
