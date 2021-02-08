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
                  <h6 class="font-primary"><small>* Informe os dados do formulário e clique em <b>SALVAR DADOS</b>, ou <button
                  type="button" class="btn btn-danger btn-xs">Clique aqui para excluir</button></small></h6>
                </div>
            </div>
          </div>
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">

              <div class="col-sm-12">


                  <form class="form-horizontal">


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
                          <label class="control-label text-lg-left" for="textinput">Razão Social</label>
                          <input id="razao_empresa" name="razao_empresa" type="text" placeholder="Nome Razão"
                          class="form-control btn-square input-md" value="">
                          </div>


                          <div class="col-lg-6">
                          <label class="control-label text-lg-left" for="textinput">Nome Fantasia</label>
                          <input id="fantasia_empresa" name="fantasia_empresa" type="text" placeholder="Nome Fantasia"
                          class="form-control btn-square input-md" value="">
                          </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">CNPJ</label>
                            <input id="cnpj_empresa" name="cnpj_empresa" type="text" placeholder="00.000.000/0000-00"
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Insc. Estadual</label>
                            <input id="ie_empresa" name="ie_empresa" type="text" placeholder="00000000 (ou ISENTA)"
                            class="form-control btn-square input-md" value="">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Insc. Municipal</label>
                            <input id="im_empresa" name="im_empresa" type="text" placeholder="00000000 (ou ISENTA)"
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Regime Tributário</label>
                            <input id="regime_empresa" name="regime_empresa" type="text" placeholder="ex: Lucro Real, Lucro Presumido, Simples Nacional"
                            class="form-control btn-square input-md" value="">
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
                            <input id="telcom_empresa" name="telcom_empresa" type="text" placeholder="00 00000-0000"
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Tel Celular</label>
                            <input id="telcel_empresa" name="telcel_empresa" type="text" placeholder="00 00000-0000"
                            class="form-control btn-square input-md" value="">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">End. de Email</label>
                            <input id="email_empresa" name="email_empresa" type="text" placeholder="ex: email@empresa.com.br"
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Website</label>
                            <input id="website_empresa" name="website_empresa" type="text" placeholder="ex: www.empresa.com.br"
                            class="form-control btn-square input-md" value="">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Facebook</label>
                            <input id="fb_empresa" name="fb_empresa" type="text" placeholder="ex: "
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Instagram</label>
                            <input id="insta_empresa" name="insta_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Youtube</label>
                            <input id="you_empresa" name="you_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-6">
                            <label class="control-label text-lg-left" for="textinput">Twitter</label>
                            <input id="twit_empresa" name="twit_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
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
                            <input id="end_empresa" name="end_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>

                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-2">
                            <label class="control-label text-lg-left" for="textinput">Núm.</label>
                            <input id="num_empresa" name="num_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-5">
                            <label class="control-label text-lg-left" for="textinput">Complemento</label>
                            <input id="comp_empresa" name="comp_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-5">
                            <label class="control-label text-lg-left" for="textinput">CEP</label>
                            <input id="cep_empresa" name="cep_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>


                          </div>


                          <!-- Text field-->
                          <div class="form-group row">

                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Bairro</label>
                            <input id="bai_empresa" name="bai_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
                            </div>


                            <div class="col-lg-3">
                            <label class="control-label text-lg-left" for="textinput">Cidade</label>
                            <input id="cid_empresa" name="cid_empresa" type="text" placeholder=""
                            class="form-control btn-square input-md" value="">
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
                            <option value="África do Sul">África do Sul</option>
                            <option value="Albânia">Albânia</option>
                            <option value="Alemanha">Alemanha</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua">Antigua</option>
                            <option value="Arábia Saudita">Arábia Saudita</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armênia">Armênia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Austrália">Austrália</option>
                            <option value="Áustria">Áustria</option>
                            <option value="Azerbaijão">Azerbaijão</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrein">Bahrein</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermudas">Bermudas</option>
                            <option value="Botsuana">Botsuana</option>
                            <option value="Brasil" selected>Brasil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgária">Bulgária</option>
                            <option value="Burkina Fasso">Burkina Fasso</option>
                            <option value="botão">botão</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Camarões">Camarões</option>
                            <option value="Camboja">Camboja</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Cazaquistão">Cazaquistão</option>
                            <option value="Chade">Chade</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                            <option value="Colômbia">Colômbia</option>
                            <option value="Congo">Congo</option>
                            <option value="Coréia do Sul">Coréia do Sul</option>
                            <option value="Costa do Marfim">Costa do Marfim</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croácia">Croácia</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Djibuti">Djibuti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="EUA">EUA</option>
                            <option value="Egito">Egito</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Emirados Árabes">Emirados Árabes</option>
                            <option value="Equador">Equador</option>
                            <option value="Eritréia">Eritréia</option>
                            <option value="Escócia">Escócia</option>
                            <option value="Eslováquia">Eslováquia</option>
                            <option value="Eslovênia">Eslovênia</option>
                            <option value="Espanha">Espanha</option>
                            <option value="Estônia">Estônia</option>
                            <option value="Etiópia">Etiópia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Filipinas">Filipinas</option>
                            <option value="Finlândia">Finlândia</option>
                            <option value="França">França</option>
                            <option value="Gabão">Gabão</option>
                            <option value="Gâmbia">Gâmbia</option>
                            <option value="Gana">Gana</option>
                            <option value="Geórgia">Geórgia</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Granada">Granada</option>
                            <option value="Grécia">Grécia</option>
                            <option value="Guadalupe">Guadalupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guiana">Guiana</option>
                            <option value="Guiana Francesa">Guiana Francesa</option>
                            <option value="Guiné-bissau">Guiné-bissau</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Holanda">Holanda</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungria">Hungria</option>
                            <option value="Iêmen">Iêmen</option>
                            <option value="Ilhas Cayman">Ilhas Cayman</option>
                            <option value="Ilhas Cook">Ilhas Cook</option>
                            <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                            <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                            <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                            <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                            <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                            <option value="Índia">Índia</option>
                            <option value="Indonésia">Indonésia</option>
                            <option value="Inglaterra">Inglaterra</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Islândia">Islândia</option>
                            <option value="Israel">Israel</option>
                            <option value="Itália">Itália</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japão">Japão</option>
                            <option value="Jordânia">Jordânia</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Líbano">Líbano</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lituânia">Lituânia</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedônia">Macedônia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malásia">Malásia</option>
                            <option value="Malaui">Malaui</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marrocos">Marrocos</option>
                            <option value="Martinica">Martinica</option>
                            <option value="Mauritânia">Mauritânia</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="México">México</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Mônaco">Mônaco</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicarágua">Nicarágua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigéria">Nigéria</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Nova Caledônia">Nova Caledônia</option>
                            <option value="Nova Zelândia">Nova Zelândia</option>
                            <option value="Omã">Omã</option>
                            <option value="Palau">Palau</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                            <option value="Paquistão">Paquistão</option>
                            <option value="Peru">Peru</option>
                            <option value="Polinésia Francesa">Polinésia Francesa</option>
                            <option value="Polônia">Polônia</option>
                            <option value="Porto Rico">Porto Rico</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Quênia">Quênia</option>
                            <option value="Rep. Dominicana">Rep. Dominicana</option>
                            <option value="Rep. Tcheca">Rep. Tcheca</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romênia">Romênia</option>
                            <option value="Ruanda">Ruanda</option>
                            <option value="Rússia">Rússia</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa Americana">Samoa Americana</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serra Leone">Serra Leone</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Singapura">Singapura</option>
                            <option value="Síria">Síria</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                            <option value="St. Lúcia">St. Lúcia</option>
                            <option value="St. Vincent">St. Vincent</option>
                            <option value="Sudão">Sudão</option>
                            <option value="Suécia">Suécia</option>
                            <option value="Suiça">Suiça</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Tailândia">Tailândia</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tanzânia">Tanzânia</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunísia">Tunísia</option>
                            <option value="Turquia">Turquia</option>
                            <option value="Ucrânia">Ucrânia</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Uruguai">Uruguai</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnã">Vietnã</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zâmbia">Zâmbia</option>
                            <option value="Zimbábue">Zimbábue</option>
                            </select>
                            </div>


                          </div>

                        </fieldset>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">SALVAR DADOS</button>
                      </div>
                    </div>
                  </form>

              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
