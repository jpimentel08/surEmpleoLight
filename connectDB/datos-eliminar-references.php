<?php
session_start();
?>

<?php
include("conn_db_se.php");

	if (!$conn) {

		die("Connection failed: " . mysqli_connect_error());

	}else{

		$id_user = $_POST['information_references_user_id'];
		$se_information_boss = $_POST['information_references_boss'];
		$se_information_company = $_POST['information_references_company'];
		$se_information_phone = $_POST['information_references_phone'];
		$se_information_id = $_POST['information_references_id'];

		echo $id_user;
		echo "</br>";
		echo $se_information_boss;
		echo "</br>";
		echo $se_information_company;
		echo "</br>";
		echo $se_information_phone;
		echo "</br>";
		echo $se_information_id;
		echo "</br>";
		


		//$sql_eliminar_information_references ="DELETE FROM `se_information_references` WHERE se_user_id='$id_user' && se_references_id='$se_information_id'";

		//$query=mysqli_query($conn, $sql_eliminar_information_references);
		
 		//if ($query){
 			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	//header("location:datos-actualizados.php");
			/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 			echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 			echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
		//}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	//header("location:datos-noactualizados.php");
	    	//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	//echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
	    	
	    	//echo $sql_registro2;
 			/*echo "<br />" . "<h2>" . "Usuario No Creado Exitosamente!" . "</h2>";
 			echo "<h4>Por favor intentar de nuevo</h4>"; */
		//}
}
mysqli_close($conn);
?>
