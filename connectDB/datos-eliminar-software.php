<?php
@ob_start();
session_start();
?>
<?php
include("conn_db_se.php");

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
		$se_information_software=$_POST['information_software'];
		$se_information_software_level=$_POST['information_software_level'];
		$se_information_software_id=$_POST['information_software_id'];

		$sql_eliminar_information_software ="DELETE FROM `se_information_software` WHERE se_user_id='$id_user' && se_software_id='$se_information_software_id'";

		$query=mysqli_query($conn, $sql_eliminar_information_software);
		
 		if ($query){
 			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	header("location:datos-actualizados.php");
		}else{
			//echo "Error: " . $query . "<br>" . mysqli_error($conn);
	    	header("location:datos-noactualizados.php");
		}
}
mysqli_close($conn);
?>
