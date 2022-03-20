<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<?php
Layout::header([
    'stylesheets' => [
        'views/comentarios/assets/styles/RamosOchoaIvan.css',
        'views/comentarios/assets/styles/RamosIvan-EstrellasReseñas.css',
        'views/comentarios/assets/styles/RamosIvan-Reseñas.css',
        
    
    ]
]);
?>

        <main class="page-wrapper main">

            <section class="testimonios">
                <div class="testimonios_header">
                    <h1 class="centrar">Testimonios de nuestros clientes</h1>
                </div>
                <!--TESTIMONIOS CONTENEDOR-->
                <div class="testimonios_contenedor">
                    <!--Caja 1-->
                    <div id="abrir1" class="testimonios_caja">
                        <!--top-->
                        <div>
                            <!--profile-->
                            <div class="perfil">
                                <div class="perfil-img">
                                    <img src="views/comentarios/assets/images/Testimonios/persona-1.jpg" alt="user1">
                                </div>
                                <!--NOMBRE Y USUARIO-->
                                <div class="name-user">
                                    <strong>Alberto Delgado</strong>
                                    <span>@AlDelgado</span>
                                </div>
                            </div>
                            <!--Reseñas-->
                            <div class="reseñas">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <!--COMENTARIOS-->
                        <div class="comentarios_clientes">
                            <p>Excelente local, la atención fue inmediata, tienen un amplio catalogo de espacios a
                                elegir, los precios fueron
                                bastante razonables. Yo y mi familia estamos felices de poder haber celebrado la
                                quinceañera de mi hija en su
                                local.</p>
                        </div>
                    </div>
                </div>

                <!--Caja 2-->
                <div id="abrir2" class="testimonios_caja">
                    <!--top-->
                    <div class="cajatop">
                        <!--profile-->
                        <div class="perfil">
                            <div class="perfil-img">
                                <img src="views/comentarios/assets/images/Testimonios/persona-2.jpg" alt="user2">
                            </div>
                            <!--NOMBRE Y USUARIO-->
                            <div class="name-user">
                                <strong>Cinthia Rodriguez</strong>
                                <span>@CRodriguez</span>
                            </div>
                        </div>
                        <!--Reseñas-->
                        <div class="reseñas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <!--COMENTARIOS-->
                    <div class="comentarios_clientes">
                        <p>Muy buena atención, bastante rápida y eficiente, lo que si no me gusto, fue el tiempo que
                            se demoraron en confirmar la disponibilidad del local, pero de ahí fue un servicio bastante
                            eficiente. Gracias
                            por dejarme celebrar mi boda. </p>
                    </div>
                </div>

                <!--Caja 3-->
                <div id="abrir3" class="testimonios_caja">
                    <!--top-->
                    <div class="cajatop">
                        <!--profile-->
                        <div class="perfil">
                            <div class="perfil-img">
                                <img src="views/comentarios/assets/images/Testimonios/persona-3.jpg" alt="user3">
                            </div>
                            <!--NOMBRE Y USUARIO-->
                            <div class="name-user">
                                <strong>Alex Delgado</strong>
                                <span>@alexdelgadoec</span>
                            </div>
                        </div>
                        <!--Reseñas-->
                        <div class="reseñas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <!--COMENTARIOS-->
                    <div class="comentarios_clientes">
                        <p>Excelente atención, no podria estar mas contento con sus servicios. Pude celebrar el
                            cumpleaños de mi novia sin
                            inconveniente. Muy buen servicio.</p>
                    </div>
                </div>


                <!--Caja 4-->
                <div id="abrir4" class=page_wrapper>
                    <div class="testimonios_caja">
                        <!--top-->
                        <div class="cajatop">
                            <!--profile-->
                            <div class="perfil">
                                <div class="perfil-img">
                                    <img src="views/comentarios/assets/images/Testimonios/persona-4.jpg" alt="user4">
                                </div>
                                <!--NOMBRE Y USUARIO-->
                                <div class="name-user">
                                    <strong>Federico Díaz</strong>
                                    <span>@ElFedelobo</span>
                                </div>
                            </div>
                            <!--Reseñas-->
                            <div class="reseñas">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <!--COMENTARIOS-->
                        <div class="comentarios_clientes">
                            <p>Buen servicio, aunque algo demorado, al principio se demoraron en darme una fecha de
                                disponibilidad pero valio la
                                pena. Gracias a eso pude celebrar el cumpleaños de mi padre el Señor Bigote.</p>
                        </div>
                    </div>
                </div>

                <div class="modalContenedor" id="comentario1">
                    <div class="modal" id="cerrar">
                        <div class="testimonios_caja__modal" id="cerrar1">
                            <!--top-->
                            <div>
                                <!--profile-->
                                <div class="perfil">
                                    <div class="perfil-img">
                                        <img src="views/comentarios/assets/images/Testimonios/persona-1.jpg" alt="user1">
                                    </div>
                                    <!--NOMBRE Y USUARIO-->
                                    <div class="name-user">
                                        <strong>Alberto Delgado</strong>
                                        <span>@AlDelgado</span>
                                    </div>
                                </div>
                                <!--Reseñas-->
                                <div class="reseñas">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <!--COMENTARIOS-->
                            <div class="comentarios_clientes">
                                <p>Excelente local, la atención fue inmediata, tienen un amplio catalogo de espacios a
                                    elegir, los precios fueron
                                    bastante razonables. Yo y mi familia estamos felices de poder haber celebrado la
                                    quinceañera de mi hija en su
                                    local.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modalContenedor" id="comentario2">
                    <div class="modal" id="cerrar2">
                        <div class="testimonios_caja__modal">
                            <!--top-->
                            <div class="cajatop">
                                <!--profile-->
                                <div class="perfil">
                                    <div class="perfil-img">
                                        <img src="views/comentarios/assets/images/Testimonios/persona-2.jpg" alt="user2">
                                    </div>
                                    <!--NOMBRE Y USUARIO-->
                                    <div class="name-user">
                                        <strong>Cinthia Rodriguez</strong>
                                        <span>@CRodriguez</span>
                                    </div>
                                </div>
                                <!--Reseñas-->
                                <div class="reseñas">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <!--COMENTARIOS-->
                            <div class="comentarios_clientes">
                                <p>Muy buena atención, bastante rápida y eficiente, lo que si no me gusto, fue el tiempo que
                                    se demoraron en confirmar la disponibilidad del local, pero de ahí fue un servicio bastante
                                    eficiente. Gracias
                                    por dejarme celebrar mi boda. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modalContenedor" id="comentario3">
                    <div class="modal" id="cerrar3">
                        <div class="testimonios_caja__modal">
                            <!--top-->
                            <div class="cajatop">
                                <!--profile-->
                                <div class="perfil">
                                    <div class="perfil-img">
                                        <img src="views/comentarios/assets/images/Testimonios/persona-3.jpg" alt="user3">
                                    </div>
                                    <!--NOMBRE Y USUARIO-->
                                    <div class="name-user">
                                        <strong>Alex Delgado</strong>
                                        <span>@alexdelgadoec</span>
                                    </div>
                                </div>
                                <!--Reseñas-->
                                <div class="reseñas">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <!--COMENTARIOS-->
                            <div class="comentarios_clientes">
                                <p>Excelente atención, no podria estar mas contento con sus servicios. Pude celebrar el
                                    cumpleaños de mi novia sin
                                    inconveniente. Muy buen servicio.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modalContenedor" id="comentario4">
                    <div class="modal" id="cerrar4">
                        <div class=page_wrapper>
                            <div class="testimonios_caja">
                                <!--top-->
                                <div class="cajatop">
                                    <!--profile-->
                                    <div class="perfil">
                                        <div class="perfil-img">
                                            <img src="views/comentarios/assets/images/Testimonios/persona-4.jpg" alt="user4">
                                        </div>
                                        <!--NOMBRE Y USUARIO-->
                                        <div class="name-user">
                                            <strong>Federico Díaz</strong>
                                            <span>@ElFedelobo</span>
                                        </div>
                                    </div>
                                    <!--Reseñas-->
                                    <div class="reseñas">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <!--COMENTARIOS-->
                                <div class="comentarios_clientes">
                                    <p>Buen servicio, aunque algo demorado, al principio se demoraron en darme una fecha de
                                        disponibilidad pero valio la
                                        pena. Gracias a eso pude celebrar el cumpleaños de mi padre el Señor Bigote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </main>
        
    </div>
</body>

<?php
Layout::footer([
    'scripts' => [
        'views/comentarios/assets/js/RamosIvan-Comentario.js'
    ]
]);
?>