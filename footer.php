<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Shoreditch
*/

?>
  </div><!-- #content -->
  <footer class="footer">
    <div class="footer-logo-container">
      <a href="http://camposycampos.mx">
        <img class="footer-logo" src="<?php echo get_template_directory_uri() . '/img/logos/logo-cyc-white.png' ?>" alt="Logo del footer">
      </a>
    </div>
    <div class="footer-section-container">
      <a href="http://camposycampos.mx/servicios.html">
        <span class="footer-section helveneue-medium">servicios</span>
      </a>
      <a href="http://camposycampos.mx/compliance-penal.html">
        <span class="footer-section helveneue-medium">compliance</span>
      </a>
      <a href="http://camposycampos.mx/nosotros.html">
        <span class="footer-section helveneue-medium">nosotros</span>
      </a>
      <a href="">
        <span class="footer-section helveneue-medium">blog</span>
      </a>
      <a href="http://camposycampos.mx/contacto.html">
        <span class="footer-section helveneue-medium">contacto</span>
      </a>
    </div>
    <a href="http://camposycampos.mx/aviso-privacidad.html">
      <span class="footer-privacy helveneue-medium">Aviso de Privacidad</span>
    </a>
    <span class="footer-copyright helveneue-medium">Copyright® Campos & Campos 2018</span>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
