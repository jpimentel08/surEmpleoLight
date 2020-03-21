<?php

/*Conexion Hosting*/
$servername = "localhost";
$database = "sur8emp9_db_sur_empleo";
$username = "sur8emp9_adminDB";
$password = "3M-zHFu,%0Cb";

/*Conexion Local*/
$servername = "localhost";
$database = "sur8emp9_db_sur_empleo";
$username = "jpimentel";
$password = "1234qwas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysqli_close($conn);
?>