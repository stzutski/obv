<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-lg-12">
                  <h3>USUÁRIO MASTER <?php if(isSet($var_teste333)){echo $var_teste333;}?></h3>
                  <span>
                  Empresas são unidades de negócio podem ter um administrador e múltiplos funcionários.<br />
                  Cada empresa deve ter o seu núcleo próprio de contas a receber e atendimento ao cliente.
                  Somente os Administradores podem cadastrar <code>"FUNCIONÁRIOS DA EMPRESA"</code>.
                  </span>
                  <h6 class="font-primary"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button
                  type="button" class="btn btn-danger btn-xs clickfy"
                  data-ntDialog="confirm" data-ntMsg="<h5>Deseja realmente excluir este registro?</h5><small>Esta operação não poderá ser desfeita, caso outros recursos dependam deste registro ele será apenas inativado.</small>" data-ntEval="alert('bar');"
                  >Clique aqui para excluir</button></small></h6>
                  <small>Campos com * são obrigatórios</small>
                </div>
            </div>
          </div>

          <!-- start card -->
          <div class="card">    

          <!-- Container-fluid starts-->
          <div class="container-fluid">
         
            
            
            <div class="row starter-main">
           


              <div class="col-sm-12">

                  <?php //if(isArray($_erroForm) && count($_erroForm)>0){ echo boxPostErrors(); }?>
                  <?php if(is_array($_erroForm)){ echo boxPostErrors($_erroForm); } ?>
                  <?php
                  //retorna dados do cadastro com base no ID


                   ?>

                  <!-- FORM CADASTRO EMPRESA -->
                  <form class="form-horizontal needs-validation" novalidate="" id="frm-empresas" name="frm-empresas" method="post" action="<?php echo getLocation('urlPost');?>">
                  <input type="hidden" id="do" name="do" value="empresas" />
                  <input type="hidden" id="opt" name="opt" value="save" />
                  <input type="hidden" id="uid_empresa" name="uid_empresa" value="<?php echo getVar('uid');?>" />

                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home"
                          role="tab" aria-controls="top-home" aria-selected="true"><i
                            class="icofont icofont-ui-home"></i>GERAL</a>
                      </li>
                      <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile"
                          role="tab" aria-controls="top-profile" aria-selected="false"><i
                            class="icofont icofont-man-in-glasses"></i>CONTATOS</a></li>
                      <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact"
                          role="tab" aria-controls="top-contact" aria-selected="false"><i
                            class="icofont icofont-contacts"></i>ENDEREÇOS</a></li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                      <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">

                        <fieldset>

                          <!-- Text field-->
                          <div class="form-group row">

                          <div class="col-lg-6">
                          <label class="control-label text-lg-left" for="textinput">Descrição Empresa *</label>
                          <input <?php echo jsMask('',20);?> id="desc_empresa" name="desc_empresa" type="text" placeholder="Descrição"
                          class="form-control btn-square input-md" required="" value="<?php echo arrayVar($_formData,'desc_empresa');?>">
                          </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                          <div class="col-lg-6">
                          <label class="control-label text-lg-left" for="textinput">Razão Social *</label>
                          <input <?php echo titleError('razao_empresa');?> id="razao_empresa" name="razao_empresa" type="text" placeholder="Nome Razão"
                          class="form-control btn-square input-md" required="" value="<?php echo arrayVar($_formData,'razao_empresa');?>">
                          </div>


                          <div class="col-lg-6">
                          <label class="control-label text-lg-left" for="textinput">Nome Fantasia *</label>
                          <input <?php echo titleError('fantasia_empresa');?> id="fantasia_empresa" name="fantasia_empresa" type="text" placeholder="Nome Fantasia"
                          class="form-control btn-square input-md" required="" value="<?php echo arrayVar($_formData,'fantasia_empresa');?>">
                          </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">CNPJ</label>
                            <input <?php echo jsMask('cnpj',19);?> id="cnpj_empresa" name="cnpj_empresa" type="text" placeholder="00.000.000/0000-00"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'cnpj_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Insc. Estadual</label>
                            <input id="ie_empresa" name="ie_empresa" type="text" placeholder="00000000 (ou ISENTA)"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'ie_empresa');?>">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Insc. Municipal</label>
                            <input id="im_empresa" name="im_empresa" type="text" placeholder="00000000 (ou ISENTA)"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'im_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Regime Tributário</label>
                            <input id="regime_empresa" name="regime_empresa" type="text" placeholder="ex: Lucro Real, Lucro Presumido, Simples Nacional"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'regime_empresa');?>">
                            </div>


                          </div>

                        </fieldset>


                      </div>
                      <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">

                        <fieldset>

                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Tel. Comercial</label>
                            <input <?php echo jsMask('telefone');?> id="telcom_empresa" name="telcom_empresa" type="text" placeholder="00 00000-0000"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'telcom_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Tel Celular</label>
                            <input <?php echo jsMask('telefone');?> id="telcel_empresa" name="telcel_empresa" type="text" placeholder="00 00000-0000"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'telcel_empresa');?>">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">End. de Email *</label>
                            <input <?php echo titleError('email_empresa');?> id="email_empresa" name="email_empresa" type="text" placeholder="ex: email@empresa.com.br"
                            class="form-control btn-square input-md" required="" value="<?php echo arrayVar($_formData,'email_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Website</label>
                            <input <?php echo jsMask('website');?> id="website_empresa" name="website_empresa" type="text" placeholder="ex: www.empresa.com.br"
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'website_empresa');?>">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Facebook</label>
                            <input id="fb_empresa" name="fb_empresa" type="text" placeholder="ex: "
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'fb_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Instagram</label>
                            <input id="instagram_empresa" name="instagram_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'instagram_empresa');?>">
                            </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Youtube</label>
                            <input id="you_empresa" name="youtube_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'youtube_empresa');?>">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Twitter</label>
                            <input id="twit_empresa" name="twitter_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'twitter_empresa');?>">
                            </div>


                          </div>


                        </fieldset>




                      </div>
                      <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">




                        <fieldset>

                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-12">
                            <label class="control-label text-lg-left" for="textinput">Endereço</label>
                            <input id="end_empresa" name="endereco_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'endereco_empresa');?>">
                            </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-2">
                            <label class="control-label text-lg-left" for="textinput">Núm.</label>
                            <input id="num_empresa" name="numero_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'numero_empresa');?>">
                            </div>


                            <div class="col-lg-5">
                            <label class="control-label text-lg-left" for="textinput">Complemento</label>
                            <input id="comp_empresa" name="complemento_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'complemento_empresa');?>">
                            </div>


                            <div class="col-lg-5">
                            <label class="control-label text-lg-left" for="textinput">CEP</label>
                            <input <?php echo jsMask('cep',9);?> id="cep_empresa" name="cep_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'cep_empresa');?>">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Bairro</label>
                            <input id="bai_empresa" name="bairro_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'bairro_empresa');?>">
                            </div>


                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Cidade</label>
                            <input id="cid_empresa" name="cidade_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="<?php echo arrayVar($_formData,'cidade_empresa');?>">
                            </div>


                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">UF</label>
                            <?php $var_uf = arrayVar($_formData,'uf_empresa');?>
                            <select id="uf_empresa" name="uf_empresa" class="form-control">
                            <option <?php echo selselr($var_uf,'');?> value="">selecione</option>
                            <option <?php echo selselr($var_uf,'AC');?> value="AC">Acre</option>
                            <option <?php echo selselr($var_uf,'AL');?> value="AL">Alagoas</option>
                            <option <?php echo selselr($var_uf,'AP');?> value="AP">Amapá</option>
                            <option <?php echo selselr($var_uf,'AM');?> value="AM=">Amazonas</option>
                            <option <?php echo selselr($var_uf,'BA');?> value="BA">Bahia</option>
                            <option <?php echo selselr($var_uf,'CE');?> value="CE">Ceará</option>
                            <option <?php echo selselr($var_uf,'DF');?> value="DF">Distrito Federal</option>
                            <option <?php echo selselr($var_uf,'ES');?> value="ES">Espírito Santo</option>
                            <option <?php echo selselr($var_uf,'GO');?> value="GO">Goiás</option>
                            <option <?php echo selselr($var_uf,'MA');?> value="MA">Maranhão</option>
                            <option <?php echo selselr($var_uf,'MT');?> value="MT">Mato Grosso</option>
                            <option <?php echo selselr($var_uf,'MS');?> value="MS">Mato Grosso do Sul</option>
                            <option <?php echo selselr($var_uf,'MG');?> value="MG">Minas Gerais</option>
                            <option <?php echo selselr($var_uf,'PA');?> value="PA">Pará</option>
                            <option <?php echo selselr($var_uf,'PB');?> value="PB">Paraíba</option>
                            <option <?php echo selselr($var_uf,'PR');?> value="PR">Paraná</option>
                            <option <?php echo selselr($var_uf,'PE');?> value="PE">Pernambuco</option>
                            <option <?php echo selselr($var_uf,'PI');?> value="PI">Piauí</option>
                            <option <?php echo selselr($var_uf,'RJ');?> value="RJ">Rio de Janeiro</option>
                            <option <?php echo selselr($var_uf,'RN');?> value="RN">Rio Grande do Norte</option>
                            <option <?php echo selselr($var_uf,'RS');?> value="RS">Rio Grande do Sul</option>
                            <option <?php echo selselr($var_uf,'RO');?> value="RO">Rondônia</option>
                            <option <?php echo selselr($var_uf,'RR');?> value="RR">Roraima</option>
                            <option <?php echo selselr($var_uf,'SC');?> value="SC">Santa Catarina</option>
                            <option <?php echo selselr($var_uf,'SP');?> value="SP">São Paulo</option>
                            <option <?php echo selselr($var_uf,'SE');?> value="SE">Sergipe</option>
                            <option <?php echo selselr($var_uf,'TO');?> value="TO">Tocantins</option>
                            </select>
                            </div>


                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Pais</label>
                            <?php $var_pais = arrayVar($_formData,'pais_empresa');?>
                            <select id="pais_empresa" name="pais_empresa" class="form-control">
                            <option <?php echo selselr($var_pais,'');?> value="">selecione</option>
                            <option <?php echo selselr($var_pais,'AFG');?> value="AFG">Afeganistão</option>
                            <option <?php echo selselr($var_pais,'ZAF');?> value="ZAF">África do Sul</option>
                            <option <?php echo selselr($var_pais,'ALB');?> value="ALB">Albânia</option>
                            <option <?php echo selselr($var_pais,'DEU');?> value="DEU">Alemanha</option>
                            <option <?php echo selselr($var_pais,'AND');?> value="AND">Andorra</option>
                            <option <?php echo selselr($var_pais,'AGO');?> value="AGO">Angola</option>
                            <option <?php echo selselr($var_pais,'ATG');?> value="ATG">Antiga e Barbuda</option>
                            <option <?php echo selselr($var_pais,'SAU');?> value="SAU">Arábia Saudita</option>
                            <option <?php echo selselr($var_pais,'DZA');?> value="DZA">Argélia</option>
                            <option <?php echo selselr($var_pais,'ARG');?> value="ARG">Argentina</option>
                            <option <?php echo selselr($var_pais,'ARM');?> value="ARM">Arménia</option>
                            <option <?php echo selselr($var_pais,'AUS');?> value="AUS">Austrália</option>
                            <option <?php echo selselr($var_pais,'AUT');?> value="AUT">Áustria</option>
                            <option <?php echo selselr($var_pais,'AZE');?> value="AZE">Azerbaijão</option>
                            <option <?php echo selselr($var_pais,'BHS');?> value="BHS">Bahamas</option>
                            <option <?php echo selselr($var_pais,'BGD');?> value="BGD">Bangladexe</option>
                            <option <?php echo selselr($var_pais,'BRB');?> value="BRB">Barbados</option>
                            <option <?php echo selselr($var_pais,'BHR');?> value="BHR">Barém</option>
                            <option <?php echo selselr($var_pais,'BEL');?> value="BEL">Bélgica</option>
                            <option <?php echo selselr($var_pais,'BLZ');?> value="BLZ">Belize</option>
                            <option <?php echo selselr($var_pais,'BEN');?> value="BEN">Benim</option>
                            <option <?php echo selselr($var_pais,'BLR');?> value="BLR">Bielorrússia</option>
                            <option <?php echo selselr($var_pais,'BOL');?> value="BOL">Bolívia</option>
                            <option <?php echo selselr($var_pais,'BIH');?> value="BIH">Bósnia e Herzegovina</option>
                            <option <?php echo selselr($var_pais,'BWA');?> value="BWA">Botsuana</option>
                            <option <?php echo selselr($var_pais,'BRA');?> value="BRA">Brasil</option>
                            <option <?php echo selselr($var_pais,'BRN');?> value="BRN">Brunei</option>
                            <option <?php echo selselr($var_pais,'BGR');?> value="BGR">Bulgária</option>
                            <option <?php echo selselr($var_pais,'BFA');?> value="BFA">Burquina Faso</option>
                            <option <?php echo selselr($var_pais,'BDI');?> value="BDI">Burúndi</option>
                            <option <?php echo selselr($var_pais,'BTN');?> value="BTN">Butão</option>
                            <option <?php echo selselr($var_pais,'CPV');?> value="CPV">Cabo Verde</option>
                            <option <?php echo selselr($var_pais,'CMR');?> value="CMR">Camarões</option>
                            <option <?php echo selselr($var_pais,'KHM');?> value="KHM">Camboja</option>
                            <option <?php echo selselr($var_pais,'CAN');?> value="CAN">Canadá</option>
                            <option <?php echo selselr($var_pais,'QAT');?> value="QAT">Catar</option>
                            <option <?php echo selselr($var_pais,'KAZ');?> value="KAZ">Cazaquistão</option>
                            <option <?php echo selselr($var_pais,'TCD');?> value="TCD">Chade</option>
                            <option <?php echo selselr($var_pais,'CHL');?> value="CHL">Chile</option>
                            <option <?php echo selselr($var_pais,'CHN');?> value="CHN">China</option>
                            <option <?php echo selselr($var_pais,'CYP');?> value="CYP">Chipre</option>
                            <option <?php echo selselr($var_pais,'COL');?> value="COL">Colômbia</option>
                            <option <?php echo selselr($var_pais,'COM');?> value="COM">Comores</option>
                            <option <?php echo selselr($var_pais,'COG');?> value="COG">Congo-Brazzaville</option>
                            <option <?php echo selselr($var_pais,'PRK');?> value="PRK">Coreia do Norte</option>
                            <option <?php echo selselr($var_pais,'KOR');?> value="KOR">Coreia do Sul</option>
                            <option <?php echo selselr($var_pais,'KOS');?> value="KOS">Cosovo</option>
                            <option <?php echo selselr($var_pais,'CIV');?> value="CIV">Costa do Marfim</option>
                            <option <?php echo selselr($var_pais,'CRI');?> value="CRI">Costa Rica</option>
                            <option <?php echo selselr($var_pais,'HRV');?> value="HRV">Croácia</option>
                            <option <?php echo selselr($var_pais,'KWT');?> value="KWT">Cuaite</option>
                            <option <?php echo selselr($var_pais,'CUB');?> value="CUB">Cuba</option>
                            <option <?php echo selselr($var_pais,'DNK');?> value="DNK">Dinamarca</option>
                            <option <?php echo selselr($var_pais,'DMA');?> value="DMA">Dominica</option>
                            <option <?php echo selselr($var_pais,'EGY');?> value="EGY">Egito</option>
                            <option <?php echo selselr($var_pais,'ARE');?> value="ARE">Emirados Árabes Unidos</option>
                            <option <?php echo selselr($var_pais,'ECU');?> value="ECU">Equador</option>
                            <option <?php echo selselr($var_pais,'ERI');?> value="ERI">Eritreia</option>
                            <option <?php echo selselr($var_pais,'SVK');?> value="SVK">Eslováquia</option>
                            <option <?php echo selselr($var_pais,'SVN');?> value="SVN">Eslovénia</option>
                            <option <?php echo selselr($var_pais,'ESP');?> value="ESP">Espanha</option>
                            <option <?php echo selselr($var_pais,'PSE');?> value="PSE">Estado da Palestina</option>
                            <option <?php echo selselr($var_pais,'USA');?> value="USA">Estados Unidos</option>
                            <option <?php echo selselr($var_pais,'EST');?> value="EST">Estónia</option>
                            <option <?php echo selselr($var_pais,'ETH');?> value="ETH">Etiópia</option>
                            <option <?php echo selselr($var_pais,'FJI');?> value="FJI">Fiji</option>
                            <option <?php echo selselr($var_pais,'PHL');?> value="PHL">Filipinas</option>
                            <option <?php echo selselr($var_pais,'FIN');?> value="FIN">Finlândia</option>
                            <option <?php echo selselr($var_pais,'FRA');?> value="FRA">França</option>
                            <option <?php echo selselr($var_pais,'GAB');?> value="GAB">Gabão</option>
                            <option <?php echo selselr($var_pais,'GMB');?> value="GMB">Gâmbia</option>
                            <option <?php echo selselr($var_pais,'GHA');?> value="GHA">Gana</option>
                            <option <?php echo selselr($var_pais,'GEO');?> value="GEO">Geórgia</option>
                            <option <?php echo selselr($var_pais,'GRD');?> value="GRD">Granada</option>
                            <option <?php echo selselr($var_pais,'GRC');?> value="GRC">Grécia</option>
                            <option <?php echo selselr($var_pais,'GTM');?> value="GTM">Guatemala</option>
                            <option <?php echo selselr($var_pais,'GUY');?> value="GUY">Guiana</option>
                            <option <?php echo selselr($var_pais,'GIN');?> value="GIN">Guiné</option>
                            <option <?php echo selselr($var_pais,'GNQ');?> value="GNQ">Guiné Equatorial</option>
                            <option <?php echo selselr($var_pais,'GNB');?> value="GNB">Guiné-Bissau</option>
                            <option <?php echo selselr($var_pais,'HTI');?> value="HTI">Haiti</option>
                            <option <?php echo selselr($var_pais,'HND');?> value="HND">Honduras</option>
                            <option <?php echo selselr($var_pais,'HUN');?> value="HUN">Hungria</option>
                            <option <?php echo selselr($var_pais,'YEM');?> value="YEM">Iémen</option>
                            <option <?php echo selselr($var_pais,'MHL');?> value="MHL">Ilhas Marechal</option>
                            <option <?php echo selselr($var_pais,'IND');?> value="IND">Índia</option>
                            <option <?php echo selselr($var_pais,'IDN');?> value="IDN">Indonésia</option>
                            <option <?php echo selselr($var_pais,'IRN');?> value="IRN">Irão</option>
                            <option <?php echo selselr($var_pais,'IRQ');?> value="IRQ">Iraque</option>
                            <option <?php echo selselr($var_pais,'IRL');?> value="IRL">Irlanda</option>
                            <option <?php echo selselr($var_pais,'ISL');?> value="ISL">Islândia</option>
                            <option <?php echo selselr($var_pais,'ISR');?> value="ISR">Israel</option>
                            <option <?php echo selselr($var_pais,'ITA');?> value="ITA">Itália</option>
                            <option <?php echo selselr($var_pais,'JAM');?> value="JAM">Jamaica</option>
                            <option <?php echo selselr($var_pais,'JPN');?> value="JPN">Japão</option>
                            <option <?php echo selselr($var_pais,'DJI');?> value="DJI">Jibuti</option>
                            <option <?php echo selselr($var_pais,'JOR');?> value="JOR">Jordânia</option>
                            <option <?php echo selselr($var_pais,'LAO');?> value="LAO">Laus</option>
                            <option <?php echo selselr($var_pais,'LSO');?> value="LSO">Lesoto</option>
                            <option <?php echo selselr($var_pais,'LVA');?> value="LVA">Letónia</option>
                            <option <?php echo selselr($var_pais,'LBN');?> value="LBN">Líbano</option>
                            <option <?php echo selselr($var_pais,'LBR');?> value="LBR">Libéria</option>
                            <option <?php echo selselr($var_pais,'LBY');?> value="LBY">Líbia</option>
                            <option <?php echo selselr($var_pais,'LIE');?> value="LIE">Listenstaine</option>
                            <option <?php echo selselr($var_pais,'LTU');?> value="LTU">Lituânia</option>
                            <option <?php echo selselr($var_pais,'LUX');?> value="LUX">Luxemburgo</option>
                            <option <?php echo selselr($var_pais,'MKD');?> value="MKD">Macedónia</option>
                            <option <?php echo selselr($var_pais,'MDG');?> value="MDG">Madagáscar</option>
                            <option <?php echo selselr($var_pais,'MYS');?> value="MYS">Malásia</option>
                            <option <?php echo selselr($var_pais,'MWI');?> value="MWI">Maláui</option>
                            <option <?php echo selselr($var_pais,'MDV');?> value="MDV">Maldivas</option>
                            <option <?php echo selselr($var_pais,'MLI');?> value="MLI">Mali</option>
                            <option <?php echo selselr($var_pais,'MLT');?> value="MLT">Malta</option>
                            <option <?php echo selselr($var_pais,'MAR');?> value="MAR">Marrocos</option>
                            <option <?php echo selselr($var_pais,'MUS');?> value="MUS">Maurícia</option>
                            <option <?php echo selselr($var_pais,'MRT');?> value="MRT">Mauritânia</option>
                            <option <?php echo selselr($var_pais,'MEX');?> value="MEX">México</option>
                            <option <?php echo selselr($var_pais,'MMR');?> value="MMR">Mianmar</option>
                            <option <?php echo selselr($var_pais,'FSM');?> value="FSM">Micronésia</option>
                            <option <?php echo selselr($var_pais,'MOZ');?> value="MOZ">Moçambique</option>
                            <option <?php echo selselr($var_pais,'MDA');?> value="MDA">Moldávia</option>
                            <option <?php echo selselr($var_pais,'MCO');?> value="MCO">Mónaco</option>
                            <option <?php echo selselr($var_pais,'MNG');?> value="MNG">Mongólia</option>
                            <option <?php echo selselr($var_pais,'MNE');?> value="MNE">Montenegro</option>
                            <option <?php echo selselr($var_pais,'NAM');?> value="NAM">Namíbia</option>
                            <option <?php echo selselr($var_pais,'NRU');?> value="NRU">Nauru</option>
                            <option <?php echo selselr($var_pais,'NPL');?> value="NPL">Nepal</option>
                            <option <?php echo selselr($var_pais,'NIC');?> value="NIC">Nicarágua</option>
                            <option <?php echo selselr($var_pais,'NER');?> value="NER">Níger</option>
                            <option <?php echo selselr($var_pais,'NGA');?> value="NGA">Nigéria</option>
                            <option <?php echo selselr($var_pais,'NOR');?> value="NOR">Noruega</option>
                            <option <?php echo selselr($var_pais,'NZL');?> value="NZL">Nova Zelândia</option>
                            <option <?php echo selselr($var_pais,'OMN');?> value="OMN">Omã</option>
                            <option <?php echo selselr($var_pais,'NLD');?> value="NLD">Países Baixos</option>
                            <option <?php echo selselr($var_pais,'PLW');?> value="PLW">Palau</option>
                            <option <?php echo selselr($var_pais,'PAN');?> value="PAN">Panamá</option>
                            <option <?php echo selselr($var_pais,'PNG');?> value="PNG">Papua Nova Guiné</option>
                            <option <?php echo selselr($var_pais,'PAK');?> value="PAK">Paquistão</option>
                            <option <?php echo selselr($var_pais,'PRY');?> value="PRY">Paraguai</option>
                            <option <?php echo selselr($var_pais,'PER');?> value="PER">Peru</option>
                            <option <?php echo selselr($var_pais,'POL');?> value="POL">Polónia</option>
                            <option <?php echo selselr($var_pais,'PRT');?> value="PRT">Portugal</option>
                            <option <?php echo selselr($var_pais,'KEN');?> value="KEN">Quénia</option>
                            <option <?php echo selselr($var_pais,'KGZ');?> value="KGZ">Quirguistão</option>
                            <option <?php echo selselr($var_pais,'KIR');?> value="KIR">Quiribáti</option>
                            <option <?php echo selselr($var_pais,'GBR');?> value="GBR">Reino Unido</option>
                            <option <?php echo selselr($var_pais,'CAF');?> value="CAF">República Centro-Africana</option>
                            <option <?php echo selselr($var_pais,'CZE');?> value="CZE">República Checa</option>
                            <option <?php echo selselr($var_pais,'COD');?> value="COD">República Democrática do Congo</option>
                            <option <?php echo selselr($var_pais,'DOM');?> value="DOM">República Dominicana</option>
                            <option <?php echo selselr($var_pais,'ROU');?> value="ROU">Roménia</option>
                            <option <?php echo selselr($var_pais,'RWA');?> value="RWA">Ruanda</option>
                            <option <?php echo selselr($var_pais,'RUS');?> value="RUS">Rússia</option>
                            <option <?php echo selselr($var_pais,'SLB');?> value="SLB">Salomão</option>
                            <option <?php echo selselr($var_pais,'SLV');?> value="SLV">Salvador</option>
                            <option <?php echo selselr($var_pais,'WSM');?> value="WSM">Samoa</option>
                            <option <?php echo selselr($var_pais,'LCA');?> value="LCA">Santa Lúcia</option>
                            <option <?php echo selselr($var_pais,'KNA');?> value="KNA">São Cristóvão e Neves</option>
                            <option <?php echo selselr($var_pais,'SMR');?> value="SMR">São Marinho</option>
                            <option <?php echo selselr($var_pais,'STP');?> value="STP">São Tomé e Príncipe</option>
                            <option <?php echo selselr($var_pais,'VCT');?> value="VCT">São Vicente e Granadinas</option>
                            <option <?php echo selselr($var_pais,'SYC');?> value="SYC">Seicheles</option>
                            <option <?php echo selselr($var_pais,'SEN');?> value="SEN">Senegal</option>
                            <option <?php echo selselr($var_pais,'SLE');?> value="SLE">Serra Leoa</option>
                            <option <?php echo selselr($var_pais,'SRB');?> value="SRB">Sérvia</option>
                            <option <?php echo selselr($var_pais,'SGP');?> value="SGP">Singapura</option>
                            <option <?php echo selselr($var_pais,'SYR');?> value="SYR">Síria</option>
                            <option <?php echo selselr($var_pais,'SOM');?> value="SOM">Somália</option>
                            <option <?php echo selselr($var_pais,'LKA');?> value="LKA">Sri Lanca</option>
                            <option <?php echo selselr($var_pais,'SWZ');?> value="SWZ">Suazilândia</option>
                            <option <?php echo selselr($var_pais,'SDN');?> value="SDN">Sudão</option>
                            <option <?php echo selselr($var_pais,'SSD');?> value="SSD">Sudão do Sul</option>
                            <option <?php echo selselr($var_pais,'SWE');?> value="SWE">Suécia</option>
                            <option <?php echo selselr($var_pais,'CHE');?> value="CHE">Suíça</option>
                            <option <?php echo selselr($var_pais,'SUR');?> value="SUR">Suriname</option>
                            <option <?php echo selselr($var_pais,'THA');?> value="THA">Tailândia</option>
                            <option <?php echo selselr($var_pais,'TWN');?> value="TWN">Taiuã</option>
                            <option <?php echo selselr($var_pais,'TJK');?> value="TJK">Tajiquistão</option>
                            <option <?php echo selselr($var_pais,'TZA');?> value="TZA">Tanzânia</option>
                            <option <?php echo selselr($var_pais,'TLS');?> value="TLS">Timor-Leste</option>
                            <option <?php echo selselr($var_pais,'TGO');?> value="TGO">Togo</option>
                            <option <?php echo selselr($var_pais,'TON');?> value="TON">Tonga</option>
                            <option <?php echo selselr($var_pais,'TTO');?> value="TTO">Trindade e Tobago</option>
                            <option <?php echo selselr($var_pais,'TUN');?> value="TUN">Tunísia</option>
                            <option <?php echo selselr($var_pais,'TKM');?> value="TKM">Turcomenistão</option>
                            <option <?php echo selselr($var_pais,'TUR');?> value="TUR">Turquia</option>
                            <option <?php echo selselr($var_pais,'TUV');?> value="TUV">Tuvalu</option>
                            <option <?php echo selselr($var_pais,'UKR');?> value="UKR">Ucrânia</option>
                            <option <?php echo selselr($var_pais,'UGA');?> value="UGA">Uganda</option>
                            <option <?php echo selselr($var_pais,'URY');?> value="URY">Uruguai</option>
                            <option <?php echo selselr($var_pais,'UZB');?> value="UZB">Usbequistão</option>
                            <option <?php echo selselr($var_pais,'VUT');?> value="VUT">Vanuatu</option>
                            <option <?php echo selselr($var_pais,'VAT');?> value="VAT">Vaticano</option>
                            <option <?php echo selselr($var_pais,'VEN');?> value="VEN">Venezuela</option>
                            <option <?php echo selselr($var_pais,'VNM');?> value="VNM">Vietname</option>
                            <option <?php echo selselr($var_pais,'ZMB');?> value="ZMB">Zâmbia</option>
                            <option <?php echo selselr($var_pais,'ZWE');?> value="ZWE">Zimbábue</option>
                            </select>
                            </div>


                          </div>

                        </fieldset>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                      </div>
                    </div>
                  </form>

              </div>
              
              </div><!--endcard-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
