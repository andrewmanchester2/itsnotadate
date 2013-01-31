<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
            <?php
			 
			$image1 = get_option('tz_slider_1'); 
			$image2 = get_option('tz_slider_2'); 
			$image3 = get_option('tz_slider_3'); 
			$image4 = get_option('tz_slider_4'); 
			$image5 = get_option('tz_slider_5'); 
			
			$imageUrl1 = get_option('tz_slider_url_1'); 
			$imageUrl2 = get_option('tz_slider_url_2'); 
			$imageUrl3 = get_option('tz_slider_url_3'); 
			$imageUrl4 = get_option('tz_slider_url_4'); 
			$imageUrl5 = get_option('tz_slider_url_5'); 
			
			?>
            
            <!-- Addded v1.1 -->
            <?php if(get_option('tz_enable_welcome_message') == 'true') : ?>
            
			<!--BEGIN #home-message -->
            <div id="home-message">
            
            	<h2><?php echo stripslashes(get_option('tz_home_message')); ?></h2>
            
            <!--END #home-message -->
            </div>
            
            <?php endif; ?>
            
            <?php $sliderEnabled = get_option('tz_enable_slider'); ?>
            <?php if($sliderEnabled == 'true') : ?>
            
            <!--BEGIN #slider .clearfix -->
            <div id="slider" class="clearfix">
                
                <!--BEGIN .slides_container -->
                <div class="slides_container">
                   	
                    
                    <?php if($image1 != '') : ?>
                    <div>
                    	<?php if($imageUrl1 != '') : ?>
                    	<a href="<?php echo $imageUrl1; ?>"><img id="slider-image-1" src="<?php echo $image1; ?>" alt="<?php bloginfo(''); ?>" /></a>
                        <?php else: ?>
                        <img id="slider-image-1" src="<?php echo $image1 ?>" alt="<?php bloginfo(''); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($image2 != '') : ?>
                    <div>
                    	<?php if($imageUrl2 != '') : ?>
                    	<a href="<?php echo $imageUrl2; ?>"><img id="slider-image-2" src="<?php echo $image2; ?>" alt="<?php bloginfo(''); ?>" /></a>
                        <?php else: ?>
                        <img id="slider-image-2" src="<?php echo $image2 ?>" alt="<?php bloginfo(''); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($image3 != '') : ?>
                    <div>
                    	<?php if($imageUrl3 != '') : ?>
                    	<a href="<?php echo $imageUrl3; ?>"><img id="slider-image-3" src="<?php echo $image3; ?>" alt="<?php bloginfo(''); ?>" /></a>
                        <?php else: ?>
                        <img id="slider-image-3" src="<?php echo $image3 ?>" alt="<?php bloginfo(''); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($image4 != '') : ?>
                    <div>
                    	<?php if($imageUrl4 != '') : ?>
                    	<a href="<?php echo $imageUrl4; ?>"><img id="slider-image-4" src="<?php echo $image4; ?>" alt="<?php bloginfo(''); ?>" /></a>
                        <?php else: ?>
                        <img id="slider-image-4" src="<?php echo $image4 ?>" alt="<?php bloginfo(''); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($image5 != '') : ?>
                    <div>
                    	<?php if($imageUrl5 != '') : ?>
                    	<a href="<?php echo $imageUrl5; ?>"><img id="slider-image-5" src="<?php echo $image5; ?>" alt="<?php bloginfo(''); ?>" /></a>
                        <?php else: ?>
                        <img id="slider-image-5" src="<?php echo $image5 ?>" alt="<?php bloginfo(''); ?>" />
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                
                <!--END .slides_container -->
                </div>
                
                <?php if($image2 != '') : ?>
                <!--BEGIN .slides-nav -->
                <div class="slides-nav">
                
                    <a href="#" class="prev">Previous Slide</a>
                    <a href="#" class="next">Next Slide</a>
                
                <!--END .slides-nav -->
            	</div>
                
                <!--BEGIN .pagination -->
                <ul class="pagination">
                	
                    <?php if($image2 != '') : ?>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <?php endif; ?>
                    <?php if($image3 != '') : ?>
                    <li><a href="#"></a></li>
                    <?php endif; ?>
                    <?php if($image4 != '') : ?>
                    <li><a href="#"></a></li>
                    <?php endif; ?>
                    <?php if($image5 != '') : ?>
                    <li><a href="#"></a></li>
                    <?php endif; ?>
                    
                <!--END .pagination -->
                </ul>
                <?php endif; ?>
                
            <!--END #home-slider -->
            </div>
            
            <?php endif; ?>
            
            <?php $portfolioEnable = get_option('tz_recent_portfolio'); ?>
            <?php if($portfolioEnable == 'true') : ?>
            <!--BEGIN #recent-portfolio  .home-recent -->
            <div id="recent-portfolio" class="home-recent clearfix <?php if($sliderEnabled == 'false') : ?>no-border<?php endif; ?>">
            	
                
             	
                <!--BEGIN .sidebar -->
            	<div class="sidebar">

                    <h3><?php echo stripslashes(get_option('tz_recent_title')); ?></h3>
                    
                    <p><?php echo stripslashes(get_option('tz_recent_description')); ?></p>
                    
                    <p><a class="droid-italic" href="<?php echo get_permalink( get_option('tz_blog_page') ); ?>"><?php _e('Read the Blog &rarr;', 'framework'); ?></a></p>
                   
                <!--END .sidebar -->
                </div>
                
                <!--BEGIN .recent-wrap -->
                <div class="recent-wrap">

						<?php 
						
						//Set the starter count
						$start = 3;
						//Set the finish count
						$finish = 1;
						
                        $query = new WP_Query();
                        $query->query('posts_per_page='.get_option('tz_recent_number'));
						
						//Get the total amount of posts
						$post_count = $query->post_count;
						
                        while ($query->have_posts()) : $query->the_post(); 
						
                        ?>
                        
                        <?php if(is_multiple($start, 3)) : /* if the start count is a multiple of 3 */ ?>
                        <!--BEGIN .hentry-wrap -->
                    	<div class="hentry-wrap clearfix"> 
                        <?php endif; ?>
                    
                            <!--BEGIN .hentry -->
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            
                            <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
  <div class="post-thumb">
    <a title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-post'); /* post thumbnail settings configured in functions.php */ ?></a>
  </div>
