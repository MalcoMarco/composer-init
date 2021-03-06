<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>KYC</title>
</head>

<body>
  <div class="main-container">
    <div class="header-sec">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img src="./LOGO  MARRERO Logo MarreroARCHIVOS PNG SIN FONDO-04.png" alt="logo image" class="logo">
          </div>
          <div class="col-sm-8 text-center">
            <h1>FORMULARIO CONOCE TU CLIENTE</h1>
            <p>Abogados, Corredores y Agentes Inmobiliarios</p>
            <p>Sujetos Obligados No Financieros</p>
            <p>Ley 155/17 del 01/06/2017 y Decreto 408-17 del 16/11/2017</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row form-body">
      <div class="col-md-12">
        <div class="container">
          <h2 class="text-center">DATOS GENERALES PERSONA FISICA</h2>
          <form action="/action_page.php" method="get">

            <div class="row form-inputs" id="crz">
              <div class="col-sm-12 col-md-4">
                <label for="fname">Nombre(s)</label>
                <input type="text" id="fname" name="fname">
              </div>
              <div class="col-sm-12 col-md-4">
                <label for="fsname">1er Apellido</label>
                <input type="text" id="fsname" name="fsname">
              </div>
              <div class="col-sm-12 col-md-4">
                <label for="ssname">2do Apellido</label>
                <input type="text" id="ssname" name="ssname">
              </div>
            </div>

            <div class="row form-inputs" id="cra">
              <div class="col-sm-12 col-md-6">
                <label for="bdate">Fecha Nacimiento</label>
                <input type="date" id="birthday" name="birthday">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="pbirth">Lugar Nacimient</label>
                <select id="country" name="country" value="Albania">
                  <option value="Afganistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bonaire">Bonaire</option>
                  <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Canary Islands">Canary Islands</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Channel Islands">Channel Islands</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos Island">Cocos Island</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote DIvoire">Cote DIvoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curaco">Curacao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Ter">French Southern Ter</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Great Britain">Great Britain</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="India">India</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea North">Korea North</option>
                  <option value="Korea Sout">Korea South</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Midway Islands">Midway Islands</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Nambia">Nambia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherland Antilles">Netherland Antilles</option>
                  <option value="Netherlands">Netherlands (Holland, Europe)</option>
                  <option value="Nevis">Nevis</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau Island">Palau Island</option>
                  <option value="Palestine">Palestine</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Phillipines">Philippines</option>
                  <option value="Pitcairn Island">Pitcairn Island</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of Montenegro">Republic of Montenegro</option>
                  <option value="Republic of Serbia">Republic of Serbia</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="St Barthelemy">St Barthelemy</option>
                  <option value="St Eustatius">St Eustatius</option>
                  <option value="St Helena">St Helena</option>
                  <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                  <option value="St Lucia">St Lucia</option>
                  <option value="St Maarten">St Maarten</option>
                  <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                  <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                  <option value="Saipan">Saipan</option>
                  <option value="Samoa">Samoa</option>
                  <option value="Samoa American">Samoa American</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Tahiti">Tahiti</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Erimates">United Arab Emirates</option>
                  <option value="United States of America">United States of America</option>
                  <option value="Uraguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City State">Vatican City State</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                  <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                  <option value="Wake Island">Wake Island</option>
                  <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
            </div>

            <div class="row form-inputs" id="crb">
              <h3>Tipo Documento</h3>
              <div class="col-sm-12 col-md-6">

                <div class="row">
                  <div class="col-sm-3">
                    <label for="ced">Ced</label>
                    <input type="number" id="ced" name="ced">
                  </div>
                  <div class="col-sm-3">
                    <label for="pas">Pas</label>
                    <input type="number" id="pas" name="pas">
                  </div>
                  <div class="col-sm-3">
                    <label for="idb">ID</label>
                    <input type="number" id="idb" name="idb">
                  </div>
                  <div class="col-sm-3">
                    <label for="otro">Otro</label>
                    <input type="number" id="otro" name="otro">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6" id="crba">
                <label for="numro">N??mero</label>
                <input type="number" id="numro" name="numro">
              </div>
            </div>

            <div class="row form-inputs" id="crc">
              <div class="col-sm-12 col-md-6">
                <label for="dpi">Fecha, Lugar expedici??n</label>
                <input type="text" id="dpi" name="dpi">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="sctr">Direcci??n Res./sct</label>
                <input type="text" id="sctr" name="sctr">
              </div>
            </div>

            <div class="row form-inputs" id="crd">
              <div class="col-sm-12 col-md-6">
                <label for="cw">Empresa Trabaja</label>
                <input type="text" id="cw" name="cw">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="area">??rea/Cargo</label>
                <input type="text" id="area" name="area">
              </div>
            </div>

            <div class="row form-inputs" id="cre">
              <div class="col-sm-12 col-md-6">
                <label for="cadd">Direcci??n Empresa</label>
                <input type="text" id="cadd" name="cadd">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="city">Sector/Ciudad</label>
                <input type="text" id="city" name="city">
              </div>
            </div>

            <div class="row form-inputs" id="crf">
              <div class="col-sm-12 col-md-6">
                <label for="job">Profesi??n/Oficio/Ocup.</label>
                <input type="text" id="job" name="job">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="nationality">Nacionalidad</label>
                <input type="text" id="nationality" name="nationality">
              </div>
            </div>

            <div class="row form-inputs" id="crh">
              <h2>ESTADO CIVIL</h2>
              <div class="col-sm-3">
                <label for="solt">Solt</label>
                <input type="checkbox" name="solt" id="chkbox" value="solt">
              </div>
              <div class="col-sm-3">
                <label for="union">Uni??n Libre</label>
                <input type="checkbox" name="union" id="union" value="union">
              </div>
              <div class="col-sm-3">
                <label for="solt">Cas</label>
                <input type="checkbox" name="solt" id="chkbox" value="solt">
              </div>
              <div class="col-sm-3">
                <label for="union">Viud/a</label>
                <input type="checkbox" name="union" id="union" value="union">
              </div>
            </div>

            <div class="row form-inputs" id="cri">
              <div class="col-sm-12 col-md-6">
                <label for="tnumb">No. Tel??fono</label>
                <input type="number" id="tnumb" name="tnumb">
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="celno">No. Celular</label>
                <input type="number" id="celno" name="celno">
              </div>
            </div>

            <div class="ginfo row form-inputs" id="crj">
              <h2 class="ginfo-head">
                PERSONA EXPUESTA POLITICAMENTE (PEP)
              </h2>
              <p class="ginfo-para">De acuerdo con lo establecido en el numeral 19 del art??culo 2 de la Ley 155/17, las
                personas pol??ticamente
                expuestas (PEP) son aquellos funcionarios obligados a presentar su declaraci??n jurada de bienes conforme
                al art??culo 2 de la Ley 311-14 de declaraci??n jurada de patrimonio, y. cuando se identifiquen como
                personas
                de alto riesgo, sus conyugues, parejas y dem??s personas con las que un PEP mantenga parentesco por
                Consanguineidad o afinidad hasta el segundo grado.</p>
            </div>

            <div class="row form-inputs" id="crk">
              <div class="col-md-6">
                <p class="question">
                  ??Es o fue empleado de Gobierno
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="radio" class="yes" name="yes" value="yes">
                    ?? <label for="yes">Si</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" class="no" name="no" value="No">
                    ?? <label for="no">No</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <p class="question">
                  ??Ejerce alg??n grado de poder pol??tico?
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="radio" class="yes" name="yes" value="yes">
                    ?? <label for="yes">Si</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" class="no" name="no" value="No">
                    ?? <label for="no">No</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-inputs" id="crl">
              <div class="col-md-6">
                <p class="question">
                  ??Goza usted de reconocimiento p??blico?
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="radio" class="yes" name="yes" value="yes">
                    ?? <label for="yes">Si</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" class="no" name="no" value="No">
                    ?? <label for="no">No</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <p class="question">
                  ??Existe alg??n v??nculo familiar con un PEP?
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="radio" class="yes" name="yes" value="yes">
                    ?? <label for="yes">Si</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" class="no" name="no" value="No">
                    ?? <label for="no">No</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-inputs" id="crm">
              <div class="col-md-6" id="crma">
                <p class="question">
                  ??Es usted un PEP?
                </p>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="radio" class="yes" name="yes" value="yes">
                    ?? <label for="yes">Si</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="radio" class="no" name="no" value="No">
                    ?? <label for="no">No</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 crmb">
                <div class="row">
                  <div class="col-md-6">
                    <label for="actchrg">Cargo Actual</label>
                    <input type="text" id="actchrg" name="actchrg"><br>
                    <label for="actdate">Fecha</label>
                    <input type="date" id="actdate" name="actdate">
                  </div>
                  <div class="col-md-6">
                    <label for="prevchrg">Cargo Anterior</label>
                    <input type="text" id="prevchrg" name="prevchrg"><br>
                    <label for="prevdate">Fecha</label>
                    <input type="date" id="prevdate" name="prevdate">
                  </div>
                </div>
              </div>
            </div>

            <div class="row form-inputs" id="crn">
              <p>Yo, <input type="text" name="fblank" id="fblank">; Documento de identidad n??mero<input type="text"
                  name="sblank" id="sblank">actuando a nombre propio y
                voluntariamente, certifico que todo lo consignado es cierto, declaro que tanto el origen de los fondos
                para esta operaci??n:
                como mis actividades, mi profesi??n y oficio son l??citos, los ejerzo dentro de un marco legal y los
                recursos que poseo no
                provienen de actividades il??citas, ni se destinar??n a financiar terrorismo o violan los establecido por
                el c??digo penal o
                Las Leyes de la Rep??blica Dominicana. Conozco, declaro y acepto que MARINO MARRERO y sus Agentes est??n
                en la
                obligaci??n legal de solicitar las aclaraciones que estimen pertinentes, ante el caso de que se presenten
                circunstancias en
                en base a las cuales la Unidad de An??lisis Financiero (UAF), pueda tener dudas razonables sobre mis
                operaciones, as??
                como del origen de mis activos, evento ante el cual suministrar??a las aclaraciones pertinentes. El
                origen de los fondos
                para esta operaci??n es:<input type="text" name="thblank" id="thblank"></p>
            </div>

            <div class="row form-inputs" id="cro">
              <div class="col-md-12">
                <p><b>Autorizo a la UAF y al ente encargado de la Supervisi??n a los Sujetos Obligados No Financieros a
                    corroborar la
                    veracidad de la informaci??n aqu?? suministrada y a obtener y solicitar cualquier informaci??n
                    adicional</b></p>
              </div>
            </div>

            <div class="row form-inputs" id="crp">
              <div class="col-md-4 pt-3">
                <div class="three-row">
                  <label for="prpby">Preparado por</label>
                  <input type="text" id="prpby" name="prpby">
                </div>
                <div class="three-row">
                  <label for="agent">Agente</label>
                  <input type="text" id="agent" name="agent">
                </div>
                <div class="three-row">
                  <label for="ofc">Oficina</label>
                  <input type="text" id="ofc" name="ofc">
                  <p>Mercantil</p>
                </div>

              </div>
              <div class="col-md-4">
                <label for="firm">Firma</label>
                <input type="text" id="firm" name="firm">
              </div>
              <div class="col-md-4">
                <label for="elabdate">FECHA DE ELABORACION</label>
                <input type="date" id="elabdate" name="elabdate">
              </div>
            </div>

            <div class="row form-inputs" id="crq">
              <div class="col-md-12">
                <p><small>Informaci??n adicional <b>info@mercantil.com.do</b></small></p>
              </div>
            </div>

            <div class="row form-inputs" id="btn">
              <div class="button-submit">
                <input class="btn btn-primary" type="submit" value="Submit">
              </div>
            </div>

            <div class="row form-inputs" id="crr">
              <div class="col-md-12">
                <p><b>MARINO MARRERO</b> www.marrero.com.do / www.mercantil.com.do</p>
              </div>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>