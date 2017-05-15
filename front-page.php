<?php
/**
*	Template Name: Home
*/
?>

<?php get_header(); ?>

	<!-- main home content -->
	<div id="main-content" class="container-fluid">


		<!--INTRO-->
		<div class="row-fluid" id="intro-row">
			<div class="span12">
				<div class="intro-wrapper">
					<div class="intro-header text-center">
						<h3><?php the_field("intro_header", 4); ?></h3>
					</div>
					<div class="row-fluid">
						<div class="body-wrapper">
							<div class="span4 offset2">
								<div class="intro-who text-center">
									<h4><?php the_field("who_we_are_title", 4); ?></h4>
						      <p><?php the_field("who_we_are_content", 4); ?></p>
						  	</div>
							</div>
							<div class="span4">
								<div class="intro-what text-center">
									<h4><?php the_field("what_we_do_title", 4); ?></h4>
									<p><?php the_field("what_we_do_content", 4); ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="http://trilogybenefits.com/contact-us/" class="btn btn-primary btn-large">Contact Us To Get Started!</a>
					</div>
				</div>
			</div>
		</div>

		<!--MARKET-->
		<div class="row-fluid" id="market-row">				
		  <div class="span12">
		  	<div class="market-wrapper">
			  	<div class="market-header text-center">
			  		<h3><?php the_field("main_image_header", 4); ?></h3>
			  	</div>
			  	<div class="market">
			  		<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/main-image3.png" id="main-image" alt="#">
			  		<div class="TB-employer text-center">
			  			<p><?php the_field("main_image_content_employer_1", 4); ?></p>
			  			<p><?php the_field("main_image_content_employer_2", 4); ?></p>
			  		</div>
			  		<div class="TB-employees text-center">
			  			<p><?php the_field("main_image_content_employees_1", 4); ?></p>
			  			<p><?php the_field("main_image_content_employees_2", 4); ?></p>
			  		</div>
			  	</div>
			  	<div class="market-footer text-center">
			  		<p><?php the_field("main_image_footer", 4); ?></p>
			  	</div>
		  	</div>
		  </div>			
		</div>

		<!--VIDEO-->
		<div id="vid-row" class="row-fluid">				
		  <div class="span12">
		  	<div class="vid-wrapper">
			  	<div class="vid-header text-center">
			  		<h3><?php the_field("video_header", 4); ?></h3>
			  	</div>
			  	<div class="vid">
			  		<iframe id="youtube-video" width="640" height="360" src="//www.youtube.com/embed/JZkk6ueZt-U" frameborder="0" allowfullscreen></iframe>
			  	</div>
		  	</div>
		  </div>			
		</div>

		<!--THUMBNAIL/ACCORDION SERVICES-->
    <div class="row-fluid">
			<div class="span12">
				<div class="accordion" id="learnmore">
					<ul class="thumbnails">				
						<li class="span4">						
							<div class="accordion-group">
	    					<div class="accordion-heading">
	    						<div class="thumbnail accordion-toggle" data-toggle="collapse" data-parent="#learnmore" href="#legislative">
										<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/puzzle-legislative-small11.png" alt="#">
										<div class="caption text-center">
											<p><?php the_field("puzzle_1_thumbnail_content", 4); ?></p>
											<p><a class="btn btn-success">learn more</a></p>
										</div>
									</div>
	    					</div>
	    					<div id="legislative" class="accordion-body collapse accordion-toggle" data-toggle="collapse" data-target="#legislative">
	    						<div class="accordion-inner text-center">
	    							<h4>Exchange Notification</h4>
	    							<p>...regarding the new marketplace option effective January 1, 2014. This notification must be sent to all employees whether full-time, part-time, and regardless of whether or not he/she is enrolled in your group medical plan. Some employees may be eligible for government subsidies for themselves and their family members. The employee is not allowed to have a government subsidy in the marketplace and also receive the employer contribution.</p>
	    							<h4>Large Group Employer Mandate Penalties</h4>
	    							<p>Penalties will not be assessed until 2015. A year of reprieve. However, Health Care Reform legislation is still enforced beginning January 1, 2014.</p>
	    						</div>
	    					</div>
	    				</div>    				
						</li>
						<li class="span4">
							<div class="accordion-group">
								<div class="accordion-heading">
									<div class="thumbnail accordion-toggle" data-toggle="collapse" data-parent="#learnmore" href="#groupservices">
										<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/puzzle-group-services-small11.png" alt="#">
										<div class="caption text-center">
											<p>Whether it is medical, dental, or a multitude of ancillary/disability benefit plans, let our sales team put together a comprehensive benefit package customized to meet your group&rsquo;s needs...</p>
											<p><a class="btn btn-success">learn more</a></p>
										</div>
									</div>
								</div>
								<div id="groupservices" class="accordion-body collapse accordion-toggle">
		    					<div class="accordion-inner text-center">
		    						<div class="sm-group">
			    						<div data-toggle="collapse" data-target="#groupservices">
				    						<h3>Small Group</h3>
				    						<p>These groups are 2-49 employees.</p>
				    						<p>With changes on the horizon in Health Care Reform rules, it is time to evaluate your options to see what is best for you, the employer, and your employees to be more cost effective.</p>
				    						<h4>Health Care Reform Training</h4>
			    						</div>
			    						<div><a id="list1" class="btn btn-info" href="#small-list" role="button" data-toggle="modal">Small Group Checklist</a></div>
			    					</div>
			    					<div class="lg-group">
			    						<div data-toggle="collapse" data-target="#groupservices">
				    						<h3>Large Group</h3>
				    						<p>Employers with 50 or more employees.</p>
				    						<p>Large groups tend to have more options in the insurance market, &ldquo;bundled&rdquo; and &ldquo;un-bundled&rdquo; partially self-funded options, as well as customized or &ldquo;shelf&rdquo; fully-insured plans should be viewed side-by-side to fully evaluate the risk, the plan design, and ultimately, the goal of the employer to meet the needs of its employees.</p>
				    						<h4>Health Care Reform Training</h4>
			    						</div>
			    						<div><a class="btn btn-info" href="#large-list" role="button" data-toggle="modal">Large Group Checklist</a></div>
			    						<div data-toggle="collapse" data-target="#groupservices">
				    						<h4>Worksite Voluntary</h4>
				    						<p>With the high cost of health care, employers are looking for solutions for their employees. Employees have appreciated being offered voluntary benefits they can pay by payroll deduction.</p>
			    						</div>
			    					</div>
		    						<p><a href="http://trilogybenefits.com/contact-us/" class="btn btn-primary btn-large">Contact Us To Get Started</a></p>
		    					</div>
		    				</div>
		    			</div>
						</li>
						<li class="span4">
							<div class="accordion-group" id="individual">
								<div class="accordion-heading">
									<div class="thumbnail accordion-toggle">
										<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/puzzle-individual-services-small11.png" alt="#" data-toggle="collapse" data-parent="#learnmore" href="#indservices">
										<div class="caption text-center">
											<p data-toggle="collapse" data-parent="#learnmore" href="#indservices">Are you adequately protected? Consider these common concerns...</p>
											<p><a class="btn btn-success" data-toggle="collapse" data-parent="#learnmore" href="#indservices">learn more</a>	<a href="http://trilogybenefits.com/contact-us/" class="btn btn-warning">get a quote</a></p>
										</div>
									</div>
								</div>
								<div id="indservices" class="accordion-body collapse accordion-toggle" data-toggle="collapse" data-target="#indservices">
	    						<div class="accordion-inner text-center">
    								<h4>Medical/Dental</h4>
    								<p>Battling high health care costs is challenging. Too often we delay health care visits because of increasing costs. With Trilogy Benefits to assist you, you can afford the preventive health care along with the plan options you need to take care of your family needs. Explore our affordable dental insurance plans designed to meet your oral health needs without breaking your pocketbook.</p>
    								<h4>Disability</h4>
    								<p>What is your largest asset? Your paycheck. With health care keeping the population healthier longer, there is a 1 in 3 chance of a disability keeping you out of the workplace. How would you take care of your family with no paycheck? Disability insurance assists if this happens.</p>
    								<h4>Term Life</h4>
    								<p>Trilogy Benefits will help you decide what level of coverage you need and which type fits your needs. We&rsquo;ll provide you with impartial advice to help you make an educated decision when you choose a policy.</p>
    								<h4>Long-Term Care</h4>
    								<p>Two out of five Americans will eventually need long-term care at some point in their lives. The good news is that you will live longer than ever. The bad news is that you are going to live longer than ever. Long-term care insurance may not be right for every situation, but you should know your options. Having long-term care insurance alleviates the pressure on a spouse or family member to be the primary caregiver. Let us assist with options on how a plan would best fit your situation.</p>
	    						</div>
	    					</div>
	    				</div>
						</li>					
					</ul>
				</div>
			</div><!--span12-->
		</div><!--thumbnail/accordion row-->

		<!--TESTIMONIALS-->
		<div class="row-fluid hidden-phone">
			<div class="span12">
				<div class="testimonial-wrapper">
					<div class="testimonial-header text-center">
						<h3>What people are saying about us</h3>
						<!-- <div class="divider"></div> -->
					</div>
					<!--CAROUSEL SLIDER-->
	  			<div id="testimonials" class="carousel slide"><!--main div for slider-->
	  				<div class="carousel-inner"><!--outer container-->

	  					<?php $new_query = new WP_Query($args=array( 'posts_per_page' => 1, 'orderby' => 'title', 'order' => 'ASC', 'post_type' => 'testimonial' ));
	  						while($new_query->have_posts()) : $new_query->the_post();
	  					?>

	  					<div class="item active"><!--inner container-->
	  						<div class="carousel-testimonial text-center">
	  							<p class="quote"><?php the_field("testimonial_quote"); ?></p>
	  							<div class="author text-center">
	  								<p class="author-dash">&mdash;</p>
	  								<p class="author-info"><?php the_field("testimonial_author"); ?><br /><?php the_field("author_location"); ?></p>
	  								<p class="author-dash">&mdash;</p>
	  							</div>
	  						</div>
	  					</div>

	  					<?php endwhile; ?>
	  					<?php wp_reset_postdata(); ?>

	  					<?php $new_query = new WP_Query( $args=array( 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'ASC', 'offset'=> 1, 'post_type' => 'testimonial' ) );
	  						while($new_query->have_posts()) : $new_query->the_post();
	  					?>

	  					<div class="item"><!--inner container-->
	  						<div class="carousel-testimonial text-center">
	  							<p class="quote"><?php the_field("testimonial_quote"); ?></p>
	  							<div class="author text-center">
	  								<p class="author-dash">&mdash;</p>
	  								<p class="author-info"><?php the_field("testimonial_author"); ?><br /><?php the_field("author_location"); ?></p>
	  								<p class="author-dash">&mdash;</p>
	  							</div>
	  						</div>
	  					</div>

	  					<?php endwhile; ?>
	  					<?php wp_reset_postdata(); ?>

	  				</div>
	  				<a class="left carousel-control" href="#testimonials" data-slide="prev">&lsaquo;</a>
	  				<a class="right carousel-control" href="#testimonials" data-slide="next">&rsaquo;</a>
	  			</div><!--CAROUSEL SLIDER-->
    		</div>
			</div>
		</div>

		<!--LOCALLY OWNED-->
		<div class="row-fluid">
			<div class="span12">
				<div class="local text-center">
					<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/bigstock-denver-skyline-gimp.png" alt="#" id="gimp">

					<div class="local-wrap">
						<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/Colorado-Flag-small1.png" alt="#" class="local-content flag">
						<p class="local-content">Trilogy Benefits is locally owned and based in Colorado.</p>
						<img src="http://trilogybenefits.com/wp-content/uploads/2013/08/Colorado-Flag-small1.png" alt="#" class="local-content flag">
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- end of main home content -->

<?php get_footer(); ?>