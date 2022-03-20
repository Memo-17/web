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
  <link rel="stylesheet" href="../styles/RamosOchoaIvan-Reseñas.css" />
  <link rel="stylesheet" href="../styles/RamosIvan-EstrellasReseñas.css" />



  <title>Salón de Eventos</title>
  <style>
    .formulario__grupo-correcto .formulario__validacion-estado {
      color: #1ed12d;
      opacity: 1;
    }

    .formulario__grupo-incorrecto .formulario__label {
      color: #bb2929;
    }

    .formulario__grupo-incorrecto .formulario__validacion-estado {
      color: #bb2929;
      opacity: 1;
    }

    .formulario__grupo-incorrecto .formulario__input {
      border-bottom: 3px solid #bb2929;
    }

    .formulario__input-error {
      font-size: 13px;
      margin-bottom: 0;
      display: none;
    }

    .formulario__input-error-activado {
      display: block;
      color: red;
    }

    .formulario__validacion-estado {
      position: relative;
      bottom: 1px;
      font-size: 15px;
      opacity: 0;
    }

    .content {
      margin-right: 23%;
      margin-left: 27%;
      margin-top: 3%;
      margin-bottom: 3%;
    }

    .buscar {
      margin-right: 23%;
      margin-left: 27%;
      margin-top: 3%;
    }

    #btn-buscar {
      float: right;
      margin-right: 40%;
      background-color: #00aae4;
      border: 0;
      text-transform: uppercase;
      padding: 3px;
      border-radius: 5px;
      color: aliceblue;
      font-weight: 800;
      cursor: pointer;
    }

    .id_buscars {
      margin-left: 30%;
    }

    #formulario {
      margin-left: 0;
      margin-right: 8%;
      border: 5px #00aae4 solid;
      border-radius: 5px;
      padding: 1em;
      box-shadow: 5px 5px 8px 5px #999;
    }

    form {
      margin-top: 20px;
    }
  </style>
</head>


