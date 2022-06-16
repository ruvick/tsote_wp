<?php

/*
Template Name: Страница О лаборатории
Template Post Type: page
*/

get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<div class="content"> 
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
		</div>

    <section class="section">
		<div class="container">
			<div class="see-also content">
				<h2 class="see-also__title">Смотрите так же</h2>
				<ul class="see-also__list">
					<li class="see-also__list-item"><a href="<?php echo get_permalink(286);?>" class="see-also__list-item-link">О лаборатории</a></li>
					<li class="see-also__list-item"><a href="<?php echo get_permalink(282);?>" class="see-also__list-item-link">Услуги</a></li>
					<li class="see-also__list-item"><a href="<?php echo get_permalink(288);?>" class="see-also__list-item-link">Аккредитации и лицензии</a></li>
				</ul>
			</div>
		</div>
	</section>

	</main>

<?php get_footer();