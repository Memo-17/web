<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Empresa de organización y alquiler de eventos." />
  <meta name="keywords" content="HTML5, CSS, JavaScript, Events" />
  <meta name="author" content="Wilmer Chávez" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../styles/index.css" />
  <link rel="stylesheet" href="../styles/ChavezWilmer.css" />

  <style>
  #mainTitle {
    font-size: 3rem;
    font-weight: 600;
    margin-block: 1rem;
    letter-spacing: 2px;
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

          <?php include_once './templates/header.php'; ?>
        </div>
      </div>
    </header>

    <main class="main page-wrapper">
      <section class="hero">
        <div class="">
          <div class="hero__text">
            <h1 id="mainTitle">
              <a href="./ChavezWilmer-AgendarEventoForm.php">CRUD APP WCHAVEZ HERE!</a>
            </h1>

            <blockquote>
              "Somos los mejores en la organización de eventos"
            </blockquote>
          </div>
        </div>
        <div class="hero__image">
          <img src="../images/home/event-hero.svg" alt="Consulta por los eventos disponibles" />
        </div>
      </section>

      <section class="section">
        <div>
          <h2>Nuestros Servicios</h2>
          <p>
            Puedes contactarte con nuestros asesores para mayor información
          </p>
        </div>

        <div class="cards">
          <article class="service-card show">
            <h3>Las mejores instalaciones</h3>
            <small>Atención personalizada</small>

            <div class="cardImg">
              <img src="../images/home/card1.svg" alt="Consulta con expertos" />
            </div>

            <button class="button">Conocer más</button>
          </article>

          <article class="service-card">
            <h3>Las mejores instalaciones</h3>
            <small>Atención personalizada</small>

            <div class="cardImg">
              <img src="../images/home/card2.svg" alt="Consulta con expertos" />
            </div>

            <button class="button">Conocer más</button>
          </article>

          <article class="service-card">
            <h3>Las mejores instalaciones</h3>
            <small>Atención personalizada</small>

            <div class="cardImg">
              <img src="../images/home/card3.svg" alt="Consulta con expertos" />
            </div>

            <button class="button">Conocer más</button>
          </article>

          <article class="service-card">
            <h3>Las mejores instalaciones</h3>
            <small>Atención personalizada</small>

            <div class="cardImg">
              <img src="../images/home/card4.svg" alt="Consulta con expertos" />
            </div>

            <button class="button">Conocer más</button>
          </article>

          <article class="service-card">
            <h3>Las mejores instalaciones</h3>
            <small>Atención personalizada</small>

            <div class="cardImg">
              <img src="../images/home/card5.svg" alt="Consulta con expertos" />
            </div>

            <button class="button">Conocer más</button>
          </article>
        </div>
      </section>

      <section class="section">
        <div>
          <h2>Captura tus recuerdos</h2>
          <p>
            Contamos con las mejores instalaciones para que puedas disfrutar
          </p>
        </div>

        <div class="container">
          <div class="panel active" style="
                background-image: url(https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              ">
            <h3>Programa Conferencias</h3>
          </div>
          <div class="panel" style="
                background-image: url(https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              ">
            <h3>Servicio de Catering</h3>
          </div>
          <div class="panel" style="
                background-image: url(https://images.pexels.com/photos/919734/pexels-photo-919734.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              ">
            <h3>Nos encargamos de la música 🎧</h3>
          </div>
          <div class="panel" style="
                background-image: url(https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              ">
            <h3>Festival de Luces</h3>
          </div>
          <div class="panel" style="
                background-image: url(https://images.pexels.com/photos/3321793/pexels-photo-3321793.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
              ">
            <h3>No sabes dónde dar tu Masterclass?</h3>
          </div>
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
                <li>
                  <a class="footer__link" href="./ChavezWilmer-AgendarEventoForm.php">
                    Agenda tu evento
                  </a>
                </li>
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
              <?php include_once './templates/footer.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="../js/ChavezWilmer.js"></script>
</body>

</html>