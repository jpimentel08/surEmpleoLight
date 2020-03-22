<?php

  /*Conexion Hosting*/
    $servername = "localhost";
    $database = "sur8emp9_db_sur_empleo";
    $username = "sur8emp9_adminDB";
    $password = "3M-zHFu,%0Cb";

 /*$servername = "localhost";
  $database = "sur8emp9_db_sur_empleo";
  $username = "jpimentel";
  $password = "3r1ck.ma7h1a5";*/

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

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
	