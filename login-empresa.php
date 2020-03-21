<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sur Empleo</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <main>
      <!-- header portada -->
      <?php include "include/header-portada-empresa.php" ?>      
      <section class="logear fondo2">
        <div class="container">
          <div class="cont-logear">
           
           <div class="form-logear">
              <form>
                <div class="coll-logear">
                  <input type="text" name="name" value="" placeholder="Ingrese su Rut o Email">
                  <!-- <p>Ej: correo electrónico </p> -->
                </div>
                
                <div class="coll-logear">
                  <input type="password" name="name" value="" placeholder="Clave">
                  <!-- <p>Ej: contraseña </p> -->
                </div>
                
                <div class="coll-logear">
                  <a href="ppt-05.php"><button type="submit" name="button" class="button-ap"> ENTRAR</button></a>
                  <div class="busc-avanzada" data-toggle="modal" data-target="#olvidecorreo">¿Olvidé mi Correo</div> 
                  <div class="clearfix"></div>
                  <div class="busc-avanzada" data-toggle="modal" data-target="#olvideclave">¿Olvidé mi Clave?</div>
                  <hr>
                  <h4>¿NO ESTÁS REGISTRADO?</h4>
                  <a href="ppt-06.php">
                      <button type="button" name="button" class="button-ap"> CREA TU CUENTA</button>
                  </a>
                  <hr>
                  <a href="ppt-05nr.php">
                  <button type="button" name="button" class="button-ap color-btn"> Registrarme Después</button>
                  </a>
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
      <?php include "include/footer-empresa.php" ?>
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jmio.js"></script>
    </main>
  </body>
<!-- POPUP OLVIDE CORREO -->
<div class="modal fade" id="olvidecorreo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Olvidé mi Correo?</h4>
      </div>
      <div class="modal-body">
        <div class="row cambiar20">
            
            <div class="col-md-12" style="text-align:center;">
                    <p><strong>Rut</strong></p>
                    <p><input type="text" style="width:250px; text-align:center;"></p>
                    <p><strong>Contraseña </strong> </p>
                    <p><input type="password" style="width:250px; text-align:center;"></p>
                    <p><strong>Crear nuevo Correo </strong> </p>
                    <p><input type="text" style="width:250px; text-align:center;"></p>
            </div>
               
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#error-rut">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!-- Error Rut -->
<div class="modal fade" id="error-rut" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Olvidé mi Correo?</h4>
      </div>
      <div class="modal-body">
        <div class="row cambiar20">
            <div class="col-md-12" style="text-align:center;">
                <p>Su Contraseña no corresponde al Rut ingresado, intente nuevamente</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- POPUP olvide Clave -->
<div class="modal fade" id="olvideclave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Olvidé mi Correo?</h4>
      </div>
      <div class="modal-body">
        <div class="row cambiar20">
            
            <div class="col-md-12" style="text-align:center;">
                    <p><strong>Rut</strong></p>
                    <p><input type="text" style="width:250px; text-align:center;"></p>
                    <p><strong>Correo </strong> </p>
                    <p><input type="text" style="width:250px; text-align:center;"></p>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#enviocorreo">Enviar Nueva Contraseña a mi Correo</button>
                    <a href="preg-seguridad.php"><button type="button" class="btn btn-light">Usar Pregunta de Seguridad</button></a>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#error-rut">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!-- POPUP envío de Correo -->
<div class="modal fade" id="enviocorreo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Olvidé mi Clave?</h4>
      </div>
      <div class="modal-body">
        <div class="row cambiar20">
            <div class="col-md-12" style="text-align:center;">
                    <p>Hemos enviado un correo a <strong>pxxxxxcoo@publicando.cl</strong> donde podrás generar una nueva Contraseña.</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
</html>