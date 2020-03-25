<?php
@ob_start();
session_start();
?>
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
    <?php include "include/header-postulante-a.php" ?>    
  </main>
<?php
  if (isset($_SESSION['loggedin'])) {  
  }else {
    header("location:connectDB/postulante-session.php");
    exit;
  }
  // checking the time now when check-login.php page starts
  $now = time();           
    if ($now > $_SESSION['expire']) {
      session_destroy();
      header("location:connectDB/postulante-session-expire.php");
      /*echo "<div class='alert alert-danger mt-4' role='alert'>
            <h4>Your session has expire!</h4>
            <p><a href='login.html'>Login Here</a></p></div>";*/
            exit;
      } ?>
<!--conexion BD-->
<?php

   	/*Conexion Hosting*/
     $servernameH = "localhost";
     $databaseH = "sur8emp9_db_sur_empleo";
     $usernameH = "sur8emp9_adminDB";
   $passwordH = "3M-zHFu,%0Cb";
   
   /*Conexion Local Ruben*/
     $servernameRP = "localhost";
     $databaseRP = "sur8emp9_db_sur_empleo";
     $usernameRP = "root";
     $passwordRP = "";
   
   /*Conexion Local*/
   $servernameJP = "localhost";
   $databaseJP = "sur8emp9_db_sur_empleo";
   $usernameJP = "jpimentel";
   $passwordJP = "1234qwas";
 
   // Create connection
   //$conn = mysqli_connect($servernameH, $usernameH, $passwordH, $databaseH); //conexion Hosting
   $conn = mysqli_connect($servernameRP, $usernameRP, $passwordRP, $databaseRP); //conexion Ruben
   //$conn = mysqli_connect($servernameJP, $usernameJP, $passworJP, $databaseJP); //conexion Jose

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
      
  // data sent from form login.html 
  $email = $_SESSION['email']; 

  //echo $email;

  // Query sent to database
  $result = mysqli_query($conn, "SELECT * FROM se_user WHERE se_user_email = '$email'");
  //echo "$result";
      
  // Variable $row hold the result of the query
          
  // Variable $hash hold the password hash on database
  while($row = mysqli_fetch_array($result)){
    $id = $row['se_user_id'];
    $name = $row['se_user_name'];
    $last_name = $row['se_user_last_name'];
    $nation_birth = $row['se_user_nation'];
    $rut = $row['se_user_rut'];
    $visa = $row['se_user_visa'];
    $type_visa = $row['se_user_type_visa'];
    $date_birth = $row['se_user_date_birth'];
    $gender = $row['se_user_gender'];
    $country_resid = $row['se_user_country_resid'];
    $phone = $row['se_user_telf'];
    $cell_phone = $row['se_user_cell'];
    $actual_job = $row['se_user_job_actual'];
    $position = $row['se_user_job_position'];
    $job_company = $row['se_user_job_company'];
    $job_date = $row['se_user_job_date'];
    $job_year = $row['se_user_job_year']; 
    $photo = $row['se_user_photo']; 
    $cv = $row['se_user_cv'];   
  }

  //Busqueda datos personal_data
  $result2 = mysqli_query($conn, "SELECT * FROM se_personal_data WHERE se_user_id='$id'");

  while($row2 = mysqli_fetch_array($result2)){
    $id = $row2['se_user_id'];
    $civil_status = $row2['se_personal_data_status'];
    $citizen = $row2['se_personal_data_status_citizen'];
    $add1 = $row2['se_personal_data_address1'];
    $region1 = $row2['se_personal_data_region1'];
    $city1 = $row2['se_personal_data_city1'];
    $comuna1 = $row2['se_personal_data_comuna1'];
    $add2 = $row2['se_personal_data_address2'];
    $region2 = $row2['se_personal_data_region2'];
    $city2 = $row2['se_personal_data_city2'];
    $comuna2 = $row2['se_personal_data_comuna2'];            
  }

  //Busqueda datos se_education_basic
  $result3 = mysqli_query($conn, "SELECT * FROM se_education_data_basic WHERE se_user_id='$id'");

  while($row3 = mysqli_fetch_array($result3)){
    $education_basic_user_id = $row3['se_user_id'];
    $education_basic_institution= $row3['se_education_data_institution'];
    $education_basic_region = $row3['se_education_data_region'];
    $education_basic_last_year = $row3['se_education_data_last_year'];
  }

  //Busqueda datos se_education_superior
  $result4 = mysqli_query($conn, "SELECT * FROM se_education_data_superior WHERE se_user_id='$id'");

  while($row4 = mysqli_fetch_array($result4)){
    $education_superior_user_id = $row4['se_user_id'];
    $education_superior_institution= $row4['se_education_data_institution'];
    $education_superior_career = $row4['se_education_data_career'];
    $education_superior_mention = $row4['se_education_data_mention'];
    $education_superior_status = $row4['se_education_data_status'];
    $education_superior_begin_year = $row4['se_education_data_begin_year'];
    $education_superior_last_year = $row4['se_education_data_last_year'];
    $education_superior_region = $row4['se_education_data_region'];
  }

    //Busqueda datos se_education_postgrade
  $result5 = mysqli_query($conn, "SELECT * FROM se_education_data_postgrade WHERE se_user_id='$id'");

  while($row5 = mysqli_fetch_array($result5)){
    $education_postgrade_user_id = $row5['se_user_id'];
    $education_postgrade_institution= $row5['se_education_data_institution'];
    $education_postgrade_type_study = $row5['se_education_data_type_study'];
    $education_postgrade_mention = $row5['se_education_data_mention'];
    $education_postgrade_description = $row5['se_education_data_description'];
    $education_postgrade_status = $row5['se_education_data_status'];
    $education_postgrade_begin_year = $row5['se_education_data_begin_year'];
    $education_postgrade_last_year = $row5['se_education_data_last_year'];
    $education_postgrade_region = $row5['se_education_data_region'];
  }

  //Busqueda datos se_education_course
  $result6 = mysqli_query($conn, "SELECT * FROM se_education_data_course WHERE se_user_id='$id'");

  while($row6 = mysqli_fetch_array($result6)){
    $education_course_user_id = $row6['se_user_id'];
    $education_course_institution= $row6['se_education_data_institution'];
    $education_course_type_study = $row6['se_education_type'];
    $education_course_mention = $row6['se_education_mention'];
    $education_course_description = $row6['se_education_description'];
  }

  //Busqueda datos se_work_experience_actual
  $result7 = mysqli_query($conn, "SELECT * FROM se_work_experience_actual WHERE se_user_id='$id'");

  while($row7 = mysqli_fetch_array($result7)){
    $work_actual_position = $row7['se_work_actual_position'];
    $work_actual_area= $row7['se_work_actual_area'];
    $work_actual_area_other = $row7['se_work_actual_area_other'];
    $work_actual_company = $row7['se_work_actual_company'];
    $work_actual_company_sector = $row7['se_work_actual_company_sector'];
    $work_actual_company_sector_other = $row7['se_work_actual_company_sector_other'];
    $work_actual_logo = $row7['se_work_actual_logo'];
    $work_actual_since_month = $row7['se_work_actual_since_month'];
    $work_actual_since_year = $row7['se_work_actual_since_year'];
    $work_actual_last_month = $row7['se_work_actual_last_month'];
    $work_actual_last_year = $row7['se_work_actual_last_year'];
    $work_actual_region = $row7['se_work_actual_region'];
    $work_actual_functions = $row7['se_work_actual_functions'];
    $work_actual_goals = $row7['se_work_actual_goals'];
  }

  //Busqueda informacion referencias
  $resultref = mysqli_query($conn, "SELECT * FROM se_information_references WHERE se_user_id='$id'");

   //Busqueda informacion referencias
  $resultref2 = mysqli_query($conn, "SELECT * FROM se_information_references WHERE se_user_id='$id'");
    
  //Busqueda informacion lenguage
  $result13 = mysqli_query($conn, "SELECT * FROM se_information_lenguage WHERE se_user_id='$id'");

  //Busqueda informacion software
  $result14 = mysqli_query($conn, "SELECT * FROM se_information_software WHERE se_user_id='$id'");

  //Busqueda informacion software
  $result15 = mysqli_query($conn, "SELECT * FROM se_information_software WHERE se_user_id='$id'");

   //Busqueda informacion lenguage
  $result16 = mysqli_query($conn, "SELECT * FROM se_information_lenguage WHERE se_user_id='$id'");

     //Busqueda informacion habilitys
  $result17 = mysqli_query($conn, "SELECT * FROM se_information_habilitys WHERE se_user_id='$id'");

  while($row17 = mysqli_fetch_array($result17)){
    $se_user_id = $row17['se_user_id'];
    $se_information_hability= $row17['se_information_hability'];
  }
     //Busqueda datos region 
  $result9 = mysqli_query($conn, "SELECT se_region_id, se_region FROM se_region ORDER BY se_region_id");

  //Busqueda datos region 2
  $result10 = mysqli_query($conn, "SELECT se_region_id, se_region FROM se_region ORDER BY se_region_id");

  //busqueda datos resultado direccion principal
  $result11 = mysqli_query($conn, "SELECT se_personal_data.se_personal_data_region1, se_personal_data.se_personal_data_city1, se_personal_data.se_personal_data_comuna1, se_region.se_region_id, se_region.se_region, se_ciudad.se_ciudad_id, se_ciudad.se_ciudad, se_comuna.se_comuna_id, se_comuna.se_comuna FROM se_personal_data, se_region, se_ciudad, se_comuna WHERE se_personal_data.se_personal_data_region1 = se_region.se_region_id && se_personal_data.se_personal_data_city1 = se_ciudad.se_ciudad_id && se_personal_data.se_personal_data_comuna1 = se_comuna.se_comuna_id && se_user_id='$id'");

  while($row11 = mysqli_fetch_array($result11)){
    $id = $row11['se_user_id'];
    $busqueda_region1 = $row11['se_region'];
    $busqueda_ciudad1 = $row11['se_ciudad'];
    $busqueda_comuna1 = $row11['se_comuna'];           
  }
  
   //Busqueda informacion referencias
  $resultref3 = mysqli_query($conn, "SELECT * FROM se_information_references WHERE se_user_id='$id'");

?>
  