<?php endif; ?>
                                                
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
                                
                                <!--BEGIN .entry-meta .entry-header-->
                                <div class="entry-meta entry-header">
                                    <span class="published"><?php the_time( get_option('date_format') ); ?></span>
                                    <span class="meta-sep">&middot;</span>
                                    <span class="comment-count"><?php comments_popup_link(__('No Comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></span>
                                    <?php edit_post_link( __('edit', 'framework'), '<span class="edit-post">[', ']</span>' ); ?>
                                <!--END .entry-meta entry-header -->
                                </div>
                        
                                <!--BEGIN .entry-content -->
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                <!--END .entry-content -->
                                </div>
                            
                            <!--END .hentry-->  
                            </div>
                        
                        <?php if(is_multiple($finish, 3) || $post_count == $finish) : /* if the finish count is a multiple of 3 or equals the total posts */  ?>
                        <!--END .hentry-wrap-->  
                    	</div>
                        <?php endif; ?>
                        
                        <?php
						$start++;
						$finish++;
						?>
                        
                        <?php endwhile; wp_reset_query(); ?>
                        
                <!--END .recent-wrap -->
                </div>
            
            <!--END #recent-posts .home-recent -->
            </div>
            
            <?php endif; ?>
            
            <div id="home-content">
                            <div id="home-content">
                
                <div id="img-buttons">
                    <div class="hm-button">
                        <a href="/locations"><img src="<?php bloginfo('template_url'); ?>/images/locations.png" alt="<?php wp_title(); ?>"></a>
                    </div>
                    <div class="hm-button">
                        <a href="/services"><img src="<?php bloginfo('template_url'); ?>/images/services.png"></a>
                    </div>
                    <div class="hm-button">
                        <a href="/conditions"><img src="<?php bloginfo('template_url'); ?>/images/conditions.png"></a>
                    </div>
                    <div class="hm-button-last">
                        <a href="/patient-center"><img src="<?php bloginfo('template_url'); ?>/images/patient_center.png"></a>
                    </div>
                    
                    
                </div>
            
			<!--BEGIN #primary .hfeed-->
			<div id="home-primary" class="hfeed">
                            
                          
            		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<!--BEGIN .hentry -->
				<div <?php post_class(); ?> id="post-home">	
                
					<!--BEGIN .clearfix -->

                                        
                    <div class="clearfix">		
    
                        <!--BEGIN .entry-content -->
                        <div class="entry-content">
                        
                            <?php the_content(); ?>
                            
                        <!--END .entry-content -->
                        </div>
                        
                    <!--END .clearfix -->
				    </div>     
                          
				<!--END .hentry-->  
				</div>

				<?php endwhile; ?>
                


			<?php else : ?>

				<!--BEGIN #post-0-->
				<div id="post-0" <?php post_class(); ?>>
				
					<h2 class="entry-title"><?php _e('Error 404 - Not Found', 'framework') ?></h2>
				
					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e("Sorry, but you are looking for something that isn't here.", "framework") ?></p>
					<!--END .entry-content-->
					</div>
				
				<!--END #post-0-->
				</div>

			<?php endif; ?>
			<!--END #primary .hfeed-->
                        <div id="home-widget-area">
                            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
                        </div>
			</div>
                        <div id="foot-items">
                            <div class="foot-form">
                                <h2>Contact Spine Care of San Antonio</h2><br/>
                        <?php echo do_shortcode(' [contact-form-7 id="233" title="Foot Contact Form"]'); ?>
                                </div>
                            <div class="foot-info">
                                <h2>Connect with us!</h2><br/>
                                <div class="connect-btns">
                                <div class="connect-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/images/mail-btn.png"> <span class="connect-text"><?php echo get_option('tz_email'); ?></span>
                                </div>
                                <div class="connect-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/images/phone-btn.png"> <span class="connect-text dynamic-phone-number"><?php echo get_option('tz_phone'); ?></span>
                                </div>
                                <div class="connect-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/images/fb-btn.png"> <span class="connect-text"><a href="http://www.facebook.com/pages/Spine-Care-of-San-Antonio/426657267355852" target="_blank" rel="nofollow">Like Us!</a></span>
                                </div>
                                <div class="connect-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/images/tw-btn.png"> <span class="connect-text"><a href="https://twitter.com/#!/SpineCareSA" target="_blank" rel="nofollow">Follow Us!</a></span>
                                </div>
                                </div>
                                
                            </div>
                                
                            </div>
                       
                        </div>
            
            
<?php get_footer(); ?>