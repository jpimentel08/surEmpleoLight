<?php
session_start();
?>

<?php

//Conexion Hosting
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
		$se_information_references_boss=$_POST['references_boss'];
		$se_information_references_company=$_POST['references_company'];
		$se_information_references_phone=$_POST['references_phone'];

		$sql_registro_information_references ="INSERT INTO se_information_references (se_references_boss, se_references_company, se_references_phone, se_user_id) VALUES ('$se_information_references_boss','$se_information_references_company','$se_information_references_phone','$id_user')";
		
		$query=mysqli_query($conn, $sql_registro_information_references);
		

 		if ($query){
 			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
 			//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	header("location:datos-actualizados.php");
			/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 			echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 			echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
		}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	header("location:datos-noactualizados.php");
	    	//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	
	    	//echo $sql_registro2;
 			/*echo "<br />" . "<h2>" . "Usuario No Creado Exitosamente!" . "</h2>";
 			echo "<h4>Por favor intentar de nuevo</h4>"; */
		}
}
mysqli_close($conn);
?>
