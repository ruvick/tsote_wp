
<?php
/*
Template Name: Отзывы
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
				<h1 style="color: #000; margin-bottom: 40px;" ><?php the_title();?></h1>
				<div class="otzyvy-container">
					<div style="width: 100%; height: 800px; overflow: hidden; position: relative">
						<iframe
							style="
							width: 100%;
							height: 100%;
							border: 1px solid #e6e6e6;
							border-radius: 8px;
							box-sizing: border-box;
							"
							src="https://yandex.ru/maps-reviews-widget/1729235473?comments"
						></iframe
						><a
							href="https://yandex.ru/maps/org/tsentr_okhrany_truda/1729235473/"
							target="_blank"
							style="
							box-sizing: border-box;
							text-decoration: none;
							color: #b3b3b3;
							font-size: 10px;
							font-family: YS Text, sans-serif;
							padding: 0 20px;
							position: absolute;
							bottom: 8px;
							width: 100%;
							text-align: center;
							left: 0;
							"
							>Центр Охраны Труда на карте Курска — Яндекс.Карты</a
						>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer();