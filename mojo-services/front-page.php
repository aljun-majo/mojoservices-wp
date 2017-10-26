<?php
/**
 * The template file for front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mojo_Services
 */
?>
<!doctype html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Mojo Service | Demo and Dummy Only</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

  </head>
  <body>

    <header>

      <div class="top-bar-line"></div>

      
          <div class="container">
            <section class="visible-xs">
                <div class="top-bar-mobile row">

                  <div class="mobile-navigation-wrapper">
                    <ul>
                        <li>
                            <a href="index.html" title="Home">
                              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
                              Home
                            </a>
                        </li> 
                        <li>
                            <a href="gallery.html" title="Gallery">
                              <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                              Gallery
                            </a>
                        </li>
                        <li>                          
                            <a href="tel:1234567890">
                              <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 
                              1234567890
                            </a>
                        </li>
                    </ul>
                  </div><!-- .mobile-navigation-wrapper -->


                    <div class="toggle-wrapper">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                           <span class="glyphicon glyphicon-menu-hamburger white-color font-size-24" aria-hidden="true"></span>
                          
                      </button>    
                          <!--    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'mojoservices' ); ?></button>    -->           
                    </div><!-- .toggle-wrapper -->                    



                </div><!--  .top-bar-mobile-->
            </section><!-- visible-xs -->

            <section class="nav-header row">
              <div class="logo-wrapper col-xs-12 col-sm-6 col-md-6">
                  <h1>
                      <a href="index.html" class="navbar-brand" title="Site logo">
                          <img src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/logo.png" alt="Mojo Services" class="img img-responsive">
                      </a>
                  </h1>
              </div><!-- .logo-wrapper -->

              <div class="social-media-wrapper col-xs-12 col-sm-6 col-md-6">
                  <nav class="social-navigation">
                    <div class="menu-social-link-container">
                        <ul id="menu-social-link" class="list-unstyled">
                          <li>
                            <a href="http://instagram.com" target="_blank">
                              <span class="screen-reader-text">instagram</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://twitter.com" target="_blank">
                              <span class="screen-reader-text">twitter</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://youtube.com" target="_blank">
                              <span class="screen-reader-text">youtube</span>
                            </a>
                          </li>
                           <li>
                            <a href="http://github.com" target="_blank">
                              <span class="screen-reader-text">github</span>
                            </a>
                          </li>
                        </ul>
                    </div><!-- .menu-social-link-container -->
                  </nav>
                  <div class="clearfix"></div>   
              </div><!-- .social-media-wrapper -->

            </section>
            
            <nav class="navigation main-menu collapse navbar-collapse" id="collapse" role="navigation">
              <ul class="text-center">
                  <li class="active"><a href="index.html" title="Home">Home</a></li> 
                  <li><a href="about.html" title="About">About</a></li>
                  <li><a href="gallery.html" title="Gallery">Gallery</a></li>
                  <li><a href="news.html" title="News">News</a></li>
                  <li><a href="contact.html" title="Contact">Contact</a></li>
              </ul>
            </nav><!-- #collapse -->

          </div><!-- #container -->    
           
     

    </header> 
    <div id="main">
      <main id="primary" class="container">
        <section id="hero-carousel">
          <div class="row">

			<div class="flexslider">
	          <?php

	          	//fetch all the posts inside My Sliders
	          	$args = array(
			        'post_type' => 'slider'
			    );
	          	$sliders_query = new WP_Query( $args );       

	          ?>
	          <ul class="slides">
		          <?php 


		          	if ( have_posts() ) : 

		          			while ( $sliders_query->have_posts() ) : $sliders_query->the_post(); 
		          ?>
			            
				              <li>
				                <img src="<?php the_field('upload_slider_image'); ?>" class="img img-responsive" />
				                  <div class="about-ac">
				                    <h3><?php the_field('slider_caption'); ?> <a href="<?php the_field('slider_url'); ?>" class="btn btn-lg btn-link white-color">more info <i class="fa fa-external-link " aria-hidden="true"></i></a></h3>

				                  </div>
				              </li>
				            <?php endwhile; ?>
			            
		            	 	<?php wp_reset_postdata(); ?>

					<?php else : ?>
						
						<p>There are no posts or pages here</p>

					<?php endif; ?>

				</ul>

	          </div><!-- .flexslider --> 

          </div><!-- .row -->  
        </section><!-- #hero-carousel -->

        <!-- #hero-content -->
        <section id="hero-content" class="layout-wrapper row">
            <div class="services col-sm-12 col-md-8">
               
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>

                <h4>In enim lectus, maximus scelerisque sem finibus, convallis lobortis felis. Etiam non lacus ante. Etiam sed sodales enim. Maecenas id justo lacus. Donec ligula erat, volutpat ac fermentum sit amet, euismod quis ligula.</h4> 

                <p>Ut sodales lacinia lectus, in fermentum ex hendrerit sed. Cras mollis ullamcorper tortor vitae malesuada. Integer commodo risus arcu. Proin felis dolor, iaculis in sem tempor, facilisis iaculis urna. Pellentesque sed fermentum nibh. Vestibulum tempus ipsum in pretium porttitor. Nullam pellentesque, mauris at consectetur dictum, leo erat vehicula risus, fermentum rutrum est tortor faucibus urna. Mauris sapien felis, vulputate varius dignissim eget, aliquet quis magna. Suspendisse commodo lacus nec lectus tempor, a congue ligula imperdiet. Etiam non dignissim leo. Suspendisse faucibus turpis nibh, non blandit lorem tempus tempus.</p>

                <div class="our-services">
                  <h4>Our Services:</h4>
                  <ul>
                     <li>Ut sodales lacinia lectus</li>
                      <li>Pellentesque sed fermentum nibh</li>
                      <li>Nullam pellentesque, mauris at consectetur</li>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Etiam non dignissim leo</li>                   
                  </ul>
                </div>
               
                <div class="get-quote">
                  <h4>Get a Quote</h4>
                  <p>Click the button below to work with us.</p>
                  <p><a href="#" class="btn btn-lg my-secondary-bgcolor white-color quote-btn btn-ui">Quote Link</a></p>                    
                </div>

            </div>
            <div id="frontpage-contact-form" class="contact-wrapper col-sm-12 col-md-4">
              <div class="contact-form">
                
                <h3 class="post-title">Contact Us</h3>
                <p>Please fill-out the form below more information.</p>
             

                <section>
                 <!-- <form method="" action=""> -->
                   <form action="#" class="form-horizontal mojo-contact" id="inline-validate">
                        <div class="form-group">                          
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                            </div>
                        </div>
                         <div class="form-group">                          
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Address *">
                            </div>
                        </div>
                        <div class="form-group">                          
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="tel" id="tel" placeholder="Phone Number *">
                            </div>
                        </div>
                        <div class="form-group">                          
                            <div class="col-sm-12">
                                <textarea name="message" id="message" class="form-control" rows="3" placeholder="Please type your question here"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-xs-12">
                                <button id="btn-message" type="Submit" class="button-submit btn-ui my-secondary-bgcolor white-color"><i class="icon-hand-right"></i> <span class="fa fa-sign-in" aria-hidden="true"></span> Submit</button>
                            </div>
                        </div>

                    </form>
                  <!--   </form> -->
                  </section>

              </div><!-- .contact-form -->
            </div><!-- #frontpage-contact-form -->
                

        </section>
        <!-- #END hero-content -->

        <section id="our-services" class="about-services layout-wrapper text-center row">
          <h3>Our Services</h3>
          <div class="col-md-4 col-sm-12">
              <div class="col-md-12 col-sm-4">
                <img src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/services/design.jpg" class="img img-responsive center-block" />  
              </div>
              <div class="col-md-12 col-sm-8">
                <h3>Web Design</h3>
                <p>Ut commodo, ligula non viverra congue, turpis ligula pharetra risus, ut sodales tellus nisl eget nisi. Pellentesque gravida nec ligula a ultrices. Morbi quis arcu sed nisl mattis aliquam.</p>
              </div>
          </div><!-- .col -->
          <div class="col-md-4 col-sm-12">
              <div class="col-md-12 col-sm-4">
                <img src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/services/develop.jpg" class="img img-responsive center-block" />  
              </div>
              <div class="col-md-12 col-sm-8">
                <h3>Web Development</h3>
                <p>Ut commodo, ligula non viverra congue, turpis ligula pharetra risus, ut sodales tellus nisl eget nisi. Pellentesque gravida nec ligula a ultrices. Morbi quis arcu sed nisl mattis aliquam.</p>
              </div>
          </div><!-- .col -->
          <div class="col-md-4 col-sm-12">
              <div class="col-md-12 col-sm-4">
                <img src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/services/video.jpg" class="img img-responsive center-block" />  
              </div>
              <div class="col-md-12 col-sm-8">
                <h3>Video Editing</h3>
                <p>Ut commodo, ligula non viverra congue, turpis ligula pharetra risus, ut sodales tellus nisl eget nisi. Pellentesque gravida nec ligula a ultrices. Morbi quis arcu sed nisl mattis aliquam.</p>
              </div>
          </div>  <!-- .col -->    
        </section><!-- #our-services -->

        <section id="testimonials" class="layout-wrapper row">
          <h3 class="text-center">Our Clients say</h3>
               
          <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial-carousel" data-slide-to="1"></li>
              <li data-target="#testimonial-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                 <div class="client-testimonial text-center">
                   <blockquote class="testimonial-bqoute">
                      <div class="testimonial_image_wrapper">
                          <img width="88" height="88" src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/sample-avatar.svg" class="img-circle client-image-avatar" alt="" sizes="100vw">
                      </div>    
                            
                      <div class="testimonial_body">
                            <p>ICras mollis ullamcorper tortor vitae malesuada. Integer commodo risus arcu. Proin felis dolor, iaculis in sem tempor, facilisis iaculis urna.</p>
                      </div>  
                                  
                      <p class="testimonial_author">
                        <cite>
                           <span class="testimonial-client">John Doe</span>
                          <span class="testimonial-position">Founder - www.SampleLink.com</span>
                        </cite>
                      </p>  
                          
                  </blockquote>  
                </div><!-- .client-testimonial -->
              </div><!-- .item -->

              <div class="item">
                 <div class="client-testimonial text-center">
                   <blockquote class="testimonial-bqoute">
                      <div class="testimonial_image_wrapper">
                          <img width="88" height="88" src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/sample-avatar.svg" class="img-circle client-image-avatar" alt="" sizes="100vw">
                      </div>    
                            
                      <div class="testimonial_body">
                            <p>Cras mollis ullamcorper tortor vitae malesuada. Integer commodo risus arcu. Proin felis dolor, iaculis in sem tempor, facilisis iaculis urna. Pellentesque sed fermentum nibh. </p>
                      </div>  
                                  
                      <p class="testimonial_author">
                        <cite>
                           <span class="testimonial-client">Jane Doe</span>
                          <span class="testimonial-position">WordSmith - www.SampleURLName.com</span>
                        </cite>
                      </p>  
                          
                  </blockquote>  
                </div><!-- .client-testimonial -->
              </div><!-- .item -->

              <div class="item">
                 <div class="client-testimonial text-center">
                   <blockquote class="testimonial-bqoute">
                      <div class="testimonial_image_wrapper">
                          <img width="88" height="88" src="http://www.wp-mojoservices.dev/wp-content/themes/mojo-services/images/sample-avatar.svg" class="img-circle client-image-avatar" alt="" sizes="100vw">
                      </div>    
                            
                      <div class="testimonial_body">
                            <p>Mauris sapien felis, vulputate varius dignissim eget, aliquet quis magna. Suspendisse commodo lacus nec lectus tempor, a congue ligula imperdiet.</p>
                      </div>  
                                  
                      <p class="testimonial_author">
                        <cite>
                           <span class="testimonial-client">Juan Dela Cruz</span>
                          <span class="testimonial-position">CEO - www.GoodTestLink.com</span>
                        </cite>
                      </p>  
                          
                  </blockquote>  
                </div><!-- .client-testimonial -->
              </div><!-- .item -->       

            </div><!-- .carousel-inner -->

            <!-- Controls -->
            <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- testimonial-carousel -->


        </section><!--#testimonials -->

      </main>
      <aside id="secondary" class="widget-wrapper">
          <div class="container">
              <div class="row">
                <div class="col-md-4 white-color">
                  <p>Checkout our social media account! mauris at consectetur dictum, leo erat vehicula risus, fermentum rutrum est tortor faucibus urna.</p>
                  <ul class="list-unstyled social-list social-navigation">
                      <li>
                          <a href="http://instagram.com" target="_blank">
                            <span class="screen-reader-text">instagram</span>
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/thegoodartisan" target="_blank">
                            <span class="screen-reader-text">twitter</span>
                          </a>
                        </li>
                        <li>
                          <a href="http://youtube.com" target="_blank">
                            <span class="screen-reader-text">youtube</span>
                          </a>
                        </li>
                         <li>
                          <a href="http://github.com" target="_blank">
                            <span class="screen-reader-text">github</span>
                          </a>
                        </li>
                  </ul>
                </div><!-- .col -->
                <div class="col-md-4">
                  <h3 class="white-color">Menu Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="#" class="white-color">Home</a></li>
                    <li><a href="#" class="white-color">About</a></li>
                    <li><a href="#" class="white-color">Gallery</a></li>
                    <li><a href="#" class="white-color">Contact</a></li>
                  </ul>              
                </div><!-- .col -->
                <div class="col-md-4">
                  <h3 class="white-color">Subscribe Our Newsletter</h3>
                  <p><small class="white-color">No spam period.</small></p>
                  <form action="" method="post">

                    <div class="input-group">
                       <input type="email" class="btn btn-lg btn-ui full-width" name="email" id="email" type="email" placeholder="Your Email" required>
                       <button class="btn btn-info btn-lg btn-ui full-width" type="submit">Sign up</button>
                    </div>


                  </form>
                </div><!-- .col -->
              </div><!-- row -->
          </div>
      </aside>
    </div><!-- #main -->
    <footer>
    	<section id="page-footer" class="container text-center">
             <p>&copy; 2017 <a href="http://thegoodartisan.com" title="Web Design and Development">TheGoodArtisan</a></p>        
    	</section>
    </footer>


	<?php wp_footer(); ?>
  </body>
</html>