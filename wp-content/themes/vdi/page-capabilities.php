<?php 
/* Template Name: Capabilities */
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="page-hero relative" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
					<h1 class="white"><?php the_field('hero_title'); ?></h1>
					<aside class="yellow-underline center"></aside>
					<p class="white"><?php the_field('hero_subhead'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="capabilities" style="padding-bottom:6%;">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-ofset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
					<?php
						$count = 1;
						$args = array(
							'post_type'      => 'capabilities',
							'posts_per_page' => -1,
							'orderby'        => 'menu_order',
							'order'          => 'ASC'
						);
						$query = new WP_Query( $args );
						while ( $query->have_posts() ) : $query->the_post();
					?>

						<div class="large-4 medium-6 cell text-center benefit relative" style="margin-top:1.9375rem; margin-bottom:1.9375rem;">
						<?php if(get_field('capability_icon')) { ?>
							<img src="<?php the_field('capability_icon'); ?> " style="height:56px;">
						<?php } ?>
							<h5 class="blue" style="margin-top:.5em;"><?php the_title(); ?></h5> 
						<?php if(get_field('fun_fact')) { ?>
							<div class="relative"><p class="fact"><?php the_field('fun_fact'); ?></p></div>
						<?php } ?>
							<div class="text-center relative" style="bottom:0;left:50%;transform:translateX(-50%);-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);width:100%;"><a href="<?php the_permalink() ?>"><button class="btn-yellow border" style="border:2px solid #e09e10;">Learn More</button></a></div>
						</div>
					<?php ;endwhile;wp_reset_postdata(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	

<?php endwhile;endif;get_footer();