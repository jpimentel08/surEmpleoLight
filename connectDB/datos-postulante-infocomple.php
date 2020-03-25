<?php
@ob_start();
session_start();
?>

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

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{

		$email = $_SESSION['email']; 

		// Query sent to database
		$result = mysqli_query($conn, "SELECT * FROM se_user WHERE se_user_email = '$email'");
		//echo "$result";
		          
		while($row = mysqli_fetch_array($result)){
			$id = $row['se_user_id'];
		}

		$id_user=$id;
		$information_habilitys=$_POST['information_habilitys'];

		$sql_actualizar_work_actual="UPDATE se_information_habilitys SET 
			se_information_hability='$information_habilitys' WHERE se_user_id='$id_user'";
		
		$query=mysqli_query($conn, $sql_actualizar_work_actual);
		
 		if ($query){
 			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
 			//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	header("location:postulante-datos-actualizados.php");
		}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	header("location:postulante-datos-noactualizados.php");
		}
}
mysqli_close($conn);
?>
