<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION["usuario"]["rol"])){
    if ($_SESSION["usuario"]["rol"] == 1) {
        header("location: index.php?c=logreg&a=index");
    }

}else{
    header("location: index.php?c=logreg&a=index");
}
/* Si algun usuario no ha iniciado sesion */
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/tarjeta/assets/styles/Formulario_EJM.css',
        'views/tarjeta/assets/styles/MontesQuijijeErickJosue.css',
        'assets/styles/index.css'
    ]
]);
?>
<main class="main page-wrapper">
  <h1>Pagos</h1>

    <?php
    include_once 'views/templates/nav-tarjeta.php';
    ?>
    <div class="contenedor">
    <section class="tarjeta" id="tarjeta">
      <div class="delantera">
        <div class="logo-marca" id="logo-marca">
          <!--<img src="images/logos/visa.png" alt="logo visa">-->
        </div>
        <img src="images/chip-tarjeta.png" class="chip_tarjeta" alt="">
        <div class="datos">
          <div class="grupo" id="numero">
            <p class="label">Número de tarjeta</p>
            <p class="numero">#### #### #### ####</p>
          </div>
          <div class="flexbox">
            <div class="grupo" id="nombre">
              <p class="label">Nombre de la tarjeta</p>
              <p class="nombre">Nombre Apellido</p>
            </div>
            <div class="grupo" id="expiracion">
              <p class="label">expiración</p>
              <p class="expiracion"><span class="mes">MM</span> / <span class="año">AA</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="trasera">
        <div class="barra_magnetica"></div>
        <div class="datos">
          <div class="grupo" id="firma">
            <p class="label">Firma</p>
            <div class="firma">
              <p></p>
            </div>
          </div>
          <div class="grupo" id="ccv">
            <p class="label">CCV</p>
            <p class="ccv"></p>
          </div>
        </div>
      </div>
    </section>

    <div class="contenedor_btn">
      <button class="btn_abrir_formulario" id="btn_abrir_formulario"><i class="fas fa-plus"></i></button>
    </div>

    <form id="formulario_tarjeta" method="post" class="formulario_tarjeta" action="index.php?c=Tarjeta&a=addTarget">
      <div class="grupo">
        <label for="inputNumero">Numero tarjeta</label>
        <input type="text" name="txtNumeroTarjeta" id="inputNumero" maxlength="19" autocomplete="off">
      </div>
      <div class="grupo">
        <label for="inputNombre">Nombre</label>
        <input type="text" name="txtNombre" id="inputNombre" maxlength="19" autocomplete="off">
      </div>
      <div class="flexbox">
        <div class="grupo expira">
          <label for="selectMes">Expiracion</label>
          <div class="flexbox">
            <div class="grupo_select">
              <select name="mes" id="selectMes">
                <option disabled selected>Mes</option>
              </select>
              <i class="fas fa-angle-down"></i>
            </div>
            <div class="grupo_select">
              <select name="año" id="selectAño">
                <option disabled selected>Año</option>
              </select>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
        </div>
        <div class="grupo ccv">
          <label for="inoutccv">CCV</label>
          <input type="text" name="txtCCV" id="inputCCV" maxlength="3">
        </div>
      </div>
      <button type="submit" class="btn_enviar">Enviar</button>
    </form>
  </div>
</main>

<?php
Layout::footer([
  'scripts' => [
    'https://kit.fontawesome.com/2c36e9b7b1.js',
    'views/tarjeta/assets/js/Validacion_Montes.js'

  ]
]);
?>