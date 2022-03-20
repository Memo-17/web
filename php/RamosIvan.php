<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/RamosOchoaIvan.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <meta name="viewport" content="width-device_width, initial-scale=1.0">
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

                    <?php
                    include_once './templates/header.php';
                    ?>

                </div>
            </div>
        </header>

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
                                    <img src="../images/Testimonios/persona-1.jpg" alt="user1">
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
                                <img src="../images/Testimonios/persona-2.jpg" alt="user2">
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
                                <img src="../images/Testimonios/persona-3.jpg" alt="user3">
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
                                    <img src="../images/Testimonios/persona-4.jpg" alt="user4">
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
                                        <img src="../images/Testimonios/persona-1.jpg" alt="user1">
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
                                        <img src="../images/Testimonios/persona-2.jpg" alt="user2">
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
                                        <img src="../images/Testimonios/persona-3.jpg" alt="user3">
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
                                            <img src="../images/Testimonios/persona-4.jpg" alt="user4">
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
                                <li><a class="footer__link" href="../ChavezWilmer-AgendarEvento.php">Agenda tu
                                        evento</a></li>
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
                            <?php
                            include_once './templates/footer.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="JS/RamosIvan-Comentario.js"></script>

</html>