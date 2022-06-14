<?php
include '../conexion.php';
try {
    $consulta = "SELECT  `foto_proceso` FROM `proceso` WHERE id_proceso=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($consulta);
    $resultado-> execute(array());
    while($consulta=$resultado-> fetch (PDO:: FETCH_ASSOC)){
        liminarImagen($consulta['foto_proceso']);
    }

    $sql= "DELETE FROM proceso WHERE id_proceso=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($sql);
    $resultado-> execute(array());
    ?>
     <script type="text/javascript">window.alert("El proceso fue eliminado del sistema con exito, recuerde que ya no lo puede recuperar!");
     window.location="eliminar_procesos.php" </script>
    <?php
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaProceso/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
        /* echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}
?>