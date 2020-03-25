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
echo "Connected successfully";

//mysqli_close($conn);
?>