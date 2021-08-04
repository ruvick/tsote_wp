<footer id="footer" class="footer">
  <div class='footer__container container'>

    <div class="footer__row d-flex">

      <a href="http://xn----ttbanmgdkw.xn--p1ai" class="footer__logo logo-icon"></a>

      <?php wp_nav_menu(array(
        'theme_location' => 'menu_main', 'menu_class' => 'footer__menu',
        'container_class' => 'footer__menu', 'container' => false
      )); ?>

      <div class="footer__contact d-flex">
        <? $tel = carbon_get_theme_option("as_phones_1");
        if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__phone"><? echo $tel; ?></a><? } ?>
        <? $mail = carbon_get_theme_option("as_email");
        if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__email"><? echo $mail; ?></a><? } ?>
        <a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
      </div>

    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>