<section class="contennnt-servvv__a">
  <section class="spacccc-logg-reggg1__a">
    <form>
      <div class="container">
        <div class="row">
          <div class="col-md-12 eeew-ingrrr__a">
            <h2 style="border-bottom:2px solid #FBAF17;">Mi CV</h2>
          </div>    
          <!-- nuevo contenido -->    
          <!-- estilo CONTENIDO -->
          <div class="row cont-cv">
            <div class="col-md-12">
              <div class="ediciones-botones">
              	<a href="#" data-toggle="modal" id="modal-editar" data-target="#mod-edit" class="ediciones-btn">Editar</a> 
              </div> 
              <div class="clearfix"></div>
                <div class="row formato-cv" style="margin-bottom:1em;">
           	      <div class="col-md-6 formato-campos1">
                    <div class="col-md-4">
                      <img src="img/default-user-image.png" class="img-responsive img-circle imagen-elementos2" alt=""/> 
                    </div>
                    <div class="col-md-8">
                      <h1><?php echo $name ?> <?php echo $last_name?></h1>
                      <p><?php echo $phone ?> / <?php echo $cell_phone ?></p>
                      <p><a href="#"><?php echo $email?></a></p>
                      <p>30 años</p>
                      <p><?php echo $civil_status ?> / <?php echo $nation_birth ?> / <?php echo $rut?></p>
                      <p>Dirección: <?php echo $add1 ?>, <?php echo $busqueda_comuna1 ?>, <?php echo $busqueda_ciudad1 ?>. <?php echo $busqueda_region1 ?>.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12 formato-campos2" style="margin-bottom:1em;">
                    	<h2><?php echo $position?> </h2>
                      <h3><?php echo $job_company?></h3>
                      <p>Área:</p>
                      <p>(<?php echo $job_date?> <?php echo $job_year?> - a la fecha)</p> 
                    </div>
                    <div class="col-md-12">
                    	<h2><?php echo $education_superior_career?></h2>
                      <h3><?php echo $education_superior_institution?> (titulado <?php echo $education_superior_last_year?>)</h3>
                      <p><?php echo $education_postgrade_type_study?> (<?php echo $education_postgrade_last_year?>)</p>
                      <p><?php echo $education_course_type_study?></p>
                    </div>
                  </div>
                </div>
                <div class="row cv-adjuntos">
                  <p><i class="fa fa-file-text-o"></i><strong> CV Adjunto:</strong> <i class="fa fa-file-pdf-o"></i> <a href="#">archivo-cv-correo.pdf</a> | <i class="fa fa-file-word-o"></i> <a href="#">archivo-cv-correo.doc</a> | <i class="fa fa-file-pdf-o"></i> <a href="#">archivo-cv-correo.pdf</a></p>
                </div>
                <div class="row" style="background:#fff; padding-bottom:1em;">
                  <div class="col-md-12" style="padding:0;">
                    <div class="cv-cuadros">
                      <h2>I. EXPERIENCIA LABORAL <strong>(Total: 4 años)</strong></h2>
                      <div class="ediciones-botones" style="margin:0 1em 0 0;">
                        <a href="#" data-toggle="modal" id="modal-editar" data-target="#mod-edit3" class="ediciones-btn">Editar</a> 
                      </div> 
                      <div class="clearfix"></div>
                    	<div class="col-md-2">
                        <img src="img/logoss/logo-predeterminado.jpg" width="200" height="95" alt="" class="img-responsive"/>
                        <span style="display: block; text-align: center;">(<?php echo $work_actual_company_sector?>)</span>
                      </div>
                      <div class="col-md-10">
                        	<p><strong>CARGO :</strong> <?php echo $work_actual_position?></p>
                          <p><strong>EMPRESA: </strong> <?php echo $work_actual_company?></p>
                          <p><strong>ÁREA: </strong> <?php echo $work_actual_area?></p>
                          <p><strong>FECHA: </strong> <?php echo $work_actual_since_month?> <?php echo $work_actual_since_year?> - <?php echo $work_actual_last_month?> <?php echo $work_actual_last_year?> (1 mes)</p>
                          <p><strong>REGIÓN: </strong>R. <?php echo $work_actual_region?></p>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="col-md-12 cv-cuadros">
               	    <h3><strong>FUNCIONES:</strong></h3>
                    <p><?php echo $work_actual_functions?></p></p>
                    <h3><strong>LOGROS:</strong></h3>
                    <p><?php echo $work_actual_goals?></p>
                    
                  </div>
                </div>
                <div class="row" style="background:#fff; padding-bottom:1em; margin-top:1em;">
                  <div class="col-md-12 cv-cuadros" style="padding:0;">
                    <h2>II. INFORMACIÓN ACADÉMICA</h2>
                    <div class="ediciones-botones" style="margin:0 1em 0 0;">
                      <a href="#" data-toggle="modal" id="modal-editar" data-target="#mod-edit2" class="ediciones-btn">Editar</a> 
                    </div> 
                    <div class="clearfix"></div>        
                    <div class="col-md-12">
                      <h3><strong>1. Formación Escolar</strong></h3>
                      <p><?php echo $education_basic_institution ?> / <?php echo $education_basic_region ?> / <?php echo $education_basic_last_year ?></p>
                    </div>
                    <div class="col-md-12">
                      <h3><strong>2. Formación Superior</strong></h3>
                      <p><?php echo $education_superior_status ?> / <?php echo $education_superior_career ?> / <?php echo $education_superior_mention ?> / <?php echo $education_superior_institution ?></p>
                    </div>
                    <div class="col-md-12">
                      <h3><strong>3. Post Grado</strong></h3>
                      <p><?php echo $education_postgrade_status ?> / <?php echo $education_postgrade_type_study ?> / <?php echo $education_postgrade_mention ?> / <?php echo $education_postgrade_region ?> / Entre: <?php echo $education_postgrade_begin_year ?> - <?php echo $education_postgrade_last_year ?></p>
                      <p><?php echo $education_postgrade_description ?></p>
                    </div>
                    <div class="col-md-12">
                      <h3><strong>4. Seminarios / Certificados y Cursos</strong></h3>
                      <p><?php echo $education_course_institution ?> / <?php echo $education_course_type_study ?> / <?php echo $education_course_mention ?></p>
                      <p><strong>Descripción: </strong> <?php echo $education_course_description ?></p>
                    </div>
                  </div>
                </div>
                <div class="row" style="background:#fff; padding-bottom:1em; margin-top:1em;">
                  <div class="col-md-12 cv-cuadros" style="padding:0;">
                    <h2>III. INFORMACIÓN COMPLEMENTARIA</h2>
                    <div class="ediciones-botones" style="margin:0 1em 0 0;">
                      <a href="#" data-toggle="modal" id="modal-editar" data-target="#mod-edit4" class="ediciones-btn">Editar</a> 
                    </div> 
                    <div class="clearfix"></div>        
                      <div class="col-md-12">
                        <h3><strong>1. Otros Logos y Habilidades</strong></h3>
                        <p><?php echo $se_information_hability ?></p> 
                        
                      </div>
                      <div class="col-md-12">
                        <h3><strong>2. Referencias</strong></h3>
                         <?php while($rowref2 = mysqli_fetch_assoc($resultref2)) { 
                          $ref_boss = $rowref2['se_references_boss'];
                          $ref_company = $rowref2['se_references_company'];
                          $ref_phone = $rowref2['se_references_phone'];
                        ?>
                          <p><?php echo $ref_boss ?> / <?php echo $ref_company ?> / <?php echo $ref_phone ?></p>
                        <?php } ?> 
                      </div>
                      <div class="col-md-6">
                        <h3><strong>3. Idiomas</strong></h3>
                        <?php while($rowl = mysqli_fetch_assoc($result16)) { 
                          $se_information_lenguage= $rowl['se_lenguage'];
                          $se_information_lenguage_level = $rowl['se_lenguage_level'];
                        ?>
                          <p><?php echo $se_information_lenguage ?> / <?php echo $se_information_lenguage_level ?></p>
                        <?php } ?> 
                      </div>
                      <div class="col-md-6">
                        <h3><strong>4. Software</strong></h3>
                        <?php while($rowsft = mysqli_fetch_assoc($result15)) { 
                          $se_information_software= $rowsft['se_software'];
                          $se_information_software_level = $rowsft['se_software_level'];
                        ?>
                          <p><?php echo $se_information_software ?> / <?php echo $se_information_software_level ?></p>
                        <?php } ?> 
                      </div>
                  </div>
                </div>
                <div class="row" style="background:#fff; padding-bottom:1em; margin-top:1em;">
                  <div class="col-md-12 cv-cuadros" style="padding:0;">
                    <h2>IV. TRABAJOS DE INTERÉS</h2>
                    <div class="ediciones-botones" style="margin:0 1em 0 0;">
                      <a href="#" data-toggle="modal" id="modal-editar" data-target="#mod-edit5" class="ediciones-btn">Editar</a> 
                    </div> 
                    <div class="clearfix"></div>       
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <h3><strong>Tipo</strong></h3>
                        <p>Nombre Práctica</p>
                      </div>
                      <div class="col-md-12">
                        <h3><strong>Área </strong></h3>
                      	<p>Lorem ipsum dolor sit.</p>
					  	        </div>
                      <div class="col-md-12">
                       	<h3><strong>Región</strong></h3>
                       	<p>Región Metropolitana</p>
                      </div>
                      <div class="col-md-12">
                        <h3><strong>Ciudad</strong></h3>
                       	<p>San Miguel</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <h3><strong>Tipo</strong></h3>
                        <p>Nombre Trabajo</p>
                      </div>
                      <div class="col-md-12">
                        <h3><strong>Área </strong></h3>
                        <p>Tipo de Área</p>
					  	        </div>
                      <div class="col-md-12">
                       	<h3><strong>Región</strong></h3>
                       	<p>Región Metropolitana</p>
                      </div>
                      <div class="col-md-12">
                        <h3><strong>Ciudad</strong></h3>
                       	<p>San Miguel</p>
                      </div>
                    </div>
                  </div>
                </div>
      		    </div>
            </div><!-- fin nuevo contenido -->
          </div>                          
        </div>
      </form>
    </section>
  </section> 
      
<div class="clearfix"></div>      
<!-- footer -->
      <?php include "include/footer-postulante-a.php" ?>    
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jmio.js"></script>

      <script language="javascript">
        //funcion direccion 1 
        $(document).ready(function(){
          $("#cbx_estado").change(function () {

            $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
              $("#cbx_estado option:selected").each(function () {
                id_estado = $(this).val();
                $.post("include/getMunicipio.php", { id_estado: id_estado }, function(data){
                  $("#cbx_municipio").html(data);
                });            
              });
          })
        });
      
        $(document).ready(function(){
          $("#cbx_municipio").change(function () {
            $("#cbx_municipio option:selected").each(function () {
              id_municipio = $(this).val();
              $.post("include/getLocalidad.php", { id_municipio: id_municipio }, function(data){
                $("#cbx_localidad").html(data);
              });            
            });
          })
        });

        //funcion direccion 2 
        $(document).ready(function(){
          $("#cbx_estado2").change(function () {

            $('#cbx_localidad2').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
              $("#cbx_estado2 option:selected").each(function () {
                id_estado = $(this).val();
                $.post("include/getMunicipio2.php", { id_estado: id_estado }, function(data){
                  $("#cbx_municipio2").html(data);
                });            
              });
          })
        });
      
        $(document).ready(function(){
          $("#cbx_municipio2").change(function () {
            $("#cbx_municipio2 option:selected").each(function () {
              id_municipio = $(this).val();
              $.post("include/getLocalidad2.php", { id_municipio: id_municipio }, function(data){
                $("#cbx_localidad2").html(data);
              });            
            });
          })
        });
      </script>

</section>
</body>

<!-- MODAL 1-- DATOS PERSONALES BASICOS-->   
<div class="modal fade bs-example-modal-lg m-lg" id="mod-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 87%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Datos Personales Básicos</h4>
      </div>

      <!--Formulario Datos Basicos-->
      <div class="row cont-cv color-f">
        <!-- Inicio FORM --> 
        <form id="combo" method="post" action="connectDB/datos-postulante.php">
          <div class="col-md-6">    
            <div class="ssspccc-inpusssess1__a pasos-reg">
              <div class="inpppputt1__a">
                <label>Nombre *:</label> 
                <input type="text" id="name" name="name" value="<?php echo $name ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." required>
              </div>        
              <div class="inpppputt1__a pasos-reg">
                <label>Apellidos *:</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $last_name?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." required>
              </div>  
              <div class="inpppputt1__a pasos-reg">
                <label>Rut o Pasaporte *:</label>
                <input type="text" name="rut" id="rut" value="<?php echo $rut ?>" class="for-rut1" pattern="[0-9.!#$%&’*+/=?^_`{|}~-]{12,12}" title="Solo se permiten Numeros. Ejm: 12.345.678-9" required>
              </div>
              <div class="inpppputt1__a pasos-reg">
                <label>Tipo de Visa *:</label>
                <select name="visa" id="visa" value="<?php echo $visa ?>" style="width:60%">
                  <option value="Sujeta a Contrato">Sujeta a Contrato</option>
                  <option value="Estudiante">Estudiante</option>
                  <option value="Temporaria">Temporaria</option>
                  <option value="Residencia">Residencia</option>
                  <option value="Otra">Otra</option>
                </select>
              </div>
              <div class="inpppputt1__a pasos-reg">
                <label>Permiso de Trabajo *:</label>
                <select name="perm_job" id="perm_job" value="<?php echo $type_visa ?>" style="width:60%">
                  <option value="Si Poseo">Si Poseo</option>
                  <option value="No Poseo">No Poseo</option>
                  <option value="Cadudado - Proceso Renovación">Caducado - Proceso Renovación</option>
                  <option value="Residencia">Residencia</option>
                  <option value="Otra">Otra</option>
                </select>
              </div>
              <div class="inpppputt1__a pasos-reg">
                <label>Email *:</label>
                <input type="email" id="email" name="email" value="<?php echo $email ?>" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
              </div>
              <div class="inpppputt1__a pasos-reg">
                <label>Fecha de Nacimiento *:</label>      
                <div class="box-for-rut__a">        
                  <input type="date" id="date_birth" name="date_birth" value="<?php echo $date_birth ?>"  class="for-fnac" required>    
                  <span style="margin: auto;"> </span>  
                  <label>Sexo*:</label>
                  <div class="for-sex">
                    <input type="radio" id="genderMasculino" name="gender" value="Masculino" onchange='changeGenderMale()'><label>M </label>
                    <input type="radio" id="genderFemenino" name="gender" value="Femenino" onchange='changeGenderFemale()'><label>F </label>

                    <!------- Script para verificar cambios en radio de genero ------->
                    <script>         
                      const generoVar = "<?php echo $gender ?>"
                      const radioFemale = document.getElementById("genderFemenino");
                      const radioMale = document.getElementById("genderMasculino");
                      if(generoVar === 'Masculino'){
                        radioMale.setAttribute('checked', '');
                        radioFemale.removeAttribute('checked');
                      }else if(generoVar === 'Femenino'){
                        radioFemale.setAttribute('checked', '');
                        radioMale.removeAttribute('checked');
                      }
                      function changeGenderMale(){
                        radioMale.setAttribute('checked', '');
                        radioFemale.removeAttribute('checked');
                      }
                      function changeGenderFemale(){
                        radioFemale.setAttribute('checked', '');
                        radioMale.removeAttribute('checked');
                      }
                    </script>

                  </div>
                </div>
              </div>  
              <div class="inpppputt1__a">
                <label>Foto :</label>
                <input type="file" id="photo" name="photo" value="<?php echo $photo ?>" required>
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
          <div class="col-md-6">        
            <div class="ssspccc-inpusssess1__a">      
              <div class="inpppputt1__a">
                <label>País Residencia *:</label>
                <select name="country_resid" style="width:60%">
                  <option value="<?php echo $country_resid ?>"><?php echo $country_resid ?></option>
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
              <div class="inpppputt1__a pasos-reg">
                <label>Telefono :</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone?>" pattern="[0-9+]{12,12}" title="Solo se permiten Numeros. Ejm: +56123456789" required>
              </div>
              <div class="inpppputt1__a pasos-reg">
                <label>Celular *:</label>
                <input type="text" id="cell_phone" name="cell_phone" value="<?php echo $cell_phone?>" pattern="[0-9+]{12,12}" title="Solo se permiten Numeros. Ejm: +56123456789" required>
              </div>
              <div class="inpppputt1__a pasos-reg">      
                <label>Trabajando Actualmente *:</label>      
                <div class="box-for-rut__a">          
                  <div class="for-sex">
                    <input type="radio" id="actual_job" name="actual_job" value="<?php echo $actual_job?>" required><label>Si </label>
                    <span style="margin: auto;"> </span>
                    <input type="radio" id="actual_job" name="actual_job" value="<?php echo $actual_job?>"><label>No </label>
                  </div>
                </div>
              </div>    
              <div style="border:1px solid #ddd; padding:.5em; margin-bottom:.5em;">
                <div class="inpppputt1__a pasos-reg">
                  <label>Empresa Actual *:</label>
                  <input type="text" id="company" name="company" value="<?php echo $job_company ?>" placeholder="Empresa, Institución, Independiente" title="Por favor ingresar empresa." required>
                </div>
                <div class="inpppputt1__a pasos-reg">      
                  <label>Desde *: </label>      
                  <div style="width:60%;">
                    <select name="since_month" value="<?php echo $job_date ?>" style="width:38%;">
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
                    <select name="since_year" value="<?php echo $job_year ?>" style="width:24%;">
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
                <div class="inpppputt1__a pasos-reg">
                  <label>Cargo Actual *:</label>
                  <input type="text" id="position_job" name="position_job" value="<?php echo $position ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras. Ejm: Ingeniero Industrial." required>
                </div>
                <div class="inpppputt1__a pasos-reg">
                  <label>Adjuntar CV :</label>
                  <input type="file" id="cv" name="cv" value="<?php echo $cv?>" required>
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
          <div class="clearfix"></div>
        
          <!--DATOS PERSONALES-->  
          <div class="modal-header">
            <h4 class="modal-title">Datos Personales</h4>
          </div>   
          <div class="col-md-6" style="margin-top:1em;">  
            <div class="ssspccc-inpusssess1__a pasos-reg">
              <div class="inpppputt1__a">
                <label>Estado Civil *: </label>
                <input type="text" id="state_civil" name="state_civil" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." required>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="margin-top:1em;">  
            <div class="ssspccc-inpusssess1__a pasos-reg">
              <div class="inpppputt1__a">
                <label>Nacionalidad *: </label>
                <input type="text" id="nationality" name="nationality" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo se permiten letras." placeholder="Ejm: Chilena" required>
              </div>      
            </div>
          </div>
          <h4>Dirección :</h4>
          <div class="col-md-6">
            <div class="ssspccc-inpusssess1__a pasos-reg">
              <div class="inpppputt1__a">
                <label>Región *: </label>
                <select name="cbx_estado" id="cbx_estado" style="width: 60%;">
                  <option value="0">Seleccionar Region</option>
                  <?php while($row = mysqli_fetch_assoc($result9)) { ?>
                  <option value="<?php echo $row['se_region_id']; ?>"><?php echo $row['se_region']; ?></option>
                  <?php } ?>
                </select>                      
              </div>
              <div class="inpppputt1__a">
                <label>Ciudad *: </label>
                <select name="cbx_localidad" id="cbx_localidad" style="width: 60%;">
                  <option value="0">Seleccionar Ciudad</option>
                </select>                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="ssspccc-inpusssess1__a">
              <div class="inpppputt1__a">
                <label>Comuna *:  </label>
                <select name="cbx_municipio" id="cbx_municipio" style="width: 60%;">
                  <option value="0">Seleccionar Comuna</option>
                </select>
              </div>
              <div class="inpppputt1__a">
                <label>Dirección :  </label>
                <input type="text" name="address" value="" placeholder="Avenida, Calle, Urbanización, Casa-Apto" style="width: 60%;" required>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>   
          <hr>           
            <div>
              <h4>Dirección2:</h4>
              <div class="col-md-6">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Región *: </label>
                    <select name="cbx_estado2" id="cbx_estado2" style="width: 60%;">
                      <option value="0">Seleccionar Region</option>
                      <?php while($row = mysqli_fetch_assoc($result9)) { ?>
                      <option value="<?php echo $row['se_region_id']; ?>"><?php echo $row['se_region']; ?></option>
                      <?php } ?>
                    </select>                   
                  </div>
                  <div class="inpppputt1__a">
                    <label>Ciudad *: </label>
                    <select name="cbx_localidad2" id="cbx_localidad2" style="width: 60%;">
                  <option value="0">Seleccionar Ciudad</option>
                </select>                      
                  </div>
                </div>
              </div>    
              <div class="col-md-6">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Comuna *:  </label>
                    <select name="cbx_municipio2" id="cbx_municipio2" style="width: 60%;">
                      <option value="0">Seleccionar Comuna</option>
                    </select>
                  </div>
                  <div class="inpppputt1__a">
                    <label>Dirección :  </label>
                    <input type="text" name="address2" value="" placeholder="Avenida, Calle, Urbanización, Casa-Apto" style="width: 60%;" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>   
              <hr>
              <div class="col-md-12" style="text-align:right;">
                <div class="ediciones-botones">
                  <a href="#" class="ediciones-btn">Agregar Otra Dirección</a> 
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
        </form>
      </div>            
      
    </div>
    <div class="clearfix"></div>                  
  </div>
