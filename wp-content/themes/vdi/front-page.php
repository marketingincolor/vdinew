<?php 
/* Template Name: Front Page */
get_header('home');
if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="page-hero relative" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
	<header class="header absolute" role="banner">
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-12 cell">
					<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
				</div>
			</div>
		</div>
	</header>
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h1 class="white"><?php the_field('hero_title'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead white"><?php the_field('hero_subhead'); ?></p>
				<a href="<?php the_field('hero_cta_link'); ?>"><button class="btn-yellow solid"><?php the_field('hero_cta_text'); ?></button></a>
			</div>
		</div>
	</div>
</section>

<section class="carousel">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="orbit" role="region" aria-label="VDI Image Carousel" data-orbit>
				  <div class="orbit-wrapper">
				    <div class="orbit-controls">
				      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
				      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				    </div>
				    <ul class="orbit-container">
				      <li class="is-active orbit-slide" data-slide="0">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/assets/images/home-A.jpg" alt="VDI">
				        </figure>
				      </li>
				      <li class="orbit-slide" data-slide="1">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/assets/images/home-B.jpg" alt="VDI">
				        </figure>
				      </li>
				      <li class="orbit-slide" data-slide="2">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/assets/images/home-C.jpg" alt="VDI">
				        </figure>
				      </li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="one-stop">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x">
					<div class="medium-12 cell one-stop-title">
						<div class="grid-x">
							<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
								<h3 class="blue"><?php the_field('one_stop_title'); ?></h3>
								<p class="subhead"><?php the_field('one_stop_subhead'); ?></p>
								<aside class="yellow-underline center"></aside>
							</div>
						</div>
					</div>

					<?php
					if( have_rows('one_stop_modules') ):
					  while ( have_rows('one_stop_modules') ) : the_row();
					  	$icon = get_sub_field('icon'); ?>

					    <div class="medium-4 cell text-center icon-module">
					    	<img class="module-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
					    	<h6><?php the_sub_field('heading'); ?></h6>
					    	<p><?php the_sub_field('body'); ?></p>
					    </div>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile;endif;get_footer();