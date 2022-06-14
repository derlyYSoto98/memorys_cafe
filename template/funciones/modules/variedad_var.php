<?php
include '../../conexion.php';
try {
   $usuar="SELECT * FROM `variedad` where id_fin='". $_POST['id2']."' ORDER BY `nombre_variedad` ASC";
   $resultad= $cadena->prepare($usuar);
   $resultad->execute(array());
   echo "<option value = ''>Selecione la variead</option>";
   while($consultar=$resultad->fetch(PDO:: FETCH_ASSOC)){
       echo "<option value = '".$consultar['id_variedad']."'>".$consultar['nombre_variedad']."</option>";
   }
} catch (Exception $error) {
   die('Error en el registro de la variead '. $error->getMessage());
}
 
?>