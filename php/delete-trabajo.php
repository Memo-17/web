<?php
include('conexion.php');

if (!empty($_GET['id'])) {
    $id_trabajo = htmlentities($_GET['id']);
    $sql = "delete from trabajo where id = $id_trabajo  ";
    if (mysqli_query($con, $sql)) {
        header("Location: eliminar-trabajos-form.php");
    } else {
        echo "Error " . $sql . "" . mysqli_error($con);
    }
} else {
    echo "Verifique que exista la variable ID";
}

?>