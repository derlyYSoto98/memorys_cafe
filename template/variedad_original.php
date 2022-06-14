<?php
include '../template/conexion.php';
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
  <title>Memorys cafe / variedad</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/registro.css">
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
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li> <a href="inicio.php">Principal</a> </li>
                      <li><a href="funciones/consultar_variedad.php">Consultar Variedad</a></li>
                      <li><a href="funciones/actualizar_variedad.php">Actualizar Variedad</a></li>
                      <li><a href="funciones/eliminar_variedad.php"> Eliminar Variedad</a></li>
                      <li><a href="funciones/busqueda_variedad.php">Buscar Variedad</a></li>
                      <li class="active"><a href="index.html">Cerrar Sesion</a> </li>
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
        <!-- end header -->
     <section class="slider_section">
     <h1>REGISTRO DE VARIEDAD</h1>
   <form action="" name="form1" method="POST" enctype="multipart/form-data" class="formulario_principal">
                    <br>
                    <div id="informacionvariedad">
                    <fieldset>
                    <legend>Informacion de la Variedad</legend>
                           <div class="form-group">
                                <label>Usario:</label>
                                <select name="idusuario" id="idusuario" class="form-control">
                                    <option value="">Selecione el usuario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>finca:</label>
                                <select name="idfinca" id="idfinca" class="form-control">
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Nombre de la variedad:</label>
                                <input type="text" name="nomvar" id="nomfin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Descripcion:</label>
                                <input type="text" name="desVar" id="desVar" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fotografia de referencia</label>
                                <input type="file" name="files[]"  required class="form-control">
                            </div>
                            <br>
                    </fieldset>
                    </div>
                <input type="submit" id="botonReg" name="botonReg" value="Registrar" class="btn btn-success form-control">  
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="js/variedad.js"></script>
   </form>
</body>
</html>
</section>
</div>
</header>
    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo2.png" alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Memorys Cafe  </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact 
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+71 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                         <!-- <h3>Newsletter</h3>
                            <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form> -->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2022 Design by <a href="https://html.design/">Tecnoparque Yamboro | Derly  </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <!-- <script src="js/plugin.js"></script> -->
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
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
<?php
if (isset($_POST['botonReg'])){
    $nomVar = $_POST['nomvar'];
    $fileVar =count($_FILES['files']['name']);
    $desVar = $_POST['desVar'];
    $idFinca = $_POST['idfinca'];
 
            try {
                $sql3 = "INSERT INTO `variedad`(`id_variedad`, `nombre_variedad`, `descripcion_var`, `foto_variedad`, `ruta_variedad`, `id_fin`) VALUES(NULL, ?, ?, ?, ?, ?)";
                $resultado3 =$cadena->prepare($sql3);
                /* $idFinca= $cadena->lastInsertId(); */
                    for ($x=0; $x < $fileVar; $x++) { 
                    $filename2 = $_FILES['files']['name'][$x];
                    $carpeta2 = 'fotografiaVariedad/'.$filename2;
                    $file_extension2 = pathinfo($carpeta2, PATHINFO_EXTENSION);
                    $file_extension2 = strtolower($file_extension2);
                    $valid_extension2 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension2, $valid_extension2)) {
                        if (move_uploaded_file($_FILES['files']['tmp_name'][$x],$carpeta2)) {
                            $resultado3 ->execute(array($nomVar, $desVar, $filename2, $carpeta2, $idFinca)); 
                            
                        }
                }
                }
            } catch (Exception $error) {
                die('Error en el registro de datos 3 '. $error->getMessage());
            } 
         ?>
          <script src="javascript/registro.js"></script>
         <?php  
}
?>