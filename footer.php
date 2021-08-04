<footer id="footer" class="footer">
  <div class='footer__container container'>

    <div class="footer__row d-flex">

      <a href="#" class="footer__logo logo-icon"></a>

      <?php wp_nav_menu(array(
        'theme_location' => 'menu_main', 'menu_class' => 'footer__menu',
        'container_class' => 'footer__menu', 'container' => false
      )); ?>

      <div class="footer__contact d-flex">
        <a href="tel:88004882222" class="header__phone">8 800 488 22 22</a>
        <a href="mailto:info@tsot-kursk.ru" class="header__email">info@tsot-kursk.ru</a>
        <a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
      </div>

    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>