<?php
session_start();
?>

<?php
	include("conn_db_se.php");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{

		$id_user= $_POST['refer_user_id'];;
		$se_information_boss = $_POST['refer_boss'];
		$se_information_company = $_POST['refer_company'];
		$se_information_phone = $_POST['refer_phone'];
		$se_information_id = $_POST['refer_id'];

		$sql_eliminar_information_references ="DELETE FROM `se_information_references` WHERE se_user_id='$id_user' && se_references_id='$se_information_id'";

		$query=mysqli_query($conn, $sql_eliminar_information_references);
		
		if ($query){
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
			header("location:datos-actualizados.php");
			/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
			echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
			echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
		}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
			header("location:datos-noactualizados.php");
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
			//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
		}
	}
mysqli_close($conn);
?>
