
<?php
/*
Template Name: Карта сайта
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page category"> 

		<div class="content"> 
			<div class="container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
				<?php endwhile;?>
			<?php endif; ?> 
			<?php do_shortcode('[htmlsitemap]'); ?>
			</div>
		</div>
	</main>

<?php get_footer();