<?php require_once 'views/templates/layout.php'; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
      'views/principal/css/ChavezWilmer.css',
    ],
])
?>

<main class="main page-wrapper">
  <section class="hero">
    <div class="">
      <div class="hero__text">
        <h1>Agendar Eventos</h1>
        <?php if (isset($_SESSION["usuario"])): ?>
          <a href="index.php?c=eventos&a=showEvents&range=1">Estas autenticado! Revisa los eventos agendados</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="hero__image">
      <img src="assets/images/home/event-hero.svg" alt="Consulta por los eventos disponibles" />
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
      <div class="panel active"
        style="background-image: url(https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <h3>Programa Conferencias</h3>
      </div>
      <div class="panel"
        style="background-image: url(https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <h3>Servicio de Catering</h3>
      </div>
      <div class="panel"
        style="background-image: url(https://images.pexels.com/photos/919734/pexels-photo-919734.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <h3>Nos encargamos de la música 🎧</h3>
      </div>
      <div class="panel"
        style="background-image: url(https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <h3>Festival de Luces</h3>
      </div>
      <div class="panel"
        style="background-image: url(https://images.pexels.com/photos/3321793/pexels-photo-3321793.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <h3>No sabes dónde dar tu Masterclass?</h3>
      </div>
    </div>
  </section>
</main>

<?php
Layout::footer([
    'scripts' => [
        'assets/js/ChavezWilmer.js'
    ]
]);
?>