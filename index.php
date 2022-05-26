<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

	<section id="slider" class="slider">
		<?
		$pict = carbon_get_theme_option('slider_index');
		if ($pict) {
			$pictIndex = 0;
			foreach ($pict as $item) { 
				if($item['slider_href']){
					?>
					<a class="slider__item" href="<?=$item['slider_href'];?>" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
						<div class="container">
							<? if (!empty($item['slider_title'])) { ?>
								<div class="slider__text">
									<div class="h1"><? echo $item['slider_title']; ?></div>
									<p><? echo $item['slider_subtitle']; ?></p>
									<div class="slider__text-color"></div>
								</div>
							<? } ?>
						</div>
					</a>
					<?
				} else {
					?>
					<div class="slider__item" data-href="<?=$item['slider_href'];?>" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
						<div class="container">
							<? if (!empty($item['slider_title'])) { ?>
								<div class="slider__text">
									<div class="h1"><? echo $item['slider_title']; ?></div>
									<p><? echo $item['slider_subtitle']; ?></p>
									<div class="slider__text-color"></div>
								</div>
							<? } ?>
						</div>
					</div>
					<?
				}
				$pictIndex++;
			}
		}
		?>
	</section>

	<? $about = carbon_get_theme_option("about_home");
	if (!empty($about)) { ?>
		<section id="about" class="about">
			<div class="container">
				<h2>О нашей компании</h2>
				<p><? echo $about; ?></p>
			</div>
		</section>
	<? } ?>

	<section id="services" class="services">
		<div class="container">
			<div class="block__tabs tabs">
				<div class="services__title-btn d-flex">
					<h2>Наши услуги</h2>
					<nav class="services__btn-block block__nav">
						<button class="services__btn block__navitem tab__navitem active">ОХРАНА ТРУДА</button>
						<button class="services__btn block__navitem tab__navitem">ЭКОЛОГИЧЕСКАЯ БЕЗОПАСНОСТЬ</button>
					</nav>
				</div>
				<div class="block__items">

					<div class="services__row block__item tab__item active d-flex">
						<?php
						$posts = get_posts(array(
							'numberposts' => -1,
							'category'    => 4,
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  => '',
							'post_type'   => 'post',
							'suppress_filters' => true,
						));

						$result = wp_get_recent_posts($args);

						foreach ($posts as $post) {
							get_template_part('template-parts/product-elem');
						?>
						<?php
						}
						?>
					</div>

					<div class="services__row block__item tab__item d-flex">
						<?php
						$posts = get_posts(array(
							'numberposts' => -1,
							'category'    => 3,
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  => '',
							'post_type'   => 'post',
							'suppress_filters' => true,
						));

						$result = wp_get_recent_posts($args);

						foreach ($posts as $post) {
							get_template_part('template-parts/product-elem');
						?>
						<?php
						}
						?>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="licenses" class="licenses clients">
		<div class="container">
			<h2>Аккредитации и лицензии</h2>
			<div class="licenses__slider slider-typical">
				<? 
					$licenses = carbon_get_theme_option('licenses_complex'); 
						if ($licenses) {
					$licensesIndex = 0;
						foreach ($licenses as $item) {
				?>
					<div class="licenses__slider-item slider-typical__slide">
						<img src="<?php echo wp_get_attachment_image_src($item['licenses_img'], 'large')[0]; ?>" alt="">
					</div>
				<?
					$licensesIndex++; 
						}
					}
				?>
			</div>
		</div>
	</section>

	<section id="clients" class="clients">
		<div class="container">
			<h2>Наши клиенты</h2>
			<div class="clients__slider slider-typical">

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/01.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/02.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/03.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/04.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/05.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/06.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/07.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/08.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/09.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/10.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/11.png" alt="">
				</div>

				<div class="clients__slider-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/clients/12.png" alt="">
				</div>

			</div>
		</div>
	</section>

	<section id="thanksgiving" class="thanksgiving clients">
		<div class="container">
			<h2>Благодарственные письма</h2>
			<div class="thanksgiving__slider slider-typical">
				<? 
					$thanksgiving = carbon_get_theme_option('thanksgiving_complex'); 
						if ($thanksgiving) {
					$thanksgivingIndex = 0;
						foreach ($thanksgiving as $item) {
				?>
					<div class="thanksgiving__slider-item slider-typical__slide">
					<img src="<?php echo wp_get_attachment_image_src($item['thanksgiving_img'], 'large')[0]; ?>" alt="">
					</div>
				<?
					$thanksgivingIndex++; 
						}
					}
				?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>