</div><!--FIN MODAL 1--DATOS BASICOS-->


<!-- MODAL 2 -- EXPERIENCIA LABORAL -->     
<div class="modal fade bs-example-modal-lg m-lg" id="mod-edit3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 95%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">I. EXPERIENCIA LABORAL</strong></h4>   
          <!-- Inicio FORM --> 
          <form id="combo" method="post" action="connectDB/datos-postulante-work.php">
            <div class="row cont-cv color-f">
              <h4 class="modal-title" style="margin-bottom:1em;">Experiencia Laboral <strong style="color:#F44444;">Actual o Más Reciente</strong></h4>
              <div class="row">        
                <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a pasos-reg">
                  <div class="inpppputt1__a">
                    <label>Cargo *:</label>
                    <input type="text" name="actual_position" value="<?php echo $work_actual_position; ?>" style="width:60%">
                  </div>
                  <div class="inpppputt1__a">
                    <label>Área Desempeño *: </label>
                    <select name="actual_area"style="width:60%">
                      <option value="<?php echo $work_actual_area; ?>"><?php echo $work_actual_area; ?></option>
                      <option value="Administación y Comercio">Administración y Comercio</option>
                      <option value="Agropecuaria">Agropecuaria</option>
                      <option value="Arte y Arquitectura">Arte y Arquitectura</option>
                      <option value="Ciencias Básicas">Ciencias Básicas</option>
                      <option value="Ciencias Sociales">Ciencias Sociales</option>
                      <option value="Derecho">Derecho</option>
                      <option value="Educación">Educación</option>
                      <option value="Humanidades">Humanidades</option>
                      <option value="Salud">Salud</option>
                      <option value="Tecnología">Tecnología</option>
                      <option value="Otra">Otra</option>
                    </select>                      
                  </div>
                  <div class="inpppputt1__a">
                    <label>Otra:  </label>
                    <input type="text" name="actual_area_other" value="<?php echo $work_actual_area_other; ?>" >
                  </div>
                </div>
                </div>    
                <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a pasos-reg">
                  <div class="inpppputt1__a">
                    <label>Empresa *:</label>
                    <input type="text" name="actual_company" value="<?php echo $work_actual_company; ?>">
                  </div>
                  <div class="inpppputt1__a">
                    <label>Rubro Empresa *:  </label>
                    <select name="actual_company_sector" style="width:60%">
                      <option value="<?php echo $work_actual_company_sector; ?>"><?php echo $work_actual_company_sector; ?></option>
                      <option value="Agricultura, Ganadería, Silvicultura y Pesca">Agricultura, Ganadería, Silvicultura y Pesca</option>
                      <option value="Explotación de Minas y Canteras">Explotación de Minas y Canteras</option>
                      <option value="Industrias Manufacturera">Industrias Manufacturera</option>
                      <option value="Suministro de Electricidad, Gas, Vapor y Aire Acondicionado">Suministro de Electricidad, Gas, Vapor y Aire Acondicionado</option>
                      <option value="Suministro de Agua; Evacuación de Agua residuales, gestión de desechos y descontaminación">Suministro de Agua; Evacuación de Agua residuales, gestión de desechos y descontaminación</option>
                      <option value="Construcción">Construcción</option>
                      <option value="Comercio al Por Mayor y al por Menor; Reparación de Vehículos Automotores y Motocicletas">Comercio al Por Mayor y al por Menor; Reparación de Vehículos Automotores y Motocicletas</option>
                      <option value="Transporte y Almacenamiento">Transporte y Almacenamiento</option>
                      <option value="Actividades de Alojamiento y de Servicio de Comidas">Actividades de Alojamiento y de Servicio de Comidas</option>
                      <option value="Información y Comunicaciones">Información y Comunicaciones</option>
                      <option value="Actividades Financieras y de Seguros">Actividades Financieras y de Seguros</option>
                      <option value="Actividades inmobiliarias">Actividades inmobiliarias</option>
                      <option value="Actividades Profesionales, Cientificas y Técnicas">Actividades Profesionales, Cientificas y Técnicas</option>
                      <option value="Actividades de Servicios Administrativos y de Apoyo">Actividades de Servicios Administrativos y de Apoyo</option>
                      <option value="Adm. Pública y Defensa; Planes de Seguridad Social de Afiliación Obligatoria">Adm. Pública y Defensa; Planes de Seguridad Social de Afiliación Obligatoria</option>
                      <option value="Enseñanza">Enseñanza</option>
                      <option value="Actividades de Atención de la Salud Humana y de Asistencia Social">Actividades de Atención de la Salud Humana y de Asistencia Social</option>
                      <option value="Actividades Artísticas, de Entretenimiento y Recreativas">Actividades Artísticas, de Entretenimiento y Recreativas</option>
                      <option value="Otras Actividades de Servicios">Otras Actividades de Servicios</option>
                      <option value="Actividades de los Hogaes como Empleadores; Actividades No Diferenciadas de los Hogares">Actividades de los Hogaes como Empleadores; Actividades No Diferenciadas de los Hogares</option>
                      <option value="Actividades de Organizaciones y Órganos Extraterritoriales">Actividades de Organizaciones y Órganos Extraterritoriales</option>
                      <option value="Otros">Otros</option>
                    </select> 
                  </div>
                  <div class="inpppputt1__a">
                    <label>Otra:  </label>
                    <input type="text" name="actual_company_sector_other" value="<?php echo $work_actual_company_sector_other; ?>">
                  </div>
                </div>
                </div>    
                <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a pasos-reg">
                  <div class="inpppputt1__a">
                    <label>Logo :</label>
                    <input type="file" name="actual_logo" value="<?php echo $work_actual_logo; ?>" style="width: 85%!important;">
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
              </div>
              <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-10">
              <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a pasos-reg">
                  <div class="inpppputt1__a">
                    <label>Desde *: </label>
                    <select name="work_actual_since_month" >
                      <option value="<?php echo $work_actual_since_month; ?>"><?php echo $work_actual_since_month; ?></option>
                      <option>- Mes -</option>
                      <option value="Enero">Enero </option>
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
                    <select name="work_actual_since_year">
                       <option value="<?php echo $work_actual_since_year; ?>"><?php echo $work_actual_since_year; ?></option>
                      <option>- Año -</option>
                      <option value="2020">2020</option>
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
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Hasta *: </label>
                    <select name="actual_last_month" >
                      <option value="<?php echo $work_actual_last_month; ?>"><?php echo $work_actual_last_month; ?></option>
                      <option>- Mes -</option>
                      <option value="Enero">Enero </option>
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
                    <select name="actual_last_year">
                       <option value="<?php echo $work_actual_last_year; ?>"><?php echo $work_actual_last_year; ?></option>
                      <option>- Año -</option>
                      <option value="2020">2020</option>
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
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                    </select>
                  </div>   
                </div>
              </div>    
              <div class="col-md-4">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Región *: </label>           
                    <select name="actual_region" style="width:70%">
                      <option value="<?php echo $work_actual_region; ?>"><?php echo $work_actual_region; ?></option>
                      <option>- Región -</option>
                      <option value="Metropolitana">I Metropolitana </option>
                      <option value="Arica y Parinacota">II Arica y Parinacota </option>
                      <option value="Tarapacá">III Tarapacá </option>
                      <option value="Antofagasta">IV Antofagasta </option>
                      <option value="Atacama">V Atacama </option>
                      <option value="Coquimbo">VI Coquimbo </option>
                      <option value="Valparaíso">VII Valparaíso </option>
                      <option value="O'Higgins">VIII O'Higgins </option>
                      <option value="Maule">IX Maule </option>
                      <option value="Ñuble">X Ñuble </option>
                      <option value="Biobío">XI Biobío </option>
                      <option value="Araucanía">XII Araucanía </option>
                      <option value="Los Ríos">XIII Los Ríos </option>
                      <option value="Los Lagos">XIV Los Lagos </option>
                      <option value="Aysén">XV Aysén </option>
                      <option value="Magallanes & Antártica">XVI Magallanes & Antártica </option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
              </div>    
              <div class="col-md-12">
              <div class="row">
                <div class="col-md-12" style="padding-left:0; padding-right:0; ">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Función *: </label>
                      <textarea name="actual_function" rows="5" cols="50" style="width:90.5%;" ><?php echo $work_actual_functions; ?> </textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="padding-left:0; padding-right:0; ">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Logros: </label>
                      <textarea name="actual_goals" rows="5" cols="50" style="width:90.5%;" ><?php echo $work_actual_goals; ?> </textarea>
                    </div>
                  </div>
                </div>
              </div>
              </div>         
              <div class="col-md-12">
                <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <div class="col-md-12" style="text-align:right;">
                <div class="ediciones-botones">
                  <a href="#" class="ediciones-btn">Agregar Otro</a> 
                </div>
              </div>  
            </div>                 
            <div class="clearfix"></div>
            <div class="row cont-cv color-f">
              <h4 class="modal-title" style="margin-bottom:1em;">Experiencia Laboral <strong style="color:#F44444;">Anterior</strong></h4>
              <div class="row">        
                <div class="col-md-4">
                  <div class="ssspccc-inpusssess1__a pasos-reg">
                    <div class="inpppputt1__a">
                      <label>Cargo *:</label>
                      <input type="text" name="" value="" style="width:60%">
                    </div>
                    <div class="inpppputt1__a">
                      <label>Área Desempeño *: </label>
                      <select style="width:60%">
                        <option>Nombre Áreas </option>
                        <option>Nombre Áreas </option>
                        <option>Nombre Áreas </option>
                        <option>Nombre Áreas </option>
                        <option>otra </option>
                      </select>                      
                    </div>
                    <div class="inpppputt1__a">
                      <label>Otra:  </label>
                      <input type="text" name="" value="" disabled>
                    </div>
                  </div>
                </div>    
                <div class="col-md-4">
                  <div class="ssspccc-inpusssess1__a pasos-reg">
                    <div class="inpppputt1__a">
                      <label>Empresa *:</label>
                      <input type="text" name="" value="">
                    </div>
                    <div class="inpppputt1__a">
                      <label>Rubro Empresa *:  </label>
                      <select style="width:60%">
                        <option>Nombre Rubro </option>
                        <option>Nombre Rubro </option>
                        <option>Nombre Rubro </option>
                        <option>Nombre Rubro </option>
                        <option>otra </option>
                      </select> 
                    </div>
                    <div class="inpppputt1__a">
                      <label>Otra:  </label>
                      <input type="text" name="" value="" disabled>
                    </div>
                  </div>
                </div>    
                <div class="col-md-4">
                  <div class="ssspccc-inpusssess1__a pasos-reg">
                    <div class="inpppputt1__a">
                      <label>Logo :</label>
                      <input type="file" name="" value="" style="width: 85%!important;">
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
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                  <div class="col-md-4">
                    <div class="ssspccc-inpusssess1__a pasos-reg">
                      <div class="inpppputt1__a">
                        <label>Desde *: </label>
                        <select name="actual_since_month" >
                          <option value="<?php echo $work_actual_since_month; ?>"><?php echo $work_actual_since_month; ?></option>
                          <option>- Mes -</option>
                          <option value="Enero">Enero </option>
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
                        <select name="actual_since_year">
                          <option value="<?php echo $work_actual_since_year; ?>"><?php echo work_actual_since_year; ?></option>
                          <option>- Año -</option>
                          <option value="2020">2020</option>
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
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                          <option value="1979">1979</option>
                          <option value="1978">1978</option>
                          <option value="1977">1977</option>
                          <option value="1976">1976</option>
                          <option value="1975">1975</option>
                          <option value="1974">1974</option>
                          <option value="1973">1973</option>
                          <option value="1972">1972</option>
                          <option value="1971">1971</option>
                          <option value="1970">1970</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <select name="actual_since_month" >
                          <option>- Mes -</option>
                          <option value="<?php echo $work_actual_since_month; ?>"><?php echo $work_actual_since_month; ?></option>
                          <option>- Mes -</option>
                          <option value="Enero">Enero </option>
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
                        <select name="actual_since_year">
                          <option value="<?php echo $work_actual_since_year; ?>"><?php echo work_actual_since_year; ?></option>
                          <option>- Año -</option>
                          <option value="2020">2020</option>
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
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                          <option value="1979">1979</option>
                          <option value="1978">1978</option>
                          <option value="1977">1977</option>
                          <option value="1976">1976</option>
                          <option value="1975">1975</option>
                          <option value="1974">1974</option>
                          <option value="1973">1973</option>
                          <option value="1972">1972</option>
                          <option value="1971">1971</option>
                          <option value="1970">1970</option>
                        </select>
                      </div>   
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Región *: </label>
                        <select style="width:70%">
                          <option>- Región -</option>
                          <option>I REGIÓN </option>
                          <option>II REGIÓN </option>
                          <option>II REGIÓN </option>
                          <option>IV REGIÓN </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>      
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12" style="padding-left:0; padding-right:0; ">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Función *: </label>
                        <textarea name="textarea" rows="5" cols="50" style="width:90.5%;" > </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12" style="padding-left:0; padding-right:0; ">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Logros: </label>
                        <textarea name="textarea" rows="5" cols="50" style="width:90.5%;" > </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>         
              <div class="col-md-12">
                <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
              </div>
              <div class="clearfix"></div>
              <hr>
              <div class="clearfix"></div>
              <div class="col-md-12" style="text-align:right;">
                <div class="ediciones-botones">
                  <a href="#" class="ediciones-btn">Agregar Otro</a> 
                </div>
              </div>  
            </div>     
            <div class="clearfix"></div>              
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div><!--FIN MODAL 2 -- EXPERIENCIA LABORAL --> 

