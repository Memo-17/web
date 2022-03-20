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
  <link rel="stylesheet" href="../styles/Villao-Joel-trabajo.css" />

  <!-- ESTILOS-->
  <style>
    form {
      margin-left: 30%;
    }

    h1 {
      margin-left: 30%;
      margin-right: 30%;
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

          <?php
          include_once './templates/header.php';
          ?>

        </div>
      </div>
    </header>
    <div>
      <main>
        <section>
          <div>

            <blockquote>
              <h1>
                Datos Personales
              </h1>
              <?php
              include_once './templates/nav-trabajos.php';
              ?>
              <blockquote>
                <div>
                  <!-- INICIO FORMULARIO-->
                  <form id="frmtrabajos" action="Villao-Joel-Trabajo.php" method="post" >
                    <div>
                      <label>Nombres</label>
                      <div><input type="text" name="name" id="name" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="lastname">Apellidos</label>
                      <div><input type="text" name="lastname" id="lastname" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="phone">Teléfono</label>
                      <div><input type="tel" name="phone" id="phone" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="correo">Correo</label>
                      <div><input type="email" name="correo" id="correo" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="date">Fecha Nacimiento</label>
                      <div><input type="date" name="date" id="date" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label>Trabajo</label>
                      <div>
                        <input class="separacion-radiobt" type="radio" id="mesero" name="trabajo" value="mesero" checked>
                        <label for="mesero">Mesero</label>
                  
                        <input class="separacion-radiobt" type="radio" id="dj" name="trabajo" value="dj" checked>
                        <label for="dj">DJ</label>
                  
                        <input class="separacion-radiobt" type="radio" id="animador" name="trabajo" value="animador" checked>
                        <label for="animador">Animador</label>
                      </div>
                    </div>
                  
                    <div>
                      <button style="color: #fff" type="submit" id="formato-boton">Enviar</button>
                    </div>
                  <!-- FIN FORMULARIO-->
                  </form>

                  <?php
                  require_once 'conexion.php';
                  if(
                    !empty($_POST['name']) && !empty($_POST['lastname'])
                    && !empty($_POST['phone']) && !empty($_POST['correo'])
                    && !empty($_POST['date']) && !empty($_POST['trabajo'])
                  ){
                    $nombre = htmlentities($_POST['name']);
                    $apellido = htmlentities($_POST['lastname']);
                    $telefono = htmlentities($_POST['phone']);
                    $correo = htmlentities($_POST['correo']);
                    $fecha = htmlentities($_POST['date']);
                    $trabajo = htmlentities($_POST['trabajo']);

                    $sql = "insert into trabajo(NOMBRE, APELLIDO, TELEFONO, CORREO, NACIMIENTO, TRABAJO)"
                    ."values('$nombre','$apellido','$telefono','$correo','$fecha','$trabajo')";

                    if(mysqli_query($con,$sql)){
                      echo '<script language="javascript">alert("Redireccionando...");</script>';
                    }else{
                      echo "Error: " . $sql . "" . mysqli_error($con);
                    }
                  }
                  ?>
                </div>
              </blockquote>
            </blockquote>
          </div>
        </section>
      </main>
    </div>
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
                <li><a class="footer__link" href="../ChavezWilmer-AgendarEvento.html">Agenda tu evento</a></li>
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
  <!-- -->
  <script src="../JS/Villao-Joel-TR_Validaciones.js"></script>
</body>

</html>