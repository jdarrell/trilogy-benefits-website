<?php
/**
* The default header file
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>
	<div id="wrap">
		<!-- header: main-nav -->
		<div id="header">
			<div class="navbar">
	      <div class="navbar-inner">
	      	<!--DESKTOP MENU-->
	        <div id="menu-desktop" class="container">
	        	<div class="flag-wrap">
		      		<img class="flag1" src="http://trilogybenefits.com/wp-content/uploads/2013/08/Colorado-Flag-small1.png" alt="#">
		      	</div>
		      	<?php 
		      		wp_nav_menu( array(
		      			'theme_location'  => 'main-nav', 
		      			'container' => 'false',
		      			'menu_class'      => 'nav', 
		      		) );
			      ?>
	        </div>
	        <!--MOBILE MENU-->
	        <div id="menu-mobile" class="container">
		      	<ul class="nav pull-right">
		      		<li id="flag-hidden">
			      		<img class="flag1" src="http://trilogybenefits.com/wp-content/uploads/2013/08/Colorado-Flag-small1.png" alt="#">
			      	</li>
		      		<li class="dropdown">
				      	<a id="drop-menu" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Menu<b class="caret"></b></a>
				      	<?php 
				      		wp_nav_menu( array(
				      			'theme_location'  => 'main-nav',
				      			'container'				=> 'false',
				      			'menu_class'      => 'dropdown-menu', 
				      		) );
					      ?>
		        	</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
		<header>
			<div id="head-container" class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="header-wrapper">
							<div class="logo-wrapper">
								<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/TB-Logo-small2-clipped-cropped.png" id="logo" alt="#">
							</div>
						
							<div class="tagline">					
								<h2><?php the_field("main_tagline", 4); ?></h2>
							</div>

							<div class="flag2">
								<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/Colorado-Flag-small1.png" alt="#">
							</div>
						
							<div class="badge-wrapper hidden-phone">
								<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/NAHU-Logo-small3-clipped.png" alt="#">
								<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/MDAHU-Logo-small3-clipped.png" alt="#">
						    <img src="http://trilogybenefits.com/wp-content/uploads/2013/08/LPRT-Logo-small3-clipped.png" alt="#">
						    <img src="http://trilogybenefits.com/wp-content/uploads/2013/08/BBB-Logo-small1-clipped.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		</div>

		<!--TAGLINE-->
		<div class="row-fluid tagline-row">
			<div class="span12">
				<div class="tagline-main text-center">
					<h2>"Small enough to know you; Large enough to serve all your benefit needs"</h2>
				</div>
			</div>
		</div>
		<!-- end of header -->