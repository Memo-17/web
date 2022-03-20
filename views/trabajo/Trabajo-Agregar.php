<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'assets/styles/index.css',
        'views/trabajo/assets/styles/Villao-Joel-trabajo.css',
    ]
]);
?>

  <style>
    form {
      margin-left: 30%;
    }

    h1 {
      margin-left: 30%;
      margin-right: 30%;
    }
  </style>

      <main>
        <section>
          <div>

            <blockquote>
              <h1>
                Datos Personales
              </h1>
              <?php
              include_once 'views/templates/nav-trabajos.php';
              ?>
              <blockquote>
                <div>
                  <!-- INICIO FORMULARIO-->
                  <form id="frmtrabajos" action="index.php?c=trabajo&a=agregar" method="post" >
                    <div>
                      <label>Nombres</label>
                      <div><input type="text" name="name" id="name" maxlength="10" class="formato-formulario"/></div>
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

                  <script src="assets/JS/Villao-Joel-TR_Validaciones.js"></script>
                </div>

              </blockquote>
            </blockquote>
          </div>
        </section>
      </main>
<?php
Layout::footer();
?>