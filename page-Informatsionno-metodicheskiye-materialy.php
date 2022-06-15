<?php

/*
Template Name: Страница Информационно-методические материалы
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
					<? 
						$infoMetod = carbon_get_theme_option('info_metod_complex');
							if ($infoMetod) {
						$infoMetodIndex = 0;
							foreach ($infoMetod as $item) {
					?>
						<div class="file-block__item">
							<?php
								printf('<a href="%s" download class="file-block__item-icon"></a>', $item['info_metod_complex_file']);
							?>
							<?php
								printf('<a href="%s" download><div class="file-block__item-text">' . $item['info_metod_complex_name'] . '</div></a>', $item['info_metod_complex_file']);
							?>
						</div>
					<?
						$infoMetodIndex++; 
							}
						}
					?>
				</div>

      </div>
		</section>

	</main>

<?php get_footer();