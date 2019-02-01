<?php 
/* Template Name: About */
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

	<section class="applications">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile;endif;get_footer();