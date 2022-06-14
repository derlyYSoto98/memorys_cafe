<?php
include '../conexion.php';

if (isset($_POST['butonv'])){
    $nombre = $_POST['nombrev'];
    $descripcion = $_POST['descriv'];
    $imaganti= $_POST['imagenantigua'];
    $fotoFin=$_FILES['nameimagen']['name'];  
    $id=$_REQUEST['id'];
    /* liminarImagen($imaganti); */
           try {
                $sql1 = "UPDATE variedad SET nombre_variedad=?, descripcion_var=?, foto_variedad=?, ruta_variedad=? WHERE id_variedad=?";
                $resultado1 =$cadena->prepare($sql1); 
                    $filename3 = $fotoFin;
                    $carpeta3 = '../fotografiaVariedad/'.$filename3;
                    $file_extension3 = pathinfo($carpeta3, PATHINFO_EXTENSION);
                    $file_extension3 = strtolower($file_extension3);
                    $valid_extension3 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension3, $valid_extension3)) {  
                        if (move_uploaded_file($_FILES['nameimagen']['tmp_name'],$carpeta3)) {
                            liminarImagen($imaganti);
                         $resultado1 ->execute(array($nombre, $descripcion, $filename3, $carpeta3,$id));   
                        }
                        /* unlink('ruta_usuario'); */
                    }else{
                        $sql1 = "UPDATE variedad SET nombre_variedad=?, descripcion_var=? WHERE id_variedad=?";
                        $resultado1 =$cadena->prepare($sql1); 
                        $resultado1 ->execute(array($nombre,$descripcion, $id)); 
                    }
                    
                ?>
                 <script type="text/javascript">window.alert("La informacion del la variedad se actualizo con exito, recuerde que ya no puede deshacer los cambios....");window.location="actualizar_variedad.php"</script>
                <?php
                } catch (Exception $error) {
                    die('Error en la modificacion de usuario '. $error->getMessage());
                }   
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaVariedad/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
       /*  echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}

?>