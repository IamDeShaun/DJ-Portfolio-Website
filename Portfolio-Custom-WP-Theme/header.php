<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Theme_Who\'s_This
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
    <!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome Icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
	
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
	

	<?php wp_head(); ?>
    
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'new-theme-whos-this' ); ?></a>

<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="heading-signature" href="http://localhost:8888/wordpress/"><img src="http://localhost:8888/wordpress/wp-content/uploads/2018/03/deshaun-signature.png" alt="DeShaun Jones signature"></a>
					</div>
                    
                    
				<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
                    
                    <?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'primary',
							'container'	        => 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav navbar-right'
							
						) );
					?>
                    
				</div>
			</div>
		</div>
	</header>