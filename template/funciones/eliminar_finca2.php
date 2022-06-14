<?php
include '../conexion.php';
try {
    $consulta = "SELECT  `foto_finca` FROM `finca` WHERE id_finca=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($consulta);
    $resultado-> execute(array());
    while($consulta=$resultado-> fetch (PDO:: FETCH_ASSOC)){
        liminarImagen($consulta['foto_finca']);
    }

    $sql= "DELETE FROM finca WHERE id_finca=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($sql);
    $resultado-> execute(array());
    ?>
     <script type="text/javascript">window.alert("La finca fue eliminada del sistema con exito!");
     window.location="eliminar_fincas.php" </script>
    <?php
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}

function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaFinca/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
        /* echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}
?>