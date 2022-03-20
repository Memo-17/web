<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["usuario"]["rol"])) {
    header("location: index.php?c=logreg&a=index");
} else {
    /* Si mi usuario es cliente: */
    if ($_SESSION["usuario"]["rol"] == 2) {
        header("location: index.php?c=logreg&a=index");
    }
}
/* Si algun usuario no ha iniciado sesion */
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/contacto/css/formulario.css',
        'views/contacto/css/estilosextras.css'
    ],
    'fontawesome' => true,
    'bootstrap' => true,
]);
?>

<div class="container">
    <section>
        <h1>Resumen de los Comentarios</h1>
    </section>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <form action="index.php?c=contactos&a=buscarAdmin" method="POST">
                <input type="text" name="busqueda" id="busqueda" placeholder="buscar..." />
                <button type="submit" class="btn btn btn-dark"><i class="fas fa-search"></i>Buscar</button>
                <a href="index.php?c=contactos&a=presentar">
                    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-xmark"></i>Limpiar</button>
                </a>
            </form>
        </div>
    </div>
    <div class="table-responsive mt-2">
        <table class="table table-striped table-bordered">
            <thead class="color">
                <th>ID</th>
                <th>NOMBRES</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>CIUDAD</th>
                <th>TITULO</th>
                <th>MENSAJE</th>
                <th>NOTIFICACIÓN</th>
                <th>ACCIÓN</th>
            </thead>
            <tbody>
                <?php
                foreach ($resultados as $fila) {
                ?>
                    <tr>
                        <td align="center"><?php echo $fila['ID_CONTACTO']; ?></td>
                        <td><?php echo $fila['NOMBRE_APELLIDO']; ?></td>
                        <td><?php echo $fila['CORREO']; ?></td>
                        <td align="center"><?php echo $fila['TELEFONO']; ?></td>
                        <td align="center"><?php echo $fila['CIUDAD'] ?></td>
                        <td><?php echo $fila['TITULO_MENSAJE']; ?></td>
                        <td><?php echo $fila['MENSAJE']; ?></td>
                        <td align="center"><?php echo $fila['PREFERENCIA']; ?></td>
                        <td align="center">
                            <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar este mensaje?'))return false;" href="index.php?c=contactoS&a=eliminarAdmin&id=<?php echo $fila['ID_CONTACTO']; ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
</div>

<?php
Layout::footer();
?>