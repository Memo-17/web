<?php

  require_once './conexion.php';

  // Get schedule events
  $sql = "SELECT scheduleevents.id as id, eventName, contactEmail, contactPhone, estimatedDate,
  estimatedHour,
  `range`,
  message FROM scheduleevents JOIN attendeesrange ON scheduleevents.estimatedAttendees = attendeesrange.id";
  $result = mysqli_query($con, $sql);

  if ( $result ) {
    $scheduleEvents = mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    echo "<script>alert('Error al obtener los eventos');</script>";

    header('Location: ./ChavezWilmer-AgendarEventoForm.php');
  }

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Empresa de organización y alquiler de eventos." />
  <meta name="keywords" content="HTML5, CSS, JavaScript, Events" />
  <meta name="author" content="Wilmer Chávez" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../styles/index.css" />
  <link rel="stylesheet" href="../styles/ChavezWilmer.css" />

  <!-- B5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- FAWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
  #mainTitle {
    font-size: 3rem;
    font-weight: 600;
    margin-block: 1rem;
    letter-spacing: 2px;
  }

  .actions {
    width: 150px;
    display: flex;
    gap: 0.5rem;
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

          <?php include_once './templates/header.php'; ?>
        </div>
      </div>
    </header>

    <main class="main page-wrapper">
      <div class="heading">
        <h1>Eventos Agendados</h1>

        <a class="btn btn-secondary" href="./ChavezWilmer-AgendarEventoForm.php">Regresar al form</a>
      </div>

      <!-- TABLE -->
      <!-- eventName, contactEmail, contactPhone, estimatedDate, estimatedHour, estimatedAttendees, message -->
      <table class="table mb-4">
        <thead>
          <tr>
            <th>Nombre del Evento</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Fecha Estimada</th>
            <th>Hora Estimada</th>
            <th>Invitados Estimados</th>
            <th>Mensaje</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          <?php if ( empty($scheduleEvents) ) : ?>
          <tr>
            <td colspan="8" class="text-center">
              <h3>No hay eventos agendados</h3>
            </td>
          </tr>
          <?php endif; ?>


          <?php foreach ($scheduleEvents as $scheduleEvent) { ?>
          <tr>
            <td><?php echo $scheduleEvent['eventName']; ?></td>
            <td><?php echo $scheduleEvent['contactEmail']; ?></td>
            <td><?php echo $scheduleEvent['contactPhone']; ?></td>
            <td><?php echo $scheduleEvent['estimatedDate']; ?></td>
            <td><?php echo $scheduleEvent['estimatedHour']; ?></td>
            <td><?php echo $scheduleEvent['range']; ?></td>
            <td><?php echo $scheduleEvent['message']; ?></td>
            <td class="actions">
              <a href="ChavezWilmer-AgendarEventoForm.php?id=<?php echo $scheduleEvent['id']; ?>"
                class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>

              <form action="./ChavezWilmer-RemoveSchedule.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $scheduleEvent['id']; ?>" style="display: none;" />
                <button type="submit" class="btn btn-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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
                <li>
                  <a class="footer__link" href="./ChavezWilmer-AgendarEventoForm.php">
                    Agenda tu evento
                  </a>
                </li>
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
              <?php include_once './templates/footer.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="../js/ChavezWilmer.js"></script>
</body>

</html>