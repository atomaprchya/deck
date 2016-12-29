<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package britedecking
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	

	<!-- Pre Header Area -->
	<div class="outter-wrapper pre-header-area header-style-5">
		<div class="wrapper clearfix">
			

			<div class="pre-header-right right">
				<!-- Second Nav -->
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="sitemap.html">About Britdecking</a></li>
					<li><a href="styles.html">Blog</a></li>
					<li><a href="styles.html"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us</a></li>
				</ul>
				</div>
			
			
			
		</div>	
	</div> 
		
		   	
    	
    <div id="page-sticky">	
	<!-- Header Area -->
	<div class="outter-wrapper header-area header-style-5">
		<div class="wrapper clearfix logo-container with-menu">

			<!-- Start Mobile Menu Icon -->
			<div id="mobile-header" class="">
				<a id="responsive-menu-button" href="#sidr-main">
					<em class="fa fa-bars"></em> Menu
				</a>
			</div>
			
			<header>
				<div id="navigation" class="clearfix">

					<ul class="menuHideBtn">
						<li><a id="closebtn" class="fa" href="#">&#xf00d;</a></li>
					</ul>
					
						
					<div class="main-header-left left adjust-left">
						<a class="logo" href="index.html">
							<img src="<?php echo get_template_directory_uri().'/brite/'; ?>brite-logo.png" alt="Scene" />
						</a>
					</div>
					
	    	    	
					<div class="main-header-right right adjust-right">
						<nav class="megamenu_container">
						<ul id="nav" class="right megamenu">
						    <li><a href="#" class="megamenu_drop">Products <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
						    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
			                    
			                    <div class="clearfix">
			                    	<div class="col-2-3 clearfix">
			                    		<h3 class="mega-title">Our Products</h3>
			                    		<div class="col-1-2">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/Cedar-WG-1.jpg" alt="Fill">
									<span class="wp-caption-text">Cedar WG</span>
									</div>
								<div class="col-1-2 last">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/Redwood-HB-1.jpg" alt="Fill">
									<span class="wp-caption-text">Redwood HB</span>
								</div>
			                    	</div>
			                    	
			                    	<div class="col-1-3 last">
			                    		<h3 class="mega-title">More</h3>
			                    		<ul class="list-2 widget-list">
			                    			<li><a href="#">View All Products</a></li>
			                    			<li><a href="#">View Portfolio</a></li>
			                    			
			                    		</ul>
			                    	</div>
			                    </div>

		                    </div><!-- End Item Container -->
		                    </li><!-- End Mega Item -->
						    <li><a href="#" class="megamenu_drop">Portfolio <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
						    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
			                    
			                    <div class="clearfix mega-drop-down-container">
			                    	
			                    	<div class="col-1-3">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_070.jpg" alt="Fill">
									<span class="wp-caption-text">Portfolio 1</span>
									</div>
								<div class="col-1-3">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_044.jpg" alt="Fill">
									<span class="wp-caption-text">Portfolio 2</span>
								</div>
								<div class="col-1-3 last">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/DSC06309.jpg" alt="Fill">
									<span class="wp-caption-text">Portfolio 3</span>
								</div>
			                    	
			                    </div>

		                    </div><!-- End Item Container -->
		                    </li><!-- End Mega Item -->
						    
						    <li><a href="#" class="megamenu_drop">About Us <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
						    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
			                    
			                    <div class="clearfix">
			                    	<div class="col-2-3 clearfix">
			                    		<h3 class="mega-title">About Britdecking</h3>
			                    		
			                    		<h6 class="title"><a href="post.html">Brite™ Maintenance free World of Composite Decking.</a></h6>
			                    		<p>Brite™ decking is virtually maintenance free and is the world’s finest wood-plastic composite decking. With the incredibly realistic look of natural timber. Brite™ composite deck has Best-In-Class slip resistance, zero splinters and never needs to be oiled or sealed – ever! All backed by 15Y Limited Residential Warranty. With Higher standards in reliability and durability.
			                    		&#8230;<a href="post.html" class="read-more">More</a></p>
			                    	</div>
			                    	
			                    	<div class="col-1-3 last">
			                    		<h3 class="mega-title">More</h3>
			                    		<ul class="list-2 widget-list">
			                    			<li><a href="index.html">Why Britdecking</a></li>
			                    			<li><a href="event-calender.html">Timber Vs Composite</a></li>
			                    			<li><a href="team.html">Price Configurator</a></li>
			                    			<li><a href="pricing1.html">What are we good at?</a></li>
			                    			
			                    		</ul>
			                    	</div>
			                    </div>

		                    </div><!-- End Item Container -->
		                    </li><!-- End Mega Item -->
						    <li><a href="#" class="megamenu_drop">Solutions <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
						    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
			                    <div class="clearfix mega-drop-down-container">
								<div class="col-1-3">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_070.jpg" alt="Fill">
									<span class="wp-caption-text">For Homeowners</span>
								</div>
								<div class="col-1-3">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/DSCN0160.jpg" alt="Fill">
									<span class="wp-caption-text">For builders</span>
								</div>
								<div class="col-1-3 last">
									<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Redwood-in-Britedeck-1.jpg" alt="Fill">
									<span class="wp-caption-text">For Architects</span>
								</div>
								</div>
		                    </div><!-- End Item Container -->
		                    </li><!-- End Mega Item -->
						                
						     <li><a href="#" class="megamenu_drop">Information Center <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
						    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
			                    
			                    <div class="clearfix">
			                    	<div class="col-1-3">
			                    		<h3 class="mega-title">Quick Links</h3>
			                    		<ul class="list-2 widget-list">
			                    			<li><a href="index.html">Home Page</a></li>
			                    			<li><a href="event-calender.html">Events Calendar</a></li>
			                    			<li><a href="team.html">Our Team</a></li>
			                    			<li><a href="pricing1.html">Join Our Club</a></li>
			                    			<li><a href="blog-rsb.html">Our Blog</a></li>
			                    			<li><a href="contact.php">Contact Us</a></li>
			                    		</ul>
			                    	</div>
			                    	<div class="col-1-3">
			                    		<h3 class="mega-title">Quick Links</h3>
			                    		<ul class="list-2 widget-list">
			                    			<li><a href="index.html">Home Page</a></li>
			                    			<li><a href="event-calender.html">Events Calendar</a></li>
			                    			<li><a href="team.html">Our Team</a></li>
			                    			<li><a href="pricing1.html">Join Our Club</a></li>
			                    			<li><a href="blog-rsb.html">Our Blog</a></li>
			                    			<li><a href="contact.php">Contact Us</a></li>
			                    		</ul>
			                    	</div>
			                    	<div class="col-1-3 last">
			                    		<h3 class="mega-title">Quick Links</h3>
			                    		<ul class="list-2 widget-list">
			                    			<li><a href="index.html">Home Page</a></li>
			                    			<li><a href="event-calender.html">Events Calendar</a></li>
			                    			<li><a href="team.html">Our Team</a></li>
			                    			<li><a href="pricing1.html">Join Our Club</a></li>
			                    			<li><a href="blog-rsb.html">Our Blog</a></li>
			                    			<li><a href="contact.php">Contact Us</a></li>
			                    		</ul>
			                    	</div>
			                    </div>

		                    </div><!-- End Item Container -->
		                    </li><!-- End Mega Item -->           
						                
						    
						    <li class="nav-parent">
						    	<a href="#">FAQ's</a>
						    			
						    </li>
						</ul>
						</nav>
					</div>

    			</div>
			</header>
		</div>
	</div>
    </div>	    	
    	    	
    	    	

	

	<div id="content" class="site-content">
