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
		$information_habilitys=$_POST['information_habilitys'];

		$sql_actualizar_work_actual="UPDATE se_information_habilitys SET 
			se_information_hability='$information_habilitys' WHERE se_user_id='$id_user'";
		
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
