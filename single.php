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
          <? echo carbon_get_post_meta(get_the_ID(), "single_smile_descr"); ?>
          <div class="info__charact">

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-1">Наименование документа</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc"><? echo carbon_get_post_meta(get_the_ID(), "cher_title_doc"); ?></div>
            </div>

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-2">Сроки выполнения работ</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc"><? echo carbon_get_post_meta(get_the_ID(), "cher_work_time"); ?></div>
            </div>

            <div class="info__charact-row d-flex">
              <div class="info__charact-name charact-name-icon-3">Стоимость</div>
              <div class="info__charact-line"></div>
              <div class="info__charact-desc"><? echo carbon_get_post_meta(get_the_ID(), "cher_work_price"); ?></div>
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
        <?php the_content(); ?>
      </div>

    </div>
  </section>

  <section class="also">
    <div class="container">
      <h2>Смотрите также</h2>
      <div class="services__row d-flex">
        <?php
        global $query_string;
        query_posts($query_string . '&order=ASC&posts_per_page=3');
        get_template_part('template-parts/product-elem');
        wp_reset_query();
        ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
