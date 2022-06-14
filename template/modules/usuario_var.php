<?php
 include '../conexion.php';
 try {
    $usuar="SELECT * FROM `usuario` ORDER BY `nombre_usuario` ASC";
    $resultad= $cadena->prepare($usuar);
    $resultad->execute(array());
    echo "<option value = ''>Selecione el usuario</option>";
    while($consultar=$resultad->fetch(PDO:: FETCH_ASSOC)){
        echo "<option value = '".$consultar['cedula_usuario']."'>".$consultar['nombre_usuario']."</option>";
    }
} catch (Exception $error) {
    die('Error en el registro de datos 3 '. $error->getMessage());
}  
?>
