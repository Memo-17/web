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
  <link rel="stylesheet" href="../styles/home.css" />
  <link rel="stylesheet" href="../styles/MontesQuijijeErickJosue.css" />

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

    </header>

    <main class="main">
      <section>
        <h1>Eliminar Tarjeta</h1>
      </section>
      <?php
      include_once './templates/nav-tarjeta.php';
      ?>

      <?php
      require_once 'conexion.php';

      $sql = "select * from info_tarjeta";
      $resultados = mysqli_query($con, $sql);
      ?>

      <div>
        <table>
          <thead>
            <tr class="headt">
              <th>ID</th>
              <th>NOMBRES</th>
              <th>NUMERO TARJETA</th>
              <th>MES</th>
              <th>AÑO</th>
              <th>CCV</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($resultados)) {
            ?>
              <tr>
                <td align="center"><?php echo $row['id'] ?></td>
                <td align="center"><?php echo $row['Nombre'] ?></td>
                <td align="center"><?php echo $row['Num_Tarjeta'] ?></td>
                <td align="center"><?php echo $row['Mes'] ?></td>
                <td align="center"><?php echo $row['Año'] ?></td>
                <td align="center"><?php echo $row['CCV'] ?></td>
                <td align="center">
                  <a href="eliminar_tarjeta.php?id=<?php echo $row['id'] ?>" class="btn-eliminar">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>

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