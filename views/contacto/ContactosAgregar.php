<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/contacto/css/formulario.css',
        'views/contacto/css/agregar.css',
    ]
]);
?>

<main class="main">
    <section>
        <h1>Contáctate con Nosotros</h1>
        <?php
        include_once 'views/contacto/templates/nav-contactos.php';
        ?>
    </section>
    <div class="content-principal">
        <div class="contact-form">
            <h4 style="color:#019dd6;">¿Deseas información o dejarnos alguna sugerencia sobre nuestros servicios?
                Ponte en
                contacto con nosotros
            </h4>

            <!--Inicio del formulario-->

            <form class="form" method="post" id="form" action="index.php?c=contactos&a=agregar">

                <div class="formulario__grupo" id="seccion_nombre">
                    <label class="formulario__label" for="name">Nombres:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="text" class="formulario__input" name="fullname" id="name" placeholder="Ej: Juanito Perez">
                    <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras,
                        máximo 40
                    </p>
                </div>

                <div class="formulario__grupo" id="seccion_correo">
                    <label class="formulario__label" for="mail">Correo Electrónico:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="email" class="formulario__input" name="email" id="mail" placeholder="Ej: example@email.com">
                    <p class="formulario__input-error">El formato de correo debe contener letras, números, puntos,
                        guiones y
                        arroba</p>
                </div>

                <div class="formulario__grupo" id="seccion_telefono">
                    <label class="formulario__label" for="phone">Telefono:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="tel" class="formulario__input" name="phone" id="phone" placeholder="Ej: 0987654321" maxlength="10">
                    <p class="formulario__input-error">El campo solo admite números, y debe cumplir con 10
                        dígitos</p>
                </div>

                <div class="formulario__grupo" id="seccion_ciudad">
                    <label class="formulario__label">Ciudad:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <select class="ciudad" id="ciudad" name="city">
                        <option value="0">Seleccione su ciudad</option>
                        <option value="GUAYAQUIL">Guayaquil</option>
                        <option value="QUITO">Quito</option>
                        <option value="MACHALA">Machala</option>
                        <option value="ESMERALDAS">Esmeraldas</option>
                    </select>
                    <p class="formulario__input-error">Seleccione su ciudad</p>
                </div>

                <div class="formulario__grupo" id="seccion_titulo">
                    <label class="formulario__label" for="subject">Título del Mensaje:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="text" class="formulario__input" name="subject" id="subject" placeholder="Ej: Título de Ejemplo">
                    <p class="formulario__input-error">Llenar este campo, solo se admiten letras</p>
                </div>

                <div class="block" id="seccion_mensaje">
                    <label class="formulario__label" for="msg">Mensaje:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <textarea name="message" class="formulario__input" rows="3" id="msg" placeholder="Escriba aquí sus sugerencias o dudas..."></textarea>
                    <p class="formulario__input-error">El campo no debe estar vacío, o no cumple con el mínimo de 50
                        letras
                    </p>
                </div>

                <div class="correos">
                    <h5>¿Desea recibir correos promocionales en días especiales?</h5>
                    <div class="si">
                        <label for="Si">Sí</label>
                        <input type="radio" id="Si" name="correos" value="Si">
                    </div>

                    <div class="no">
                        <label for="No">No</label>
                        <input type="radio" id="No" name="correos" value="No">
                    </div>
                </div>

                <div class="block">
                    <button type="submit" id="boton" onclick="if(!confirm('¿Desea enviar sus sugerencias?'))return false;">Enviar
                    </button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Se ha enviado exitosamente
                        su petición
                    </p>
                </div>

                <div class="notificaciones">
                    <div class="notificaciones-1">
                        <input type="checkbox" id="leido" name="notificaciones-1" value="leido">
                        <label for="leido">Soy responsable de los comentarios emitidos por mi persona</label><br>
                    </div>
                </div>

                <div class="formulario_mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llene todos los campos de
                        forma
                        correcta </p>
                </div>
            </form>

            <script src="views/contacto/js/validarformulario.js"></script>
            <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

            <!-- Panel de información  -->

        </div>
        <div class="contact-info">
            <h3>Más Información</h3>
            <ul>
                <li><img src="assets/images/contacto/direccion.png" width="15" height="15" alt="Ubicación" /> Urdesa
                    4576
                </li>
                <li><img src="assets/images/contacto/telefono.png" width="15" height="15" alt="Ubicación" /> 098 765
                    4321
                </li>
                <li><img src="assets/images/contacto/correo.png" width="15" height="15" alt="Ubicación" />
                    evt@consultas.com
                </li>
            </ul>
            <p>
                Somos una empresa dedicada a brindar asesoría personalizada y profesional para la
                elaboración y coordinación de eventos sociales y empresariales nos enfocamos en satisfacer y superar
                las
                expectativas de nuestros clientes, logrando que su evento sea algo excepcional e inolvidable.
                Nuestro nombre
                se debe a que somos un grupo que trabaja por brindar la
                mejor excelencia, contamos con personal experto en todo tipo de eventos. <br> <br> <b>GrupoE es
                    Grupo
                    Evento</b>
            </p>
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9482.672028049197!2d-79.91279205618375!3d-2.1641823705452206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d91efa2f215%3A0x3a914e7e2891aeb3!2sLomas%20De%20Urdesa%2C%20Guayaquil!5e0!3m2!1ses-419!2sec!4v1642310132441!5m2!1ses-419!2sec" width="340" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </p>
        </div>
    </div>
</main>

<?php
Layout::footer();
?>