<!-- MODAL 3 -- INFORMACION ACADEMICA -->
<div class="modal fade bs-example-modal-lg m-lg" id="mod-edit2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 90%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">II. INFORMACIÓN ACADÉMICA</h4>
      </div>
      <!--Inicio Form -->
      <form id="combo" method="post" action="connectDB/datos-postulante-education.php">  
        <div class="row cont-cv color-f">                
          <h4 class="modal-title" style="margin-bottom:1em;">Formación Escolar</h4>
          <div class="row">

            <div class="col-md-6">
              <div class="ssspccc-inpusssess1__a pasos-reg">
                <div class="inpppputt1__a">
                  <label>Colegio/Institucion*:</label>
                  <input type="text" name="institution_basic" value="<?php echo $education_basic_institution ?> ">
                </div>
              </div>
            </div>
            <div class="col-md-6">  
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Último Año Cursado *:</label>
                  <select name="last_year_basic" style="width:70%;">
                    <option value="<?php echo $education_basic_last_year ?>"><?php echo $education_basic_last_year ?></option>
                    <option value="2020">2020</option>
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
                    <option value="1989">1989</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                  </select>    
                </div>
              </div>
            </div>
            <div class="col-md-6">  
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Región*:</label>
                  <select name="region_basic" style="width:70%;">
                    <option value="<?php echo $education_basic_region ?>"><?php echo $education_basic_region ?></option>
                    <option value="Metropolitana">Metropolitana </option>
                    <option value="Arica & Paranicota">Arica & Paranicota</option>
                    <option value="Tarapacá">Tarapacá</option>
                    <option value="Antofagasta">Antofagasta</option>
                    <option value="Atacama">Atacama</option>
                    <option value="Valparaiso">Valparaiso</option>
                    <option value="O'Higgins">O'Higgins</option>
                    <option value="Maule">Maule</option>
                    <option value="Ñuble">Ñuble</option>
                    <option value="Biobío">Biobío</option>
                    <option value="Araucanía">Araucanía</option>
                    <option value="Los Rios">Los Rios</option>
                    <option value="Los Lagos">Los Lagos</option>
                    <option value="Aisén">Aisén</option>
                    <option value="Magallanes & Antártica">Magallanes & Antártica</option>
                  </select>                       
                </div>
              </div>
            </div>
            <div class="col-md-offset-6 col-md-6">
              <div style="float:right;">
                <p>
                  <a href="#">
                    <i class="fa fa-trash-o btn-azules" aria-hidden="true"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
          <hr> 
          <!--<div class="row">
            <div class="col-md-6">
              <div class="ssspccc-inpusssess1__a pasos-reg">
                <div class="inpppputt1__a">
                  <label>Colegio/Institucion*:</label>
                  <input type="text" name="" value="">
                </div>
              </div>
            </div>
            <div class="col-md-6">  
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Último Año Cursado *:</label>
                  <select style="width:70%;">
                    <option>2001 </option>
                    <option>2002 </option>
                    <option>2003 </option>
                    <option>2004 </option>
                    <option>2005 </option>
                  </select>   
                </div>
              </div>
            </div>
            <div class="col-md-6">  
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Región*:</label>
                  <select style="width:70%;">
                    <option>Región </option>
                    <option>Región </option>
                    <option>Región </option>
                    <option>Región </option>
                    <option>Región </option>
                  </select>                       
                </div>
              </div>
            </div>
            <div class="col-md-offset-6 col-md-6">
              <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
            </div>
          </div>
          <hr>       
          <div class="col-md-12" style="text-align:right;">
            <div class="ediciones-botones">
              <a href="#" class="ediciones-btn">Agregar Otro</a> 
            </div>
          </div>-->      
        </div>  
        <div class="row cont-cv color-f">
          <h4 class="modal-title" style="margin-bottom:1em;">Formación Superior</h4>
            <div class="row">      
              <div class="col-md-12">  
                <div class="col-md-2">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <label>Institución*: </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <select name="institution_superior" style="width:100%;">
                        <option value="<?php echo $education_superior_institution ?>"><?php echo $education_superior_institution ?></option>
                        <option value="Universidad de Chile">Universidad de Chile </option>
                        <option value="Universidad de Santiago de Chile">Universidad de Santiago de Chile </option>
                        <option value="Facultad Latinoamericana de Cs. Soc. FLACSO">Facultad Latinoamericana de Cs. Soc. FLACSO </option>
                        <option value="Universidad Metrop. de Cs. de la Educación">Universidad Metrop. de Cs. de la Educación </option>
                        <option value="Universidad Tecnológica Metropolitana">Universidad Tecnológica Metropolitana </option>
                        <option value="UniversidadPontificia Universidad Católica de Chile">UniversidadPontificia Universidad Católica de Chile </option>
                        <option value="Universidad Diego de Portales">Universidad Diego de Portales</option>
                        <option value="Universidad de Ciencias de la Informática">Universidad de Ciencias de la Informática </option>
                        <option value="Universidad Alberto Hurtado">Universidad Alberto Hurtado </option>
                        <option value="Universidad  Academica de Humanismo Cristiano">Universidad  Academica de Humanismo Cristiano</option>
                        <option value="Universidad Tecnológica de Chile">Universidad Tecnológica de Chile</option>
                        <option value="Universidad Central de Chile">Universidad Central de Chile</option>
                        <option value="Universidad Bernardo O'Higgins">Universidad Bernardo O'Higgins</option>
                        <option value="Universidad Católica Cardenal Silva Henriquez">Universidad Católica Cardenal Silva Henriquez</option>
                        <option value="Universidad Chileno - Británica de Cultura">Universidad Chileno - Británica de Cultura</option>
                        <option>Otra </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <input type="text" name="institution_superior_other" style="width:100%;" placeholder="Otra.." >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">      
              <div class="col-md-12">  
                <div class="col-md-2">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <label>Carrera*: </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <select name="career_superior" style="width:100%;">
                        <option value="<?php echo $education_superior_career ?>"><?php echo $education_superior_career ?></option>
                        <option value="Actuacion">Actuacion</option>
                        <option value="Administracion Comercial">Administracion Comercial</option>
                        <option value="Ingenieria">Ingenieria</option>
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Otra">Otra </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <input type="text" name="career_superior_other" style="width:100%;" placeholder="Otra.." >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">      
              <div class="col-md-12">  
                <div class="col-md-2">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <label>Mención*:</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="ssspccc-inpusssess3__a">
                    <div class="inpppputt3__a">
                      <input type="text" name="mention_superior" value="<?php echo $education_superior_mention ?>" style="width:100%;" placeholder="" >
                    </div>
                  </div>
                </div>
              </div>
            </div>      
            <div class="row">
              <div class="col-md-3">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Status *: </label>
                    <select name="status_superior" style="width:70%;">
                      <option value="<?php echo $education_superior_status ?>"><?php echo $education_superior_status ?></option>
                      <option value="Status1">Status1 </option>
                      <option value="Status2">Status2 </option>
                      <option value="Status3">Status3 </option>
                      <option value="Status4">Status4 </option>
                    </select>
                  </div>
                </div>
              </div>      
              <div class="col-md-3">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Inicio Año *: </label>
                    <select name="begin_year_superior" style="width:70%;">
                      <option value="<?php echo $education_superior_begin_year ?>"><?php echo $education_superior_begin_year ?></option>
                      <option>1990 </option>
                      <option>1991 </option>
                      <option>1992 </option>
                      <option>1993 </option>
                      <option>1994 </option>
                    </select>
                  </div>
                </div>
              </div>      
              <div class="col-md-3">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Último año Cursado *: </label>
                    <select name="last_year_superior" style="width:70%;">
                      <option value="<?php echo $education_superior_last_year ?>"><?php echo $education_superior_last_year ?></option>
                      <option>1990 </option>
                      <option>1991 </option>
                      <option>1992 </option>
                      <option>1993 </option>
                      <option>1994 </option>
                    </select>
                  </div>      
                </div>
              </div>
              <div class="col-md-3">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label>Región *: </label>
                    <select name="region_superior" style="width:70%;">
                      <option value="<?php echo $education_superior_region ?>"><?php echo $education_superior_region ?></option>
                      <option value="Metropolitana">Metropolitana </option>
                      <option value="Arica & Paranicota">Arica & Paranicota</option>
                      <option value="Tarapacá">Tarapacá</option>
                      <option value="Antofagasta">Antofagasta</option>
                      <option value="Atacama">Atacama</option>
                      <option value="Valparaiso">Valparaiso</option>
                      <option value="O'Higgins">O'Higgins</option>
                      <option value="Maule">Maule</option>
                      <option value="Ñuble">Ñuble</option>
                      <option value="Biobío">Biobío</option>
                      <option value="Araucanía">Araucanía</option>
                      <option value="Los Rios">Los Rios</option>
                      <option value="Los Lagos">Los Lagos</option>
                      <option value="Aisén">Aisén</option>
                      <option value="Magallanes & Antártica">Magallanes & Antártica</option>
                    </select>                       
                  </div>
                </div>
              </div>
            </div>
             <!-- <div class="clearfix"></div>
                <div class="col-md-12">
                  <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
                </div>
                <div class="clearfix"></div>
                <hr>     
                <div class="row">    
                  <div class="col-md-12">  
                    <div class="col-md-2">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <label>Institución*: </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <select style="width:100%;">
                            <option>Universidad Tal </option>
                            <option>Universidad Tal </option>
                            <option>Universidad Tal </option>
                            <option>Universidad Tal </option>
                            <option>otra </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>    
                <div class="row">    
                  <div class="col-md-12">  
                    <div class="col-md-2">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <label>Carrera*: </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <select style="width:100%;">
                            <option>Carrera </option>
                            <option>Carrera </option>
                            <option>Carrera </option>
                            <option>Carrera </option>
                            <option>otra </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>    
                <div class="row">    
                  <div class="col-md-12">  
                    <div class="col-md-2">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <label><input type="checkbox" style="width:50px; margin-right:10px;"> Mención*: </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="ssspccc-inpusssess3__a">
                        <div class="inpppputt3__a">
                          <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-md-3">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Status *: </label>
                        <select style="width:70%;">
                          <option>Status </option>
                          <option>Status </option>
                          <option>Status </option>
                          <option>Status </option>
                        </select>
                      </div>
                    </div>
                  </div>      
                  <div class="col-md-3">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Inicio *: </label>
                        <select style="width:70%;">
                          <option>- Año -</option>
                          <option>1990 </option>
                          <option>1991 </option>
                          <option>1992 </option>
                          <option>1993 </option>
                          <option>1994 </option>
                        </select>
                      </div>
                    </div>
                  </div>      
                  <div class="col-md-3">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Último año Cursado *: </label>
                        <select style="width:70%;">
                          <option>- Año -</option>
                          <option>1990 </option>
                          <option>1991 </option>
                          <option>1992 </option>
                          <option>1993 </option>
                          <option>1994 </option>
                        </select>
                      </div>      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="ssspccc-inpusssess1__a">
                      <div class="inpppputt1__a">
                        <label>Región *: </label>
                        <select style="width:70%;">
                          <option>- Región -</option>
                          <option>I REGIÓN </option>
                          <option>II REGIÓN </option>
                          <option>II REGIÓN </option>
                          <option>IV REGIÓN </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
                </div>
                <div class="clearfix"></div>
                  <hr>
                  <div class="col-md-12" style="text-align:right;">
                    <div class="ediciones-botones">
                      <a href="#" class="ediciones-btn">Agregar Otro</a> 
                    </div>
                  </div>-->
        </div>       
        <div class="row cont-cv color-f">
          <h4 class="modal-title" style="margin-bottom:1em;">Formación Postgrado</h4>
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Institución*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select name="institution_postgrade" style="width:100%;">
                      <option value="<?php echo $education_postgrade_institution ?>"><?php echo $education_postgrade_institution ?></option>
                      <option value="Universidad de Chile">Universidad de Chile </option>
                      <option value="Universidad de Santiago de Chile">Universidad de Santiago de Chile </option>
                      <option value="Facultad Latinoamericana de Cs. Soc. FLACSO">Facultad Latinoamericana de Cs. Soc. FLACSO </option>
                      <option value="Universidad Metrop. de Cs. de la Educación">Universidad Metrop. de Cs. de la Educación </option>
                      <option value="Universidad Tecnológica Metropolitana">Universidad Tecnológica Metropolitana </option>
                      <option value="UniversidadPontificia Universidad Católica de Chile">UniversidadPontificia Universidad Católica de Chile </option>
                      <option value="Universidad Diego de Portales">Universidad Diego de Portales</option>
                      <option value="Universidad de Ciencias de la Informática">Universidad de Ciencias de la Informática </option>
                      <option value="Universidad Alberto Hurtado">Universidad Alberto Hurtado </option>
                      <option value="Universidad  Academica de Humanismo Cristiano">Universidad  Academica de Humanismo Cristiano</option>
                      <option value="Universidad Tecnológica de Chile">Universidad Tecnológica de Chile</option>
                      <option value="Universidad Central de Chile">Universidad Central de Chile</option>
                      <option value="Universidad Bernardo O'Higgins">Universidad Bernardo O'Higgins</option>
                      <option value="Universidad Católica Cardenal Silva Henriquez">Universidad Católica Cardenal Silva Henriquez</option>
                      <option value="Universidad Chileno - Británica de Cultura">Universidad Chileno - Británica de Cultura</option>
                      <option>Otra </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="institution_postgrade_other" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>   
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Tipo de Estudio*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select name="type_study_postgrade" style="width:100%;">
                      <option value="<?php echo $education_postgrade_type_study ?>"><?php echo $education_postgrade_type_study ?></option>
                      <option value="Estudio 1">Estudio 1</option>
                      <option value="Estudio 2">Estudio 2</option>
                      <option value="Estudio 3">Estudio 3</option>
                      <option value="Estudio 4">Estudio 4</option>
                      <option value="Estudio 5">Estudio 5</option>
                      <option>Otra</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="type_study_postgrade_other" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>     
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Mención*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a"> 
                  <div class="inpppputt3__a">
                    <input type="text" name="mention_postgrade" value="<?php echo $education_postgrade_mention ?>" style="width:100%;" placeholder="" >
                  </div>
                </div>
              </div>
            </div>       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label> Descripción: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <textarea name="description_postgrade" rows="5" cols="50" style="width:100%;" ><?php echo $education_postgrade_description ?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>        
          <div class="row">
            <div class="col-md-3">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Status *: </label>
                  <select name="status_postgrade" style="width:70%;">
                    <option value="<?php echo $education_postgrade_status ?>"><?php echo $education_postgrade_status ?></option>
                    <option value="Status1">Status1 </option>
                    <option value="Status2">Status2 </option>
                    <option value="Status3">Status3 </option>
                    <option value="Status4">Status4 </option>
                  </select>
                </div>
              </div>
            </div>      
            <div class="col-md-3">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Inicio Año*: </label>
                  <select name="begin_year_postgrade" style="width:70%;">
                    <option value="<?php echo $education_postgrade_begin_year ?>"><?php echo $education_postgrade_begin_year ?></option>
                    <option>1990 </option>
                    <option>1991 </option>
                    <option>1992 </option>
                    <option>1993 </option>
                    <option>1994 </option>
                  </select>
                </div>
              </div>
            </div>      
            <div class="col-md-3">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Último año Cursado *: </label>
                  <select name="last_year_postgrade" style="width:70%;">
                    <option value="<?php echo $education_postgrade_last_year ?>"><?php echo $education_postgrade_last_year ?></option>
                    <option>1990 </option>
                    <option>1991 </option>
                    <option>1992 </option>
                    <option>1993 </option>
                    <option>1994 </option>
                  </select>
                </div>      
              </div>
            </div>
            <div class="col-md-3">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Región *: </label>
                  <select name="region_postgrade" style="width:70%;">
                    <option value="<?php echo $education_postgrade_region ?>"><?php echo $education_postgrade_region ?></option>
                    <option value="Metropolitana">Metropolitana </option>
                    <option value="Arica & Paranicota">Arica & Paranicota</option>
                    <option value="Tarapacá">Tarapacá</option>
                    <option value="Antofagasta">Antofagasta</option>
                    <option value="Atacama">Atacama</option>
                    <option value="Valparaiso">Valparaiso</option>
                    <option value="O'Higgins">O'Higgins</option>
                    <option value="Maule">Maule</option>
                    <option value="Ñuble">Ñuble</option>
                    <option value="Biobío">Biobío</option>
                    <option value="Araucanía">Araucanía</option>
                    <option value="Los Rios">Los Rios</option>
                    <option value="Los Lagos">Los Lagos</option>
                    <option value="Aisén">Aisén</option>
                    <option value="Magallanes & Antártica">Magallanes & Antártica</option>
                  </select>  
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <!--<div class="col-md-12">
            <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
          </div>
          <div class="clearfix"></div>
          <hr>        
          <div class="row">        
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Institución*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select style="width:100%;">
                      <option>Universidad Tal </option>
                      <option>Universidad Tal </option>
                      <option>Universidad Tal </option>
                      <option>Universidad Tal </option>
                      <option>otra </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>       
          <div class="row">        
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Tipo de Estudio*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select style="width:100%;">
                      <option>Estudio </option>
                      <option>Estudio </option>
                      <option>Estudio </option>
                      <option>Estudio </option>
                      <option>otra </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="row">        
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label><input type="checkbox" style="width:50px; margin-right:10px;"> Mención*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="" value="" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label> Descripción: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <textarea name="textarea" rows="5" cols="50" style="width:100%;" > </textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>        
          <div class="row">
                <div class="col-md-3">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Status *: </label>
                      <select style="width:70%;">
                        <option>Status </option>
                        <option>Status </option>
                        <option>Status </option>
                        <option>Status </option>
                      </select>
                    </div>
                  </div>
                </div>      
                <div class="col-md-3">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Inicio *: </label>
                      <select style="width:70%;">
                        <option>- Año -</option>
                        <option>1990 </option>
                        <option>1991 </option>
                        <option>1992 </option>
                        <option>1993 </option>
                        <option>1994 </option>
                      </select>
                    </div>
                  </div>
                </div>      
                <div class="col-md-3">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Último año Cursado *: </label>
                      <select style="width:70%;">
                        <option>- Año -</option>
                        <option>1990 </option>
                        <option>1991 </option>
                        <option>1992 </option>
                        <option>1993 </option>
                        <option>1994 </option>
                      </select>
                    </div>      
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="ssspccc-inpusssess1__a">
                    <div class="inpppputt1__a">
                      <label>Región *: </label>
                      <select style="width:70%;">
                        <option>- Región -</option>
                        <option>I REGIÓN </option>
                        <option>II REGIÓN </option>
                        <option>II REGIÓN </option>
                        <option>IV REGIÓN </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
          <div class="clearfix"></div>
          <div class="col-md-12">
            <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
          </div>
          <div class="clearfix"></div>
          <hr>
          <div class="col-md-12" style="text-align:right;">
            <div class="ediciones-botones">
              <a href="#" class="ediciones-btn">Agregar Otro</a> 
            </div>
          </div>-->
        </div>  
        <div class="row cont-cv color-f">
          <h4 class="modal-title" style="margin-bottom:1em;">Seminarios y Cursos</h4>
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Institución*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select name="institution_course" style="width:100%;">
                      <option value="<?php echo $education_course_institution ?>"><?php echo $education_course_institution ?></option>
                      <option value="Universidad de Chile">Universidad de Chile </option>
                      <option value="Universidad de Santiago de Chile">Universidad de Santiago de Chile </option>
                      <option value="Facultad Latinoamericana de Cs. Soc. FLACSO">Facultad Latinoamericana de Cs. Soc. FLACSO </option>
                      <option value="Universidad Metrop. de Cs. de la Educación">Universidad Metrop. de Cs. de la Educación </option>
                      <option value="Universidad Tecnológica Metropolitana">Universidad Tecnológica Metropolitana </option>
                      <option value="UniversidadPontificia Universidad Católica de Chile">UniversidadPontificia Universidad Católica de Chile </option>
                      <option value="Universidad Diego de Portales">Universidad Diego de Portales</option>
                      <option value="Universidad de Ciencias de la Informática">Universidad de Ciencias de la Informática </option>
                      <option value="Universidad Alberto Hurtado">Universidad Alberto Hurtado </option>
                      <option value="Universidad  Academica de Humanismo Cristiano">Universidad  Academica de Humanismo Cristiano</option>
                      <option value="Universidad Tecnológica de Chile">Universidad Tecnológica de Chile</option>
                      <option value="Universidad Central de Chile">Universidad Central de Chile</option>
                      <option value="Universidad Bernardo O'Higgins">Universidad Bernardo O'Higgins</option>
                      <option value="Universidad Católica Cardenal Silva Henriquez">Universidad Católica Cardenal Silva Henriquez</option>
                      <option value="Universidad Chileno - Británica de Cultura">Universidad Chileno - Británica de Cultura</option>
                      <option>Otra </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="institution_course_other" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Tipo de Estudio*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <select name="type_study_course" style="width:100%;">
                      <option value="<?php echo $education_course_type_study ?>"><?php echo $education_course_type_study ?></option>
                      <option value="Estudio 1">Estudio 1</option>
                      <option value="Estudio 2">Estudio 2</option>
                      <option value="Estudio 3">Estudio 3</option>
                      <option value="Estudio 4">Estudio 4</option>
                      <option value="Estudio 5">Estudio 5</option>
                      <option>Otra</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <input type="text" name="type_study_course_other" style="width:100%;" placeholder="Otra.." >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label>Mención*: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="ssspccc-inpusssess3__a"> 
                  <div class="inpppputt3__a">
                    <input type="text" name="mention_course" value="<?php echo $education_course_mention ?>" style="width:100%;" placeholder="" >
                  </div>
                </div>
              </div>
            </div>       
            <div class="col-md-12 boxxx-infforrr2__a">  
              <div class="col-md-2">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <label> Descripción: </label>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="ssspccc-inpusssess3__a">
                  <div class="inpppputt3__a">
                    <textarea name="description_course" rows="5" cols="50" style="width:100%;" ><?php echo $education_course_description ?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div> 
            <!--<div class="col-md-12">
              <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
            </div>
            <div class="clearfix"></div>      
            <div style="padding:1em; ">
              <hr>
            </div>       
            <div class="col-md-12">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label>Descripción: </label>
                  <textarea name="textarea" rows="5" cols="50" style="width:90.5%;" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, nemo, architecto, consequatur sed alias pariatur at vel dicta et libero mollitia officiis ullam minus veniam ea quibusdam sint molestias soluta possimus autem placeat veritatis modi dolorem accusamus adipisci voluptatum harum! Error, maiores inventore eligendi accusantir neque sit similique quidem aspernatur nobis in ratione vel quasi cupiditate qui odit ipsam minima omnis et sed dicta optio recusandae facilis quia doloremque nesciunt saepe veritatis.</textarea>
                </div>
              </div>
            </div>         
            <div class="col-md-12">
              <div style="float:right;"><p><a href="#"><i class="fa fa-trash-o btn-azules" aria-hidden="true"></i></a></p></div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12" style="text-align:right;">
              <div class="ediciones-botones">
                <a href="#" class="ediciones-btn">Agregar Otro</a> 
              </div>
            </div>
            <div class="clearfix"></div>        
            <div style="padding:1em; "></div>                
          </div>-->        
          <div class="cleafix"></div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><!--FIN MODAL 3 -- INFORMACION ACADEMICA -->

