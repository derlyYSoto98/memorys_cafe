
<?php
include 'template/conexion.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/logo1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Joan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="javascript/sweetalert2.min.js"></script>
    <title>iniciar sesion</title>
</head>
<body>

    <div class="main-conter">
      <form class="conter" action="" method="POST">

        <img class="avatar" src="img/logo1.png" width="180px">
        <h1 id="titulo">Iniciar Sesión</h1>

       <div class="box-usuario">
          <i class="fas fa-user" style="color:rgb(89, 85, 85)"></i>
            <input type="text"  placeholder="Ingrese su usuario" name="txtusuario" id="txtusuario" class="input">
       </div>

        <div  class="box-contraseña">
          <i class="fas fa-lock" style="color:rgb(89, 85, 85)"></i>
           <input type="password" placeholder="Ingrese su contraseña" name="txtcontra" id="txtcontra" class="input2">
        </div>

            <a href="contra.php" class="texto">¿Olvidaste tu contraseña? </a>
            <!-- <a href="#">Crear cuenta</a> -->

            <div class="box-boton">
            <input type="submit" name="boton" value="Ingresar" class="submi" >
         </div>
       </form>
  </div>
</body>
</html>
<script src="https://kit.fontawesome.com/8fa2f1f6ef.js" crossorigin="anonymous"></script>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<?php
if(isset($_POST['boton'])){
    if(empty($_POST['txtusuario']) || empty($_POST['txtcontra'])){
        ?>
          <script src="javascript/sweetAlert.js"></script>
        <?php
    }else{
        $sql="SELECT * FROM administrador WHERE usuario_ad=:usuario AND contra_ad=:contra";
        $resultado= $cadena-> prepare($sql);
        $resultado->execute(array(":usuario"=>$_POST['txtusuario'], ":contra"=>$_POST['txtcontra']));
        while ($consulta= $resultado->fetch(PDO:: FETCH_ASSOC)){
            $_SESSION["usuario"]=$consulta["usuario_ad"];
        }
        $verificar=$resultado->rowcount();
        if($verificar>0){
            header("location:template/inicio.php");
        }else{
            ?>
            <script src="javascript/incorrecto.js"></script>
            <!-- <script language='javascript'>window.alert('Datos ingresados incorrectos!!')</script> -->
            <?php
        }
    }
}
?>
