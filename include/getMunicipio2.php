<?php

	/*Conexion Hosting*/
  $servernameH = "localhost";
  $databaseH = "sur8emp9_db_sur_empleo";
  $usernameH = "sur8emp9_adminDB";
$passwordH = "3M-zHFu,%0Cb";*/

/*Conexion Local Ruben*/
  $servernameRP = "localhost";
  $databaseRP = "sur8emp9_db_sur_empleo";
  $usernameRP = "root";
  $passwordRP = "";*/

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
	
	//require ('../conexion.php');
	
	$id_estado = $_POST['id_estado'];

	//Busqueda datos region
  $result = mysqli_query($conn, "SELECT se_comuna_id, se_comuna, se_region_id FROM se_comuna WHERE se_region_id = '$id_estado' ORDER BY se_comuna_id");

  $html = "<option value='0'>Seleccionar Comuna</option>";
  
  while($row = mysqli_fetch_assoc($result)) {
		$html .= "<option value='".$row['se_comuna_id']."'>".$row['se_comuna']."</option>";
	};
	
	echo $html;
?>	
	