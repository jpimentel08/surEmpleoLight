<?php
@ob_start();
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
		$se_software=$_POST['information_software'];
		$se_software_level=$_POST['information_software_level'];

		$sql_registro_information_software ="INSERT INTO se_information_software (se_software, se_software_level, se_user_id) VALUES ('$se_software','$se_software_level','$id_user')";

		$query=mysqli_query($conn, $sql_registro_information_software);
		
 		if ($query){
 			//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	header("location:datos-actualizados.php");
		}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	header("location:datos-noactualizados.php");
		}
}
mysqli_close($conn);
?>
