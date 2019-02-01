<?php
	$pages = get_pages(); 
	foreach ($pages as $page) {
		if ($page->post_title == 'Footer') {
			$footer_id = $page->ID;
		}
	}
 ?>
					
			<footer class="footer" role="contentinfo">

				<?php if(!is_page_template('page-contact.php') && !is_page_template('page-success.php')) { ?>

				<section class="top-footer" style="background-image: url(<?php the_field('footer_cta_bg_image',$footer_id); ?>)">
					<div class="grid-container">
						<div class="grid-x">
							<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
								<h2 class="white"><?php the_field('footer_cta_title',$footer_id); ?></h2>
								<aside class="yellow-underline left"></aside>
							</div>
							<div class="small-10 small-offset-1 medium-8 large-6 large-offset-0 cell">
								<p class="subhead white"><?php the_field('footer_cta_subhead',$footer_id); ?></p>
								<a href="<?php the_field('footer_cta_button_link',$footer_id); ?>"><button class="btn-yellow solid"><?php the_field('footer_cta_button_text',$footer_id); ?></button></a>
							</div>
						</div>
					</div>
				</section>

			  <?php } ?>
			  
				<section class="bottom-footer">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-padding-x grid-margin-y">
							
							<div class="small-6 small-offset-3 medium-3 medium-offset-1 large-2 large-offset-0 cell text-center">
								<?php $image = get_field('footer_logo',$footer_id); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						  </div>
						
		    			<div class="small-10 small-offset-1 medium-8 medium-offset-0 large-5 cell text-center">
		    				<?php joints_top_nav(); ?>
		    			</div>
		
		    			<div class="small-10 small-offset-1 medium-8 medium-offset-2 large-5 large-offset-0 cell footer-meta">
		    				<ul>
		    					<li><img src="<?php bloginfo('template_directory'); ?>/assets/images/vdi-logos.png" alt="VDI Logos"></li>
		    					<li>
		    						<h6 class="blue">An Industry Leader</h6>
		    						<p class="industry">VDI is an active member of the <a href="https://www.aimcal.org/" target="_blank">Association of Industrial Metallizers, Coaters and Laminators (AIMCAL)</a>, a global nonprofit trade association representing converters of metallized, laminated, and coated flexible substrates and their suppliers. VDI is also an active member of the <a href="https://www.svc.org/" target="_blank">Society of Vacuum Coaters (SVC)</a>.</p>
		    					</li>
		    				</ul>
		    			</div>
							
							<div class="small-12 medium-12 large-12 cell text-center">
								<!--<p><a href="https://www.linkedin.com/company/vdi-llc/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/square-linkedin-30.png" alt="VDI Linkedin"></a></p>-->
								<p><script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script><script type="IN/FollowCompany" data-id="4524199" data-counter="top"></script></p>
								<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> VDI LLC. | <a href="/privacy-policy">Privacy Policy</a></p>
							</div>
						
						</div>
					</div>
				</section>
			</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->