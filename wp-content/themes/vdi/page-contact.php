<?php 
/* Template Name: Contact */
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

	<section class="contact-us">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-8 large-offset-2 cell form-container">
					<div class="contact-info text-center">
						<h5 class="blue"><?php the_field('company_name'); ?></h5>
						<address><?php the_field('company_address'); ?></address>
						<address><?php the_field('company_phone'); ?> | <?php the_field('company_fax'); ?></address>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

<?php endwhile;endif;get_footer();