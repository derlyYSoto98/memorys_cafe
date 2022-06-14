<?php
include '../template/conexion.php';
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
   <form action="" name="form1" method="POST" enctype="multipart/form-data" class="formulario_principal">
                <fieldset id="informacionproceso">
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
                            <div class="form-group">
                                <label>Variedad:</label>
                                <select name="proceso" id="proceso" class="form-control">
                              </select>
                            </div> 
                    </fieldset>
                    </div>
                <br>
                <input type="submit" id="botonReg" name="botonReg" value="Registrar" class="btn btn-success form-control">  
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="js/proceso.js"></script>
   </form>
</body>
</html>
   
</body>
</html>
<?php
