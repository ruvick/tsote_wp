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
					<? 
						$lic = carbon_get_theme_option('licenses_complex');
							if ($lic) {
						$licIndex = 0;
							foreach ($lic as $item) {
					?>
						<div class="file-block__item">
							<?php
								printf('<a href="%s" download class="file-block__item-icon"></a>', $item['licenses_complex_file']);
							?>
							<?php
								printf('<a href="%s" download><div class="file-block__item-text">' . $item['licenses_complex_name'] . '</div></a>', $item['licenses_complex_file']);
							?>
						</div>
					<?
							$licIndex++; 
							}
						}
					?>
				</div>

				<div class="file-scan-block akkreditatsii-i-litsenzii-file-scan-block">
          <div class="file-scan-block__column">
            <div class="file-scan-block__img wp-block-gallery">
							<a href="<?php echo wp_get_attachment_image_src(carbon_get_theme_option("license_picture"), 'full')[0];?>">
								<img src="<?php echo wp_get_attachment_image_src(carbon_get_theme_option("license_picture"), 'full')[0];?>" alt="">
							</a>
            </div>
          </div>
        </div>

      </div>
		</section>

	</main>

<?php get_footer();