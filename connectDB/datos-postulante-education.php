<?php
@ob_start();
session_start();
?>
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

	if(!$conn){
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
		$se_education_basic_institution=$_POST['institution_basic'];
		$se_education_basic_last_year=$_POST['last_year_basic'];
		$se_education_basic_region=$_POST['region_basic'];
		$se_education_superior_institution=$_POST['institution_superior'];
		$se_education_superior_career=$_POST['career_superior'];
		$se_education_superior_mention=$_POST['mention_superior'];
		$se_education_superior_status=$_POST['status_superior']; 
		$se_education_superior_begin_year=$_POST['begin_year_superior'];
		$se_education_superior_last_year=$_POST['last_year_superior'];
		$se_education_superior_region=$_POST['region_superior'];
		$se_education_postgrade_institution=$_POST['institution_postgrade'];
		$se_education_type_study_postgrade=$_POST['type_study_postgrade'];
		$se_education_mention_postgrade=$_POST['mention_postgrade'];
		$se_education_description_postgrade=$_POST['description_postgrade'];
		$se_education_status_postgrade=$_POST['status_postgrade'];
		$se_education_begin_year_postgrade=$_POST['begin_year_postgrade'];
		$se_education_last_year_postgrade=$_POST['last_year_postgrade'];
		$se_education_region_postgrade=$_POST['region_postgrade'];	
		$se_education_institution_course=$_POST['institution_course'];	
		$se_education_type_study_course=$_POST['type_study_course'];	
		$se_education_mention_course=$_POST['mention_course'];	
		$se_education_description_course=$_POST['description_course'];		

		$sql_actualizar_education_basic="UPDATE se_education_data_basic SET se_education_data_institution='$se_education_basic_institution',se_education_data_region='$se_education_basic_region',se_education_data_last_year='$se_education_basic_last_year' WHERE se_user_id='$id_user'";
		$sql_actualizar_education_superior="UPDATE se_education_data_superior SET se_education_data_institution='$se_education_superior_institution',se_education_data_career='$se_education_superior_career',se_education_data_mention='$se_education_superior_mention',se_education_data_status='$se_education_superior_status',se_education_data_begin_year='$se_education_superior_begin_year',se_education_data_last_year='$se_education_superior_last_year',se_education_data_region='$se_education_superior_region' WHERE se_user_id='$id_user'";
		$sql_actualizar_education_postgrade="UPDATE se_education_data_postgrade SET se_education_data_institution='$se_education_postgrade_institution',se_education_data_type_study='$se_education_type_study_postgrade',se_education_data_mention='$se_education_mention_postgrade',se_education_data_description='$se_education_description_postgrade',se_education_data_status='$se_education_status_postgrade',se_education_data_begin_year='$se_education_begin_year_postgrade',se_education_data_last_year='$se_education_last_year_postgrade',se_education_data_region='$se_education_region_postgrade' WHERE se_user_id='$id_user'";
		$sql_actualizar_education_course="UPDATE se_education_data_course SET se_education_data_institution='$se_education_institution_course',se_education_type='$se_education_type_study_course',se_education_mention='$se_education_mention_course',se_education_description='$se_education_description_course' WHERE se_user_id='$id_user'";
		
		$query=mysqli_query($conn, $sql_actualizar_education_basic);
		$query2=mysqli_query($conn, $sql_actualizar_education_superior);
 		$query3=mysqli_query($conn, $sql_actualizar_education_postgrade);
 		$query4=mysqli_query($conn, $sql_actualizar_education_course);

 		if ($query && $query2 && $query3 && $query4){
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
