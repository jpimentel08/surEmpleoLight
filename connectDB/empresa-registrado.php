<?php
$name=$_POST['name'];
$last_name=$_POST['last_name'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sur Empleo</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title">
  </head>
  <body>
    <main>
      <!-- header portada -->
      <?php include "header-portada-empresa.php" ?>      
      <section class="logear fondo2">
        <div class="container">
          <div class="cont-logear" style="width: 50%; margin: 0 auto; float: none;">
           <div class="form-logear">
              <form>
                <div class="coll-logear">
                  <img class="img-fluid" style="width: 30%; border-radius: 6em;" src="../img/check.png">
                  <h2 class="title-registro" style="color:#ffffff">Bienvenido...</h2>
                  <h4 class="title-registro"><?$_POST['name']?></h4>
                </div>
                
                <div class="coll-logear">
                  <h4 class="title-registro">Ya puedes disfrutar de los servicios que te ofrece Surempleo. Los datos de ingreso fueron enviados al correo.</h4>
                </div>
                
                <div class="coll-logear">
                  <a href="../login-empresa.php"><button type="button" name="button" class="button-ap">VOLVER</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="inf-sub-top">
        <div class="container">
        
        </div>
      </section>
      <!-- header portada -->
      <?php include "footer-empresa-registro.php" ?>
      <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/jmio.js"></script>
    </main>
  </body>
</html>