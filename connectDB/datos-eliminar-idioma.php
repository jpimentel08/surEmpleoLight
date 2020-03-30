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
		$se_information_lenguage=$_POST['information_lenguage'];
		$se_information_lenguage_level=$_POST['information_lenguage_level'];
		$se_information_lenguage_id=$_POST['information_lenguage_id'];

		$sql_eliminar_information_lenguage ="DELETE FROM `se_information_lenguage` WHERE se_user_id='$id_user' && se_information_lenguage_id='$se_information_lenguage_id'";

		$query=mysqli_query($conn, $sql_eliminar_information_lenguage);
		
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
