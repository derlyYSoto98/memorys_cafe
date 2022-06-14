<?php
include '../conexion.php';
include '../encabezado.php';
include 'phpqrcode/qrlib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta general</title>
</head>
<body>
<form action="consulta_qr2.php" method="GET" >
    <table class="tabla3">
       <tr> 
           <td><label>Numero de Proceso</label></td>
           <td><input type="text" name="proceso" class="box"></td>
           <th> <input type="submit" name="" value="Consulta" /> </th>
       </tr>
    </table>
  </form>
</body>
</html>
