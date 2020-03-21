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
      <?php include "include/header-portada.php" ?>      
      <section class="buscadr">
        <div class="container">
          <div class="row cont-buscdrr">
            <div class="col-12 form-buscdr">
              <form>
                <div class="col-md-9 txt-index">
                  <span>Por favor puedes registrar tu CV</span>
                </div>
                <div class="col-md-3 coll-buscdr">
                  <a href="post-02-light.php">
                  <button type="button" name="button" class="button-ap"><i class="fa fa-user-plus"></i>AQUÍ</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
     
      
      <!-- SLIDER -->
      <div class="mensaje-portada">
       
       <div class="container">
          <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
            </div>
          </div>
              <div class='row'>
                <div class='col-md-offset-2 col-md-8'>
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                     <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                    
                      <!-- Quote 1 -->
                      <div class="item active">
                        <blockquote>
                          <div class="row">
        
                            <div class="col-sm-12 carrusel-texto">
                              <p><i class="fa fa-quote-left"></i> No busques Trabajo, deja que te <span><i>Encuentren</i></span> <i class="fa fa-quote-right"></i></p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-1 text-center">
                            </div>
                            <div class="col-sm-11 carrusel-texto">
                              <p><i class="fa fa-quote-left"></i> Postula<strong> GRATIS </strong>/ Publica <strong>GRATIS</strong> <i class="fa fa-quote-right"></i></p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-1 text-center">
                            </div>
                            <div class="col-sm-11 carrusel-texto">
                                <p><i class="fa fa-quote-left"></i> Mira sólo ofertas <span><i>Compatibles</i></span> contigo <i class="fa fa-quote-right"></i></p> 
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 4 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-1 text-center">
                            </div>
                            <div class="col-sm-11 carrusel-texto">
                              <p><i class="fa fa-quote-left"></i> <span><i>Relájate...</i></span> Nosotros te avisamos cuando hayan ofertas compatibles con tu perfil <i class="fa fa-quote-right"></i></p>
                            </div>
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 5 -->
                      <div class="item">
                        <blockquote>
                          <div class="row">
                            <div class="col-sm-1 text-center">
                            </div>
                            <div class="col-sm-11 carrusel-texto">
                              <p> <i class="fa fa-quote-left"></i> Te entregamos las herramientas necesarias para encontrar tu <span><i>trabajo deseado</i></span> <i class="fa fa-quote-right"></i></p>
                              <!-- <small>SurEmpleo...</small> -->
                            </div>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                  </div>                          
                </div>
              </div>
</div>

       </div>
      <!-- fin banner gif -->
      
      <section class="evalcc-psico">
        <div class="container">
          <div class="space-inff-conttt">
            <div class="box-contrl1">
              <h3>¿Asesor Laboral?</h3>
              <p><strong>Dejalo en nuestras manos</strong>, te ayudaremos a definir los mejores perfiles. hacemos entrevistas psicolaborales profundas que permiten  detectar competencias, habilidades y caracteristicas de tus posturas.</p><a href="#" class="button-ap">Contactanos aquí<i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </section>
      <section class="newsletter">
        <div class="container">
          <div class="space-newsletter">
            <div class="p-nws-ltter">
              <h4>¿Necesitas estar al día?</h4>
              <p>Sí, enviame informacion importante a mi email.</p>
            </div>
            <div class="p-form-nws-lettr">
              <form>
                <input type="text" name="name" value="" placeholder="Nombre">
                <input type="text" name="name" value="" placeholder="Email">
                <button type="submit" name="button" class="button-ap">Suscribirme!</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- header portada -->
      <?php include "include/footer-postulante.php" ?>
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jmio.js"></script>
    </main>
  </body>
<!-- POPUP BUSQUEDA AVANZADA -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Búsqueda Avanzada</h4>
      </div>
      <div class="row" style="margin:1em;">
            <div class="col-md-4 col-md-offset-4" style="text-align:center;">
                <div class="b-avanzada">
                    <p><strong>Palabra Clave:</strong></p>
                  <input type="text" name="" value="" placeholder="Palabra Clave" style="width:100%;">
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-4">
                <div class="b-avanzada">
                    <p><strong>Tipo de Trabajo:</strong></p>
                    <input type="checkbox" name="" value=""> Trabajo Profesional </br>
                    <input type="checkbox" name="" value=""> Práctica Laboral
                </div>
            </div>
            <div class="col-md-4">
                <div class="b-avanzada">
                <p><strong>Fecha de Postulación:</strong></p>
                <select>
                    <option>- fecha -</option>
                    <option>Fecha </option>
                    <option>Fecha </option>
                    <option>Fecha </option>
                    <option>Fecha </option>
                </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="b-avanzada">
                <p><strong>Región:</strong></p>
                <select>
                    <option>- Región -</option>
                    <option>Nombre Región </option>
                    <option>Nombre Región </option>
                    <option>Nombre Región </option>
                    <option>Nombre Región </option>
                </select>
                </div>
                
            </div>
            <div class="clear"></div>
            <div class="col-md-6">
                <div class="space-forrrmmm2__a">
                <div class="inffff-adaddd1__a">
                  <p><strong>Ciudad</strong></p>
                  <div class="space-uunn1__a">
                    <div class="box-datttsss1__a">
                      <li>CIudad</li>
                      <li>Ciudad</li>
                      <li>Ciudad</li>
                      <li>Ciudad</li>
                    </div>
                    <div class="arrrrwsss1__a">
                      <li><a href="#"><</a></li>
                      <li><a href="#">></a></li>
                    </div>
                    <div class="box-datttsss1__a"></div>
                  </div>
                </div>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="space-forrrmmm2__a">
                <div class="inffff-adaddd1__a">
                  <p><strong>Carrera</strong></p>
                  <div class="space-uunn1__a">
                    <div class="box-datttsss1__a">
                      <li><a href="#" title="Ingeniería en Ejecución en Informática">Ingeniería en Ejecución</a> </li>
                      <li>Carrera</li>
                      <li>Carrera</li>
                      <li>Carrera</li>
                    </div>
                    <div class="arrrrwsss1__a">
                      <li><a href="#"><</a></li>
                      <li><a href="#">></a></li>
                    </div>
                    <div class="box-datttsss1__a">
                      <li><a href="#" title="Ingeniería en Ejecución en Informática">Ingeniería en Ejecución</a> </li>
                    </div>
                      
                  </div>
                </div>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="space-forrrmmm2__a">
                <div class="inffff-adaddd1__a">
                  <p><strong>Rubro</strong></p>
                  <div class="space-uunn1__a">
                    <div class="box-datttsss1__a">
                      <li>Rubro</li>
                      <li>Rubro</li>
                      <li>Rubro</li>
                      <li>Rubro</li>
                    </div>
                    <div class="arrrrwsss1__a">
                      <li><a href="#"><</a></li>
                      <li><a href="#">></a></li>
                    </div>
                    <div class="box-datttsss1__a"></div>
                  </div>
                </div>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="space-forrrmmm2__a">
                <div class="inffff-adaddd1__a">
                  <p><strong>Área</strong></p>
                  <div class="space-uunn1__a">
                    <div class="box-datttsss1__a">
                      <li>Área</li>
                      <li>Área</li>
                      <li>Área</li>
                      <li>Área</li>
                    </div>
                    <div class="arrrrwsss1__a">
                      <li><a href="#"><</a></li>
                      <li><a href="#">></a></li>
                    </div>
                    <div class="box-datttsss1__a"></div>
                  </div>
                </div>
                </div> 
            </div>
        </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </div>
</div>

</html>