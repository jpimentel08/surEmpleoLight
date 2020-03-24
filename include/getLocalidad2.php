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
	
	$id_municipio = $_POST['id_municipio'];

	$result = mysqli_query($conn, "SELECT se_ciudad_id, se_ciudad, se_comuna_id FROM se_ciudad WHERE se_comuna_id = '$id_municipio' ORDER BY se_ciudad_id");

	 $html = "<option value='0'>Seleccionar Ciudad</option>";
  
  while($row = mysqli_fetch_assoc($result)) {
		$html .= "<option value='".$row['se_ciudad_id']."'>".$row['se_ciudad']."</option>";
		
	};
	echo $html;

?>