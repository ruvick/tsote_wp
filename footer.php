<footer id="footer" class="footer">
  <div class='footer__container container'>
    <div class="footer__row d-flex">
      <a href="http://xn--n1aik4a.xn--p1ai" class="footer__logo logo-icon"></a>
      <?php wp_nav_menu(array(
        'theme_location' => 'menu_footer', 'menu_class' => 'footer__menu',
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
  </div>
</footer>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (m, e, t, r, i, k, a) {
    m[i] =
      m[i] ||
      function () {
        (m[i].a = m[i].a || []).push(arguments);
      };
    m[i].l = 1 * new Date();
    (k = e.createElement(t)),
      (a = e.getElementsByTagName(t)[0]),
      (k.async = 1),
      (k.src = r),
      a.parentNode.insertBefore(k, a);
  })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
  ym(85906665, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
  });
</script>
<noscript
  ><div>
    <img
      src="https://mc.yandex.ru/watch/85906665"
      style="position: absolute; left: -9999px"
      alt=""
    /></div
></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>

</html>