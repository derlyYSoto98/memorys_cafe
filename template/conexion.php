<?php
try {
    $cadena= new PDO ('mysql:host=localhost; dbname=cafe_proyecto', 'root','');
   /*  echo "La conexion a la base de datos a sido un exito yes!!"; */
} catch (Exception $error) {
   die('Error en la conexion a la base'. $error->getMessage());
}
?>