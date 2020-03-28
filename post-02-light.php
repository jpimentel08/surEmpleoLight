<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sur Empleo</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <main>
      <!-- header portada -->
      <?php include "include/header-portada-postulante.php" ?>
    </main>
    <section class="opciones-usuarios">

      <section class="contennnt-servvv__a">
        <section class="spacccc-logg-reggg1__a">
            <div class="container">
              <div class="row">

                <!--DATOS BASICOS-->
                <div class="col-md-12 eeew-ingrrr__a">
                  <h2>Datos Básicos</h2>
                </div>
                <div class="col-md-12">
                  <div class="boxxx-infforrr1__a">
                    <h3>Datos Personales Básicos</h3>
                  </div>
                  <div class="clearfix"> </div>
                    <div class="row ediciones">

                      <!--Formulario Datos Basicos-->
                      <div class="row cont-cv color-f">

                        <!-- Inicio FORM -->
                        <form method="post" action="connectDB/register-postulante.php" enctype="multipart/form-data">

                          <!--Seccion Izquierda-->
                          <div class="col-md-6">
                            <div class="ssspccc-inpusssess1__a pasos-reg">

                              <!--Nombre-->
                              <div class="inpppputt1__a">
                                <label>Nombre *:</label>
                                  <input type="text" id="name" name="name" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." required>
                              </div>

                              <!--Apellido-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Apellidos *:</label>
                                <input type="text" id="last_name" name="last_name" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." required>
                              </div>

                              <!--Nacionalidad-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Nacionalidad *:</label>
                                <select name="nation" style="width:60%">
                                  <option value="Afganistan">Afganistan</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Alemania">Alemania</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguila">Anguila</option>
                                  <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                  <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                                  <option value="Antártida">Antártida</option>
                                  <option value="Arabia Saudita">Arabia Saudita</option>
                                  <option value="Archipiélago Svalbard e Isla de Jan Mayen">Archipiélago Svalbard e Isla de Jan Mayen</option>
                                  <option value="Argelia">Argelia</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaiyán">Azerbaiyán</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahréin">Bahréin</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belice">Belice</option>
                                  <option value="Benín">Benín</option>
                                  <option value="Bermudas">Bermudas</option>
                                  <option value="Bielorrusia">Bielorrusia</option>
                                  <option value="Birmania">Birmania</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia y Herzergovina">Bosnia y Herzergovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Brasil">Brasil</option>
                                  <option value="Brunéi">Brunéi</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Bután">Bután</option>
                                  <option value="Bélgica">Bélgica</option>
                                  <option value="Cabo Verde">Cabo Verde</option>
                                  <option value="Camboya">Camboya</option>
                                  <option value="Camerún">Camerún</option>
                                  <option value="Canadá">Canadá</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Chipre">Chipre</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoras">Comoras</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Corea">Corea</option>
                                  <option value="Corea del Norte">Corea del Norte</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Costa de Marfil">Costa de Marfil</option>
                                  <option value="Croacia">Croacia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Dinamarca">Dinamarca</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egipto">Egipto</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Eslovenia">Eslovenia</option>
                                  <option value="España">España</option>
                                  <option value="Estado de la Ciudad del Vaticano (Santa Sede)">Estado de la Ciudad del Vaticano (Santa Sede)</option>
                                  <option value="Estados Federales de Micronesia">Estados Federales de Micronesia</option>
                                  <option value="Estados Unidos">Estados Unidos</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Etiopía">Etiopía</option>
                                  <option value="Federación Rusa">Federación Rusa</option>
                                  <option value="Filipinas">Filipinas</option>
                                  <option value="Finlandia">Finlandia</option>
                                  <option value="Fiyi">Fiyi</option>
                                  <option value="Francia">Francia</option>
                                  <option value="Gabón">Gabón</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Granada">Granada</option>
                                  <option value="Grecia">Grecia</option>
                                  <option value="Groenlandia">Groenlandia</option>
                                  <option value="Guadalupe">Guadalupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guayana Francesa">Guayana Francesa</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haití">Haití</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungría">Hungría</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Irak">Irak</option>
                                  <option value="Irlanda">Irlanda</option>
                                  <option value="Irán">Irán</option>
                                  <option value="Isla Bouvet">Isla Bouvet</option>
                                  <option value="Isla Norfolk">Isla Norfolk</option>
                                  <option value="Isla de Navidad">Isla de Navidad</option>
                                  <option value="Islandia">Islandia</option>
                                  <option value="Islas Caimán">Islas Caimán</option>
                                  <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
                                  <option value="Islas Cook">Islas Cook</option>
                                  <option value="Islas Feroe">Islas Feroe</option>
                                  <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                                  <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                  <option value="Islas Malvinas">Islas Malvinas</option>
                                  <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                  <option value="Islas Marshall">Islas Marshall</option>
                                  <option value="Islas Pitcairn">Islas Pitcairn</option>
                                  <option value="Islas Salomón">Islas Salomón</option>
                                  <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                                  <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                                  <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                                  <option value="Islas de Åland ">Islas de Åland </option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italia">Italia</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japón">Japón</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordania">Jordania</option>
                                  <option value="Kazajstán">Kazajstán</option>
                                  <option value="Kenia">Kenia</option>
                                  <option value="Kirguistán">Kirguistán</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Kosovo">Kosovo</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Laos">Laos</option>
                                  <option value="Lesoto">Lesoto</option>
                                  <option value="Letonia">Letonia</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libia">Libia</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lituania">Lituania</option>
                                  <option value="Luxemburgo">Luxemburgo</option>
                                  <option value="Líbano">Líbano</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia">Macedonia</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malasia">Malasia</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Maldivas">Maldivas</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marruecos">Marruecos</option>
                                  <option value="Martinica">Martinica</option>
                                  <option value="Mauricio">Mauricio</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Moldavia">Moldavia</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="México">México</option>
                                  <option value="Mónaco">Mónaco</option>
                                  <option value="Naciones del Caribe">Naciones del Caribe</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Noruega">Noruega</option>
                                  <option value="Nueva Caledonia">Nueva Caledonia</option>
                                  <option value="Nueva Zelanda">Nueva Zelanda</option>
                                  <option value="Níger">Níger</option>
                                  <option value="Omán">Omán</option>
                                  <option value="Pakistán">Pakistán</option>
                                  <option value="Palaos">Palaos</option>
                                  <option value="Panamá">Panamá</option>
                                  <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Países Bajos">Países Bajos</option>
                                  <option value="Perú">Perú</option>
                                  <option value="Polinesia Francesa">Polinesia Francesa</option>
                                  <option value="Polonia">Polonia</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reino Unido">Reino Unido</option>
                                  <option value="República Centroafricana">República Centroafricana</option>
                                  <option value="República Checa">República Checa</option>
                                  <option value="República Democrática del Congo">República Democrática del Congo</option>
                                  <option value="República Dominicana">República Dominicana</option>
                                  <option value="República Eslovaca">República Eslovaca</option>
                                  <option value="República de Chad">República de Chad</option>
                                  <option value="República de Djibouti">República de Djibouti</option>
                                  <option value="Reunión">Reunión</option>
                                  <option value="Ruanda">Ruanda</option>
                                  <option value="Rumanía">Rumanía</option>
                                  <option value="Sahara Occidental">Sahara Occidental</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="Samoa Americana">Samoa Americana</option>
                                  <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="San Pedro y Miguelón">San Pedro y Miguelón</option>
                                  <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                  <option value="Santa Helena">Santa Helena</option>
                                  <option value="Santa Lucía">Santa Lucía</option>
                                  <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Serbia y Montenegro">Serbia y Montenegro</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leona">Sierra Leona</option>
                                  <option value="Singapur">Singapur</option>
                                  <option value="Siria">Siria</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Suazilandia">Suazilandia</option>
                                  <option value="Sudáfrica">Sudáfrica</option>
                                  <option value="Sudán">Sudán</option>
                                  <option value="Sudán del Sur ">Sudán del Sur </option>
                                  <option value="Suecia">Suecia</option>
                                  <option value="Suiza">Suiza</option>
                                  <option value="Surinam">Surinam</option>
                                  <option value="Tailandia">Tailandia</option>
                                  <option value="Taiwán">Taiwán</option>
                                  <option value="Tanzania">Tanzania</option>
                                  <option value="Tayikistán">Tayikistán</option>
                                  <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                                  <option value="Territorios Palestinos">Territorios Palestinos</option>
                                  <option value="Tierras Australes y Antártidas Francesas">Tierras Australes y Antártidas Francesas</option>
                                  <option value="Timor Oriental">Timor Oriental</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                  <option value="Turkmenistán">Turkmenistán</option>
                                  <option value="Turquía">Turquía</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Túnez">Túnez</option>
                                  <option value="Ucrania">Ucrania</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistán">Uzbekistán</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Vietnam">Vietnam</option>
                                  <option value="Wallis y Futuna">Wallis y Futuna</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabue">Zimbabue</option>
                                  <option value="Otro">Otro</option>
                                </select>
                              </div>

                              <!--Rut o Pasaporte-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Rut o Pasaporte *:</label>
                                <input type="text" name="rut" id="rut" value="" class="for-rut1" pattern="[0-9.!#$%&’*+/=?^_`{|}~-]{12,12}" title="Solo se permiten Numeros. Ejm: 12.345.678-9" required>
                              </div>

                              <!--Tipo de Visa-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Tipo de Visa *:</label>
                                  <select name="visa" id="visa" style="width:60%">
                                    <option value="Sujeta a Contrato">Sujeta a Contrato</option>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Temporaria">Temporaria</option>
                                    <option value="Residencia">Residencia</option>
                                    <option value="Otra">Otra</option>
                                  </select>
                              </div>

                              <!--Permiso de Trabajo-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Permiso de Trabajo *:</label>
                                <select name="perm_job" id="perm_job" style="width:60%">
                                  <option value="Si Poseo">Si Poseo</option>
                                  <option value="No Poseo">No Poseo</option>
                                  <option value="Cadudado - Proceso Renovación">Caducado - Proceso Renovación</option>
                                  <option value="Residencia">Residencia</option>
                                  <option value="Otra">Otra</option>
                                </select>
                              </div>

                              <!--Email-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Email *:</label>
                                <input type="email" id="email" name="email" value="" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                              </div>

                              <!--Confirmar Email-->
                              <div class="inpppputt1__a">
                                <label>Repetir Email *:</label>
                                <input type="email" id="repeat_email" name="repeat_email" value="" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                              </div>

                              <!--Fecha Nacimiento / Gender-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Fecha de Nacimiento *:</label>
                                <div class="box-for-rut__a">
                                  <input type="date" id="date_birth" name="date_birth" value="" class="for-fnac" required>
                                  <span style="margin: auto;"> </span>
                                  <label>Sexo*:</label>
                                  <div class="for-sex">
                                    <input type="radio" id="gender" name="gender" value="Masculino" required><label>M </label>
                                    <input type="radio" id="gender" name="gender" value="Femenino"><label>F </label>
                                  </div>
                                </div>
                              </div>

                              <!--Foto-->
                              <div class="inpppputt1__a">
                                <label>Foto :</label>
                                <input type="file" name="archivo[]" multiple="multiple" required>
                              </div>
                              <div class="inpppputt1__a">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="thumbnail" style="width:100px; margin-right:20px;"> <img src="img/default-user-image.png" alt="Lights"></div>
                                      </div>
                                      <div class="col-md-1">
                                        <button type="submit" class="btn btn-default" name="button" style="margin-left:1em;">Eliminar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--Seccion Derecha-->
                          <div class="col-md-6">
                            <div class="ssspccc-inpusssess1__a">

                              <!--Pais Residencia-->
                              <div class="inpppputt1__a">
                                <label>País Residencia *:</label>
                                <select name="country_resid" style="width:60%">
                                    <option value="Afganistan">Afganistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Alemania">Alemania</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguila">Anguila</option>
                                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                    <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                                    <option value="Antártida">Antártida</option>
                                    <option value="Arabia Saudita">Arabia Saudita</option>
                                    <option value="Archipiélago Svalbard e Isla de Jan Mayen">Archipiélago Svalbard e Isla de Jan Mayen</option>
                                    <option value="Argelia">Argelia</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaiyán">Azerbaiyán</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahréin">Bahréin</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belice">Belice</option>
                                    <option value="Benín">Benín</option>
                                    <option value="Bermudas">Bermudas</option>
                                    <option value="Bielorrusia">Bielorrusia</option>
                                    <option value="Birmania">Birmania</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia y Herzergovina">Bosnia y Herzergovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Brunéi">Brunéi</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Bután">Bután</option>
                                    <option value="Bélgica">Bélgica</option>
                                    <option value="Cabo Verde">Cabo Verde</option>
                                    <option value="Camboya">Camboya</option>
                                    <option value="Camerún">Camerún</option>
                                    <option value="Canadá">Canadá</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Chipre">Chipre</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoras">Comoras</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Corea">Corea</option>
                                    <option value="Corea del Norte">Corea del Norte</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Costa de Marfil">Costa de Marfil</option>
                                    <option value="Croacia">Croacia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Dinamarca">Dinamarca</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egipto">Egipto</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Eslovenia">Eslovenia</option>
                                    <option value="España">España</option>
                                    <option value="Estado de la Ciudad del Vaticano (Santa Sede)">Estado de la Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="Estados Federales de Micronesia">Estados Federales de Micronesia</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Etiopía">Etiopía</option>
                                    <option value="Federación Rusa">Federación Rusa</option>
                                    <option value="Filipinas">Filipinas</option>
                                    <option value="Finlandia">Finlandia</option>
                                    <option value="Fiyi">Fiyi</option>
                                    <option value="Francia">Francia</option>
                                    <option value="Gabón">Gabón</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Grecia">Grecia</option>
                                    <option value="Groenlandia">Groenlandia</option>
                                    <option value="Guadalupe">Guadalupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guayana Francesa">Guayana Francesa</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haití">Haití</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungría">Hungría</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Irak">Irak</option>
                                    <option value="Irlanda">Irlanda</option>
                                    <option value="Irán">Irán</option>
                                    <option value="Isla Bouvet">Isla Bouvet</option>
                                    <option value="Isla Norfolk">Isla Norfolk</option>
                                    <option value="Isla de Navidad">Isla de Navidad</option>
                                    <option value="Islandia">Islandia</option>
                                    <option value="Islas Caimán">Islas Caimán</option>
                                    <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
                                    <option value="Islas Cook">Islas Cook</option>
                                    <option value="Islas Feroe">Islas Feroe</option>
                                    <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                                    <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                    <option value="Islas Malvinas">Islas Malvinas</option>
                                    <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                    <option value="Islas Marshall">Islas Marshall</option>
                                    <option value="Islas Pitcairn">Islas Pitcairn</option>
                                    <option value="Islas Salomón">Islas Salomón</option>
                                    <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                                    <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                                    <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                                    <option value="Islas de Åland ">Islas de Åland </option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italia">Italia</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japón">Japón</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordania">Jordania</option>
                                    <option value="Kazajstán">Kazajstán</option>
                                    <option value="Kenia">Kenia</option>
                                    <option value="Kirguistán">Kirguistán</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lesoto">Lesoto</option>
                                    <option value="Letonia">Letonia</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libia">Libia</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lituania">Lituania</option>
                                    <option value="Luxemburgo">Luxemburgo</option>
                                    <option value="Líbano">Líbano</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malasia">Malasia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldivas">Maldivas</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marruecos">Marruecos</option>
                                    <option value="Martinica">Martinica</option>
                                    <option value="Mauricio">Mauricio</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Moldavia">Moldavia</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="México">México</option>
                                    <option value="Mónaco">Mónaco</option>
                                    <option value="Naciones del Caribe">Naciones del Caribe</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Noruega">Noruega</option>
                                    <option value="Nueva Caledonia">Nueva Caledonia</option>
                                    <option value="Nueva Zelanda">Nueva Zelanda</option>
                                    <option value="Níger">Níger</option>
                                    <option value="Omán">Omán</option>
                                    <option value="Pakistán">Pakistán</option>
                                    <option value="Palaos">Palaos</option>
                                    <option value="Panamá">Panamá</option>
                                    <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Países Bajos">Países Bajos</option>
                                    <option value="Perú">Perú</option>
                                    <option value="Polinesia Francesa">Polinesia Francesa</option>
                                    <option value="Polonia">Polonia</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reino Unido">Reino Unido</option>
                                    <option value="República Centroafricana">República Centroafricana</option>
                                    <option value="República Checa">República Checa</option>
                                    <option value="República Democrática del Congo">República Democrática del Congo</option>
                                    <option value="República Dominicana">República Dominicana</option>
                                    <option value="República Eslovaca">República Eslovaca</option>
                                    <option value="República de Chad">República de Chad</option>
                                    <option value="República de Djibouti">República de Djibouti</option>
                                    <option value="Reunión">Reunión</option>
                                    <option value="Ruanda">Ruanda</option>
                                    <option value="Rumanía">Rumanía</option>
                                    <option value="Sahara Occidental">Sahara Occidental</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa Americana">Samoa Americana</option>
                                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="San Pedro y Miguelón">San Pedro y Miguelón</option>
                                    <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                    <option value="Santa Helena">Santa Helena</option>
                                    <option value="Santa Lucía">Santa Lucía</option>
                                    <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Serbia y Montenegro">Serbia y Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leona">Sierra Leona</option>
                                    <option value="Singapur">Singapur</option>
                                    <option value="Siria">Siria</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Suazilandia">Suazilandia</option>
                                    <option value="Sudáfrica">Sudáfrica</option>
                                    <option value="Sudán">Sudán</option>
                                    <option value="Sudán del Sur ">Sudán del Sur </option>
                                    <option value="Suecia">Suecia</option>
                                    <option value="Suiza">Suiza</option>
                                    <option value="Surinam">Surinam</option>
                                    <option value="Tailandia">Tailandia</option>
                                    <option value="Taiwán">Taiwán</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Tayikistán">Tayikistán</option>
                                    <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                                    <option value="Territorios Palestinos">Territorios Palestinos</option>
                                    <option value="Tierras Australes y Antártidas Francesas">Tierras Australes y Antártidas Francesas</option>
                                    <option value="Timor Oriental">Timor Oriental</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                    <option value="Turkmenistán">Turkmenistán</option>
                                    <option value="Turquía">Turquía</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Túnez">Túnez</option>
                                    <option value="Ucrania">Ucrania</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistán">Uzbekistán</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Wallis y Futuna">Wallis y Futuna</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabue">Zimbabue</option>
                                    <option value="Otro">Otro</option>
                                </select>
                              </div>

                              <!--Telefono-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Telefono :</label>
                                <input type="tel" id="phone" name="phone" value="" pattern="[0-9+]{13,13}" title="Solo se permiten Numeros. Ejm: +56123456789" required>
                              </div>

                              <!--Celular-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Celular *:</label>
                                <input type="text" id="cell_phone" name="cell_phone" value="" pattern="[0-9+]{13,13}" title="Solo se permiten Numeros. Ejm: +56123456789" required>
                              </div>

                              <!--Trabajo Actual-->
                              <div class="inpppputt1__a pasos-reg">
                                <label>Trabajando Actualmente *:</label>
                                <div class="box-for-rut__a">
                                  <div class="for-sex">
                                    <input type="radio" id="actual_job" name="actual_job" value="Si" required><label>Si </label>
                                    <span style="margin: auto;"> </span>
                                    <input type="radio" id="actual_job" name="actual_job" value="No"><label>No </label>
                                  </div>
                                </div>
                              </div>

                              <!--Empresa Actual-->
                              <div style="border:1px solid #ddd; padding:.5em; margin-bottom:.5em;">
                                <div class="inpppputt1__a pasos-reg">
                                  <label>Empresa Actual *:</label>
                                  <input type="text" id="company" name="company" value="" placeholder="Empresa, Institución, Independiente" title="Por favor ingresar empresa." required>
                                </div>

                                <!--Desde-->
                                <div class="inpppputt1__a pasos-reg">
                                  <label>Desde *: </label>
                                  <div style="width:60%;">
                                    <select name="since_month" style="width:37%;">
                                      <option value="Enero">Enero</option>
                                      <option value="Febrero">Febrero </option>
                                      <option value="Marzo">Marzo </option>
                                      <option value="Abril">Abril </option>
                                      <option value="Mayo">Mayo </option>
                                      <option value="Junio">Junio </option>
                                      <option value="Julio">Julio </option>
                                      <option value="Agosto">Agosto </option>
                                      <option value="Septiembre">Septiembre </option>
                                      <option value="Octubre">Octubre </option>
                                      <option value="Noviembre">Noviembre </option>
                                      <option value="Diciembre">Diciembre </option>
                                    </select>
                                    <select name="since_year" style="width:24%;">
                                      <option value="2019">2019</option>
                                      <option value="2018">2018</option>
                                      <option value="2017">2017</option>
                                      <option value="2016">2016</option>
                                      <option value="2015">2015</option>
                                      <option value="2014">2014</option>
                                      <option value="2013">2013</option>
                                      <option value="2012">2012</option>
                                      <option value="2011">2011</option>
                                      <option value="2010">2010</option>
                                      <option value="2009">2009</option>
                                      <option value="2008">2008</option>
                                      <option value="2007">2007</option>
                                      <option value="2006">2006</option>
                                      <option value="2005">2005</option>
                                      <option value="2004">2004</option>
                                      <option value="2003">2003</option>
                                      <option value="2002">2002</option>
                                      <option value="2001">2001</option>
                                      <option value="2000">2000</option>
                                      <option value="1999">1999</option>
                                      <option value="1998">1998</option>
                                      <option value="1997">1997</option>
                                      <option value="1996">1996</option>
                                      <option value="1995">1995</option>
                                      <option value="1994">1994</option>
                                      <option value="1993">1993</option>
                                      <option value="1992">1992</option>
                                      <option value="1991">1991</option>
                                      <option value="1990">1990</option>
                                    </select>
                                    <p style="text-align:left; display:inline-block; margin-left:1em;">A la fecha</p>
                                  </div>
                                </div>

                                <!--Cargo Actual-->
                                <div class="inpppputt1__a pasos-reg">
                                  <label>Cargo Actual *:</label>
                                  <input type="text" id="position_job" name="position_job" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras. Ejm: Ingeniero Industrial." required>
                                </div>

                                <!--Adjuntar CV-->
                                <div class="inpppputt1__a pasos-reg">
                                  <label>Adjuntar CV :</label>
                                  <input type="file" id="cv" name="cv" value="" required>
                                </div>
                                <div class="inpppputt1__a pasos-reg">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-8">
                                          <div class="thumbnail" style="width:100px; margin-right:20px;"> <img src="img/icon-pdf.jpg" alt="Lights"></div>
                                        </div>
                                        <div class="col-md-1">
                                          <button type="submit" class="btn btn-default" name="button" style="margin-left:1em;">Eliminar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                      </div>
                    </div>
                </div>

                <!--CONTRASEÑA-->
                <div class="col-md-12">
                  <div class="boxxx-infforrr1__a">
                    <h3>Contraseña y Pregunta Seguridad</h3>
                  </div>
                  <div class="row ediciones">

                    <!--Formulario Contraseña-->
                    <div class="row cont-cv color-f">
                      <div class="col-md-6">
                        <div class="ssspccc-inpusssess1__a pasos-reg">

                          <!-- Contraseña-->
                          <div class="inpppputt1__a">
                            <label for="password">Contraseña*:</label>
                            <input type="password" id="psw" name="password" >
                          </div>

                          <!-- Contraseña-->
                          <div class="inpppputt1__a">
                            <label>Repetir Contraseña*: </label>
                            <input type="password" name="password2" value="">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="ssspccc-inpusssess1__a pasos-reg">
                          <div class="inpppputt1__a">
                            <label>1º Pregunta Seguridad*: </label>
                            <input type="text" name="question1" value="" placeholder="Ej: Profesor que más te marcó">
                          </div>
                          <div class="inpppputt1__a">
                            <label>Respuesta Seguridad*: </label>
                            <input type="text" name="answer1" value="">
                          </div>
                        </div>
                        <div class="ssspccc-inpusssess1__a pasos-reg">
                          <div class="inpppputt1__a">
                            <label>2º Pregunta Seguridad*: </label>
                            <input type="text" name="question2" value="" placeholder="Ej: Ídolo Deportivo">
                          </div>
                          <div class="inpppputt1__a">
                            <label>Respuesta Seguridad*: </label>
                            <input type="text" name="answer2" value="">
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </section>

      <!-- footer portada -->
      <?php include "include/footer-postulante.php" ?>
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jmio.js"></script>
    </section>
</body>
</html>
