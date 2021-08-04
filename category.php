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

<?php get_footer(); ?>