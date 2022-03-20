<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION["usuario"]["rol"])){
    if ($_SESSION["usuario"]["rol"] == 1) {
        header("location: index.php?c=logreg&a=index");
    }
}
/* Si algun usuario no ha iniciado sesion */
?>

<?php
Layout::header([
    'stylesheets' => [
        'assets/styles/index.css',
        'views/tarjeta/assets/styles/MontesQuijijeErickJosue.css',
    ]
]);
?>


<main class="main page-wrapper">
  <h1 class="centrar">Servicios</h1>
  <br>


  <section>
    <h2 class="centrar">Planes Disponibles</h2>
    <p class="text_p">Estos son los planes disponibles con los que cuenta nuestra empresa, tomando en
      cuenta su mejor experiencia y su comodidad
    </p>
  </section>
  <div class="planes-contendor">

    <article class="Targeta">
      <h2 class="centrar_Titulo_Targeta">Plan Economico</h2>
      <ul class="viñetas_descripcion">
        <li>Local</li>
        <li>150 Sillas</li>
      </ul>
      <h3 class="precio">$453</h3>
      <button onclick="location.href='index.php?c=tarjeta&a=verificarUsuario'" class="button" type="button">Comprar</button>
    </article>

    <article class="Targeta">
      <h2 class="centrar_Titulo_Targeta">Plan Premier</h2>
      <ul class="viñetas_descripcion">
        <li>Local</li>
        <li>200 Sillas</li>
        <li>Bufet</li>
      </ul>
      <h3 class="precio">$751</h3>

      <button onclick="location.href='index.php?c=tarjeta&a=verificarUsuario'" class="button" type="button">Comprar</button>

    </article>

    <article class="Targeta">
      <h2 class="centrar_Titulo_Targeta">Plan VIP</h2>
      <ul class="viñetas_descripcion">
        <li>Local</li>
        <li>400 Sillas</li>
        <li>Buffet</li>
        <li>Dj</li>
        <li>Bar libre</li>
      </ul>
      <h3 class="precio">$958</h3>
      <button onclick="location.href='index.php?c=tarjeta&a=verificarUsuario'" class="button" type="button">Comprar</button>
    </article>
  </div>
  <p class="text_p"> <br> Esperamos que disfrute la experiencia GrupoE </p>
</main>


<?php
Layout::footer();
?>