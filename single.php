<?php
get_header();
setPostViews(get_the_ID());

	if(have_posts()){
		while(have_posts()){
			the_post();
		}
	}
	

?>

            <!-- wrapper -->	
            <div id="wrapper">
                <!-- content -->
                <div class="content">
                    <!--section -->
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php the_post_thumbnail_url(); ?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span><?php the_title(); ?></span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="<?php echo site_url(); ?>">Home</a><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">News</a><span><?php the_title(); ?></span></div>
                                <!-- <span class="section-separator"></span> -->
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->   
                    <section class="gray-section" id="sec1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                        <!-- article> --> 
                                        <article>
                                            <div class="list-single-main-media fl-wrap">
                                                <?php
                                                	$post_url = get_the_permalink();
												    $images = get_post_meta($post->ID, 'fslider_id', true);
												    $imageq = sizeof($images);

												    if($imageq == 1){
												        
												        foreach ($images as $image) {
												          echo wp_get_attachment_image($image, array('579', '450'));
												        }
												        
												        
												    }else{

												      echo '<div class="single-slider-wrapper fl-wrap">
												              <div class="single-slider fl-wrap">';

												              foreach ($images as $image) {
												                
												                echo wp_get_attachment_image($image, array('579', '450'));
												          
												              }

												        echo '</div>
												              <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
												              <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
												            </div>';

												    } ?>
                                            </div>
                                            <div class="list-single-main-item fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                                <p><?php the_content(); ?></p>
                                                <div class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""><span>By , <?php the_author_meta( 'display_name' ); ?></span></a></div>
                                                <div class="post-opt">
                                                    <ul>
			                                            <li><i class="fa fa-calendar-check-o"></i> <span><?php echo get_the_date('d F Y'); ?></span></li>
			                                            <li><i class="fa fa-eye"></i> <span><?php echo getPostViews(get_the_ID()); ?></span></li>
			                                            <li><i class="fa fa-tags"></i> <?php the_category(' , '); ?> </li>
			                                        </ul>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Tags</h3>
                                                </div>
                                                <div class="list-single-tags tags-stylwrap blog-tags">
                                                    <?php the_tags( '','',''); ?>
                                                </div>
                                                <div class="share-holder hid-share">
                                                    <div class="showshare"><span>Share </span><i class="fa fa-share"></i></div>
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <div class="post-nav fl-wrap">
                                                	<?php 
													if($prevPost) {?>
													<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="post-link prev-post-link"><i class="fa fa-angle-left"></i>Prev <span class="clearfix">The Sign of Experience</span></a>
                                                    <?php } $nextPost = get_next_post();
													if($nextPost){ ?>
                                                    <a href="#" class="post-link next-post-link"><i class="fa fa-angle-right"></i>Next<span class="clearfix">Dedicated to Results</span></a>
                                                	<?php } ?>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- article end -->       
                                        <span class="section-separator"></span>
                                        <!-- list-single-main-item -->   
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Author</h3>
                                        </div>
                                        <div class="post-author post-author-block clearfix">
                                            <div class="author-img">
                                                <img  src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"  alt=""/> 
                                            </div>
                                            <div class="author-content">
                                                <h5><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php the_author_meta( 'display_name' ); ?></a></h5>
                                                <p><?php the_author_meta('description'); ?></p>
                                                <div class="author-social">
                                                    <ul>
                                                        <li><a title="Follow on Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a title="Like on Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a title="Circle on Google Plus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a title="Be Friend on Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a title="Follow on Instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Comments -  <span> 3 </span></h3>
                                            </div>
                                            <div class="reviews-comments-wrap">
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="images/avatar/1.jpg" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <a href="#" class="new-dashboard-item">Reply</a>
                                                        <h4><a href="#">Jessie Manrty</a></h4>
                                                        <div class="clearfix"></div>
                                                        <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->  
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item reply-comment-item ">
                                                    <div class="review-comments-avatar">
                                                        <img src="images/avatar/2.jpg" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <a href="#" class="new-dashboard-item">Reply</a>
                                                        <h4><a href="#">Mark Rose</a></h4>
                                                        <div class="clearfix"></div>
                                                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end--> 
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="images/avatar/3.jpg" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <a href="#" class="new-dashboard-item">Reply</a>
                                                        <h4><a href="#">Adam Koncy</a></h4>
                                                        <div class="clearfix"></div>
                                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->                                                                  
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->   
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec5">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Add Comment</h3>
                                            </div>
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
                                                <!-- Review Comment -->
                                                <form id="add-comment" class="add-comment custom-form">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><i class="fa fa-user-o"></i></label>
                                                                <input type="text" placeholder="Your Name *" value=""/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><i class="fa fa-envelope-o"></i>  </label>
                                                                <input type="text" placeholder="Email Address*" value=""/>
                                                            </div>
                                                        </div>
                                                        <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                    </fieldset>
                                                    <button class="btn  big-btn  color-bg flat-btn">Submit Comment <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->                                
                                    </div>
                                </div>
                                <!--box-widget-wrap -->
                                <div class="col-md-4">
                                    <div class="box-widget-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Search In blog : </h3>
                                            </div>
                                            <div class="box-widget search-widget">
                                                <form action="#" class="fl-wrap">
                                                    <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->  
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>About Athor : </h3>
                                            </div>
                                            <div class="box-widget list-author-widget">
                                                <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                                    <span class="list-author-widget-link"><?php the_author_posts_link(); ?></span>
                                                    <img src="<?php  echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""> 
                                                </div>
                                                <div class="box-widget-content">
                                                    <div class="list-author-widget-text">
                                                        <div class="list-author-widget-contacts">
                                                            <p><?php the_author_meta('description'); ?></p>
                                                        </div>
                                                        <div class="list-widget-social">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Popular posts : </h3>
                                            </div>
                                            <div class="box-widget widget-posts blog-widgets">
                                                <div class="box-widget-content">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="#" title="">Cafe "Lollipop"</a>
                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg"  alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="#" title=""> Apartment in the Center</a>
                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg"  alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="#" title="">Event in City Mol</a>
                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a href="#"  class="widget-posts-img"><img src="images/all/4.jpg"  alt=""></a>
                                                            <div class="widget-posts-descr">
                                                                <a href="#" title="">Event in City Mol</a>
                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->     
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Tags: </h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#">Event</a>
                                                <a href="#">Design</a>
                                                <a href="#">Photography</a>
                                                <a href="#">Trends</a>
                                                <a href="#">Video</a>
                                                <a href="#">News</a>                                                                               
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->     
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Our Instagram : </h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="jr-insta-thumb">
                                                        <ul>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/1.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/2.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/3.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/4.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/5.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><img src="images/instagram/6.jpg" alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a class="widget-posts-link" href="#" target="_blank">Follow us<span><i class="fa fa-angle-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                       
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Categories : </h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <ul class="cat-item">
                                                        <li><a href="#">Standard</a> <span>(3)</span></li>
                                                        <li><a href="#">Video</a> <span>(6) </span></li>
                                                        <li><a href="#">Gallery</a> <span>(12) </span></li>
                                                        <li><a href="#">Quotes</a> <span>(4)</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                    
                                    </div>
                                </div>
                                <!--box-widget-wrap end -->
                            </div>
                        </div>
                    </section>
                    <!--section end -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end -->
                </div>
                <!--content end --> 
            </div>
            <!-- wrapper end -->
<?php get_footer(); ?>