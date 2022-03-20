
<?php
include('conexion.php');

if (!empty($_GET['id'])) {
    $id = htmlentities($_GET['id']);
    $sql = "delete from info_tarjeta where id = $id  ";
    if (mysqli_query($con, $sql)) {
        header("Location: eliminar_datos_tarjeta.php");
    } else {
        echo "Error " . $sql . "" . mysqli_error($con);
    }
} else {
    echo "Verifique que exista la variable ID";
}

?>
