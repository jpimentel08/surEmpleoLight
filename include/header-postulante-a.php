<?php
session_start();
?>

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
	//$conn = mysqli_connect($servernameRP, $usernameRP, $passwordRP, $databaseRP); //conexion Ruben
	$conn = mysqli_connect($servernameJP, $usernameJP, $passwordJP, $databaseJP); //conexion Jose

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
    $position = $row['se_user_job_position'];
    $job_company = $row['se_user_job_company']; 
  }

  ?>
<header class="barra-user-postulante"><meta charset="gb18030">
    <div class="container">
        <div class="content-header-sin-loguear">
            <div class="box-logo altura">
                <a href="postulantes-a.php"> <img src="img/logo-02.png" alt="Surempleo"></a>
            </div>
            <div class="inf-header">
            	<div class="usuario-datos">
                    <div class="usuario-datos-txt">
                        <h2><?php echo $name ?> <?php echo $last_name?></h2>
                        <p><?php echo $position?></p>
                        <p><?php echo $job_company?></p>
                    </div>
                    <div class="usuario-img premium"> 
                	   <img src="img/user.jpg" width="75" height="75" alt="Usuario"/> 
                    </div>
                </div>
                <div class="clear"></div>
                <div class="botones-sesiones2">
                	<div>
                        <a href="post-02a.php">
                            <button type="button" class="btn btn-light">Mis Datos</button>
                        </a>
                    </div>    
                    <div>
                        <a href="login-postulante.php">
                            <button type="button" class="btn btn-light">Cerrar Sesión</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>