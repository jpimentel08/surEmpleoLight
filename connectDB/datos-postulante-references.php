<?php
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
		$se_information_references_boss=$_POST['references_boss'];
		$se_information_references_company=$_POST['references_company'];
		$se_information_references_phone=$_POST['references_phone'];

		$sql_registro_information_references ="INSERT INTO se_information_references (se_references_boss, se_references_company, se_references_phone, se_user_id) VALUES ('$se_information_references_boss','$se_information_references_company','$se_information_references_phone','$id_user')";
		
		$query=mysqli_query($conn, $sql_registro_information_references);
		
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
