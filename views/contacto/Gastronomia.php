<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/contacto/css/gastronomia.css',
        'views/contacto/css/EstilosSlideImagenes.css',
        'views/contacto/css/estilosextras.css'
    ]
]);
?>

<main class="main" id="main">
    <section>
        <h1>Buffet de nuestros eventos</h1>
    </section>

    <!-- Slide de imagenes -->
    <div id="slider">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:400px;overflow:hidden;visibility:hidden;">
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:960px;height:400px;overflow:hidden;">
                <div>
                    <img data-u="image" src="assets/images/buffet/slide-4.jpg" alt="imagen-slide-1" />
                </div>
                <div>
                    <img data-u="image" src="assets/images/buffet/slide-2.jpg" alt="imagen-slide-2" />
                </div>
                <div>
                    <img data-u="image" src="assets/images/buffet/slide-3.jpg" alt="imagen-slide-3" />
                </div>
                <div>
                    <img data-u="image" src="assets/images/buffet/slide-1.jpg" alt="imagen-slide-4" />
                </div>
            </div>
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
    </div>
    <script src="views/contacto/js/jssor.slider.min.js"></script>
    <script src="views/contacto/js/SlideImagenes.js"></script>

    <!-- Fin del Slide de imagenes -->

    <div id="principal">
        <div id="contenido">
            <div class="evento" id="evento-1">
                <img src="assets/images/buffet/bautizo.jpg" alt="Buffet-Bautizos">
                <h2>Banquetes para tus Eventos de Bautizos</h2>
                <p>
                    Además de los múltiples servicios y comodidades ofrecidos, nos sentimos
                    orgullosos de presentar nuestros servicio de Buffet para Bautizos.
                    Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional.
                </p>
                <button type="submit" class="botona" id="boton1">Bautizos</button>
            </div>
            <div class="evento" id="evento-2">
                <img src="assets/images/buffet/bodas.jpeg" alt="Buffet-Bodas">
                <h2>Banquetes para tu Fiesta de Bodas</h2>
                <p>
                    Además de los múltiples servicios y comodidades ofrecidos, nos sentimos
                    orgullosos de presentar nuestros servicio de Buffet para Bodas.
                    Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional.
                </p>
                <button type="submit" class="botona" id="boton2">Bodas</button>
            </div>
            <div class="evento" id="evento-3">
                <img src="assets/images/buffet/graduacion.jpg" alt="Buffet-Graducion">
                <h2>Banquetes para celebrar tu Graduación</h2>
                <p>
                    Además de los múltiples servicios y comodidades ofrecidos, nos sentimos
                    orgullosos de presentar nuestros servicio de Buffet para Graduación.
                    Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional.
                </p>
                <button type="submit" class="botona" id="boton3">Graduacion</button>
            </div>
            <div class="evento" id="evento-4">
                <img src="assets/images/buffet/quinceañera.png" alt="Buffet-Quinceañera">
                <h2>Banquetes para tu Fiesta de Quinceañera</h2>
                <p>
                    Además de los múltiples servicios y comodidades ofrecidos, nos sentimos
                    orgullosos de presentar nuestros servicio de Buffet para Quinceañera.
                    Un excelente ejemplo es el buffet de exquisita comida ecuatoriana e internacional.
                </p>
                <button type="submit" class="botona" id="boton4">Quinceañera</button>
            </div>

            <div class="evento">
                <img src="assets/images/buffet/footer.png" alt="Buffet-Promocion">
            </div>
        </div>

        <!-- ventana flotante generada con js -->
        <div class="ventana" id="vent">

        </div>
    </div>
</main>

<?php
Layout::footer([
    'scripts' => [
        'views/contacto/js/ventanaflotante.js'
    ]
]);
?>