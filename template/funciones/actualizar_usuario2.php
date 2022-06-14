<?php
include '../conexion.php';


if (isset($_POST['buton'])){

    $cedUsu = $_POST['cedula'];
    $nomUsu = $_POST['nombre'];
    $dirUsu = $_POST['direccion'];
    $telUsu = $_POST['telefono'];
    $imaganti= $_POST['imagenantigua'];
    $fotoUsu=$_FILES['nameimagen']['name'];  
    $id=$_REQUEST['id']; 

    /* liminarImagen($imaganti); */
      try {
                $sql1 = "UPDATE usuario SET cedula_usuario=?, nombre_usuario=?, direccion_usuario=?, telefono_usuario=?, foto_usuario=?, ruta_usuario=? WHERE cedula_usuario=?";
                $resultado1 =$cadena->prepare($sql1); 
                    $filename3 = $fotoUsu;
                    $carpeta3 = '../fotografiaUsuario/'.$filename3;
                    $file_extension3 = pathinfo($carpeta3, PATHINFO_EXTENSION);
                    $file_extension3 = strtolower($file_extension3);
                    $valid_extension3 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension3, $valid_extension3)) {
                        if (move_uploaded_file($_FILES['nameimagen']['tmp_name'],$carpeta3)) {  
                            liminarImagen($imaganti);
                         $resultado1 ->execute(array($cedUsu,$nomUsu,$dirUsu, $telUsu, $filename3, $carpeta3,$id));   
                        }
                    }else{
                        $sql1 = "UPDATE usuario SET cedula_usuario=?, nombre_usuario=?, direccion_usuario=?, telefono_usuario=? WHERE cedula_usuario=?";
                        $resultado1 =$cadena->prepare($sql1); 
                        $resultado1 ->execute(array($cedUsu,$nomUsu,$dirUsu,$telUsu, $id)); 
                    }
                    
                ?>
                 <script type="text/javascript">window.alert("La informacion del usuario se actualizo con exito, recuerde que ya no puede deshacer los cambios....");window.location="actualizar_usuario.php"</script>
                <?php
                } catch (Exception $error) {
                    die('Error en la modificacion de usuario '. $error->getMessage());
                }  
}
function liminarImagen($nombre){
    $ruraRelativa = "../fotografiaUsuario/";

    if (file_exists($ruraRelativa.$nombre)) {
        if(unlink($ruraRelativa.$nombre)){
       /*  echo 'elimino'; */
        }else{
            /* echo 'no elimino'; */
        }
    }
}

?>
