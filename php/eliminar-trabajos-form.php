<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../styles/index.css" />
  <link rel="stylesheet" href="../styles/Villao-Joel-trabajo.css" />

  <!-- ESTILOS-->
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

    .btn-eliminar {
        border: red solid 1px;
        background-color: red;
        border-radius: 3px;
        color: white;
        text-decoration: none;
        padding: 5px;
        text-align: center;
        margin: 10px;
    }
  </style>

  <title>Salón de Eventos</title>
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
    <div>
      <main>
        <section>
            <div>
                
                <h1>Eliminar</h1>

                <?php
                include_once './templates/nav-trabajos.php';
                ?>

                <!-- PHP INICIO -->
                <?php
                require_once 'conexion.php';
                $sql = "select * from trabajo";
                $resultados = mysqli_query($con, $sql);
                ?>
                <div>
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
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultados)) {
                            ?>
                                <tr>
                                    <td style="min-width: 30px;"><?php echo $row['id']?></td>
                                    <td style="min-width: 150px;"><?php echo $row['NOMBRE']?></td>
                                    <td style="min-width: 150px;"><?php echo $row['APELLIDO']?></td>
                                    <td style="min-width: 200px;"><?php echo $row['TELEFONO']?></td>
                                    <td style="min-width: 250px;"><?php echo $row['CORREO']?></td>
                                    <td style="min-width: 150px;"><?php echo $row['NACIMIENTO']?></td>
                                    <td style="min-width: 110px;"><?php echo $row['TRABAJO']?></td>
                                    <td>
                                        <a href="delete-trabajo.php?id=<?php echo $row['id'] ?>" class="btn-eliminar">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- PHP FIN -->
            </div>
        </section>
      </main>
    </div>
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
                <li><a class="footer__link" href="../ChavezWilmer-AgendarEvento.html">Agenda tu evento</a></li>
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