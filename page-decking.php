<?php
/* Template Name: Decking Page */ 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package britedecking
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="wrapper clearfix decking-content">
				<div class="title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
				<div class="content"><?php the_content(); ?></div>
				<hr class="style1"/>
				<div class="gallery">
					<h3>Gallery</h3>
	    		<!-- Start Carousel -->
				<div class="owl-carousel-container">
					<div id="carousel-1" class="owl-carousel">
					
					  
						  <!-- Carousel Item -->	
						  <div class="item">
			    			  	<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_070.jpg" alt="Fill" />
						  </div>
						  
						  <!-- Carousel Item -->	
						  <div class="item">
						  	  	<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_044.jpg" alt="Fill" />
						  </div>
						  
						  <!-- Carousel Item -->	
						  <div class="item">
						  	  	<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_070.jpg" alt="Fill" />
						  </div>
						  
						  <!-- Carousel Item -->	
						  <div class="item">
						  	  	<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_044.jpg" alt="Fill" />
						  </div>
						  
						  <!-- Carousel Item -->	
						  <div class="item">
						  	  	<img src="<?php echo get_template_directory_uri(); ?>/brite/old/img/port/Picture_070.jpg" alt="Fill" />
						  </div>
						  
						  
		
		    		</div>
				</div>
				<!-- End carousel -->
				<hr class="style1"/>

				<div class="surfaces_colors_box">
					<?php
					$terms = get_product_terms('brite_product_surface');
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					    
					    foreach ( $terms as $term ) {
					    	
					        ?>
					        <h3><?php echo $term->name; ?></h3>
					        <div class="surface_products clearfix">
					        	<?php
					        	$products = get_products('brite_product_surface', $term->term_id); ?>
					        	<?php
					        	$ct=1; foreach ( $products as $post ) : setup_postdata( $post );  ?>
									<div class="col-1-4 widget <?php if($ct%4==0) echo 'last'; ?>">
											
										<div class="mosaic-block">
											<a href="post.html" class="mosaic-overlay link" title="Insert Your Title" style="display: inline; opacity: 0;"></a><div class="mosaic-backdrop" style="display: block;">
											<img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="Mock"></div>
										</div>
										<h6 class="title"><a href="#"><?php the_title(); ?> (<?php print_r(get_width_name(get_the_ID())); ?>)</a></h6>
										<p>Morbi leo risus, porta ac conse ctetur ac, vestiosite Duis mollis, est non commodo luctus
										…<a href="widgets.html" class="read-more">More</a></p>
									</div>
					        	<?php $ct++; endforeach; 
								wp_reset_postdata();?>
					        </div>
					        <?php
					    }
					    
					}
					?>
				</div>

				<hr class="style1"/>
				<div class="icon-info-box clearfix">
					<div class="col-1-5 boxy">
						<i class="fa fa-twitter-square"></i>
						<div class="inner-box">John has been president and head coach for around 8 years. His dedication to our young club members is both generous and inspiring to watch.</div>
					</div>
					<div class="col-1-5 boxy">
						<i class="fa fa-twitter-square"></i>
						<div class="inner-box">John has been president and head coach for around 8 years. His dedication to our young club members is both generous and inspiring to watch.</div>
					</div>
					<div class="col-1-5 boxy">
						<i class="fa fa-twitter-square"></i>
						<div class="inner-box">John has been president and head coach for around 8 years. His dedication to our young club members is both generous and inspiring to watch.</div>
					</div>
					<div class="col-1-5 boxy">
						<i class="fa fa-twitter-square"></i>
						<div class="inner-box">John has been president and head coach for around 8 years. His dedication to our young club members is both generous and inspiring to watch.</div>
					</div>
					<div class="col-1-5 boxy last">
						<i class="fa fa-twitter-square"></i>
						<div class="inner-box">John has been president and head coach for around 8 years. His dedication to our young club members is both generous and inspiring to watch.</div>
					</div>
				</div>
				<hr class="style1" />

				<div class="information-box-accordion">
					
						<ul class="toggle">
							<!-- accordion -->
						    <li>
						      <a href='#' class='toggle-btn'>Warranty</a>
						      <div class='toggle-content'>
						      	<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						      </div>
						    </li>
						    
						    <!-- accordion -->
						    <li>
						      <a href='#' class='toggle-btn'>Price & Delivery</a>
						      <div class='toggle-content'>
							      <p>Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis.</p>
						      </div>
						    </li>
						    
						    <!-- accordion -->
						    <li>
						      <a href='#' class='toggle-btn'>Technical Info</a>
						      <div class='toggle-content'>
						      	<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
						      </div>
						    </li>
						</ul>
				</div>


				</div>
			</div>
		<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
