<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Type" content="text/html">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->

	<title>
		<?php wp_title(); ?> |
			<?php bloginfo('name'); ?>
	</title>
	<!-- Mostrar el título de la página seguido del nombre del blog -->

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!-- Enlace a su favicon -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1" /> -->
	<!-- Puesta en funcionamiento su ventana para asegurarse de que su tema se muestra correctamente en los dispositivos móviles -->

	<meta name="Revisit-After" content="7 Days">
	<!-- Útil para los motores de búsqueda -->

	<meta name="robots" content="index,follow">
	<!-- Útil para los motores de búsqueda -->
	
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
	<!-- Enlace a su css -->
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
		<!-- Hojas de estilo y scripts en cola correctamente aparecerán en esta función - MUY IMPORTANTE -->

</head>

<body>

	<div class="header">

		<!--<div class="wrap_1280">-->
		<div class="wrap_1280">
		
			<div class="logo">

				<a href='/fromscratch/index.php' title="Wordpress Development Solutions"><img src="<?php echo get_template_directory_uri(); ?>/images/wds_theme_tutorial_logo.png" width="300" height="191" alt="" /></a>
				<!-- Observe la función de WordPress que crea dinámicamente el camino a su tema -->

			</div>
			
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			
			<div class="social-icons-header">

				<div class="social-wrap pull-right">
					
					<div class="social-icons"><a href='https://www.facebook.com/WordpressDevSolutions' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" width="32" height="32" alt="WordPress Development Solutions Facebook" /></a></div>
					<!-- Facebook -->
					
					<div class="social-icons"><a href='https://twitter.com/WpDevSolutions' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" width="32" height="32" alt="WordPress Development Solutions Twitter" /></a></div>
					<!-- Twitter -->
					
					<div class="social-icons"><a href="https://plus.google.com/104168601045265342740" rel="publisher" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.jpg" width="32" height="32" alt="WordPress Development Solutions Google+" /></a></div>
					<!-- Google+ -->
					
					<div class="social-icons"><a href='http://wpdevsolutions.tumblr.com/' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tumblr.jpg" width="32" height="32" alt="WordPress Development Solutions Tumblr" /></a></div>
					<!-- Tumblr -->
					
					<div class="clearfix"></div>

				</div>

			</div>

			<hr>
			<div class="clearfix"></div>

		</div>

	</div>

	<div class="navigation-wrapper">

		<div class="wrap_1280">

			<div class="navigation">

				<?php if ( !wp_is_mobile() ) { ?><!-- Para mi que no lleva el ! -->
					<!-- Esta es una función integrada que determina si el dispositivo móvil o no -->

					<div class="menu-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<?php wp_nav_menu(array('theme_location' => 'top-menu')); ?>
						<!--<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>-->
						<!-- Aquí es donde se llama a su dinámica menú principal -->

					</div>

				<?php } else { ?>
					
						<div class="toggle"><a href="#" id="responsive-top-nav-button">MENU</a></div>

						<div class="responsive-top-navigation">
							<?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
							<!--<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>-->
						</div>
						<!-- Aquí es donde se llama a su dinámica?! menú móvil -->
				
				<?php } ?>
					
						<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>

		</div>

	</div>