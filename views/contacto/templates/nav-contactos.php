<style>
    .crud {
        margin-right: 36%;
        margin-left: 40%;
        align-items: center;
    }
</style>
<nav class="crud">
    <ul class="navigation__list">
        <?php if (isset($_SESSION["usuario"])) { ?>
            <li class="navigation__item">
                <?php if ($_SESSION["usuario"]["rol"] == 2) { ?>
                    <a class="btn btn-primary" href="index.php?c=contactos&a=listar">Consultar mis Sugerencias Enviadas</a>
            </li>
        <?php } ?>
    <?php } ?>
    </ul>
</nav>