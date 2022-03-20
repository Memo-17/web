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
  <link rel="stylesheet" href="../styles/Villao-Joel-gallery.css" />

  <style>
    h1{
    text-align: center;
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

    <main>
      <section>
        <div>
          <blockquote>
            <h1>Gallery</h1>
            <h2>Nuestros Trabajos</h2>
            <blockquote>
              <img id="abrir" class="centrado" src="../images/Gallery/event.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir1" class="centrado" src="../images/Gallery/event1.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir2" class="centrado" src="../images/Gallery/event2.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir3" class="centrado" src="../images/Gallery/event3.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir4" class="centrado" src="../images/Gallery/event4.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir5" class="centrado" src="../images/Gallery/event5.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir6" class="centrado" src="../images/Gallery/event6.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir7" class="centrado" src="../images/Gallery/event7.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir8" class="centrado" src="../images/Gallery/event8.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir9" class="centrado" src="../images/Gallery/event9.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir10" class="centrado" src="../images/Gallery/event10.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir11" class="centrado" src="../images/Gallery/event11.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>

              <div class="modalContenedor" id="modalContenedor">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event.jpg" alt="evento" id="cerrar"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor1">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event1.jpg" alt="evento" id="cerrar1"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor2">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event2.jpg" alt="evento" id="cerrar2"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor3">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event3.jpg" alt="evento" id="cerrar3"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor4">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event4.jpg" alt="evento" id="cerrar4"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor5">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event5.jpg" alt="evento" id="cerrar5"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor6">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event6.jpg" alt="evento" id="cerrar6"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor7">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event7.jpg" alt="evento" id="cerrar7"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor8">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event8.jpg" alt="evento" id="cerrar8"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor9">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event9.jpg" alt="evento" id="cerrar9"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor10">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event10.jpg" alt="evento" id="cerrar10"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor11">
                <div class="modal">
                  <img class="modal-formato" src="../images/Gallery/event11.jpg" alt="evento" id="cerrar11"/>
                </div>
              </div>

            </blockquote>
          </blockquote>
        </div>
      </section>
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
  <script src="../JS/Villao-Joel-Galeria.js"></script>
</body>

</html>