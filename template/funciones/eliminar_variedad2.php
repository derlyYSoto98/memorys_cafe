<?php
include '../conexion.php';
try {
    $consulta = "SELECT  `foto_variedad` FROM `variedad` WHERE id_variedad=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($consulta);
    $resultado-> execute(array());
    while($consulta=$resultado-> fetch (PDO:: FETCH_ASSOC)){
        liminarImagen($consulta['foto_variedad']);
    }

    $sql= "DELETE FROM variedad WHERE id_variedad=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($sql);
    $resultado-> execute(array());
    ?>
     <script type="text/javascript">window.alert("La variedad fue eliminada del sistema con exito!");
     window.location="eliminar_variedad.php" </script>
    <?php
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaVariedad/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
        /* echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}
?>