<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["usuario"]["rol"])) {
    header("location: index.php?c=logreg&a=index");
} else {
    /* Si mi usuario es admin: */
    if ($_SESSION["usuario"]["rol"] == 2) {
        header("location: index.php?c=logreg&a=index");
    }
}
/* Si algun usuario no ha iniciado sesion */
?>

<?php
Layout::header([
    'stylesheets' => [
        'assets/styles/RamosOchoa2.css',
    ],
    'fontawesome' => true,
    'bootstrap' => true,
]);
?>

<!--Estilos de validación de formulario-->
<style>
    table {
        border-collapse: collapse;
        margin: auto;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .headt th {
        background-color: #00aae4;
        color: white;
    }

    td,
    th {
        border: #b2b2b2 1px solid;
        height: 50px;
    }

    td {
        max-width: 900px;

    }
    .row{
        margin-left: 14%;
    }
</style>
</head>

        <main class="main">
            <section>
                <h1>Resumen de los Comentarios</h1>
                <div class="row">
                <div class="col-sm-6">
                    <form action="index.php?c=comentarios&a=buscarAdmin" method="POST">
                        <input type="text" name="busqueda" id="busqueda" placeholder="buscar..."/>
                        <button type="submit" class="btn btn btn-dark"><i class="fas fa-search"></i>Buscar</button>
                        <a href="index.php?c=Trabajo&a=presentar">
                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-xmark"></i>Limpiar</button>
                        </a>
                    </form>
                </div>
            </div>
            </section>
            <!-- inicio de codigo php -->

            <table>
                <thead>
                    <tr class="headt">
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>USUARIO</th>
                        <th>CORREO</th>
                        <th>COMENTARIO</th>
                        <th>VALORACION</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultados as $fila) {
                    ?>
                        <tr>
                            <td align="center"><?php echo $fila['ID_USUARIO']; ?></td>
                            <td><?php echo $fila['NOMBRE']; ?></td>
                            <td><?php echo $fila['APELLIDOS']; ?></td>
                            <td align="center"><?php echo $fila['USUARIO']; ?></td>
                            <td align="center"><?php echo $fila['CORREO'] ?></td>
                            <td><?php echo $fila['COMENTARIOS']; ?></td>
                            <td><?php echo $fila['VALORACION']; ?></td>
                            <td align="center">
                            <a class="btn btn-danger"
                                        onclick="if(!confirm('Esta seguro de eliminar este mensaje?'))return false;"
                                        href="index.php?c=comentarios&a=eliminarAdmin&id=<?php echo $fila['ID_USUARIO']; ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>

        <?php
        Layout::footer();
        ?>