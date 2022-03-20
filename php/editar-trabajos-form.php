<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../styles/index.css" />
  <link rel="stylesheet" href="../styles/Villao-Joel-trabajo.css" />

  <!-- ESTILOS-->
  <style>
    form {
      margin-left: 30%;
    }

    h1 {
      margin-left: 30%;
      margin-right: 30%;
    }

    .content {
        margin-right: 23%;
        margin-left: 27%;
        margin-top: 3%;
        margin-bottom: 3%;
    }

    .buscar {
        margin-right: 23%;
        margin-left: 27%;
        margin-top: 3%;
    }

    #btn-buscar {
        float: right;
        margin-right: 40%;
        background-color: #00aae4;
        border: 0;
        text-transform: uppercase;
        padding: 3px;
        border-radius: 5px;
        color: aliceblue;
        font-weight: 800;
        cursor: pointer;
        }
    .id_buscars {
        margin-left: 30%;
    }

    #formulario{
        margin-left: 0;
        margin-right: 8%;
        border: 5px #00aae4 solid;
        border-radius: 5px;
        padding: 1em;
        box-shadow: 5px 5px 8px 5px #999;
    }
  </style>

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
    <div>
      <main>
        <section>
          <div>

            <blockquote>
              <h1>
                Editar
              </h1>
              <?php
              include_once './templates/nav-trabajos.php';
              ?>

              <div class = "buscar">
                  <form id="formulario" method="GET">
                    <div class="id_buscars" id="id_comentario">
                        <label class="formulario__label" for="name">ID:
                            <select name="id">
                                <?php
                                include 'conexion.php';
                                $resultado = "select * from trabajo";
                                $ejecutar = mysqli_query($con, $resultado);
                                ?>
                                <?php foreach ($ejecutar as $opciones) : ?>
                                    <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['id'] ?></option>
                                <?php endforeach ?>
                            </select></label>
                        <button type="submit" id="btn-buscar">Buscar</button>
                    </div>
                  </form>
              </div>
              
              <blockquote>
                <div>
                  <!-- INICIO FORMULARIO-->
                  <form id="frmtrabajos" method="post" >

                  <?php
                    if (empty($_GET['id'])) {
                        echo "Selecciona un valor de la lista";
                    } else {
                        $id = $_GET['id'];
                        $sql = "select * from trabajo where id = '" . $id . "'";
                        $resultado = mysqli_query($con, $sql);
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                  ?>

                    <div>
                      <label>Nombres</label>
                      <div><input type="text" name="name" id="name"  value ="<?php echo $fila['NOMBRE'] ?>" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="lastname">Apellidos</label>
                      <div><input type="text" name="lastname" id="lastname" value ="<?php echo $fila['APELLIDO'] ?>" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="phone">Teléfono</label>
                      <div><input type="tel" name="phone" id="phone" value ="<?php echo $fila['TELEFONO'] ?>" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="correo">Correo</label>
                      <div><input type="email" name="correo" id="correo" value ="<?php echo $fila['CORREO'] ?>" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label for="date">Fecha Nacimiento</label>
                      <div><input type="date" name="date" id="date" value ="<?php echo $fila['NACIMIENTO'] ?>" class="formato-formulario"/></div>
                    </div>
                  
                    <div>
                      <label>Trabajo</label>
                      <div>
                        <input class="separacion-radiobt" type="radio" id="mesero" name="trabajo" value="mesero" <?php echo $fila['TRABAJO']==='mesero'? 'checked':''?>>
                        <label for="mesero">Mesero</label>
                  
                        <input class="separacion-radiobt" type="radio" id="dj" name="trabajo" value="dj" <?php echo $fila['TRABAJO']==='dj'? 'checked':''?>>
                        <label for="dj">DJ</label>
                  
                        <input class="separacion-radiobt" type="radio" id="animador" name="trabajo" value="animador" <?php echo $fila['TRABAJO']==='animador'? 'checked':''?>>
                        <label for="animador">Animador</label>
                      </div>
                    </div>
                  
                    <div>
                      <button style="color: #fff" type="submit" id="formato-boton">Enviar</button>
                    </div>
                  <!-- FIN FORMULARIO-->
                  </form>
                  <?php
                            }
                        }
                    ?> 

                  <?php
                  require_once 'conexion.php';
                  if(
                    !empty($_POST['name']) && !empty($_POST['lastname'])
                    && !empty($_POST['phone']) && !empty($_POST['correo'])
                    && !empty($_POST['date']) && !empty($_POST['trabajo'])
                  ){
                    $nombre1 = htmlentities($_POST['name']);
                    $apellido1 = htmlentities($_POST['lastname']);
                    $telefono1 = htmlentities($_POST['phone']);
                    $correo1 = htmlentities($_POST['correo']);
                    $fecha1 = htmlentities($_POST['date']);
                    $trabajo1 = htmlentities($_POST['trabajo']);

                    $sql1 = "update trabajo set NOMBRE='$nombre1', APELLIDO='$apellido1',TELEFONO='$telefono1',CORREO='$correo1',NACIMIENTO='$fecha1',
                    TRABAJO='$trabajo1' where id = $id";

                    if(mysqli_query($con,$sql1)){
                      echo '<script language="javascript">alert("Redireccionando...");</script>';
                    }else{
                      echo "Error: " . $sql1 . "" . mysqli_error($con);
                    }
                  }
                  ?>
                </div>
              </blockquote>
            </blockquote>
          </div>
        </section>
      </main>
    </div>
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
                <li><a class="footer__link" href="../ChavezWilmer-AgendarEvento.html">Agenda tu evento</a></li>
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
  <!-- -->
  <script src="../JS/Villao-Joel-TR_Validaciones.js"></script>
</body>

</html>