<?php

  require_once './conexion.php';

  // Get ranges
  $sql = "SELECT id, `range` FROM attendeesrange";
  $result = mysqli_query($con, $sql);

  if ( $result ) {
    $ranges = mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    echo "<script>alert('Error al obtener los rangos');</script>";

    header('Location: ./ChavezWilmer-AgendarEventoForm.php');
  }

  // Create schedule event
  if ( $_SERVER['REQUEST_METHOD'] == 'POST' && empty($_GET['id']) ) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $asistentes = $_POST['asistentes'];

    $sql = "INSERT INTO scheduleevents (eventName, contactEmail, contactPhone, estimatedDate, estimatedHour, estimatedAttendees, message) VALUES ('$nombre', '$email', '$telefono', '$fecha', '$hora', '$asistentes', '$mensaje')";

    $result = mysqli_query($con, $sql);

    if ( $result ) {
      echo "<script>alert('Mensaje enviado correctamente');</script>";
    } else {
      echo "<script>alert('Error al enviar el mensaje');</script>";
    }

    header('Location: ./ChavezWilmer-AgendarEventoForm.php');
  }

  // Get info to edit schedule event
  if ( !empty($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM scheduleevents WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ( $result ) {
      $scheduleEvent = mysqli_fetch_assoc($result);
    } else {
      echo "<script>alert('Error al obtener el evento');</script>";
    }
  }

  // Update schedule event
  if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_GET['id']) ) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $asistentes = $_POST['asistentes'];

    $sql = "UPDATE scheduleevents SET eventName = '$nombre', contactEmail = '$email', contactPhone = '$telefono', estimatedDate = '$fecha', estimatedHour = '$hora', estimatedAttendees = '$asistentes', message = '$mensaje' WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if ( $result ) {
      echo "<script>alert('Evento actualizado correctamente');</script>";
    } else {
      echo "<script>alert('Error al actualizar el evento');</script>";
    }

    header('Location: ./ChavezWilmer-AgendarEventoForm.php');
  }

?>


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
  <link rel="stylesheet" href="../styles/ChavezWilmer-AgendarEvento.css" />

  <!-- FAWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <!-- Formulario -->
    <main class="main page-wrapper">
      <div class="main__container">

        <div class="heading">
          <div class="main__title">
            <h1>Agendar Evento</h1>
          </div>

          <a class="app-button" href="./ChavezWilmer-ListaAgendaEventos.php">
            <i class="fa-solid fa-hammer"></i>
            CRUD - App
          </a>
        </div>

        <div class="main__form">
          <form id="form" autocomplete="off" method="POST">
            <div class="form__group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form__input" placeholder="Nombre"
                value="<?php echo $scheduleEvent['eventName'] ?? ''; ?>" />
              <small></small>
            </div>

            <div class="form__group">
              <label for="email">Correo</label>
              <input type="email" name="email" id="email" class="form__input" placeholder="Correo"
                value="<?php echo $scheduleEvent['contactEmail'] ?? ''; ?>" />
              <small></small>
            </div>

            <div class="form__group">
              <label for="telefono">Teléfono</label>
              <input type="tel" name="telefono" id="telefono" class="form__input" placeholder="Teléfono" maxlength="10"
                value="<?php echo $scheduleEvent['contactPhone'] ?? ''; ?>" />
              <small></small>
            </div>

            <div class="form__group">
              <label for="fecha">Fecha</label>
              <input type="date" name="fecha" id="fecha" class="form__input"
                value="<?php echo $scheduleEvent['estimatedDate'] ?? ''; ?>" />
              <small></small>
            </div>

            <div class="form__group">
              <label for="hora">Hora</label>
              <input type="time" name="hora" id="hora" class="form__input"
                value="<?php echo $scheduleEvent['estimatedHour'] ?? ''; ?>" />
              <small></small>
            </div>

            <div class="form__group">
              <label for="mensaje">Mensaje</label>
              <textarea name="mensaje" id="mensaje" class="form__input" placeholder="Mensaje"
                rows="3"><?php echo $scheduleEvent['message'] ?? ''; ?></textarea>
              <small></small>
            </div>

            <div class="form__group">
              <label for="asistentes">Participantes</label>
              <select name="asistentes" id="asistentes" class="form__input">
                <option value="" disabled selected>Selecione aquí</option>

                <?php
                  foreach($ranges as $range) {
                    $selected = '';

                    $value = $range['id'];
                    $text = $range['range'];

                    if ( $scheduleEvent['estimatedAttendees'] == $value ) {
                      $selected = 'selected';
                    }


                    echo "<option value='$value' $selected>$text</option>";
                  }
                ?>

              </select>

              <small></small>
            </div>

            <div class="form__group">
              <button type="submit" class="form__button">Enviar</button>
            </div>
          </form>
        </div>
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
                <li>
                  <a class="footer__link" href="./ChavezWilmer-AgendarEventoForm.php">Agenda tu evento</a>
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

  <script src="../js/ChavezWilmer-Form.js"></script>
</body>

</html>