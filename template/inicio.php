<?php
include '../template/conexion.php';
session_start();
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
  <title>Memorys cafe / inicio</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/styledos.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
 <!--  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!-- <link rel="stylesheet" href="css/meanmenu.css"> -->
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

    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo1.png" width="120" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                    <?php
                    if(isset($_SESSION['usuario'])){
                        $nombre=$_SESSION['usuario'];
                    }else{
                        $nombre="";
                    }
                    if($nombre==""){
                        echo "<script>window.location='../index.php'</script>";
                    }else{
                        echo $nombre;
                    }
                 ?>
                      <li> <a href="usuario.php">Usuarios</a> </li>
                      <li> <a href="finca.php">Fincas</a> </li>
                      <li> <a href="variedad.php">Variedad</a> </li>
                      <li> <a href="proceso.php">Proceso</a> </li>
                      <li> <a href="funciones/consulta_general.php">Consulta General</a> </li>
                      <li> <a href="funciones/consulta_qr.php">Consulta QR</a> </li>
                      <li> <a href="funciones/consulta_qrvista.php">Consulta QR vista</a> </li>
                      <li class="active"><a href="../cerrar.php">Cerrar Sesion</a> </li>
                     <!-- <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li> -->
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
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
                      <p>Como alguien dijo una vez, una taza de café está llena de ideas. Y sino que les pregunten a filósofos, músicos, artistas, políticos, escritores… La mayoría de ellos le han dedicado una frase a su mayor aliado, el café. </p>
                     <div class="Vegetable">
                       <p>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</p>
                     </div>
                     <p>............................................</p>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8">
                    <div class="images_box">
                      <figure><img src="images/cafe3.png" width="100%" height="315"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
    <!--  footer -->
    <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <!-- <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo1.png" width="80" alt="#"/></a>
            </div> -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Memorys Cafe  </h3>
                       <ul class="loca" >
                            <li><img src="icon/2.png" alt="icon" style="padding:5px;" />310 23407529</li> 
                            <li><img src="icon/1.png" alt="icon" style="padding:5px;"/>Origen café: Suaza / Acevedo - Huila</li> 
                            <li><img src="icon/1.png" alt="icon" style="padding:5px;"/>Oficinas: Medellín - Antioquia</li>   
                            <li><img src="icon/3.png" alt="icon" style="padding:5px;"/>memoryscafe@hotmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Youtube</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                           <!--  <li><a href="#">Linkdin</a> </li> -->
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                            
                            <img src="images/hoja.png" width="100%" alt="#" />
                            
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
          <script src="js/customdos.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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