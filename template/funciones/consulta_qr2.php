<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Memorys Café</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/logo.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
     <!--<div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" width="120" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html"></a> </li>
                      <li> <a href="#about"></a> </li>
                      <li> <a href="#vegetable"></a> </li>
                      <li> <a href="#testimonial"></a> </li>
                      <li> <a href="#contact"></a> </li>
                     
                     <li> <a href="#"></a><img src="images/logo.png" width="120" alt="#" /></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div> -->
     <!-- end header inner -->

     <!-- end header -->
     <?php

  if (isset($_GET['proceso'])) {
      $dato = $_GET['idproceso'];
      try {
          $consultar = "SELECT * /* foto_usuario,cedula_usuario,nombre_usuario,direccion_usuario,telefono_usuario, nombre_finca, ubicacion_finca, altitud_finca, foto_finca,
          nombre_variedad,descripcion_var, foto_variedad, nombre_proceso,tipo_fer,fragancia_proceso,sabor_proceso,acidez_proceso,cuerpo_proceso,foto_proceso */ FROM usuario  INNER JOIN  finca on usuario.cedula_usuario = finca.id_usua INNER JOIN variedad on variedad.id_fin = id_finca INNER JOIN proceso on proceso.id_variedad = variedad.id_variedad WHERE id_proceso = $dato";
          $informacion = $cadena->prepare($consultar);
          $informacion-> execute(array());
          $contador = $informacion -> rowCount();
          if ($contador >= 1) {
            while ($respuesta = $informacion -> fetch (PDO:: FETCH_ASSOC)) {
              ?>
   <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators carusel" >
          <li data-target="#myCarousel"  data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel"   data-slide-to="1"></li>
          <li data-target="#myCarousel"  data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                    <span>¡Bienvenido!</span>
                      <h1>Memorys Café</h1>
                      <p>“El café me hace invencible. Sin embargo, cuando la taza está vacía, vuelvo a ser un simple mortal”. (Terri Guillemets). </p>
                     <div class="Vegetable">
                       <!-- <p>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</p> -->
                       </div>
                      <!--  <p>............................................</p> -->
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8">
                    <div class="images_box">
                      <figure><img src="" ></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                    <span>¡Bienvenido!</span>
                      <h1>Memorys Café</h1>
                      <p>“Sin mi café de la mañana, soy sólo como una pieza dorada y seca de carnero”. (Johann Sebastian Bach) </p>
                      <div class="Vegetable">
                       <!-- <p>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</p> -->
                     </div>
                    <!--  <p>............................................</p> -->
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src=""></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                    <span>¡Bienvenido!</span>
                      <h1>Memorys Café</h1>
                      <p>“Lo más interesante en la historia del café es que donde quiera que ha sido introducido ha engendrado revoluciones. Es la bebida más radical, cuya función siempre ha sido la de incitar al pueblo a pensar”. (W.K. Ukers)
                     </p>
                        <div class="Vegetable">
                         <!--  <p>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</p> -->
                      </div>
                    <!--   <p>............................................</p> -->
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src=""></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 usuarios">
        <div class="about-box">
          <h2>Usuario</h2> 
                    <p class="box2">Caficultor:  <?php echo $respuesta['nombre_usuario'];?></p>
                    <p class="box2">Dirección:  <?php echo $respuesta['direccion_usuario'];?></p>
                    <p class="box2">Telefono: <?php echo $respuesta['telefono_usuario'];?></p>
          <!-- <a href="Javascript:void(0)">Read more</a> -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="../fotografiaUsuario/<?=$respuesta['foto_usuario']?>" title="<?=$respuesta['foto_usuario']?>" width="100" height="100"></figure>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="../fotografiaFinca/<?=$respuesta['foto_finca']?>" title="<?=$respuesta['foto_finca']?>" ></figure>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 usuarios" >
        <div class="about-box">
          <h2>Finca</h2> 
                    <p class="box2">Finca: <?php echo $respuesta['nombre_finca'];?></p>
                    <p class="box2">Ubicación: <?php echo $respuesta['ubicacion_finca'];?></p>
                    <p class="box2">Altitud: <?php echo $respuesta['altitud_finca'];?></p>
          <!-- <a href="Javascript:void(0)">Read more</a> -->
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> Café <strong class="llow">de calidad</strong> </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3>El café huele a cielo recién molido</h3>
          <p>El buen café endulzado, delicioso es más que mil besos, dulce sabe cual vino moscatel, ¡café, sí, es café lo que quiero! Y quien deseare darme a saborear una exquisita bebida, venga a ofrecerme una taza de café </p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="images/cafe.png" alt="#"/></figure>
         <!-- <span>01</span> -->
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="images/cafe5.jpg" alt="#"/></figure>
         <!-- <span>02</span> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end vegetable -->
<!-- about  2-->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 usuarios">
        <div class="about-box">
          <h2>VARIEDAD</h2> 
                <p>Variedad: <?php echo $respuesta['nombre_variedad']?></p> 
                <p class="descri">Descripción: <?php echo $respuesta['descripcion_var']?></p> 
          <!-- <a href="Javascript:void(0)">Read more</a> -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="../fotografiaVariedad/<?=$respuesta['foto_variedad']?>" title="<?=$respuesta['foto_variedad']?>" width="100" height="100"></figure>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="../fotografiaProceso/<?=$respuesta['foto_proceso']?>" title="<?=$respuesta['foto_proceso']?>" width="100" height="100"></figure>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 usuarios">
        <div class="about-box">
          <h2>PROCESO</h2> 
                <p>Proceso: <?php echo $respuesta['nombre_proceso']?></p>
                <p>Tipo: <?php echo $respuesta['tipo_fer']?></p>
                <p>Fragancia: <?php echo $respuesta['fragancia_proceso']?></p>
                <p>Sabor: <?php echo $respuesta['sabor_proceso']?></p>
                <p>Acidez: <?php echo $respuesta['acidez_proceso']?></p>
                <p>Cuerpo: <?php echo $respuesta['cuerpo_proceso']?></p>
          <!-- <a href="Javascript:void(0)">Read more</a> -->
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts 2 -->



   <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Memorys Café</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/tasa3.jpg" alt="#"/></figure>
                                            <!-- <i><img src="images/cafe.png" alt="#"/></i> -->
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <!-- <h3>Jomono<br><strong class="ornage_color">review</strong></h3> -->
                                            <p>“En realidad, esta parece ser una necesidad básica del corazón humano en casi toda crisis importante: una buena taza de café caliente”. (Rey Alejandro I de Yugoslavia)
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/cafe.jpg" alt="#"/></figure>
                                            <!-- <i><img src="images/cafe4.jpg" alt="#"/></i> -->
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <!-- <h3>Jomono<br><strong class="ornage_color">review</strong></h3> -->
                                            <p>“No hay nada triste en una mañana preciosa que mirar hacia abajo y darse cuenta de que acaba de tener el último sorbo de café y la taza se siente indiferente y vacía”. (Terri Guillemets)
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div id="testomonial" class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                        <div class="testomonial_img">
                                            <figure><img src="images/cafe4.jpg" alt="#"/></figure>
                                           <!--  <i><img src="images/cafe4.jpg" alt="#"/></i> -->
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                        <div class="cross_inner">
                                            <!-- <h3>Jomono<br><strong class="ornage_color">review</strong></h3> -->
                                            <p>I  Como alguien dijo una vez, una taza de café está llena de ideas. Y sino que les pregunten a filósofos, músicos, artistas, políticos, escritores…
                                              
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->




<!-- contact -->
<!-- contact -->
<div id="contact" class="contact">
  <div class="container">
   <div class="row">
     <div class="col-md-12">
                <div class="titlepage">
                  <h2>Memorys <strong class="llow">Café</strong></h2>
                </div>
   </div>

</div>
    <div class="white_color">
      <div class="row">
 
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <img src="images/co-removebg-preview.png" alt="ghfgh">  
        </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="ma">
             <label >Es posible que la ciencia nunca presente un mejor sistema de comunicación en la oficina que el descanso para tomar café. – Earl Wilson (columnista)</label>
          </div>
          </div>
          </div>
          </div>

      </div>
    </div>
</div>
</div>

              <?php
            }
        }else{
          ?>
            <script type="text/javascript">window.alert("No se encontraron datos que concuerden con la busqueda, por verifique la informacion...."); window.location="consulta_qr.php" </script>
          <?php
        }
      }catch (Exception $e) {
        die ('ALERTA!!! Error al ejecutar la busqueda.... ' . $e-> getMessage () );
      }
  }else{
  }
