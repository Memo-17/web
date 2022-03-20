<?php

require_once './conexion.php';


// Remove schedule event

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id']) ) {
  $id = $_POST['id'];

  $sql = "DELETE FROM scheduleevents WHERE id = $id";

  $result = mysqli_query($con, $sql);

  if ( $result ) {
    echo "<script>alert('Evento eliminado correctamente');</script>";
  } else {
    echo "<script>alert('Error al eliminar el evento');</script>";
  }

  header('Location: ./ChavezWilmer-ListaAgendaEventos.php');
}

?>