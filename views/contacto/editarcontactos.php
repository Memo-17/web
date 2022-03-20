<?php require_once "views/templates/layout.php"; ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
/* Si algun usuario no ha iniciado sesion */
if (!isset($_SESSION["usuario"]["rol"])) {
    header("location: index.php?c=logreg&a=index");
} else {
    /* Si mi usuario es admin: */
    if ($_SESSION["usuario"]["rol"] == 1) {
        header("location: index.php?c=logreg&a=index");
    }
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/contacto/css/formulario.css',
        'views/contacto/css/editar.css'
    ]
]);
?>
<main class="main">
    <section>
        <h1>Editar Comentarios</h1>
        <?php
        include_once 'views/contacto/templates/nav-contactos.php';
        ?>
    </section>
    <div class="content">
        <div class="contact-form">
            <form class=" form" method="post" id="form" action="index.php?c=contactos&a=editar">

                <input type="hidden" name="id" id="id" value="<?php echo $contactos['ID_CONTACTO']; ?>" />

                <div class="formulario__grupo" id="seccion_nombre">
                    <label class="formulario__label" for="name">Nombres:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="text" class="formulario__input" name="fullname" id="name" value="<?php echo $contactos['NOMBRE_APELLIDO'] ?>">
                    <p class="formulario__input-error">El campo no debe estar vacío y debe contener mínimo 4 letras,
                        máximo 40
                    </p>
                </div>

                <div class="formulario__grupo" id="seccion_correo">
                    <label class="formulario__label" for="mail">Correo Electrónico:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="email" class="formulario__input" name="email" id="mail" value="<?php echo $contactos['CORREO'] ?>">
                    <p class="formulario__input-error">El formato de correo debe contener letras, números, puntos,
                        guiones y
                        arroba</p>
                </div>

                <div class="formulario__grupo" id="seccion_telefono">
                    <label class="formulario__label" for="phone">Telefono:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="tel" class="formulario__input" name="phone" id="phone" value="<?php echo $contactos['TELEFONO'] ?>" maxlength="10">
                    <p class="formulario__input-error">El campo solo admite números, y debe cumplir con 10
                        dígitos</p>
                </div>

                <div class="formulario__grupo" id="seccion_ciudad">
                    <label class="formulario__label">Ciudad:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <select class="ciudad" id="ciudad" name="city">
                        <?php
                        if ($contactos['CIUDAD'] == "GUAYAQUIL") { ?>
                            <option value="GUAYAQUIL">Guayaquil</option>
                            <option value="QUITO">Quito</option>
                            <option value="MACHALA">Machala</option>
                            <option value="ESMERALDAS">Esmeraldas</option>
                        <?php } elseif ($contactos['CIUDAD'] == "QUITO") {
                        ?>
                            <option value="QUITO">Quito</option>
                            <option value="GUAYAQUIL">Guayaquil</option>
                            <option value="MACHALA">Machala</option>
                            <option value="ESMERALDAS">Esmeraldas</option>
                        <?php
                        } elseif ($contactos['CIUDAD'] == "MACHALA") {
                        ?>
                            <option value="MACHALA">Machala</option>
                            <option value="QUITO">Quito</option>
                            <option value="GUAYAQUIL">Guayaquil</option>
                            <option value="ESMERALDAS">Esmeraldas</option>
                        <?php
                        } elseif ($contactos['CIUDAD'] == "ESMERALDAS") { ?>
                            <option value="ESMERALDAS">Esmeraldas</option>
                            <option value="QUITO">Quito</option>
                            <option value="GUAYAQUIL">Guayaquil</option>
                            <option value="MACHALA">Machala</option>
                        <?php } ?>
                    </select>
                    <p class="formulario__input-error">Seleccione su ciudad</p>
                </div>

                <div class="formulario__grupo" id="seccion_titulo">
                    <label class="formulario__label" for="subject">Título del Mensaje:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <input type="text" class="formulario__input" name="subject" id="subject" value="<?php echo $contactos['TITULO_MENSAJE'] ?>">
                    <p class="formulario__input-error">Llenar este campo, solo se admiten letras</p>
                </div>

                <div class="block" id="seccion_mensaje">
                    <label class="formulario__label" for="msg">Mensaje:</label>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    <textarea name="message" class="formulario__input" rows="3" id="msg"><?php echo $contactos['MENSAJE'] ?></textarea>
                    <p class="formulario__input-error">El campo no debe estar vacío, o no cumple con el mínimo de 50
                        letras
                    </p>
                </div>

                <div class="correos">
                    <h5>¿Desea recibir correos promocionales en días especiales?</h5>
                    <div class="si">
                        <label for="Si">Sí</label>
                        <input type="radio" id="Si" name="correos" value="Si" <?php echo $contactos['PREFERENCIA'] === 'Si' ? 'checked' : '' ?>>
                    </div>
                    <div class="no">
                        <label for="No">No</label>
                        <input type="radio" id="No" name="correos" value="No" <?php echo $contactos['PREFERENCIA'] === 'No' ? 'checked' : '' ?>>
                    </div>
                </div>

                <div class="block">
                    <button type="submit" id="boton" onclick="if (!confirm('Esta seguro de modificar el productos')) return false;">
                        Actualizar
                    </button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Se ha enviado exitosamente
                        su petición
                    </p>
                </div>

                <div class="formulario_mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llene todos los campos de
                        forma
                        correcta </p>
                </div>
            </form>
        </div>
    </div>
</main>

<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

<?php
Layout::footer([
    'scripts' => [
        'views/contacto/js/editarformulariocontacto.js'
    ]
]);
?>