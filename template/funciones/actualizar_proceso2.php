<?php
include '../conexion.php';

if (isset($_POST['butonp'])){
    $nombre = $_POST['nombrep'];
    $tipo = $_POST['tipop'];
    $fragancia = $_POST['fraganciap'];
    $sabor = $_POST['saborp'];
    $acidez = $_POST['acidezp'];
    $cuerpo = $_POST['cuerpop'];
    $imaganti= $_POST['imagenantigua'];
    $fotoPro=$_FILES['nameimagen']['name'];  
    $id=$_REQUEST['id'];
    /* liminarImagen($imaganti); */
           try {
                $sql1 = "UPDATE proceso SET nombre_proceso=?, tipo_fer=?, fragancia_proceso=?, sabor_proceso=?, acidez_proceso=?, cuerpo_proceso=?, foto_proceso=?, ruta_proceso=? WHERE id_proceso=?";
                $resultado1 =$cadena->prepare($sql1); 
                    $filename3 = $fotoPro;
                    $carpeta3 = '../fotografiaProceso/'.$filename3;
                    $file_extension3 = pathinfo($carpeta3, PATHINFO_EXTENSION);
                    $file_extension3 = strtolower($file_extension3);
                    $valid_extension3 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension3, $valid_extension3)) {  
                        if (move_uploaded_file($_FILES['nameimagen']['tmp_name'],$carpeta3)) {
                            liminarImagen($imaganti);
                         $resultado1 ->execute(array($nombre,$tipo,$fragancia,$sabor,$acidez,$cuerpo, $filename3, $carpeta3,$id));   
                        }
                        /* unlink('ruta_usuario'); */
                    }else{
                        $sql1 = "UPDATE proceso SET nombre_proceso=?, tipo_fer=?, fragancia_proceso=?, sabor_proceso=?, acidez_proceso=?, cuerpo_proceso=? WHERE id_proceso=?";
                        $resultado1 =$cadena->prepare($sql1); 
                        $resultado1 ->execute(array($nombre,$tipo,$fragancia,$sabor,$acidez,$cuerpo,$id)); 
                    }
                    
                ?>
                 <script type="text/javascript">window.alert("La informacion del proceso se actualizo con exito, recuerde que ya no puede deshacer los cambios....");window.location="actualizar_procesos.php"</script>
                <?php
                } catch (Exception $error) {
                    die('Error en la modificacion de usuario '. $error->getMessage());
                }   
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaProceso/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
       /*  echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}

?>