<!--Cabecera del formulario -->

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


    <main class="main page-wrapper">
      <div class="main__container">
        <div class="main__title">
          <h1>Danos tus opiniones</h1>
          <?php
          include_once './templates/nav-comentarios.php'
          ?>
        </div>

        <div class="buscar">
          <form id="formulario" method="GET">
            <div class="id_buscars" id="id_comentario">
              <label class="formulario__label" for="name">ID:
                <select name="ID_USUARIO">
                  <?php
                  include 'conexion.php';
                  $resultado = "select * from reseñas";
                  $ejecutar = mysqli_query($con, $resultado);
                  ?>
                  <?php foreach ($ejecutar as $opciones) : ?>
                    <option value="<?php echo $opciones['ID_USUARIO'] ?>"><?php echo $opciones['ID_USUARIO'] ?></option>
                  <?php endforeach ?>
                </select></label>
              <button type="submit" id="btn-buscar">Buscar</button>
            </div>
          </form>
        </div>

        <!-- Formulario de reseñas-->

        <div class="main__form">
          <form class="form" method="post" id="form">

            <?php
            if (empty($_GET['ID_USUARIO'])) {
              echo "Selecciona un valor de la lista";
            } else {
              $id = $_GET['ID_USUARIO'];
              $sql = "select * from reseñas where ID_USUARIO = '" . $id . "'";
              $resultado = mysqli_query($con, $sql);
              while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>

                <div class="formulario__grupo" id="seccion_nombre">
                  <label class="formulario__label" for="name">Nombre</label>
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  <div><input type="text" name="name" id="name" value="<?php echo $fila['NOMBRE'] ?>" class="formulario__input" placeholder="Nombre" /></div>
                  <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
                  </p>
                </div>

                <div class="formulario__grupo" id="seccion_apellidos">
                  <label class="formulario__label" for="lastname">Apellidos</label>
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  <div><input type="text" name="lastname" id="lastname" value="<?php echo $fila['APELLIDOS'] ?>" class="formulario__input" placeholder="Apellidos" /></div>
                  <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
                  </p>
                </div>

                <div class="formulario__grupo" id="seccion_usuario">
                  <label class="formulario__label" for="name-user">Usuario</label>
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  <div><input type="text" name="name-user" id="name-user" value="<?php echo $fila['USUARIO'] ?>" placeholder="Nombre de usuario" class="formulario__input" /></div>
                  <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo
                  </p>
                </div>


                <div class="formulario__grupo" id="seccion_correo">
                  <label class="formulario__label" for="email">Correo</label>
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  <div><input type="email" name="email" id="email" value="<?php echo $fila['CORREO'] ?>" class="formulario__input" placeholder="Correo" /></div>
                  <p class="formulario__input-error">El formato de correo debe contener letras, números, puntos, guiones y
                    arroba</p>
                </div>


                <div class="formulario__grupo" id="seccion_comentario">
                  <label class="formulario__label" for="Comentario">Comentario</label>
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  <div><textarea name="Comentario" id="Comentario" class="formulario__input" placeholder="Escriba su comentario" rows="3"> <?php echo $fila['COMENTARIOS'] ?></textarea></div>
                  <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
                  </p>
                </div>


                <div class="formulario__grupo">
                  <label class="formulario__label" id="Valoracion">Valoracion</label>
                  <div class="rating">
                    <input id="star5" name="star" type="radio" value="5" <?php echo $fila['VALORACION'] === '5' ? 'checked' : '' ?> class="radio-btn hide" />
                    <label for="star5">☆</label>
                    <input id="star4" name="star" type="radio" value="4" <?php echo $fila['VALORACION'] === '4' ? 'checked' : '' ?> class="radio-btn hide" />
                    <label for="star4">☆</label>
                    <input id="star3" name="star" type="radio" value="3" <?php echo $fila['VALORACION'] === '3' ? 'checked' : '' ?> class="radio-btn hide" />
                    <label for="star3">☆</label>
                    <input id="star2" name="star" type="radio" value="2" <?php echo $fila['VALORACION'] === '2' ? 'checked' : '' ?> class="radio-btn hide" />
                    <label for="star2">☆</label>
                    <input id="star1" name="star" type="radio" value="1" <?php echo $fila['VALORACION'] === '1' ? 'checked' : '' ?> class="radio-btn hide" />
                    <label for="star1">☆</label>
                    <div class="clear"></div>
                  </div>
                </div>


                <div class="block">
                  <button type="submit" id="boton">Enviar</button>
                  <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Se ha enviado exitosamente su petición
                  </p>
                </div>

                <div class="formulario_mensaje" id="formulario__mensaje">
                  <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llene todos los campos de forma
                    correcta </p>
                </div>
          </form>
      <?php
              }
            }
      ?>

      <!-- <script src="../js/RamosIvan.js"></script> -->
      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

      <!-- Conexion con php -->

      <?php
      require_once 'conexion.php';

      if (
        !empty($_POST['name']) && !empty($_POST['lastname'])
        && !empty($_POST['name-user']) && !empty($_POST['email'])
        && !empty($_POST['Comentario']) && !empty($_POST['star'])
      ) {

        $nombre = htmlentities($_POST['name']);
        $apellidos = htmlentities($_POST['lastname']);
        $usuario = htmlentities($_POST['name-user']);
        $email = htmlentities($_POST['email']);
        $comentario = htmlentities($_POST['Comentario']);
        $estrellas = htmlentities($_POST['star']);


        $sql = "update reseñas set NOMBRE='$nombre', APELLIDOS='$apellidos',USUARIO='$usuario',CORREO='$email',COMENTARIOS='$comentario',
            VALORACION='$estrellas' where ID_USUARIO = $id";

        if (mysqli_query($con, $sql)) {
          echo '<script language="javascript">alert("Redireccionando...");</script>';
        } else {
          echo "Error: " . $sql . "" . mysqli_error($con);
        }
      }
      ?>


        </div>
      </div>
    </main>




    <!-- Footer-->
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