<!-- MODAL 4 -- INFORMACION COMPLEMENTARIA -->
<div class="modal fade bs-example-modal-lg m-lg" id="mod-edit4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <form id="combo" method="post" action="connectDB/datos-postulante-infocomple.php"> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">III. INFORMACIÓN COMPLEMENTARIA</h4>
      </div>
      
        <div class="row cont-cv color-f">
        
        <h4 class="modal-title">Logos y Habilidades</h4>
        <div class="col-md-12 boxxx-infforrr2__a" style="margin:1em;">
          <div class="ediciones-botones"></div> 
          <div class="clearfix"></div>
          <div class="ssspccc-inpusssess1__a">
            <div class="inpppputt1__a">
              <label>Otros Logos y Habilidades </label>
              <textarea name="information_habilitys" rows="5" cols="30" style="width:90.5%;" ><?php echo $se_information_hability ?> </textarea>
            </div>
          </div>
        </div>                            
        <h4 class="modal-title" style="margin-bottom:1em;">Referencias</h4>        
        <div class="row" style="margin:0;">
          <form id="combo" method="post" action="connectDB/datos-postulante-references.php">
            <div class="col-md-12 boxxx-infforrr2__a">
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label style="margin:.5em;">Referencias Jefe (directo) </label>
                </div>
              </div>      
              <div class="col-md-3 boxxx-infforrr2__a">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label style="margin:.5em;">Nombre y Apellido </label>
                  </div>
                  <div class="inpppputt1__a">
                    <input type="text" name="references_boss" value="" placeholder="Nombre">
                  </div>
                </div>
              </div>
              <div class="col-md-3 boxxx-infforrr2__a">
                <div class="ssspccc-inpusssess1__a">
                  <div class="inpppputt1__a">
                    <label style="margin:.5em;">Empresa </label>
                  </div>
                  <div class="inpppputt1__a">
                    <input type="text" name="references_company" value="" placeholder="Cargo / Empresa">
                  </div>
                </div>
              </div>
              <div class="col-md-3 boxxx-infforrr2__a">  
              <div class="ssspccc-inpusssess1__a">
                <div class="inpppputt1__a">
                  <label style="margin:.5em;">Telefono Contacto</label>
                </div>
                <div class="inpppputt1__a">
                  <input type="text" name="references_phone" value="" placeholder="ej: +569 1234 5678" style="width:100%;">
                </div>
              </div>
              </div>
            </div>
            <div class="col-md-12" style="text-align:right;">
              <button type="submit" class="btn btn-default">Agregar</button>
            </div>
          </form>
        </div>  
        <div class="row" style="margin-bottom:2em;">
          <div class="col-md-12">
            <div style="border:1px solid #ddd; padding:.5em; margin:.5em;">
              <div class="row">
                
                <div class="col-md-3 boxxx-infforrr2__a">
                  <p><strong>Jefe Directo</strong></p>
                </div>
                <div class="col-md-3 boxxx-infforrr2__a">
                  <p><strong>Empresa</strong></p>
                </div>
                <div class="col-md-3 boxxx-infforrr2__a">
                  <p><strong>Teléfono Contacto</strong></p>
                </div>
                <div class="col-md-1 boxxx-infforrr2__a">
                  
                </div>
              </div>
            </div>    
            <div style="border:1px solid #ddd; padding:.5em; margin:.5em;">
                <form id="combo" method="post" action="connectDB/datos-eliminar-references.php">
                    <?php while($rowref = mysqli_fetch_assoc($resultref)) {
                        $ref_id = $rowref['se_references_id'];
                        $ref_boss = $rowref['se_references_boss'];
                        $ref_company = $rowref['se_references_company'];
                        $ref_phone = $rowref['se_references_phone'];
                        $ref_user_id = $rowref['se_user_id'];
                ?>
                <div class="row">
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $ref_boss; ?></p>
                    <input type="text" name="information_references_boss" value="<?php echo $ref_boss; ?>" style="display: none;">
                  </div>
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $ref_company ?></p>
                    <input type="text" name="information_references_company" value="<?php echo $ref_company; ?>" style="display: none;">
                  </div>
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $ref_phone; ?></p>
                    <input type="text" name="information_references_phone" value="<?php echo $ref_phone; ?>" style="display: none;">
                  </div>
                  <div class="col-md-1 boxxx-infforrr2__a">
                    <input type="text" name="information_references_id" value="<?php echo $ref_id; ?>" style="display: none;">
                    <input type="text" name="information_references_user_id" value="<?php echo $ref_user_id; ?>" style="display: none;">
                      <button type="submit" class="btn btn-default"><i class="fa fa-trash-o btn-azules1" aria-hidden="true"></i></button>
                    </div>
                </div>
                <?php } ?>
              </form>
            </div>
          </div>
        </div>       
        <h4 class="modal-title" style="margin-bottom:1em;">Idiomas y Software</h4>        
        <div class="space-forrrmmm2__a cuadros-blanco">
          <div class="inffff-adaddd1__a">
            <p><strong>Idiomas</strong></p>
            <!-- Inicio FORM --> 
            <div class="space-uunn1__a">
              <form id="combo" method="post" action="connectDB/datos-postulante-idioma.php">
                <div class="col-md-6">     
                  <div class="ssspccc-inpusssess1__a pasos-reg">  
                    <div class="inpppputt1__a pasos-reg">     
                      <select name="information_lenguage">
                        <option>- Seleccionar -</option>
                        <option value="Español">Español </option>
                        <option value="Inglés">Inglés </option>
                        <option value="Italiano">Italiano </option>
                        <option value="Francés">Francés </option>
                        <option value="Aleman">Aleman </option>
                        <option value="Portugués">Portugués </option>
                        <option value="Japonés">Japonés </option>
                        <option value="Mandarin">Mandarin </option>
                      </select>
                    </div>  
                  </div>
                </div>  
                <div class="col-md-6">        
                  <div class="ssspccc-inpusssess1__a">      
                    <div class="inpppputt1__a">      
                      <select name="information_lenguage_level">
                        <option>- Nivel -</option>
                        <option value="Básico">Básico </option>
                        <option value="Medio">Medio </option>
                        <option value="Avanzado">Avanzado </option>
                      </select>

                    </div>                 
                  </div>
                </div>
                <div class="col-md-12" style="text-align:right;">
                  <button type="submit" class="btn btn-default">Agregar</button>
                </div>
              </form>
            </div>
            <div style="border:1px solid #ddd; padding:.5em; margin:.5em;">
              <form id="combo" method="post" action="connectDB/datos-eliminar-idioma.php">
                <?php while($rowe = mysqli_fetch_assoc($result13)) {
                  $se_information_lenguage_id = $rowe['se_information_lenguage_id'];
                  $se_information_lenguage= $rowe['se_lenguage'];
                  $se_information_lenguage_level = $rowe['se_lenguage_level'];
                  $se_user_id = $rowe['se_user_id']; 

                ?>
                <div class="row">
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $se_information_lenguage ?></p>
                    <input type="text" name="information_lenguage" value="<?php echo $se_information_lenguage; ?>" style="display: none;">
                  </div>
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $se_information_lenguage_level ?></p>
                    <input type="text" name="information_lenguage_level" value="<?php echo $se_information_lenguage_level; ?>" style="display: none;">
                  </div>
                  <div class="col-md-1 boxxx-infforrr2__a">
                    <input type="text" name="information_lenguage_id" value="<?php echo $se_information_lenguage_id; ?>" style="display: none;">
                      <button type="submit" class="btn btn-default"><i class="fa fa-trash-o btn-azules1" aria-hidden="true"></i></button>
                    </div>
                </div>
                <?php } ?>
              </form>
            </div>
          </div>
          <div class="inffff-adaddd1__a">
            <p><strong>Software</strong></p>
            <!-- Inicio FORM --> 
            <div class="space-uunn1__a">
              <form id="combo" method="post" action="connectDB/datos-postulante-software.php">
                <div class="col-md-6">    
                  <div class="ssspccc-inpusssess1__a pasos-reg">  
                    <div class="inpppputt1__a pasos-reg">     
                      <select name="information_software">
                        <option>- Seleccionar -</option>
                          <option value="Microsoft Access">Microsoft Access</option>
                          <option value="Microsoft Excel">Microsoft Excel</option>
                          <option value="Microsoft Outlook">Microsoft Outlook</option>
                          <option value="Microsoft PowerPoint">Microsoft PowerPoint</option>
                          <option value="Microsoft Word">Microsoft Word</option>
                          <option value="Open Office">Open Office</option>
                          <option value="StarOffice">StarOffice</option>
                          <option value="Lotus Notes">Lotus Notes</option>
                          <option value="Pages">Pages</option>
                          <option value="Numbers">Numbers</option>
                          <option value="Keynote">Keynote</option>
                      </select>
                    </div>  
                  </div>
                </div>  
                <div class="col-md-6">        
                  <div class="ssspccc-inpusssess1__a">      
                    <div class="inpppputt1__a">      
                      <select name="information_software_level">
                        <option>- Nivel -</option>
                        <option>Básico </option>
                        <option>Medio </option>
                        <option>Avanzado </option>
                      </select>
                    </div>                 
                  </div>
                </div>
                <div class="col-md-12" style="text-align:right;">
                  <button type="submit" class="btn btn-default">Agregar</button>
                </div>
              </form>
            </div>
            <div style="border:1px solid #ddd; padding:.5em; margin:.5em;">
              <form id="combo" method="post" action="connectDB/datos-eliminar-software.php">
                <?php while($rows = mysqli_fetch_assoc($result14)) {
                  $se_information_software_id = $rows['se_software_id'];
                  $se_information_software= $rows['se_software'];
                  $se_information_software_level = $rows['se_software_level'];
                  $se_user_id = $rows['se_user_id']; 

                ?>
                <div class="row">
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p style="width: 7em;"><?php echo $se_information_software ?></p>
                    <input type="text" name="information_software" value="<?php echo $se_information_software; ?>" style="display: none;">
                  </div>
                  <div class="col-md-3 boxxx-infforrr2__ab">
                    <p><?php echo $se_information_software_level ?></p>
                    <input type="text" name="information_software_level" value="<?php echo $se_information_software_level; ?>" style="display: none;">
                  </div>
                  <div class="col-md-1 boxxx-infforrr2__a">
                    <input type="text" name="information_software_id" value="<?php echo $se_information_software_id; ?>" style="display: none;">
                      <button type="submit" class="btn btn-default"><i class="fa fa-trash-o btn-azules1" aria-hidden="true"></i></button>
                    </div>
                </div>
                <?php } ?>
              </form>
            </div>
          </div>
        </div>
        </div>        
        <div class="clearfix"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>                                        
      </div>  
    </form>
    </div>
  </div>
