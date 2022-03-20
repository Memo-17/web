
<?php
include('conexion.php');

if (!empty($_GET['id'])) {
    $id_contacto = htmlentities($_GET['id']);
    $sql = "delete from contacto where id_contacto = $id_contacto  ";
    if (mysqli_query($con, $sql)) {
        header("Location: eliminar-contactosform.php");
    } else {
        echo "Error " . $sql . "" . mysqli_error($con);
    }
} else {
    echo "Verifique que exista la variable ID";
}

?>


