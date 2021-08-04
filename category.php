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

      <h1><?php single_cat_title('', true); ?></h1>

      <div class="services__row d-flex">
        <?php
        while (have_posts()) :
          the_post();
          get_template_part('template-parts/product-elem');
        endwhile;
        ?>
      </div>

    </div>
  </section>

  <section class="also">
    <div class="container">
      <h2>Смотрите также</h2>
      <div class="services__row d-flex">

        <div class="card__body d-flex">
          <div class="card__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/01.jpg" alt="">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/02.jpg" alt="">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/03.jpg" alt="">
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

<?php get_footer(); ?>