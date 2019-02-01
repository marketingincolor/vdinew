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

	<section class="capabilities">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
					<div class="subhead text-center" style="margin-bottom:40px"><?php the_content(); ?></div>
				</div>
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
						<div class="large-3 medium-4 cell">
							<ul class="tabs" data-tabs id="capabilities-tabs">

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

							  <li class="tabs-title <?php if($count == 1){echo 'is-active';} ?>"><a href="#panel<?php echo $count; ?>" aria-selected="<?php if($count == 1){echo 'true';} ?>"><?php the_title(); ?></a></li>

							  <?php $count++;endwhile;wp_reset_postdata(); ?>

							</ul>
						</div>
						<div class="large-9 medium-8 cell">
							<div class="tabs-content" data-tabs-content="capabilities-tabs">

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

							  <div class="tabs-panel <?php if($count == 1){echo 'is-active';} ?>" id="panel<?php echo $count; ?>">
							    <h4 class="blue"><?php the_title(); ?></h4>
							    <?php if(get_field('fun_fact')) { ?>
										<hr>
										<p><?php the_field('fun_fact'); ?></p>
										<hr>
							    <?php } ?>
							    <?php the_content(); ?>
							  </div>
							  
								<?php $count++;endwhile;wp_reset_postdata(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

<?php endwhile;endif;get_footer();