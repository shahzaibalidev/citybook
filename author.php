<?php get_header(); ?>


 <!-- wrapper -->
<div id="wrapper">
    <!--Content -->
    <div class="content">
        <!--section -->
        <section class="parallax-section small-par color-bg">
            <div class="shapes-bg-big"></div>
            <div class="container">
                <div class="section-title center-align">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listing</a><span>User profile</span></div>
                    <h2><span>User : <?php the_author_meta( 'display_name' ); ?></span></h2>
                    <div class="user-profile-avatar"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""></div>
                    <div class="user-profile-rating clearfix">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                            <span>(37 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sec-link">
                <div class="container"><a href="#sec1" class="custom-scroll-link">About user</a></div>
            </div>
        </section>
        <!-- section end -->
        <!--section -->
        <section class="gray-bg" id="sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-item fl-wrap">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>About <span> <?php the_author_meta( 'display_name' ); ?></span></h3>
                            </div>
                            <p><?php the_author_meta('description'); ?></p>
                            <a href="#" class="btn transparent-btn float-btn">Visit Website <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="listsearch-header fl-wrap">
                            <h3><?php the_author_meta( 'display_name' ); ?>'s Listings</h3>
                            <div class="listing-view-layout">
                                <ul>
                                    <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                    <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- list-main-wrap-->
                        <div class="list-main-wrap fl-wrap card-listing ">
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/8.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Restourants</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Luxury Restourant</a></h3>
                                        <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                <span>(7 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/1.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>15</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Event</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/2.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Event In City Mol</a></h3>
                                        <p>Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                <span>(17 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <div class="clearfix"></div>
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/4.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Restourants</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/3.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Adam Koncy</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Luxury Restourant</a></h3>
                                        <p>Sed non neque elit. Sed ut imperdie.</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                <span>(7 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/20.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>47</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Fitness</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/4.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Gym in the Center</a></h3>
                                        <p>Mauris in erat justo. Nullam ac urna eu. </p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                <span>(23 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <div class="clearfix"></div>
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/5.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>3</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Shops</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Shop in Boutique Zone</a></h3>
                                        <p>Morbiaccumsan ipsum velit tincidunt . </p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                <span>(6 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="images/all/23.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>35</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="listing.html">Hotels</a>
                                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/6.jpg" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Luxary Hotel</a></h3>
                                        <p>Lorem ipsum gravida nibh vel velit.</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                <span>(11 reviews)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                            <!-- pagination-->
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#" class="current-page">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                        <!-- list-main-wrap end-->
                    </div>
                    <!--box-widget-wrap -->
                    <div class="col-md-4">
                        <div class="fl-wrap">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>User Contacts : </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-content">
                                        <div class="list-author-widget-contacts list-item-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-widget-social">
                                            <ul>
                                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="box-widget-item-header">
                                    <h3>Get in Touch : </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-content">
                                        <form id="add-comment" class="add-comment custom-form">
                                            <fieldset>
                                                <label><i class="fa fa-user-o"></i></label>
                                                <input type="text" placeholder="Your Name *" value=""/>
                                                <div class="clearfix"></div>
                                                <label><i class="fa fa-envelope-o"></i>  </label>
                                                <input type="text" placeholder="Email Address*" value=""/>
                                                <textarea cols="40" rows="3" placeholder="Your message:"></textarea>
                                            </fieldset>
                                            <button class="btn  big-btn  color-bg flat-btn">Send Message<i class="fa fa-angle-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                        </div>
                    </div>
                    <!--box-widget-wrap end-->
                </div>
            </div>
        </section>
        <!-- section end -->
        <div class="limit-box fl-wrap"></div>
        <!--section -->
        <section class="gradient-bg">
            <div class="cirle-bg">
                <div class="bg" data-bg="images/bg/circle.png"></div>
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
        <!-- section end -->
    </div>
    <!-- content end -->
</div>
<!-- /wrapper -->



<?php get_footer(); ?>