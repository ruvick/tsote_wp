<header id="header" class="header">
  <div class="header__container container">

    <div class="header__row d-flex">

      <a href="#" class="header__logo logo-icon"></a>

      <div class="header__nav-block">

        <div class="header__contact d-flex">
          <? $mail = carbon_get_theme_option("as_email");
          if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__email"><? echo $mail; ?></a><? } ?>
          <? $tel = carbon_get_theme_option("as_phones_1");
          if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__phone"><? echo $tel; ?></a><? } ?>
          <a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
          <? $tel = carbon_get_theme_option("as_phones_1");
          if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a><? } ?>
        </div>

        <div class="header__menu menu">
          <nav class="menu__body">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu_main', 'menu_class' => 'menu__list',
              'container_class' => 'menu__list', 'container' => false
            )); ?>
          </nav>
          <nav class="mob-menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu_main', 'menu_class' => 'mob-menu__list',
              'container_class' => 'mob-menu__list', 'container' => false
            )); ?>
          </nav>
        </div>

        <div class="menu__icon icon-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    </div>

  </div>
  <!-- Полоса прокрутки в шапке -->
  <div id="scroll-progress"></div>
</header>