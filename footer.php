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

        <div class="footer_contact_info">
            <div class="footer-contact-info_item">Организация: ООО «ЦЕНТР ОХРАНЫ ТРУДА»</div>
            <div class="footer-contact-info_item">Адрес: г.Курск, 1-я Пушкарная улица, 28</div>
        </div>

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z6JYTQGMRE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z6JYTQGMRE');
</script>
<!-- js-скрипт гугл капчи -->
<script src='https://www.google.com/recaptcha/api.js?render=explicit&onload=onloadCallback'></script>
<?php wp_footer(); ?>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "ЦОТЭ.РФ",
        "url": "https://xn--n1aik4a.xn--p1ai/",
        "logo": "https://xn--n1aik4a.xn--p1ai/wp-content/themes/tsote/img/logo-org.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1-я Пушкарная улица",
            "addressLocality": "Курск, Россия",
            "addressCountry": "RU",
            "postalCode": "305029"
        },
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "8 (4712) 22-05-85",
                "contactType": "customer service",
                "email": "tsot-dogovor@mail.ru",
                "availableLanguage": [
                    "Русский"
                ]
            }
        ]
    }
</script>
</body>
</html>