?>
    
    <!-- end contact -->

   <!--  footer -->
   <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <!-- <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo1.png" width="80" alt="#"/></a>
            </div> -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row pie">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                      <ul class="loca" >
                    <h3>Memorys Cafe  </h3>
                     

                            <li><i class="fa-solid fa-phone" style="padding:5px;"></i> 310 23407529</li> 
                            <li><i class="fa-solid fa-location-dot" style="padding:5px;"></i>Origen café: Suaza / Acevedo - Huila</li> 
                            <li><i class="fa-solid fa-building-circle-arrow-right" style="padding:5px;"></i> Oficinas: Medellín - Antioquia</li>   
                            <li><i class="fa-solid fa-envelope" style="padding:5px;"></i> memoryscafe@hotmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <ul class="Menu_footer"> 
                          <h3>Social Link</h3>

                         
                            <li class="active"> <a href="#">Youtube</a> </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100063562062983">Facebook</a> </li>
                            <li><a href="https://instagram.com/memoryscafe?igshid=YmMyMTA2M2Y=">Instagram</a> </li>
                           <!--  <li><a href="#">Linkdin</a> </li> -->
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 hoja">
                        <div class="address">
                            <img src="images/hoja.png" width="100%" alt="#" class="hoja" />   
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2022 Design by <a href="#">Tecnoparque Yamboro </a></p>
                </div>
              </div>
            </div>
          </footer>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
          <script src="https://kit.fontawesome.com/8fa2f1f6ef.js" crossorigin="anonymous"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>