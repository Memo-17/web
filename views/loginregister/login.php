<?php require_once 'views/templates/layout.php' ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION["usuario"]["rol"])) {
  if (($_SESSION["usuario"]["rol"] == 1)) {
    header("location: index.php?c=admin");
  } else {
    if ($_SESSION["usuario"]["rol"] == 2) {
      header("location: index.php");
    }
  }
}
?>

<?php
Layout::header([
  'animate' => true,
  'stylesheets' => [
    'assets/styles/login.css',
  ],
]);
?>

<style>
  .mensaje {
    color: white;
    background-color: red;
  }
</style>
<div class="body">
  <main class="main">
    <div class="content-principal">
      <form class="login" action="index.php?c=usuarios&a=index" method="post">
        <h1 class="animate__animated animate__backInLeft">Iniciar Sesión</h1>

        <?php if (isset($_COOKIE["userNotFound"])) { ?>
          <div class="mensaje">
            <p>Usuario y/o contraseña incorrectos</p>
          </div>
        <?php setcookie("userNotFound", "", time() - 60);
        } ?>

        <p>Usuario <input type="text" placeholder="Ingrese usuario" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password"></p>
        <input class="btn2 btn-primary2" type="submit" value="Ingresar">
      </form>
    </div>
  </main>
</div>

<?php Layout::footer() ?>