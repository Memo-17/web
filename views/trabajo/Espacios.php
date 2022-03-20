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
        'views/trabajo/assets/styles/Villao-Joel-gallery.css',
    ]
]);
?>

  <style>
    h1{
    text-align: center;
  }
  </style>

    <main>
      <section>
        <div>
          <blockquote>
            <h1>Gallery</h1>
            <h2>Nuestros Trabajos</h2>
            <blockquote>
              <img id="abrir" class="centrado" src="views/trabajo/assets/images/Gallery/event.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir1" class="centrado" src="views/trabajo/assets/images/Gallery/event1.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir2" class="centrado" src="views/trabajo/assets/images/Gallery/event2.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir3" class="centrado" src="views/trabajo/assets/images/Gallery/event3.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir4" class="centrado" src="views/trabajo/assets/images/Gallery/event4.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir5" class="centrado" src="views/trabajo/assets/images/Gallery/event5.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir6" class="centrado" src="views/trabajo/assets/images/Gallery/event6.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir7" class="centrado" src="views/trabajo/assets/images/Gallery/event7.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir8" class="centrado" src="views/trabajo/assets/images/Gallery/event8.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir9" class="centrado" src="views/trabajo/assets/images/Gallery/event9.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir10" class="centrado" src="views/trabajo/assets/images/Gallery/event10.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>
              <img id="abrir11" class="centrado" src="views/trabajo/assets/images/Gallery/event11.jpg" alt="evento" style="border: 5px solid rgb(51, 159, 248);"/>

              <div class="modalContenedor" id="modalContenedor">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event.jpg" alt="evento" id="cerrar"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor1">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event1.jpg" alt="evento" id="cerrar1"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor2">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event2.jpg" alt="evento" id="cerrar2"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor3">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event3.jpg" alt="evento" id="cerrar3"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor4">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event4.jpg" alt="evento" id="cerrar4"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor5">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event5.jpg" alt="evento" id="cerrar5"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor6">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event6.jpg" alt="evento" id="cerrar6"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor7">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event7.jpg" alt="evento" id="cerrar7"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor8">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event8.jpg" alt="evento" id="cerrar8"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor9">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event9.jpg" alt="evento" id="cerrar9"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor10">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event10.jpg" alt="evento" id="cerrar10"/>
                </div>
              </div>

              <div class="modalContenedor" id="modalContenedor11">
                <div class="modal">
                  <img class="modal-formato" src="views/trabajo/assets/images/Gallery/event11.jpg" alt="evento" id="cerrar11"/>
                </div>
              </div>

            </blockquote>
          </blockquote>
        </div>
      </section>
    </main>
    <?php
Layout::footer([
    'scripts' => [
        'views/trabajo/assets/JS/Villao-Joel-Galeria.js'
    ]
]);
?>