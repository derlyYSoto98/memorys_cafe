<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Memorys cafe / proceso</title>
  
  <h1>CONSULTA QR</h1>

                    <legend>Informacion del proceso</legend>
                          <div class="form-group">
                                <label>Usario:</label>
                                <select name="idusuario" id="idusuario" class="form-control">
                                    <option value="">Selecione el usuario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>finca:</label>
                                <select name="idfinca" id="idfinca" class="form-control">
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Variedad:</label>
                                <select name="idvariead" id="idvariead" class="form-control">
                                </select>
                            </div> 

                    <form action="consulta_qr2.php" method="GET" >
                            <div class="form-group">
                                <label>Proceso:</label>
                                <select name="idproceso" id="idproceso" class="form-control">
                              </select>
                            </div> 
                      </div>
                   <input type="submit" id="proceso" name="proceso" value="Generar" class="btn btn-success form-control"> 
                 </form>  
                 
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="js/proceso.js"></script>
  
</body>
</html>
   
</body>
</html>
<?php
