<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( 'xhtml' ); ?>>

<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" />
	<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/image_slide.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory'); ?>/js/jquery.easing-sooper.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.sooperfish.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('ul.sf-menu').sooperfish();
		});
		$(document).ready(function() {
			$('.more-link').parent().addClass('button_small');
		});
	</script>

</head>

<body>
	<div id="main">
		<div id="dark_container">
			<div id="banner">
				<div id="welcome">
					<h1><?php bloginfo( 'title' ); ?></h1>
				</div><!--close welcome-->
				<div id="welcome_slogan">
					<h1><?php bloginfo( 'description' ); ?></h1>
				</div><!--close welcome_slogan-->
				<div id="slideshow">  
					<ul class="slideshow">
						<li class="show"><img width="940" height="250" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
						<li><img width="940" height="250" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
					</ul> 
				</div><!--close slideshow-->	  
			</div><!--close banner-->	
		</div><!--close dark_container-->

		<div id="menu_container">
			<div id="menubar">
				<?php wp_nav_menu( array( 
					'menu_class' => 'sf-menu',
					'menu_id' => 'nav',
					) ); ?>
			</div><!--close menubar-->	
		</div><!--close menu_container-->	

		<div id="site_content">		

			<div class="sidebar_container">       
				<?php dynamic_sidebar( 'sidebar-main' ); ?>    		
			</div><!--close sidebar_container-->     	 

			<div id="content">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="content_item">
					<h1><span href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></span></h1> 
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="content_image">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<div class="entry-content">
						<?php the_content( __( 'Read more', 'twenrythirteen' ) ); ?>
					</div>
				</div><!--close content_item-->
				<?php endwhile; endif; ?>
			</div><!--close content-->   
		</div><!--close site_content-->  

	</div><!--close main-->

	<div id="footer_container">
		<div id="footer">
			<a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | design by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a> | WordPress theme by <a href="http://blog.bis5.net/">bis5@4S Technology</a>
		</div><!--close footer-->  
	</div><!--close footer_container-->  

</body>
</html>
