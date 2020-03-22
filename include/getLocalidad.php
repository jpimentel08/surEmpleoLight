<?php
	  /*Conexion Hosting*/
    $servername = "localhost";
    $database = "sur8emp9_db_sur_empleo";
    $username = "sur8emp9_adminDB";
    $password = "3M-zHFu,%0Cb";
	 
	/* $servername = "localhost";
  $database = "sur8emp9_db_sur_empleo";
  $username = "jpimentel";
  $password = "3r1ck.ma7h1a5";*/

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

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