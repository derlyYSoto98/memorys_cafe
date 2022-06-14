<?php
include '../template/conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Memorys Café</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/registro.css"> 

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="icon/logo.png" />

  <!-- font awesome -->
<!--   <script src="https://kit.fontawesome.com/8fa2f1f6ef.js" crossorigin="anonymous"></script> -->

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
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
              </ul>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><img src="icon/logo.png" width="80px" alt=""> Memorys Café</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="inicio.php">Principal</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Opciones <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="usuario.php">Usuario</a></li>
                        <li><a href="finca.php">Finca</a></li>
                        <li><a href="variedad.php">Variedad</a></li>
                        <li><a href="proceso.php">Proceso</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Funciones <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="funciones/consultar_fincas.php">Consultar Fincas</a></li>
                        <li><a href="funciones/actualizar_fincas.php">Actualizar Fincas</a></li>
                        <li><a href="funciones/eliminar_fincas.php"> Eliminar Finca</a></li>
                        <li><a href="funciones/busqueda_fincas.php">Buscar Finca</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="../cerrar.php">Cerrar Sesion </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
   <!--  <section id="intro">
      <div class="intro-content">
       <p>lorem500</p>
      </div>
    </section> -->
    <!-- /section intro -->

    <section id="content">
      <div class="container">
        <div class="row">
        <h1 class="tituliPrincipal">REGISTRO DE FINCA</h1>
        <form action="" name="form1" method="POST" enctype="multipart/form-data" class="formulario_principal">
                <div id="">
                    <fieldset>
                    <legend>Informacion de la Finca</legend>
                    <div class="form-group">
                                <label> <i class="fa-solid fa-user"></i> Usario:</label>
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
                                <label> <i class="fa-solid fa-sign-hanging"></i> Nombre de la finca:</label>
                                <input type="text" name="nomfin" id="nomfin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label> <i class="fa-solid fa-location-dot"></i> Ubicacion:</label>
                                <input type="text" name="ubifin" id="ubifin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-swatchbook"></i> Altitud:</label>
                                <input type="text" name="altfin" id="altfin" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-camera"></i> Fotografia de referencia:</label>
                                <input type="file" name="finca[]"  required class="form-control">
                            </div>
                            <br>
                    </div>
                    <br>
                <input type="submit" id="botonReg" name="botonReg" value="Registrar" class="btn btn-success form-control registra">  
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- <script src="js/registro_blanco.js"></script> -->
   </form>


        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"> Memorys Café</a></h3>
              </div>
             <!--  <address>
							  <strong>Remember company Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address> -->
              <p>
                <i class="icon-phone"></i> 310 234 7529 <br>
                <i class="icon-envelope-alt"></i> memoryscafe@hotmail.com <br>
                <i class="fa-solid fa-location-dot"></i> Origen café: Suaza / Acevedo - Huila <br>
                <i class="fa-solid fa-building-circle-arrow-right"></i> Oficinas: Medellin - Antioquia
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Visita nuestras redes sociales</h5>
              <ul class="link-list">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Instagram</a></li>
               <!--  <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li> -->
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading"></h5>
              <img src="images/hoja.png" width="100%" alt="">
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; 2022</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="">Tecnoparque Yamboro</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>
  <script src="https://kit.fontawesome.com/8fa2f1f6ef.js" crossorigin="anonymous"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>
<?php
if (isset($_POST['botonReg'])){
    $cedUsu = $_POST['cedusu'];
    $nomUsu = $_POST['nomusu'];
    $dirUsu = $_POST['dirusu'];
    $telUsu = $_POST['telusu'];
    $fotoUsu= count($_FILES['usuario']['name']);  
           try {
                $sql1 = "INSERT INTO `usuario`(`cedula_usuario`, `nombre_usuario`, `direccion_usuario`, `telefono_usuario`, `foto_usuario`, `ruta_usuario`) VALUE (?,?,?,?,?,?)";
                $resultado1 =$cadena->prepare($sql1);
                for ($p=0; $p < $fotoUsu; $p++) { 
                    $filename3 = $_FILES['usuario']['name'][$p];
                    $carpeta3 = 'fotografiaUsuario/'.$filename3;
                    $file_extension3 = pathinfo($carpeta3, PATHINFO_EXTENSION);
                    $file_extension3 = strtolower($file_extension3);
                    $valid_extension3 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension3, $valid_extension3)) {
                        if (move_uploaded_file($_FILES['usuario']['tmp_name'][$p],$carpeta3)) {
                         $resultado1 ->execute(array($cedUsu, $nomUsu, $dirUsu, $telUsu, $filename3, $carpeta3)); 
                        }
                    }
                }
                } catch (Exception $error) {
                    die('Error en el registro de datos 1 '. $error->getMessage());
                } 
         ?>
          <script src="javascript/registro.js"></script>
         <?php  
}
?>
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