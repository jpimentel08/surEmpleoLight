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

	} else {

		// Query to check if the email already exist
		$checkEmail = "SELECT * FROM se_access WHERE se_access_email = '$_POST[email]' ";

		// Variable $result hold the connection data and the query
		$result = $conn-> query($checkEmail);

		// Variable $count hold the result of the query
		$count = mysqli_num_rows($result);

		// If count == 1 that means the email is already on the database
		if ($count == 1) {

			echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>Este correo ya esta registrado.</p>
					<p><a href='login-postulante.php'>Por favor ingresar aqui</a></p>
				</div>";
		} else {

			$type_user="postulante";
			$id_user="SE".$_POST['rut'];
			$name=$_POST['name'];
			$last_name=$_POST['last_name'];
			$nation=$_POST['nation'];
			$rut=$_POST['rut'];
			$visa=$_POST['visa'];
			$perm_job=$_POST['perm_job'];
			$email=$_POST['email'];
			$pass=$_POST['password'];
			$date_birth=$_POST['date_birth'];
			$gender=$_POST['gender'];
			$country_resid=$_POST['country_resid'];
			$phone=$_POST['phone'];
			$cell_phone=$_POST['cell_phone'];
			$actual_job=$_POST['actual_job'];
			$company=$_POST['company'];
			$since_month=$_POST['since_month'];
			$since_year=$_POST['since_year'];
			$position_job=$_POST['position_job'];
			$photoProfile=$_FILES['photo']['name'];
			$archivoProfile=$_FILES['photo']['tmp_name'];
			$pathProfile="img";
			$pathProfile=$pathProfile."/".$photoProfile;
			$cv=$_POST['cv'];
			$pregunta1=$_POST['question1'];
			$respuesta1=$_POST['answer1'];
			$pregunta2=$_POST['question2'];
			$respuesta2=$_POST['answer2'];
			$no_info="No Info";

			move_uploaded_file($archivoProfile,$pathProfile);

			// The password_hash() function convert the password in a hash before send it to the database
			$passHash = password_hash($pass, PASSWORD_DEFAULT);

			//SQL user
    		$sql_registro_user="INSERT INTO se_user VALUES ('$id_user','$name','$last_name','$nation','$rut','$visa','$perm_job','$email','$date_birth','$gender','$country_resid','$phone','$cell_phone','$actual_job','$company','$since_month','$since_year','$position_job','$pathProfile','$cv')";

    		//SQL access
    		$sql_registro_access="INSERT INTO se_access VALUES ('$name','$email','$passHash','$pregunta1','$respuesta1','$pregunta2','$respuesta2','$type_user','$id_user')";

    		//SQL personal_data
    		$sql_registro_personal_data="INSERT INTO se_personal_data VALUES ('$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$id_user')";

    		//SQL education
    		$sql_registro_education_basic="INSERT INTO se_education_data_basic VALUES ('$no_info','$no_info','$no_info','$id_user')";


    		$sql_registro_education_superior="INSERT INTO se_education_data_superior VALUES ('$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$id_user')";

    		$sql_registro_education_postgrade="INSERT INTO se_education_data_postgrade VALUES ('$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$id_user')";

    		$sql_registro_education_course="INSERT INTO se_education_data_course VALUES ('$no_info','$no_info','$no_info','$no_info','$id_user')";

    		//SQL work experience
    		$sql_registro_work_experience_actual="INSERT INTO se_work_experience_actual VALUES ('$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$id_user')";

    		$sql_registro_work_experience_last="INSERT INTO se_work_experience_last VALUES ('$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$no_info','$id_user')";

    		//SQL complementary information
    		$sql_registro_information_habilitys ="INSERT INTO se_information_habilitys VALUES ('$no_info','$id_user')";

    		$sql_registro_information_lenguage ="INSERT INTO se_information_lenguage VALUES ('$no_info','$no_info','$id_user')";

    		$sql_registro_information_references ="INSERT INTO se_information_references VALUES ('$no_info','$no_info','$no_info','$id_user')";

    		$sql_registro_information_software ="INSERT INTO se_information_software VALUES ('$no_info','$no_info','$id_user')";


		 	$query=mysqli_query($conn, $sql_registro_user);
 			$query2=mysqli_query($conn, $sql_registro_access);
 			$query3=mysqli_query($conn, $sql_registro_personal_data);
 			$query4=mysqli_query($conn, $sql_registro_education_basic);
 			$query5=mysqli_query($conn, $sql_registro_education_superior);
 			$query6=mysqli_query($conn, $sql_registro_education_postgrade);
 			$query7=mysqli_query($conn, $sql_registro_education_course);
 			$query8=mysqli_query($conn, $sql_registro_work_experience_actual);
 			$query9=mysqli_query($conn, $sql_registro_work_experience_last);
 			$query10=mysqli_query($conn, $sql_registro_information_habilitys);
 			//$query11=mysqli_query($conn, $sql_registro_information_lenguage);
 			//$query12=mysqli_query($conn, $sql_registro_information_references);
 			//$query13=mysqli_query($conn, $sql_registro_information_software);

				if ($query && $query2 && $query3 && $query4 && $query5 && $query6 && $query7 && $query8 && $query9 && $query10){
	    			header("location:postulante-registrado.php");
					/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
			 		echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
			 		echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
				}else{
				    header("location:postulante-noregistrado.php");
				    //echo "Error: " . $query . "<br>" . mysqli_error($conn);
				    //echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
				    //echo $sql_registro2;
			 			/*echo "<br />" . "<h2>" . "Usuario No Creado Exitosamente!" . "</h2>";
			 			echo "<h4>Por favor intentar de nuevo</h4>"; */
				}
		}
	}
mysqli_close($conn);

?>
