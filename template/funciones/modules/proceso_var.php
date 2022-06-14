<?php
include '../../conexion.php';
try {
   $proce="SELECT * FROM `proceso` where id_variedad='". $_POST['id3']."' ORDER BY `nombre_proceso` ASC";
   
   $resultad= $cadena->prepare($proce);
   $resultad->execute(array());
   echo "<option value = ''>Selecione el proceso</option>";
   while($consultar=$resultad->fetch(PDO:: FETCH_ASSOC)){
       echo "<option value = '".$consultar['id_proceso']."'>".$consultar['nombre_proceso']."</option>";
   }
} catch (Exception $error) {
   die('Error en proceso '. $error->getMessage());
}
 
?>