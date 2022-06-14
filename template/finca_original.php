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
  <title>Memorys cafe / fincas</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../css/registro.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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
                      <li><a href="funciones/consultar_fincas.php">Consultar Fincas</a> </li>
                      <li><a href="funciones/actualizar_fincas.php">Actualizar Fincas</a> </li>
                      <li><a href="funciones/eliminar_fincas.php"> Eliminar Fincas</a> </li>
                      <li><a href="funciones/busqueda_fincas.php">Buscar Fincas</a> </li>
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
     <h1>REGISTRO DE FINCAS</h1>
   <form action="" name="form1" method="POST" enctype="multipart/form-data" class="formulario_principal">
                <div id="">
                    <fieldset>
                    <legend>Informacion de la Finca</legend>
                    <div class="form-group">
                                <label>Usario:</label>
                                <select name="idusuario" id="idusuario" class="form-control">
                                    <option value="">Seleccione el usuario</option>
                                    <?php
                                    try {
                                        $usuar="SELECT * FROM usuario";
                                        $resultad= $cadena->prepare($usuar);
                                        $resultad->execute(array());
                                        while($consultar=$resultad->fetch(PDO:: FETCH_ASSOC)){
                                            ?>
                                            <option value="<?php echo $consultar['cedula_usuario'];?>"><?php echo $consultar['nombre_usuario'];?></option>
                                         <?php
                                        }
                                    } catch (\Throwable $th) {
                                        //throw $th;
                                    }
                                    
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nombre de la finca:</label>
                                <input type="text" name="nomfin" id="nomfin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ubicacion:</label>
                                <input type="text" name="ubifin" id="ubifin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Altitud:</label>
                                <input type="text" name="altfin" id="altfin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fotografia de referencia:</label>
                                <input type="file" name="finca[]"  required class="form-control">
                            </div>
                            <br>
                    </div>
                    <br>
                <input type="submit" id="botonReg" name="botonReg" value="Registrar" class="btn btn-success form-control registra">  
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- <script src="js/registro_blanco.js"></script> -->
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
    $nomFin = $_POST['nomfin'];
    $ubiFin = $_POST['ubifin'];
    $altFin = $_POST['altfin'];
    $idUsuario = $_POST['idusuario'];
    $fileFin = count($_FILES['finca']['name']);
           try {
            $sql2 = "INSERT INTO `finca`(`id_finca`, `nombre_finca`, `ubicacion_finca`, `altitud_finca`, `foto_finca`, `ruta_finca`, `id_usua`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $resultado2 =$cadena->prepare($sql2);
            /* $idUsuario= $cadena->lastInsertId(); */
            for ($i=0; $i < $fileFin; $i++) { 
               $filename = $_FILES['finca']['name'][$i];
               $carpeta = 'fotografiaFinca/'.$filename;
               $file_extension = pathinfo($carpeta, PATHINFO_EXTENSION);
               $file_extension = strtolower($file_extension);
               $valid_extension = array("png", "jpeg", "jpg");
               if (in_array($file_extension, $valid_extension)) {
                   if (move_uploaded_file($_FILES['finca']['tmp_name'][$i],$carpeta)) {
                    $resultado2 ->execute(array($nomFin, $ubiFin, $altFin, $filename, $carpeta, $idUsuario)); 
                   }
               }
            }
         } catch (Exception $error) {
            die('Error en el registro de datos 2 '. $error->getMessage());
         } 
         ?>
          <script src="javascript/registro.js"></script>
         <?php  
}
?>