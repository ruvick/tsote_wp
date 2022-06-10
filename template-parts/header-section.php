<header id="header" class="header">
  <div class="header__container container">

    <div class="header__row d-flex">

      <a href="https://xn--n1aik4a.xn--p1ai" class="header__logo logo-icon"></a>

      <div class="header__nav-block">

        <div class="header__contact d-flex">
        <form
                  class="search-form"
                  role="search"
                  method="get"
                  action="<?php echo home_url('/') ?>">
                  <input
                    class="search-form__input"
                    type="text"
                    value="<?php echo get_search_query() ?>"
                    name="s"
                    placeholder="Поиск"
                    autocomplete="off"
                  />
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.856" height="20.848" viewBox="0 0 19.856 20.848">
                      <path d="M91.119,310.567l-4.713-4.713a8.8,8.8,0,0,0,2.51-6.147,8.708,8.708,0,1,0-8.708,8.708,8.983,8.983,0,0,0,5.02-1.588l4.815,4.815a.877.877,0,0,0,1.127,0A.792.792,0,0,0,91.119,310.567ZM73.037,299.708a7.171,7.171,0,1,1,7.171,7.171A7.192,7.192,0,0,1,73.037,299.708Z" transform="translate(-71.5 -291)" fill="#414544" />
                    </svg>
                  </button>
                  <ul class="ajax-search"></ul>
              </form>
          <? $mail = carbon_get_theme_option("as_email");
          if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__email"><? echo $mail; ?></a><? } ?>
          <? $tel = carbon_get_theme_option("as_phones_1");
          if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__phone"><? echo $tel; ?></a><? } ?>
          <a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
          <? $tel = carbon_get_theme_option("as_phones_1");
          if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a><? } ?>
        </div>

        <div class="header-bottom">
          <div class="header__menu menu">
            <nav class="menu__body">
              <?php wp_nav_menu(array(
                'theme_location' => 'menu_main', 'menu_class' => 'menu__list',
                'container_class' => 'menu__list', 'container' => false, 'walker' => new Modified_Desktop_Nav_menu(),
              )); ?>
            </nav>
            <nav class="mob-menu">
              <?php wp_nav_menu(array(
                'theme_location' => 'menu_main', 'menu_class' => 'mob-menu__list',
                'container_class' => 'mob-menu__list', 'container' => false, 'walker' => new Modified_Desktop_Nav_menu(),
              )); ?>
                <!-- <form
                  class="search-form"
                  role="search"
                  method="get"
                  action="<?php echo home_url('/') ?>">
                  <input
                    class="search-form__input"
                    type="text"
                    value="<?php echo get_search_query() ?>"
                    name="s"
                    placeholder="Поиск"
                    autocomplete="off"
                  />
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.856" height="20.848" viewBox="0 0 19.856 20.848">
                      <path d="M91.119,310.567l-4.713-4.713a8.8,8.8,0,0,0,2.51-6.147,8.708,8.708,0,1,0-8.708,8.708,8.983,8.983,0,0,0,5.02-1.588l4.815,4.815a.877.877,0,0,0,1.127,0A.792.792,0,0,0,91.119,310.567ZM73.037,299.708a7.171,7.171,0,1,1,7.171,7.171A7.192,7.192,0,0,1,73.037,299.708Z" transform="translate(-71.5 -291)" fill="#414544" />
                    </svg>
                  </button>
                  <ul class="ajax-search"></ul>
              </form> -->
            </nav>
          </div>

          <!-- <form
              class="search-form"
              role="search"
              method="get"
              action="<?php echo home_url('/') ?>">
              <input
                class="search-form__input"
                type="text"
                value="<?php echo get_search_query() ?>"
                name="s"
                placeholder="Поиск"
                autocomplete="off"
              />
              <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.856" height="20.848" viewBox="0 0 19.856 20.848">
                  <path d="M91.119,310.567l-4.713-4.713a8.8,8.8,0,0,0,2.51-6.147,8.708,8.708,0,1,0-8.708,8.708,8.983,8.983,0,0,0,5.02-1.588l4.815,4.815a.877.877,0,0,0,1.127,0A.792.792,0,0,0,91.119,310.567ZM73.037,299.708a7.171,7.171,0,1,1,7.171,7.171A7.192,7.192,0,0,1,73.037,299.708Z" transform="translate(-71.5 -291)" fill="#414544" />
                </svg>
              </button>
              <ul class="ajax-search"></ul>
          </form> -->
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