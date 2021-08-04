<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

  <section class="category info">
    <div class="container">

      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>

      <h1><?php the_title(); ?></h1>

      <div class="info__card-block d-flex">

        <div class="info__card-block-desc">
          <p>
            Санитарно-защитная зона является защитным барьером, основное назначение которого - обеспечить
            безопасность населения при эксплуатации
            предприятия.
          </p>
          <p>
            Разработка проекта СЗЗ обязательна практически для любого крупного предприятия, оказывающего негативное
            воздействие на окружающую среду.
          </p>
          <div class="info__charact">

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-1">Наименование документа</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc">проект СЗЗ</div>
            </div>

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-2">Сроки выполнения работ</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc">от 5 месяцев</div>
            </div>

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-3">Стоимость</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc">от 35 000 руб.</div>
            </div>

          </div>
          <a href="#callback" class="header__popup-link btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
        </div>

        <div class="info__card-block-img">
          <img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
                    echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="">
        </div>

      </div>

      <div class="info__desc">
        <p>
          Санитарно-защитная зона (СЗЗ) — специальная территория с особым режимом использования, которая создается
          вокруг объектов и производств,
          являющихся источниками воздействия на среду обитания и здоровье человека.
        </p>
        <p>
          В санитарно-защитной зоне не допускается размещать: жилую застройку, включая отдельные жилые дома,
          ландшафтно-рекреационные зоны, зоны отдыха, территории курортов, санаториев и домов отдыха, территорий
          садоводческих товариществ и коттеджной застройки, коллективных или индивидуальных дачных и
          садово-огородных участков, а также других территорий с нормируемыми показателями качества среды обитания;
          спортивные сооружения, детские площадки, образовательные и детские учреждения, лечебно-профилактические и
          оздоровительные учреждения общего пользования
        </p>
        <p>
          В соответствии с санитарной классификацией промышленных объектов и производств, устанавливаются следующие
          ориентировочные размеры санитарно-защитных зон:
        </p>
        <ul>
          <li>промышленные объекты и производства первого класса — 1000 м;</li>
          <li>промышленные объекты и производства второго класса — 500 м;</li>
          <li>промышленные объекты и производства третьего класса — 300 м;</li>
          <li>промышленные объекты и производства четвертого класса — 100 м;</li>
          <li>промышленные объекты и производства пятого класса — 50 м.</li>
        </ul>
        <p>
          Для групп промышленных объектов и производств или промышленного узла (комплекса), в состав которых входят
          объекты I и II классов опасности проводится оценка риска для здоровья населения.
        </p>
        <p>
          Разработка Проекта СЗЗ обязательна практически для любого крупного предприятия, оказывающего негативное
          воздействие на окружающую среду. Наличие проекта СЗЗ позволяет доказать безопасность воздействий
          (химического, биологического, физического) на атмосферный воздух относительно значений, установленных
          гигиеническими нормативами.
        </p>
        <p>
          Для чего разрабатывается проект санитарно-защитной зоны
          Санитарно-защитная зона является защитным барьером, основное назначение которого - обеспечить безопасность
          населения при эксплуатации предприятия. При разработке проекта СЗЗ проводится детальный анализ всех
          воздействий на окружающую среду и здоровье человека.

        </p>
      </div>

    </div>
  </section>

  <section class="also">
    <div class="container">
      <h2>Смотрите также</h2>
      <div class="services__row d-flex">

        <div class="card__body d-flex">
          <div class="card__img">
            <img src="img/services/01.jpg" alt="">
          </div>
          <div class="card__desc">
            <h4>
              Специальная оценка
              условий труда (СОУТ)
            </h4>
            <a href="#" class="card__link">ПОДРОБНЕЕ</a>
          </div>
        </div>

        <div class="card__body d-flex">
          <div class="card__img">
            <img src="img/services/02.jpg" alt="">
          </div>
          <div class="card__desc">
            <h4>
              Оценка
              профессиональных
              рисков
            </h4>
            <a href="#" class="card__link">ПОДРОБНЕЕ</a>
          </div>
        </div>

        <div class="card__body d-flex">
          <div class="card__img">
            <img src="img/services/03.jpg" alt="">
          </div>
          <div class="card__desc">
            <h4>
              Проект предельно
              допустимых выбросов
              (ПДВ)
            </h4>
            <a href="#" class="card__link">ПОДРОБНЕЕ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
