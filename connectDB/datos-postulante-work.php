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
		$se_work_actual_position=$_POST['actual_position'];
		$se_work_actual_area=$_POST['actual_area'];
		$se_work_actual_area_other=$_POST['actual_area_other'];
		$se_work_actual_company=$_POST['actual_company'];
		$se_work_actual_company_sector=$_POST['actual_company_sector'];
		$se_work_actual_company_sector_other=$_POST['actual_company_sector_other'];
		$se_work_actual_logo=$_POST['actual_logo'];
		$se_work_actual_since_month=$_POST['work_actual_since_month'];
		$se_work_actual_since_year=$_POST['work_actual_since_year'];
		$se_work_actual_last_month=$_POST['actual_last_month'];
		$se_work_actual_last_year=$_POST['actual_last_year'];
		$se_work_actual_region=$_POST['actual_region'];
		$se_work_actual_function=$_POST['actual_function'];
		$se_work_actual_goals=$_POST['actual_goals'];

		$sql_actualizar_work_actual="UPDATE se_work_experience_actual SET 
			se_work_actual_position='$se_work_actual_position',
			se_work_actual_area='$se_work_actual_area',
			se_work_actual_area_other='$se_work_actual_area_other',
			se_work_actual_company='$se_work_actual_company',
			se_work_actual_company_sector='$se_work_actual_company_sector',
			se_work_actual_company_sector_other='$se_work_actual_company_sector_other',
			se_work_actual_logo='$se_work_actual_logo',
			se_work_actual_since_month='$se_work_actual_since_month',
			se_work_actual_since_year='$se_work_actual_since_year',
			se_work_actual_last_month='$se_work_actual_last_month',
			se_work_actual_last_year='$se_work_actual_last_year',
			se_work_actual_region='$se_work_actual_region',
			se_work_actual_functions='$se_work_actual_function',
			se_work_actual_goals='$se_work_actual_goals' WHERE se_user_id='$id_user'";
		
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
