<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">
    <script src="js/qr.js"></script>
    <title>Document</title>
</head>
<body>
 <title>Generar códigos QR con PHP</title>
    <body class="">
        <div class="container" style="min-height:500px;">
            <div class="container">     
                <div class="row">
                    <h2>Generar códigos QR con PHP</h2>
                </div>
                
                <div class="col-md-3">
                    <form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
                        <div class="form-group">
                            <label class="control-label">Información : </label>
                            <input class="form-control col-xs-1" id="content" type="text" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label"></label>
                            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Generar código QR">
                        </div>
                    </form>
                </div>
                
                <div class="col-md-6">
                    <div class="showQRCode"></div>
                </div>
            </div>
        </div>
        </div>  
        <div class="insert-post-ads1" style="margin-top:20px;">

        </div>
        </div>



        
</body>
</html>
