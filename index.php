<?php get_header(); ?>
<!-- wrapper -->	
<div id="wrapper">
    <!-- content -->
    <div class="content">
        <!-- Titale section -->
        <section class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/bg/3.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title center-align">
                    <h2><span>Our News - Blog</span></h2>
                    <div class="breadcrumbs fl-wrap"><a href="<?php echo site_url(); ?>">Home</a><span>News</span></div>
                    <!-- <span class="section-separator"></span> -->
                </div>
            </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>
            </div>
        </section>
        <!--Titale section end -->
        <!-- section -->   
        <section class="gray-section" id="sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                            <?php if(have_posts()){ while(have_posts()){the_post(); ?>
                            <!-- article> --> 
                            <article>
                                <div class="list-single-main-media fl-wrap">
                                   <?php 
                                    $post_url = get_the_permalink();
                                    $images = get_post_meta($post->ID, 'fslider_id', true);
                                    $imageq = sizeof($images);

                                    if($imageq == 1){
                                        echo '<a href="'.$post_url.'">';

                                        foreach ($images as $image) {
                                          echo wp_get_attachment_image($image, array('579', '450'));
                                        }
                                        
                                        echo '</a>';
                                    }else{

                                      echo '<div class="single-slider-wrapper fl-wrap">
                                              <div class="single-slider fl-wrap">';

                                              foreach ($images as $image) {
                                                echo '<a href="'.$post_url.'">';
                                                echo wp_get_attachment_image($image, array('579', '450'));
                                                echo '</a>';
                                              }

                                        echo '</div>
                                              <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                              <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                            </div>';

                                    } ?>
                                        
                                </div>
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                    <p><?php echo wp_html_excerpt(get_the_excerpt(), 350, '...'); ?></p>
                                    <div class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><img src="<?php //echo get_avatar_url(get_the_author_meta('ID')); ?><?php echo getuserpic(get_the_author_meta('ID')); ?>" alt=""><span>By , <?php the_author_meta( 'display_name' ); ?></span></a></div>
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
                                    <span class="fw-separator"></span>
                                    <a href="<?php the_permalink(); ?>" class="btn transparent-btn float-btn">Read more<i class="fa fa-eye"></i></a>
                                </div>
                            </article>
                            <span class="section-separator"></span>
                            <!-- article end -->
                            <?php } } ?>
                            <!-- pagination -->
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#" class="current-page">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- pagination end -->
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
                                        <span class="list-author-widget-link"><a href="author-single.html">Alisa Noory</a></span>
                                        <img src="images/avatar/4.jpg" alt=""> 
                                    </div>
                                    <div class="box-widget-content">
                                        <div class="list-author-widget-text">
                                            <div class="list-author-widget-contacts">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
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
        <!-- section end -->
        <!-- Join us section -->
        <div class="limit-box fl-wrap"></div>
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
        <!-- Join us section end -->
    </div>
    <!-- content end -->
</div>
<!-- wrapper end -->
<?php get_footer(); ?>