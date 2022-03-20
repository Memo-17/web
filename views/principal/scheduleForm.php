<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
if (!isset($_SESSION["usuario"])) {
  header("location: index.php?c=eventos&a=index");
}
?>

<?php 
  Layout::header([
    'stylesheets' => [
      'views/principal/css/ChavezWilmer-AgendarEvento.css',
    ],
    'bootstrap' => true,
  ]);
?>

<!-- Formulario -->
<main class="main page-wrapper">
  <div class="main__container">

    <div class="main__form">
      <form 
        action="<?php if (isset($_GET['id'])) {
          echo 'index.php?c=eventos&a=updateScheduleEvent&id=' . $_GET['id'];
        } else {
          echo 'index.php?c=eventos&a=createScheduleEvent';
        } ?>"
        id="form" 
        autocomplete="off" 
        method="POST">
        <div class="form__group">
          <label for="eventName">Nombre</label>
          <input type="text" name="eventName" id="eventName" class="form__input" placeholder="Nombre del evento"
            value="<?php echo $scheduleEvent['eventName'] ?? ''; ?>" />
          <small></small>
        </div>

        <div class="form__group">
          <label for="contactEmail">Correo</label>
          <input type="email" name="contactEmail" id="contactEmail" class="form__input" placeholder="Correo"
            value="<?php echo $scheduleEvent['contactEmail'] ?? ''; ?>" />
          <small></small>
        </div>

        <div class="form__group">
          <label for="contactPhone">Teléfono</label>
          <input type="tel" name="contactPhone" id="contactPhone" class="form__input" placeholder="Teléfono" maxlength="10"
            value="<?php echo $scheduleEvent['contactPhone'] ?? ''; ?>" />
          <small></small>
        </div>

        <div class="form__group">
          <label for="estimatedDate">Fecha</label>
          <input type="date" name="estimatedDate" id="estimatedDate" class="form__input"
            value="<?php echo $scheduleEvent['estimatedDate'] ?? ''; ?>" />
          <small></small>
        </div>

        <div class="form__group">
          <label for="estimatedHour">Hora</label>
          <input type="time" name="estimatedHour" id="estimatedHour" class="form__input"
            value="<?php echo $scheduleEvent['estimatedHour'] ?? ''; ?>" />
          <small></small>
        </div>

        <div class="form__group">
          <label for="message">Mensaje</label>
          <textarea name="message" id="message" class="form__input" placeholder="Mensaje"
            rows="3"><?php echo $scheduleEvent['message'] ?? ''; ?></textarea>
          <small></small>
        </div>

        <div class="form__group">
          <label for="estimatedAttendees">Participantes</label>
          <select name="estimatedAttendees" id="estimatedAttendees" class="form__input">
            <option value="" disabled selected>Selecione aquí</option>

            <?php
              foreach($attendeesRanges as $range) {
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

<?php
  Layout::footer([
    'scripts' => [
      'views/principal/js/ChavezWilmer-Form.js',
    ],
  ]);
?>