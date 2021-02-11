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
                  type="button" class="btn btn-danger btn-xs">Clique aqui para excluir</button></small></h6>
                  <small>Campos com * são obrigatórios</small>
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
                            <select id="uf_empresa" name="uf_empresa" class="form-control">
                            <option value="">selecione</option>
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


                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Pais</label>
                            <select id="pais_empresa" name="pais_empresa" class="form-control">
                            <option value="">selecione</option>
                            <option value="AFG">Afeganistão</option>
                            <option value="ZAF">África do Sul</option>
                            <option value="ALB">Albânia</option>
                            <option value="DEU">Alemanha</option>
                            <option value="AND">Andorra</option>
                            <option value="AGO">Angola</option>
                            <option value="ATG">Antiga e Barbuda</option>
                            <option value="SAU">Arábia Saudita</option>
                            <option value="DZA">Argélia</option>
                            <option value="ARG">Argentina</option>
                            <option value="ARM">Arménia</option>
                            <option value="AUS">Austrália</option>
                            <option value="AUT">Áustria</option>
                            <option value="AZE">Azerbaijão</option>
                            <option value="BHS">Bahamas</option>
                            <option value="BGD">Bangladexe</option>
                            <option value="BRB">Barbados</option>
                            <option value="BHR">Barém</option>
                            <option value="BEL">Bélgica</option>
                            <option value="BLZ">Belize</option>
                            <option value="BEN">Benim</option>
                            <option value="BLR">Bielorrússia</option>
                            <option value="BOL">Bolívia</option>
                            <option value="BIH">Bósnia e Herzegovina</option>
                            <option value="BWA">Botsuana</option>
                            <option value="BRA">Brasil</option>
                            <option value="BRN">Brunei</option>
                            <option value="BGR">Bulgária</option>
                            <option value="BFA">Burquina Faso</option>
                            <option value="BDI">Burúndi</option>
                            <option value="BTN">Butão</option>
                            <option value="CPV">Cabo Verde</option>
                            <option value="CMR">Camarões</option>
                            <option value="KHM">Camboja</option>
                            <option value="CAN">Canadá</option>
                            <option value="QAT">Catar</option>
                            <option value="KAZ">Cazaquistão</option>
                            <option value="TCD">Chade</option>
                            <option value="CHL">Chile</option>
                            <option value="CHN">China</option>
                            <option value="CYP">Chipre</option>
                            <option value="COL">Colômbia</option>
                            <option value="COM">Comores</option>
                            <option value="COG">Congo-Brazzaville</option>
                            <option value="PRK">Coreia do Norte</option>
                            <option value="KOR">Coreia do Sul</option>
                            <option value="KOS">Cosovo</option>
                            <option value="CIV">Costa do Marfim</option>
                            <option value="CRI">Costa Rica</option>
                            <option value="HRV">Croácia</option>
                            <option value="KWT">Cuaite</option>
                            <option value="CUB">Cuba</option>
                            <option value="DNK">Dinamarca</option>
                            <option value="DMA">Dominica</option>
                            <option value="EGY">Egito</option>
                            <option value="ARE">Emirados Árabes Unidos</option>
                            <option value="ECU">Equador</option>
                            <option value="ERI">Eritreia</option>
                            <option value="SVK">Eslováquia</option>
                            <option value="SVN">Eslovénia</option>
                            <option value="ESP">Espanha</option>
                            <option value="PSE">Estado da Palestina</option>
                            <option value="USA">Estados Unidos</option>
                            <option value="EST">Estónia</option>
                            <option value="ETH">Etiópia</option>
                            <option value="FJI">Fiji</option>
                            <option value="PHL">Filipinas</option>
                            <option value="FIN">Finlândia</option>
                            <option value="FRA">França</option>
                            <option value="GAB">Gabão</option>
                            <option value="GMB">Gâmbia</option>
                            <option value="GHA">Gana</option>
                            <option value="GEO">Geórgia</option>
                            <option value="GRD">Granada</option>
                            <option value="GRC">Grécia</option>
                            <option value="GTM">Guatemala</option>
                            <option value="GUY">Guiana</option>
                            <option value="GIN">Guiné</option>
                            <option value="GNQ">Guiné Equatorial</option>
                            <option value="GNB">Guiné-Bissau</option>
                            <option value="HTI">Haiti</option>
                            <option value="HND">Honduras</option>
                            <option value="HUN">Hungria</option>
                            <option value="YEM">Iémen</option>
                            <option value="MHL">Ilhas Marechal</option>
                            <option value="IND">Índia</option>
                            <option value="IDN">Indonésia</option>
                            <option value="IRN">Irão</option>
                            <option value="IRQ">Iraque</option>
                            <option value="IRL">Irlanda</option>
                            <option value="ISL">Islândia</option>
                            <option value="ISR">Israel</option>
                            <option value="ITA">Itália</option>
                            <option value="JAM">Jamaica</option>
                            <option value="JPN">Japão</option>
                            <option value="DJI">Jibuti</option>
                            <option value="JOR">Jordânia</option>
                            <option value="LAO">Laus</option>
                            <option value="LSO">Lesoto</option>
                            <option value="LVA">Letónia</option>
                            <option value="LBN">Líbano</option>
                            <option value="LBR">Libéria</option>
                            <option value="LBY">Líbia</option>
                            <option value="LIE">Listenstaine</option>
                            <option value="LTU">Lituânia</option>
                            <option value="LUX">Luxemburgo</option>
                            <option value="MKD">Macedónia</option>
                            <option value="MDG">Madagáscar</option>
                            <option value="MYS">Malásia</option>
                            <option value="MWI">Maláui</option>
                            <option value="MDV">Maldivas</option>
                            <option value="MLI">Mali</option>
                            <option value="MLT">Malta</option>
                            <option value="MAR">Marrocos</option>
                            <option value="MUS">Maurícia</option>
                            <option value="MRT">Mauritânia</option>
                            <option value="MEX">México</option>
                            <option value="MMR">Mianmar</option>
                            <option value="FSM">Micronésia</option>
                            <option value="MOZ">Moçambique</option>
                            <option value="MDA">Moldávia</option>
                            <option value="MCO">Mónaco</option>
                            <option value="MNG">Mongólia</option>
                            <option value="MNE">Montenegro</option>
                            <option value="NAM">Namíbia</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Nepal</option>
                            <option value="NIC">Nicarágua</option>
                            <option value="NER">Níger</option>
                            <option value="NGA">Nigéria</option>
                            <option value="NOR">Noruega</option>
                            <option value="NZL">Nova Zelândia</option>
                            <option value="OMN">Omã</option>
                            <option value="NLD">Países Baixos</option>
                            <option value="PLW">Palau</option>
                            <option value="PAN">Panamá</option>
                            <option value="PNG">Papua Nova Guiné</option>
                            <option value="PAK">Paquistão</option>
                            <option value="PRY">Paraguai</option>
                            <option value="PER">Peru</option>
                            <option value="POL">Polónia</option>
                            <option value="PRT">Portugal</option>
                            <option value="KEN">Quénia</option>
                            <option value="KGZ">Quirguistão</option>
                            <option value="KIR">Quiribáti</option>
                            <option value="GBR">Reino Unido</option>
                            <option value="CAF">República Centro-Africana</option>
                            <option value="CZE">República Checa</option>
                            <option value="COD">República Democrática do Congo</option>
                            <option value="DOM">República Dominicana</option>
                            <option value="ROU">Roménia</option>
                            <option value="RWA">Ruanda</option>
                            <option value="RUS">Rússia</option>
                            <option value="SLB">Salomão</option>
                            <option value="SLV">Salvador</option>
                            <option value="WSM">Samoa</option>
                            <option value="LCA">Santa Lúcia</option>
                            <option value="KNA">São Cristóvão e Neves</option>
                            <option value="SMR">São Marinho</option>
                            <option value="STP">São Tomé e Príncipe</option>
                            <option value="VCT">São Vicente e Granadinas</option>
                            <option value="SYC">Seicheles</option>
                            <option value="SEN">Senegal</option>
                            <option value="SLE">Serra Leoa</option>
                            <option value="SRB">Sérvia</option>
                            <option value="SGP">Singapura</option>
                            <option value="SYR">Síria</option>
                            <option value="SOM">Somália</option>
                            <option value="LKA">Sri Lanca</option>
                            <option value="SWZ">Suazilândia</option>
                            <option value="SDN">Sudão</option>
                            <option value="SSD">Sudão do Sul</option>
                            <option value="SWE">Suécia</option>
                            <option value="CHE">Suíça</option>
                            <option value="SUR">Suriname</option>
                            <option value="THA">Tailândia</option>
                            <option value="TWN">Taiuã</option>
                            <option value="TJK">Tajiquistão</option>
                            <option value="TZA">Tanzânia</option>
                            <option value="TLS">Timor-Leste</option>
                            <option value="TGO">Togo</option>
                            <option value="TON">Tonga</option>
                            <option value="TTO">Trindade e Tobago</option>
                            <option value="TUN">Tunísia</option>
                            <option value="TKM">Turcomenistão</option>
                            <option value="TUR">Turquia</option>
                            <option value="TUV">Tuvalu</option>
                            <option value="UKR">Ucrânia</option>
                            <option value="UGA">Uganda</option>
                            <option value="URY">Uruguai</option>
                            <option value="UZB">Usbequistão</option>
                            <option value="VUT">Vanuatu</option>
                            <option value="VAT">Vaticano</option>
                            <option value="VEN">Venezuela</option>
                            <option value="VNM">Vietname</option>
                            <option value="ZMB">Zâmbia</option>
                            <option value="ZWE">Zimbábue</option>
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
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
