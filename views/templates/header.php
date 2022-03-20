<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Empresa de organización y alquiler de eventos." />
  <meta name="keywords" content="HTML5, CSS, JavaScript, Events" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="icon" href="assets/images/Gallery/events.png">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/styles/index.css" />

  <!-- SPECIFIC CSS -->
  <?php foreach ($options['stylesheets'] as $stylesheet) { ?>
    <link rel="stylesheet" href="<?php echo $stylesheet; ?>" />
  <?php } ?>

    <!-- INCLUDE BOOTSTRAP -->
    <?php if (isset($options['bootstrap'])) { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php } ?>

  <!-- INCLUDE BOOTSTRAP -->
  <?php if (isset($options['bootstrap'])) { ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php } ?>

    <!-- INCLUDE BOOTSTRAP -->
    <?php if (isset($options['bootstrap'])) { ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php } ?>

  <!-- INCLUDE ANIMATE.CSS -->
  <?php if (isset($options['animate'])) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <?php } ?>

  <!-- INCLUDE FONTAWESOME -->
  <?php if (isset($options['fontawesome'])) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php } ?>

  <title>Salón de Eventos</title>
</head>

<body>
  <div class="layout">
    <header>
      <div class="page-wrapper">
        <div class="header__container">
          <span>
            <img src="assets/images/brand/logo.svg" alt="Salón de Eventos GrupoE" />
          </span>

          <nav>
            <ul class="navigation__list">
              <li class="navigation__item">
                <a class="navigation__link" href="index.php?c=eventos&a=index">Inicio</a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php?c=tarjeta&a=services">Servicios</a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php?c=contactos&a=gastronomiaVer">Gastronomía</a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php?c=espacios&a=EspaciosVer">Espacios</a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link" href="index.php?c=comentarios&a=comentariosVer">Testimonios</a>
              </li>
              <li class="navigation__item">
                <?php if (isset($_SESSION["usuario"])) { ?>
                  <?php if ($_SESSION["usuario"]["rol"] == 1) { ?>
                    <a class="navigation__link" href="index.php?c=contactos&a=listarAdmin">Contacto</a>
                  <?php } else { ?>
                    <a class="navigation__link" href="index.php?c=contactos&a=presentar">Contacto</a>
                  <?php } ?>
                <?php } else { ?>
                  <a class="navigation__link" href="index.php?c=contactos&a=presentar">Contacto</a>
                <?php } ?>
              </li>

              <?php if (isset($_SESSION["usuario"])) { ?>
                <li class="navigation__item">
                  <a class="session-link" href="index.php?c=usuarios&a=cerrarSesion">Cerrar sesión</a>
                </li>
              <?php } else { ?>
                <li class="navigation__item">
                  <a class="session-link" href="index.php?c=logreg">Accede o Registrate</a>
                </li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>