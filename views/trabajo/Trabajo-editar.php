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

      <main>
        <section>
          <div>

            <blockquote>
              <h1>
                Editar
              </h1>
              <?php
              include_once 'views/templates/nav-trabajos.php';
              ?>
              
              <blockquote>
                <div>
                  <!-- INICIO FORMULARIO-->
                  <form id="frmtrabajos" method="post" action="index.php?c=trabajo&a=editar" >
                      <div>
                        <input type="hidden" name="id" id="id"  value ="<?php echo $fila['id'] ?>" />
                      </div>
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

                  <script src="assets/JS/Villao-Joel-TR_Validaciones.js"></script>

                </div>
              </blockquote>
            </blockquote>
          </div>
        </section>
      </main>