<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="formulario, contacto, informacion">
    <meta name="description" content="Página de formulario de contacto y de información">


    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/RamosOchoa2.css" />
    <title>Salón de Eventos</title>

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
    </style>
</head>

<body>
    <div class="layout">
        <header>
            <div class="page-wrapper">
                <div class="header__container">
                    <span>
                        <img src="../images/brand/logo.svg" alt="Salón de Eventos GrupoE" />
                    </span>

                    <?php
                    include_once './templates/header.php';
                    ?>
                </div>
            </div>
        </header>

        <main class="main">
            <section>
                <h1>Resumen de los Comentarios</h1>
                <?php
                include_once './templates/nav-comentarios.php';
                ?>
            </section>
            <!-- inicio de codigo php -->

            <?php
            require_once 'conexion.php';

            $sql = "select * from reseñas";
            $resultados = mysqli_query($con, $sql);
            ?>

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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultados)) {
                    ?>
                        <tr>
                            <td><?php echo $row['ID_USUARIO'] ?></td>
                            <td><?php echo $row['NOMBRE'] ?></td>
                            <td><?php echo $row['APELLIDOS'] ?></td>
                            <td><?php echo $row['USUARIO'] ?></td>
                            <td><?php echo $row['CORREO'] ?></td>
                            <td><?php echo $row['COMENTARIOS'] ?></td>
                            <td align="center"><?php echo $row['VALORACION'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>

        <!-- Pie de Página-->

        <footer class="footer">
            <div class="page-wrapper">
                <div class="footer__container">
                    <div class="footer__company-info">
                        <span>
                            <img src="../images/brand/logo-white.svg" alt="Salón de Eventos X" />
                        </span>
                        <p class="footer__text">
                            Solicita tu asesoría personalizada para tu evento.
                        </p>

                        <p class="footer__text">© GrupoE 2020. All rights reserved</p>
                    </div>

                    <div class="footer__links-container">
                        <div class="footer__links-column">
                            <span class="footer__column-title">Eventos</span>
                            <ul class="footer__column-list">
                                <li><a class="footer__link" href="./ChavezWilmer-AgendarEvento.html">Agenda tu evento</a></li>
                            </ul>
                        </div>
                        <div class="footer__links-column">
                            <span class="footer__column-title">Redes Sociales</span>
                            <ul class="footer__column-list">
                                <li><a class="footer__link" href="#">Facebook</a></li>
                                <li><a class="footer__link" href="#">Twitter</a></li>
                                <li><a class="footer__link" href="#">LinkedIn</a></li>
                                <li><a class="footer__link" href="#">Dribbble</a></li>
                            </ul>
                        </div>
                        <div class="footer__links-column">
                            <span class="footer__column-title">Más Información</span>
                            <?php
                            include_once './templates/footer.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>