<?php
include '../conexion.php';
try {
    $consulta = "SELECT  `foto_usuario` FROM `usuario` WHERE cedula_usuario=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($consulta);
    $resultado-> execute(array());
    while($consulta=$resultado-> fetch (PDO:: FETCH_ASSOC)){
        liminarImagen($consulta['foto_usuario']);
    }

    $sql= "DELETE FROM usuario WHERE cedula_usuario=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($sql);
    $resultado-> execute(array());
    ?>
     <script type="text/javascript">window.alert("El usuario fue eliminado del sistema con exito!");
     window.location="eliminar_usuario.php" </script>
    <?php
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}

function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaUsuario/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
        /* echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}
?>