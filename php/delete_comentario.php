
<?php
include('conexion.php');

if (!empty($_GET['id'])) {
    $id_usuario = htmlentities($_GET['id']);
    $sql = "delete from reseñas where id_usuario = $id_usuario  ";
    if (mysqli_query($con, $sql)) {
        header("Location: eliminar-comentarios.php");
    } else {
        echo "Error " . $sql . "" . mysqli_error($con);
    }
} else {
    echo "Verifique que exista la variable ID";
}

?>
