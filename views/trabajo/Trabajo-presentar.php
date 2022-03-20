<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["usuario"]["rol"])) {
    header("location: index.php?c=logreg&a=index");
} else {
    /* Si mi usuario es admin: */
    if ($_SESSION["usuario"]["rol"] == 1) {
        header("location: index.php?c=logreg&a=index");
    }
}
/* Si algun usuario no ha iniciado sesion */
?>

<?php
Layout::header([
    'stylesheets' => [
        'assets/styles/Villao-Joel-trabajo.css',
    ],
    'fontawesome' => true,
    'bootstrap' => true,
]);
?>

<style>
    h1 {
      margin-left: 30%;
      margin-right: 30%;
    }
    table{
        border-collapse: collapse;
        margin: auto;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .headt th {
        background-color: #00aae4;
        color: white;
    }

    td,th {
        border: #b2b2b2 1px solid;
        height: 50px;
    }
    
    .row{
        margin-left: 14%;
    }

  </style>

      <main>
        <section>
            <div>
                <h1>Resumen</h1>
            <div class="row">
                <div class="col-sm-6">
                    <form action="index.php?c=Trabajo&a=buscar" method="POST">
                        <input type="text" name="busqueda" id="busqueda" placeholder="buscar..."/>
                        <button type="submit" class="btn btn btn-dark"><i class="fas fa-search"></i>Buscar</button>
                        <a href="index.php?c=Trabajo&a=presentar">
                            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-xmark"></i>Limpiar</button>
                        </a>
                    </form>
                </div>
            </div>

                <!-- PHP INICIO -->
                <table>
                    <thead>
                        <tr class="headt">
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>TELEFONO</th>
                            <th>CORREO</th>
                            <th>NACIMIENTO</th>
                            <th>TRABAJO</th>
                            <th>ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($resultados as $row){
                        ?>
                            <tr>
                                <td style="min-width: 30px;"><?php echo $row['id']?></td>
                                <td style="min-width: 150px;"><?php echo $row['NOMBRE']?></td>
                                <td style="min-width: 150px;"><?php echo $row['APELLIDO']?></td>
                                <td style="min-width: 200px;"><?php echo $row['TELEFONO']?></td>
                                <td style="min-width: 250px;"><?php echo $row['CORREO']?></td>
                                <td style="min-width: 150px;"><?php echo $row['NACIMIENTO']?></td>  
                                <td style="min-width: 110px;"><?php echo $row['TRABAJO']?></td>
                                <td align="center">
                                    <a class="btn btn-primary"
                                        href="index.php?c=trabajo&a=editar&id=<?php echo $row['id']; ?>"><i
                                        class="fas fa-marker"></i></a>
                                    <a class="btn btn-danger"
                                        onclick="if(!confirm('Esta seguro de eliminar este mensaje?'))return false;"
                                        href="index.php?c=trabajo&a=eliminar&id=<?php echo $row['id']; ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr> 
                        <?php } ?>
                    </tbody>
                </table>
                <!-- PHP FIN -->
            </div>
        </section>
      </main>

<?php
Layout::footer();
?>