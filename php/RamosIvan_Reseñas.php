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


    <!-- Formulario de reseñas-->
    <main class="main page-wrapper">
      <div class="main__container">
        <div class="main__title">
          <h1>Danos tus opiniones</h1>
          <?php
          include_once './templates/nav-comentarios.php'
          ?>
        </div>

        <div class="main__form">
          <form action="" class="form" method="post" id="form">
            <div class="formulario__grupo" id="seccion_nombre">
              <label class="formulario__label" for="name">Nombre</label>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
              <div><input type="text" name="name" id="name" class="formulario__input" placeholder="Nombre" /></div>
              <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
              </p>
            </div>

            <div class="formulario__grupo" id="seccion_apellidos">
              <label class="formulario__label" for="lastname">Apellidos</label>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
              <div><input type="text" name="lastname" id="lastname" class="formulario__input" placeholder="Apellidos" /></div>
              <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
              </p>
            </div>

            <div class="formulario__grupo" id="seccion_usuario">
              <label class="formulario__label" for="name-user">Usuario</label>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
              <div><input type="text" name="name-user" id="name-user" placeholder="Nombre de usuario" class="formulario__input" /></div>
              <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo
              </p>
            </div>


            <div class="formulario__grupo" id="seccion_correo">
              <label class="formulario__label" for="email">Correo</label>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
              <div><input type="email" name="email" id="email" class="formulario__input" placeholder="Correo" /></div>
              <p class="formulario__input-error">El formato de correo debe contener letras, números, puntos, guiones y
                arroba</p>
            </div>


            <div class="formulario__grupo" id="seccion_comentario">
              <label class="formulario__label" for="Comentario">Comentario</label>
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
              <div><textarea name="Comentario" id="Comentario" class="formulario__input" placeholder="Escriba su comentario" rows="3"></textarea></div>
              <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras, máximo 40
              </p>
            </div>


            <div class="formulario__grupo">
              <label class="formulario__label" id="Valoracion">Valoracion</label>
              <div class="rating">
                <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                <label for="star5">☆</label>
                <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                <label for="star4">☆</label>
                <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                <label for="star3">☆</label>
                <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                <label for="star2">☆</label>
                <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
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


            $sql = "insert into reseñas(NOMBRE, APELLIDOS, USUARIO, CORREO, COMENTARIOS, VALORACION)"
              . "values('$nombre','$apellidos','$usuario','$email','$comentario','$estrellas')";

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