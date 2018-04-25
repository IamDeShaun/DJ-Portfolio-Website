<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Theme_Who\'s_This
 */

?>

	<!-- Contact Me
	================================================== -->
	
	<section id="contact-me">
		<div class="container">
		
            <p><span class="portfolio-title">Contact Me</span></p><br>
	
	<div class="row">
				<div class="col-sm-4">
					<i class="fas fa-envelope fa-6x"></i>
					<p class="project-title"><a href="mailto:ceo@deshaunjones.com" target="_blank">ceo@deshaunjones.com</a></p>
				</div><!-- col -->
                
				<div class="col-sm-4">
					<i class="fas fa-map-marker fa-6x"></i>
					<p class="project-title">90 State St. Albany, NY 12207</p>
				</div><!-- col -->
                
				<div class="col-sm-4">
				<i class="fas fa-phone-square fa-6x"></i>
					<p class="project-title">518-764-8337</p>
				</div><!-- col --><br />
				
			</div><!-- row -->
            
            
            </div><!-- container -->
	</section><!-- Contact Me -->
        
        <div class="push"></div>
        </div><!-- End Content Wrapper -->
        
	<!-- FOOTER
	================================================== -->
	<footer id="footlinks" class="footer">
		<div class="container">
			
			<div class="col-sm-12">
				<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'list-unstyled list-inline'
							
						) );
					?>
                <p>© 2018 DeShaun Jones | Albany, NY Front-end Web Developer</p>
			</div><!-- end col -->
			
		</div><!-- container -->
	</footer>


	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


<?php wp_footer(); ?>

</body>
</html>
