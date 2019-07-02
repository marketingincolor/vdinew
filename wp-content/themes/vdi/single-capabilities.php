<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<section class="page-hero relative" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
	<div class="offoverlay absolute"></div>
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h1 class="white"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<?php //get_template_part( 'parts/content', 'byline' ); ?>
			</div>
		</div>
	</div>
</section>
			
<div class="content">
	<div class="inner-content grid-x grid-margin-x grid-padding-x">
		<main class="main small-10 small-offset-1 large-8 large-offset-2 cell" role="main">

		<?php if(get_field('capability_image')) { ?>
			<div>
				<section class="entry-content" style="padding-left:0px; padding-right:0px;">
					<img src="<?php the_field('capability_image'); ?>" alt="<?php the_title(); ?>">
				</section>
			</div>
		<?php } ?>

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile;endif; ?>

		</main>
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>