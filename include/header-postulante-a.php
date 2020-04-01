<?php
session_start();
?>

<?php
//conexion bd
include("./connectDB/conn_db_se.php");

  // data sent from form login.html 
  $email = $_SESSION['email']; 

  //echo $email;

  // Query sent to database
  $result = mysqli_query($conn, "SELECT * FROM se_user WHERE se_user_email = '$email'");
  //echo "$result";
      
  // Variable $row hold the result of the query
          
  // Variable $hash hold the password hash on database
  while($row = mysqli_fetch_array($result)){
    $id = $row['se_user_id'];
    $name = $row['se_user_name'];
    $last_name = $row['se_user_last_name'];
    $position = $row['se_user_job_position'];
    $job_company = $row['se_user_job_company']; 
    $photo = $row['se_user_photo']; 
  }

  ?>
<header class="barra-user-postulante"><meta charset="gb18030">
    <div class="container">
        <div class="content-header-sin-loguear">
            <div class="box-logo altura">
                <a href="postulantes-a.php"> <img src="img/logo-02.png" alt="Surempleo"></a>
            </div>
            <div class="inf-header">
            	<div class="usuario-datos">
                    <div class="usuario-datos-txt">
                        <h2><?php echo $name ?> <?php echo $last_name?></h2>
                        <p><?php echo $position?></p>
                        <p><?php echo $job_company?></p>
                    </div>
                    <div class="usuario-img premium"> 
                    <?php if ($result){ ?>
                        <img src="/surEmpleoLight/img/uploads/<?php echo $photo; ?>" width="75" height="75" alt="Usuario"/>     
                    <?php }else{ ?>
                        <img src="./img/user.jpg" width="75" height="75" alt="Usuario"/> 
                    <?php } ?>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="botones-sesiones2">
                	<div>
                        <a href="post-02a.php">
                            <button type="button" class="btn btn-light">Mis Datos</button>
                        </a>
                    </div>    
                    <div>
                        <a href="login-postulante.php">
                            <button type="button" class="btn btn-light">Cerrar Sesión</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>