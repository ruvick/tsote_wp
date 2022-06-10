<?php

/*
Template Name: Страница Аккредитации и лицензии
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

	<main id="primary" class="page site-main"> 

		<section class="content"> 
			<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="typical-page-title"><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
			</div>
		</section>

		<section class="section"> 
			<div class="container">

        <div class="file-block">
					<a href="#" class="file-block__item">
						<div class="file-block__item-icon"></div>
						<div class="file-block__item-text">Название документа</div>
					</a>

					<a href="#" class="file-block__item">
						<div class="file-block__item-icon"></div>
						<div class="file-block__item-text">Название документа</div>
					</a>

					<a href="#" class="file-block__item">
						<div class="file-block__item-icon"></div>
						<div class="file-block__item-text">Название документа</div>
					</a>
				</div>

				<div class="file-scan-block akkreditatsii-i-litsenzii-file-scan-block">
          <div class="file-scan-block__column">
            <div class="file-scan-block__img">
              <img src="<?php echo get_template_directory_uri();?>/img/licenses.jpg" alt="">
            </div>
          </div>
          <div class="file-scan-block__column">
            <div class="file-scan-block__img">
              <img src="<?php echo get_template_directory_uri();?>/img/licenses.jpg" alt="">
            </div>
          </div>
          <div class="file-scan-block__column">
            <div class="file-scan-block__img">
              <img src="<?php echo get_template_directory_uri();?>/img/licenses.jpg" alt="">
            </div>
          </div>
        </div>

      </div>
		</section>

	</main>

<?php get_footer();