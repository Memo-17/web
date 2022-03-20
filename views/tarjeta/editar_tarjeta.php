<?php require_once "views/templates/layout.php"; ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
Layout::header([
    'stylesheets' => [
        'views/tarjeta/assets/styles/Editar_Montes.css',
        'views/tarjeta/assets/styles/MontesQuijijeErickJosue.css',
        'assets/styles/index.css'
    ]
]);
?>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .headt th {
            background-color: #00aae4;
            color: white;
            width: 200px;
        }

        td,
        th {
            border: #b2b2b2 1px solid;
            height: 50px;
        }

        .form {
            background: rgba(98, 180, 242, 0.4);
            width: 100%;
            max-width: 700px;
            padding: 30px 30px 30px 30px;
            border-radius: 10px;
            margin-left: 30%;
            display: block;
            color: gray;
            margin-bottom: 5px;
            font-size: 16px;
            margin-top: 25px;
        }

        .button_1 {
            border-radius: 10px;
            padding: 5px;
            font-size: 16px;
            background: rgb(89, 162, 218);
            border: none;
            color: #FFFF;
            width: 14%;
            box-shadow: 2px 2px 10px 0px rgb(69 143 246 / 40%);
            margin-left: 3%;
        }
    </style>


    <main class="main">
        <section>
            <h1>Editar tarjeta</h1>
        </section>

        <div class="content">
            <div class="">
                <form id="formulario_tarjeta" method="post" class="formulario_tarjeta editar" action="index.php?c=tarjeta&a=editar">
                    <div class="">
                        <div class="grupo">
                            <input type="hidden" name="id" id="inputNumero" maxlength="3" autocomplete="off"
                                   value="<?php echo $tarjetas['id']; ?>"/>
                        </div>
                    </div>

                    <div class="grupo">
                        <label for="inputNumero">Numero tarjeta</label>
                        <input type="text" name="txtNumeroTarjeta" id="inputNumero" maxlength="19" autocomplete="off"
                               value="<?php echo $tarjetas['NumTarjeta']; ?>"/>
                    </div>
                    <div class="grupo">
                        <label for="inputNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="inputNombre" maxlength="19" autocomplete="off"
                               value="<?php echo $tarjetas['Nombre'] ?>"/>
                    </div>
                    <div class="flexbox">
                        <div class="grupo expira">
                            <label for="selectMes">Expiracion</label>
                            <div class="flexbox">
                                <div class="grupo_select">
                                    <select name="mes" id="selectMes">
                                        <option selected><?php echo $tarjetas['Mes'] ?></option>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div class="grupo_select">
                                    <select name="año" id="selectAño">
                                        <option selected><?php echo $tarjetas['Anio'] ?></option>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="grupo ccv">
                            <label for="inoutccv">CCV</label>
                            <input type="text" name="txtCCV" id="inputCCV" maxlength="3"
                                   value="<?php echo $tarjetas['CCV'] ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn_enviar">Enviar</button>
                </form>
            </div>
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