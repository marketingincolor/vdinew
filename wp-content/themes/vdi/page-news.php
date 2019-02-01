<?php 
/* Template Name: News */
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

	<section class="capabilities">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">

					<?php
						$count = 1;
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => -1
						);
						$query = new WP_Query( $args );
						while ( $query->have_posts() ) : $query->the_post();
					?>

						<div class="medium-6 large-4 cell module auto-height">
							<a href="<?php the_permalink(); ?>"><div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div></a>
							<div class="meta">
								<p class="post-date"><i class="fal fa-calendar-alt"></i> &nbsp; <?php the_date(); ?></p>
								<a href="<?php the_permalink(); ?>"><h4 class="blue"><?php the_title(); ?></h4></a>
								<div class="content">
									<?php echo wp_trim_words(get_the_content(),20,''); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="read-more">Read More &nbsp;<i class="far fa-long-arrow-right"></i></a>
							</div>
						</div>

				  <?php $count++;endwhile;wp_reset_postdata(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	

<?php endwhile;endif;get_footer();