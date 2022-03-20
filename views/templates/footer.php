<footer class="footer">
  <div class="page-wrapper">
    <div class="footer__container">
      <div class="footer__company-info">
        <span>
          <img src="assets/images/brand/logo-white.svg" alt="Salón de Eventos X" />
        </span>
        <p class="footer__text">
          Solicita tu asesoría personalizada para tu evento.
        </p>

        <p class="footer__text">© GrupoE 2022. All rights reserved</p>
      </div>

      <div class="footer__links-container">
        <div class="footer__links-column">
          <span class="footer__column-title">Eventos</span>
          <ul class="footer__column-list">
            <li><a class="footer__link" href="./ChavezWilmer-AgendarEvento.html">Agenda tu evento</a></li>
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
          <ul class="footer__column-list">
            <li>
              <?php if (isset($_SESSION["usuario"])) { ?>
                <?php if ($_SESSION["usuario"]["rol"] == 1) { ?>
                  <a class="footer__link" href="index.php?c=Trabajo&a=listarAdmin">Buscas Trabajo?</a>
                <?php } else { ?>
                  <a class="footer__link" href="index.php?c=Trabajo&a=presentar">Buscas Trabajo?</a>
                <?php } ?>
              <?php } else { ?>
                <a class="footer__link" href="index.php?c=Trabajo&a=presentar">Buscas Trabajo?</a>
              <?php } ?>
            </li>
            <li>
              <?php if (isset($_SESSION["usuario"])) { ?>
                <?php if ($_SESSION["usuario"]["rol"] == 1) { ?>
                  <a class="footerlink" href="index.php?c=comentarios&a=listarAdmin">Dejanos tus comentarios</a>
                <?php } else { ?>
                  <a class="footerlink" href="index.php?c=comentarios&a=presentar">Dejanos tus comentarios</a>
                <?php } ?>
              <?php } else { ?>
                <a class="footer__link" href="index.php?c=comentarios&a=presentar">Dejanos tus comentarios</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

<?php foreach ($options['scripts'] as $script) { ?>
  <script src="<?php echo $script; ?>"></script>
<?php } ?>

</body>

</html>