<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'assets/styles/index.css',
        'views/tarjeta/assets/styles/MontesQuijijeErickJosue.css',
    ],
    'fontawesome' => true,
    'bootstrap' => true,
]);
?>

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
            width: 200px;
        }

        td,
        th {
            border: #b2b2b2 1px solid;
            height: 50px;
        }
    </style>

    <main class="main page-wrapper">
        <section>
            <h1>Datos tarjeta</h1>
        </section>

        <table>
            <thead>
            <tr class="headt">
                <th>ID</th>
                <th>NOMBRES</th>
                <th>NUMERO TARJETA</th>
                <th>MES</th>
                <th>AÑO</th>
                <th>CCV</th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($resultados as $fila) {
                ?>
                <tr>
                    <td align="center"><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['Nombre']; ?></td>
                    <td><?php echo $fila['NumTarjeta']; ?></td>
                    <td align="center"><?php echo $fila['Mes']; ?></td>
                    <td align="center"><?php echo $fila['Anio'] ?></td>
                    <td><?php echo $fila['CCV']; ?></td>
                    <td align="center">
                        <a class="btn btn-primary"
                           href="index.php?c=Tarjeta&a=editar&id=<?php echo $fila['id']; ?>"><i
                                    class="fas fa-marker"></i></a>
                        <a class="btn btn-danger"
                           onclick="if(!confirm('Esta seguro de eliminar este mensaje?'))return false;"
                           href="index.php?c=tarjeta&a=eliminar&id=<?php echo $fila['id']; ?>"><i
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