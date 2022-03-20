<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<?php
Layout::header([
  'stylesheets' => [
    'views/comentarios/assets/styles/RamosOchoaIvan-Reseñas.css',
    'views/comentarios/assets/styles/RamosIvan-Estrellas.css',
  ]
]);
?>

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


    <!-- Formulario de reseñas-->
    <main class="main page-wrapper">
      <div class="main__container">
        <div class="main__title">
          <h1>Danos tus opiniones</h1>
          <?php
          include_once 'views/comentarios/templates/nav-comentarios.php'
          ?>
        </div>

        <div class="main__form">
          <form action="index.php?c=comentarios&a=agregar" class="form" method="post" id="form">
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

          <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


          <?php
Layout::footer([
    'scripts' => [
        'views/comentarios/assets/js/RamosIvan.js'
    ]
]);
?>