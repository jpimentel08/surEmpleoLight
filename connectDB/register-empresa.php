<?php

include("conn_db_se.php");


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
$photo=$_POST['photo'];
$cv=$_POST['cv'];
$type_user="empresa";
//$contrasena=trim($_POST['password']);
//$pregunta1=trim($_POST['question1']);
//$respuesta1=trim($_POST['answer1']);
//$pregunta2=trim($_POST['question2']);
//$respuesta2=trim($_POST['answer2']);


    $sql_registro="INSERT INTO se_user VALUES ('$id_user','$name','$last_name','$nation','$rut','$visa','$perm_job','$email','$date_birth','$gender','$country_resid','$phone','$cell_phone','$actual_job','$company','$since_month','$since_year','$position_job','$photo','$cv','$type_user')";
    $sql_registro2="INSERT INTO se_access_user VALUES ('$pass','$email','0','0','0','0','$id_user')";
 	
 	$query=mysqli_query($conn, $sql_registro);
 	$query2=mysqli_query($conn, $sql_registro2);

	if ($query && $query2){
	    header("location:empresa-registrado.php");
		/*echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 		echo "<h4>" . "Bienvenido: " . $_POST['email'] . "</h4>" . "\n\n";
 		echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";*/
	}else{
	    header("location:empresa-noregistrado.php");
 			/*echo "<br />" . "<h2>" . "Usuario No Creado Exitosamente!" . "</h2>";
 			echo "<h4>Por favor intentar de nuevo</h4>"; */
	}


?>
