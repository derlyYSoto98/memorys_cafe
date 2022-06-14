<?php
include '../conexion.php';

if (isset($_POST['butonf'])){
    $nombre = $_POST['nombref'];
    $ubicacion = $_POST['ubicacionf'];
    $altitud = $_POST['altitud'];
    $imaganti= $_POST['imagenantigua'];
    $fotoFin=$_FILES['nameimagen']['name'];  
    $id=$_REQUEST['id'];
    /* liminarImagen($imaganti); */
           try {
                $sql1 = "UPDATE finca SET nombre_finca=?, ubicacion_finca=?, altitud_finca=?, foto_finca=?, ruta_finca=? WHERE id_finca=?";
                $resultado1 =$cadena->prepare($sql1); 
                    $filename3 = $fotoFin;
                    $carpeta3 = '../fotografiaFinca/'.$filename3;
                    $file_extension3 = pathinfo($carpeta3, PATHINFO_EXTENSION);
                    $file_extension3 = strtolower($file_extension3);
                    $valid_extension3 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension3, $valid_extension3)) {  
                        if (move_uploaded_file($_FILES['nameimagen']['tmp_name'],$carpeta3)) {
                            liminarImagen($imaganti);
                         $resultado1 ->execute(array($nombre,$ubicacion,$altitud, $filename3, $carpeta3,$id));   
                        }
                    }else{
                        $sql1 = "UPDATE finca SET nombre_finca=?, ubicacion_finca=?, altitud_finca=? WHERE id_finca=?";
                        $resultado1 =$cadena->prepare($sql1); 
                        $resultado1 ->execute(array($nombre,$ubicacion,$altitud, $id)); 
                    }
                    /* unlink($carpeta3); */
                    
                ?>
                 <script type="text/javascript">window.alert("La informacion del la finca se actualizo con exito, recuerde que ya no puede deshacer los cambios....");window.location="actualizar_fincas.php"</script>
                <?php
                } catch (Exception $error) {
                    die('Error en la modificacion de usuario '. $error->getMessage());
                }   
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaFinca/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
       /*  echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}

?>