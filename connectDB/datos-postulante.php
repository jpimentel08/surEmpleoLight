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
	$conn = mysqli_connect($servernameRP, $usernameRP, $passwordRP, $databaseRP); //conexion Ruben
	//$conn = mysqli_connect($servernameJP, $usernameJP, $passworJP, $databaseJP); //conexion Jose



	if (!$conn) {

		die("Connection failed: " . mysqli_connect_error());

	}else{

		$id_user="SE".$_POST['rut'];
		$name=$_POST['name'];
		$last_name=$_POST['last_name'];
		$nation=$_POST['nationality'];
		$rut=$_POST['rut'];
		$visa=$_POST['visa'];
		$perm_job=$_POST['perm_job'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$date_birth=$_POST['date_birth'];
		$country_resid=$_POST['country_resid'];
		$phone=$_POST['phone'];
		$cell_phone=$_POST['cell_phone'];
		$actual_job=$_POST['actual_job'];
		$company=$_POST['company'];
		$since_month=$_POST['since_month'];
		$since_year=$_POST['since_year'];
		$position_job=$_POST['position_job'];
		$photo=$_POST['photo'];
		$cv=$_POST['cv'];
		$state_civil=$_POST['state_civil'];
		$region=$_POST['cbx_estado'];
		$city=$_POST['cbx_localidad'];
		$comuna=$_POST['cbx_municipio'];
		$address=$_POST['address'];
		$region2=$_POST['cbx_estado2'];
		$city2=$_POST['cbx_localidad2'];
		$comuna2=$_POST['cbx_municipio2'];
		$address2=$_POST['address2'];

		$sql_actualizar_personalData="UPDATE se_personal_data SET se_personal_data_status='$state_civil', se_personal_data_citizen='$nation', se_personal_data_region1='$region',se_personal_data_city1='$city',se_personal_data_address1='$address',se_personal_data_comuna1='$comuna',se_personal_data_address2='$address2',se_personal_data_region2='$region2',se_personal_data_city2='$city2',se_personal_data_comuna2='$comuna2' WHERE se_user_id='$id_user'";
		
		$sql_actualizar_user="UPDATE se_user SET se_user_name='$name', se_user_last_name='$last_name', se_user_visa='$visa', se_user_type_visa='$perm_job', se_user_email='$email', se_user_gender='$gender', se_user_country_resid='$country_resid',se_user_telf='$phone',se_user_cell='$cell_phone',se_user_job_actual='$actual_job', se_user_job_company='$company',se_user_job_date='$since_month', se_user_job_year='$since_year', se_user_job_position='$position_job', se_user_photo='$photo', se_user_cv='$cv' WHERE se_user_id='$id_user'";

		$query=mysqli_query($conn, $sql_actualizar_personalData);
 		$query2=mysqli_query($conn, $sql_actualizar_user);


 		if ($query && $query2){
	    	header("location:postulante-datos-actualizados.php");
			/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 			echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 			echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
		}else{
	    	header("location:postulante-datos-noactualizados.php");
	    	//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	
	    	//echo $sql_registro2;
 			/*echo "<br />" . "<h2>" . "Usuario No Creado Exitosamente!" . "</h2>";
 			echo "<h4>Por favor intentar de nuevo</h4>"; */
		}
}
mysqli_close($conn);
?>