</div><!--FIN MODAL 4 -- INFORMACION COMPLEMENTARIA -->

<!-- MODAL 5 -- TRABAJOS DE INTERES-->
<div class="modal fade bs-example-modal-lg m-lg" id="mod-edit5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">IV. TRABAJOS DE INTERÉS</h4>
      </div>
      <div>         
        <section>
          <section class="datos-avisos__a">
            <form>
              <div class="container"> 
                <div class="col-md-12">
                  <div class="space-forrrmmm1__a">
                    <div class="boxssx-inf1__a">Busco:</div>
                    <div class="optttt-infff1__a">
                      <div class="boxxxita__a">
                        <label>Práctica Profesional:</label>
                        <input type="checkbox" name="" value="">
                      </div>
                      <div class="boxxxita__a">
                        <label>Trabajo:</label>
                        <input type="checkbox" name="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="space-forrrmmm2__a">
                    <div class="inffff-adaddd1__a col-md-6" style="margin:1em 0;">
                      <p><strong>Región de Interés para realizar tu Práctica Profesional</strong></p>
                      <div class="space-uunn1__a">
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                        </div>
                        <div class="arrrrwsss1__a">
                          <li><</li>
                          <li>></li>
                        </div>
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Bío Bío</li>
                          <li>Araucanía</li>
                          <li>Magallanes</li>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p><strong>Pretensiones de Renta Líquida*: </strong></p>
                    </div>
                    <div class="col-md-3">
                      <div class="ssspccc-inpusssess1__a">
                        <div class="inpppputt1__a">
                          <p style="float:left; margin-right:10px;">$</p>
                          <input type="text" name="" value="" placeholder="Pesos Chilenos" style="width:100%;">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <p><strong>Sólo recibirá ofertas laborales con rentas similares o mayores</strong></p>
                    </div>
                  </div>
                  <p style="color:#F44444;">* Renta para jornada completa, incluyendo variables mensuales. No considerar acá bonos anuales. (Es la renta promedio final, al terminar el mes. Bonos anuales, son aparte.)</p>
                  <div class="alert alert-success" style="display:inline-block;">
                    <p style="color:#F44444;">Nadie verá tus Pretensiones de Renta!. Seleccionaremos sólo ofertas que ofrezcan rentas compatibles con tus pretensiones o más.</p>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p><strong>Palabra Clave del Cargo: </strong></p>
                    </div>
                    <div class="col-md-3">
                      <div class="ssspccc-inpusssess1__a">
                        <div class="inpppputt1__a">
                          <input type="text" name="" value="" style="width:100%;" placeholder="Ej: Analista de Sistmas">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <p><a href="#" class="btn btn-default">Guardar</a></p>
                    </div>
                    <div class="col-md-12">
                      <div class="timee-s"> <a href="#" class="calugas">Ingeniería <i class="fa fa-times"></i></a> <a href="#" class="calugas">Punta Arenas <i class="fa fa-times"></i></a> <a href="#" class="calugas">Ingeniería Comercial <i class="fa fa-times"></i></a> </div>
                    </div>
                  </div>
                  <hr>
                  <div class="space-forrrmmm2__a">
                    <div class="inffff-adaddd1__a">
                      <p><strong>Áreas de Interés</strong></p>
                      <div class="space-uunn1__a">
                        <div class="inpppputt1__a">
                          <input type="text" name="" value="" placeholder="Ingrese su búsqueda...">
                        </div>
                        <div class="arrrrwsss1__a">
                          <li><</li>
                          <li>></li>
                        </div>
                        <div class="box-datttsss1__a"></div>
                      </div>
                    </div>
                  </div>
                  <div class="space-forrrmmm2__a">
                    <div class="inffff-adaddd1__a col-md-6">
                      <p><strong>Región de Interés</strong></p>
                      <div class="space-uunn1__a">
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                          <li>Región</li>
                        </div>
                        <div class="arrrrwsss1__a">
                          <li><</li>
                          <li>></li>
                        </div>
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Bío Bío</li>
                          <li>Araucanía</li>
                          <li>Magallanes</li>
                        </div>
                      </div>
                    </div>
                    <div class="inffff-adaddd1__a col-md-6">
                      <p><strong>Ciudad de Interés</strong></p>
                      <div class="space-uunn1__a">
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Ciudad</li>
                          <li>Ciudad</li>
                          <li>Ciudad</li>
                          <li>Ciudad</li>
                          <li>Ciudad</li>
                        </div>
                        <div class="arrrrwsss1__a">
                          <li><</li>
                          <li>></li>
                        </div>
                        <div class="box-datttsss1__a" style="width: 30%;">
                          <li>Valdivia</li>
                          <li>Temuco</li>
                          <li>Osorno</li>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p style="color:#F44448;"><strong>(*) Sólo se recibirán Ofertas en las Regiones Seleccionadas</strong></p>
                </div>
              </div>
            </form>
          </section>            
        </section>
      </div>
      <div class="cleafix"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL 5 -- TRABAJOS DE INTERES-->    
</html>


