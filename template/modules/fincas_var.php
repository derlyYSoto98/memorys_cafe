<?php
include '../conexion.php';
try {
   $usuar="SELECT * FROM `finca` where id_usua='". $_POST['id']."' ORDER BY `nombre_finca` ASC";
   $resultad= $cadena->prepare($usuar);
   $resultad->execute(array());
   echo "<option value = ''>Selecione la finca</option>";
   while($consultar=$resultad->fetch(PDO:: FETCH_ASSOC)){
       echo "<option value = '".$consultar['id_finca']."'>".$consultar['nombre_finca']."</option>";
   }
} catch (Exception $error) {
   die('Error en el registro de la finca'. $error->getMessage());
}
 
?>