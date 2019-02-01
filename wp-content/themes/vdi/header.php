<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/vendor/fontawesome.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />

		<!-- Sharpspring tracking -->
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-42OBAUD9OO']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
		<!-- End Sharpspring tracking -->

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div id="mobile-left-menu" class="mobile-left-menu absolute">
			<div class="menu-container relative">
				<button class="absolute" aria-label="<?php _e( 'Close Menu', 'madx' ); ?>" type="button"><i class="fal fa-long-arrow-left"></i></button>
				<?php joints_top_nav(); ?>
			</div>
		</div>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header other-header" role="banner">
							
					 <div class="grid-container">
					 	<div class="grid-x">
					 		<div class="large-12 cell">
					 			<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					 		</div>
					 	</div>
					 </div>
	 	
				</header> <!-- end .header -->

				<div class="mobile-nav">
					<div class="hamburger-container">
						<button id="hamburger" aria-label="<?php _e( 'Open Menu', 'madx' ); ?>" class="menu-icon" type="button"></button>
					</div>
					<div class="site-mobile-title title-bar-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/vdi-header-logo.png" alt="VDI"></a>
					</div>
				</div>