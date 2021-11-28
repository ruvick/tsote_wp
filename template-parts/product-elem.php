<a href="<? echo get_the_permalink(get_the_ID()); ?>" class="card__body d-flex">
	<div class="card__img">
		<img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
							echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="<? the_title(); ?>" loading="lazy">
	</div>
	<div class="card__desc">
		<div class="h4"><? the_title(); ?></div>
		<p class="card__link">ПОДРОБНЕЕ</p>
	</div>
</a>