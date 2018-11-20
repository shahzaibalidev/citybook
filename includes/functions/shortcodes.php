<?php
/*=============================== SHORTCODE ==========================================*/

// [bartag foo="foo-value"]
function bartag_func( $atts ) {
  extract(
    shortcode_atts( 
      array(
        'foo' => 'something',
        'bar' => 'something else',
      ), 
      $atts 
    )
  );

  $output = '';
  $output .= '<div>';
  $output .= '<h1>'.$foo.'</h1>';
  $output .= '<p>'.$bar.'</p>';
  $output .= '</div>';
  return $output;
}
add_shortcode( 'bartag', 'bartag_func' );

/*----------------- Home page ---------------------*/
//[topsecton h2="TEST" h3="ttt"]
function topsection_func( $atts ){
	$temp_dir_uri = get_template_directory_uri();

  extract(
    shortcode_atts(
      array(
        'h2' => 'We will help you to find all',
        'h3' => 'Find great places , hotels , restourants , shops.',
        'bgimg' => ''.$temp_dir_uri.'/assets/images/bg/32.jpg',
        'catbox' => 'true',
        'catslug' => 'listing_categories',
        'searchbar' => 'true',

      ),
      $atts
    )
  );

  $caturl = ''.site_url().'/'.$catslug.'';
  

  $output = '';
  $output .= '<!--section -->';
  $output .= '<section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">';
  $output .= '<div class="bg"  data-bg="'.$bgimg.'" data-scrollax="properties: { translateY: \'200px\' }"></div>';
  $output .= '<div class="overlay"></div><div class="hero-section-wrap fl-wrap"><div class="container">';
  $output .= '<div class="intro-item fl-wrap"><h2>'.$h2.'</h2><h3>'.$h3.'</h3></div>';
  if($searchbar == 'true'){
  $output .= '<div class="main-search-input-wrap">
                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                            <div class="main-search-input-item location" id="autocomplete-container">
                                <input type="text" placeholder="Location" id="autocomplete-input" value=""/>
                                <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                            <div class="main-search-input-item">
                                <select data-placeholder="All Categories" multiple class="chosen-select" >
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <button class="main-search-button" onclick="window.location.href=\'listing.html\'">Search</button>
                        </div>
                    </div>';
               }
  if($catbox == 'true'){
  $output .= '<div class="box-cat-container">
                <!--box-cat-->
                <a href="'.$caturl.'/restaurants" class="box-cat color-bg">
                    <i class="fa fa-cutlery"></i>
                    <h4>Restaurants</h4>
                </a>
                <!--box-cat end-->
                <!--box-cat-->
                <a href="'.$caturl.'/hotels" class="box-cat color-bg">
                    <i class="fa fa-bed"></i>
                    <h4>Hotels</h4>
                </a>
                <!--box-cat end-->                    
                <!--box-cat-->
                <a href="'.$caturl.'/shops" class="box-cat color-bg">
                    <i class="fa fa-shopping-bag"></i>
                    <h4>Shops</h4>
                </a>
                <!--box-cat end-->                    
                <!--box-cat-->
                <a href="'.$caturl.'/fitness" class="box-cat color-bg">
                    <i class="fa fa-futbol-o"></i>
                    <h4>Fitness</h4>
                </a>
                <!--box-cat end-->                    
                <!--box-cat-->
                <a href="'.$caturl.'/events" class="box-cat color-bg">
                    <i class="fa fa-users"></i>
                    <h4>Events</h4>
                </a>
                <!--box-cat end-->                    
            </div>';}
  $output .= '</div></div><div class="bubble-bg"> </div><div class="header-sec-link">
                <div class="container"><a href="#sec2" class="custom-scroll-link">Let\'s Start</a></div>
            </div>
        </section>';

  $output .= '<!-- section end -->';

  return $output;
}
add_shortcode( 'topsecton', 'topsection_func' );


//[section2]
function section2_func( $atts ) {
	$temp_dir_uri = get_template_directory_uri();
  extract(
    shortcode_atts( 
      array(
        'catslug' => 'listing_categories',
      ), 
      $atts 
    )
  );

  $caturl = ''.site_url().'/'.$catslug.'';

  $output = '';
  $output .= '<!--section -->
        <section id="sec2">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Categories</h2>
                    <div class="section-subtitle">Catalog of Categories</div>
                    <span class="section-separator"></span>
                    <p>Explore some of the best tips from around the city from our partners and friends.</p>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad">';
   $output .= '<!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <img  src="'.$temp_dir_uri.'/assets/images/all/1.jpg"   alt="">
                                <div class="listing-counter"><span>10 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Conference and Event</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->';
   $output .= '<!-- gallery-item-->
                    <div class="gallery-item gallery-item-second">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <img  src="'.$temp_dir_uri.'/assets/images/bg/19.jpg"   alt="">
                                <div class="listing-counter"><span>6 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Cafe - Pub</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->';
   $output .= '<!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <img  src="'.$temp_dir_uri.'/assets/images/all/3.jpg"   alt="">
                                <div class="listing-counter"><span>21 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Gym - Fitness</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->';
   $output .= '<!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <img  src="'.$temp_dir_uri.'/assets/images/all/22.jpg"   alt="">
                                <div class="listing-counter"><span>7 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Hotels</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->';
   $output .= '<!-- gallery-item-->
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                                <img  src="'.$temp_dir_uri.'/assets/images/all/5.jpg"   alt="">
                                <div class="listing-counter"><span>15 </span> Locations</div>
                                <div class="listing-item-cat">
                                    <h3><a href="listing.html">Shop - Store</a></h3>
                                    <p>Constant care and attention to the patients makes good record</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->';
   $output .= '</div>
                <!-- portfolio end -->
                <a href="listing.html" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn">View All<i class="fa fa-eye"></i></a>
            </div>
        </section>
        <!-- section end -->';
 
  return $output;
}
add_shortcode( 'section2', 'section2_func' );

?>