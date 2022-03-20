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
      'views/principal/css/index.css',
    ],
    'bootstrap' => true,
    'fontawesome' => true,
  ]);
?>

<main class="main page-wrapper">

  <div class="row mt-4">

    <div class="col">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Eventos Agendados</h2>

        <?php if (isset($_SESSION["usuario"]["rol"]) && $_SESSION["usuario"]["rol"] == 1): ?>
          <a class="btn btn-primary" href="index.php?c=eventos&a=scheduleForm">Nuevo</a>
        <?php endif; ?>
      </div>

      <hr>

      <nav class="nav nav-pills flex-column flex-sm-row mb-4">

        <?php foreach ($attendeesRanges as $attendeesRange) { ?>
          <a class="flex-sm-fill text-sm-center nav-link <?php echo ($attendeesRange['id'] == $_GET['range']) ? 'active' : ''; ?>" href="index.php?c=eventos&a=showEvents&range=<?php echo $attendeesRange['id']; ?>">
            <?php echo $attendeesRange['range']; ?>
          </a>
        <?php } ?>

      </nav>

      <table class="table mb-4">
        <thead>
          <tr>
            <th>Evento</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha Estimada</th>
            <th>Hora Estimada</th>
            <th>Mensaje</th>
            <?php if (isset($_SESSION["usuario"]["rol"]) && $_SESSION["usuario"]["rol"] == 1): ?>
            <th>Acciones</th>
            <?php endif; ?>
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
            <td><?php echo $scheduleEvent['message']; ?></td>
            <?php if (isset($_SESSION["usuario"]["rol"]) && $_SESSION["usuario"]["rol"] == 1): ?>
            <td class="actions">
              <a href="index.php?c=eventos&a=scheduleForm&id=<?php echo $scheduleEvent['id']; ?>"
                class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>

              <form action="<?php echo "index.php?c=eventos&a=deleteScheduleEvent"; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $scheduleEvent['id']; ?>" style="display: none;" />
                <input type="hidden" name="estimatedAttendees" value="<?php echo $scheduleEvent['estimatedAttendees']; ?>" style="display: none;" />
                <button type="submit" class="btn btn-primary">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
            </td>
            <?php endif; ?>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</main>

<?php 
  Layout::footer();
?>