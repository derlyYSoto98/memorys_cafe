<?php 
if(isset($_POST) && !empty($_POST)) {
    include('phpqrcode/qrlib.php'); 
    include('../conexion.php');
    $dato=$_POST['formData'];
    $codesDir = "codigos/";   
    $codeFile = $dato.date('d-m-Y-h-i-s').'.png';
    
    //consulta SQL
    try {
        $consultar = "SELECT * /* foto_usuario,cedula_usuario,nombre_usuario,direccion_usuario,telefono_usuario, nombre_finca, ubicacion_finca, altitud_finca, foto_finca,
        nombre_variedad,descripcion_var, foto_variedad, nombre_proceso,tipo_fer,fragancia_proceso,sabor_proceso,acidez_proceso,cuerpo_proceso,foto_proceso */ FROM usuario  INNER JOIN  finca on usuario.cedula_usuario = finca.id_usua INNER JOIN variedad on variedad.id_fin = id_finca INNER JOIN proceso on proceso.id_variedad = variedad.id_variedad WHERE id_proceso = $dato";
        $informacion = $cadena->prepare($consultar);
        $informacion-> execute(array());
        $contador = $informacion -> rowCount();
        while ($respuesta = $informacion -> fetch (PDO:: FETCH_ASSOC)) {
           $caficultor = $respuesta['nombre_usuario'];
           $finca = $respuesta['nombre_finca'];
           $variedad = $respuesta['nombre_variedad'];
           $proceso = $respuesta['nombre_proceso'];
       }
        }  catch (Exception $e) {
        die ('ALERTA!!! Error al ejecutar la busqueda.... ' . $e-> getMessage () );
        }
        
    QRcode::png("https://www.aecostudiocolombia.com.co/memorys/template/funciones/consulta_qr2.php?idproceso=$dato", $codesDir.$codeFile, 'H', 7); 
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';


    echo '<a class="opcionesqr btn btn-warning" href="descarga.php?path='.$codesDir.$codeFile.'">Guardar Imagen</a>';
    echo '<a class="opcionesqr btn btn-warning" href="consulta_qr.php">Cerrar</a>';

   //echo '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.youtube.com/watch?v=USDX0X-d588%2F&choe=UTF-8" title="Link to Google.com" />';
} else {
    header('location:./');
}
?>

