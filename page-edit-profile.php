<?php 
/* Template Name: Citybook WP */

if(!is_user_logged_in()){
	wp_redirect(home_url());
}
get_header();
/* Get user info. */
global $current_user, $wp_roles;
//get_currentuserinfo(); //deprecated since 3.1

/* Load the registration file. */
//require_once( ABSPATH . WPINC . '/registration.php' ); //deprecated since 3.1
$error = array();    
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

    /* Update user password. */
    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
        if ( $_POST['pass1'] == $_POST['pass2'] )
            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
        else
            $error[] = __('The passwords you entered do not match.  Your password was not updated.', 'profile');
    }

    /* Update user information. */
    if ( !empty( $_POST['url'] ) )
        wp_update_user( array( 'ID' => $current_user->ID, 'user_url' => esc_url( $_POST['url'] ) ) );
    if ( !empty( $_POST['email'] ) ){
        if (!is_email(esc_attr( $_POST['email'] )))
            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->id )
            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
        else{
            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
        }
    }

    if ( !empty( $_POST['first-name'] ) )
        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
    if ( !empty( $_POST['last-name'] ) )
        update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
    if ( !empty( $_POST['description'] ) )
        update_user_meta( $current_user->ID, 'description', esc_attr( $_POST['description'] ) );

    /* Redirect so the page will show updated info.*/
  /*I am not Author of this Code- i dont know why but it worked for me after changing below line to if ( count($error) == 0 ){ */
    if ( count($error) == 0 ) {
        //action hook for plugins and extra fields saving
        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( get_permalink() );
        exit;
    }
}
?>
?>

<!-- wrapper -->    
    <div id="wrapper">
        <!--content -->  
        <div class="content">
            <!--section --> 
            <section>
                <!-- container -->
                <div class="container">
                    <!-- profile-edit-wrap -->
                    <div class="profile-edit-wrap">
                        <div class="profile-edit-page-header">
                            <h2>Edit profile</h2>
                            <div class="breadcrumbs"><a href="<?php echo site_url(); ?>">Home</a><a href="<?php echo site_url(); ?>/dashboard">Dasboard</a><span>Edit profile</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fixed-bar fl-wrap">
                                    <div class="user-profile-menu-wrap fl-wrap">
                                        <!-- user-profile-menu-->
                                        <div class="user-profile-menu">
                                            <h3>Main</h3>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>/dashboard"><i class="fa fa-gears"></i>Dashboard</a></li>                                                  
                                                <li><a href="<?php echo site_url(); ?>/dashboard/edit-profile/" class="user-profile-act"><i class="fa fa-user-o"></i> Edit profile</a></li>
                                                <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                                                <li><a href="<?php echo site_url(); ?>/dashboard/change-password/"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                            </ul>
                                        </div>
                                        <!-- user-profile-menu end-->
                                        <!-- user-profile-menu-->
                                        <div class="user-profile-menu">
                                            <h3>Listings</h3>
                                            <ul>
                                                <li><a href="dashboard-listing-table.html"><i class="fa fa-th-list"></i> My listigs  </a></li>
                                                <li><a href="dashboard-bookings.html"> <i class="fa fa-calendar-check-o"></i> Bookings <span>2</span></a></li>
                                                <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>
                                                <li><a href="dashboard-add-listing.html"><i class="fa fa-plus-square-o"></i> Add New</a></li>
                                            </ul>
                                        </div>
                                        <!-- user-profile-menu end-->                                        
                                        <a href="<?php 
                            $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
                            $url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            echo wp_logout_url( $url ); ?>" class="log-out-btn">Log Out</a>
                                    </div>
                                </div>
                            </div>
                            <form action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="edit-profile-form">
                                <div class="col-md-7">
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">
                                        <div class="profile-edit-header fl-wrap">
                                            <h4>My Account</h4>
                                            <div class="notification success fl-wrap">
                                                <p>Your listing <a href="#">Fitness Center Brooklyn</a> has been approved!</p>
                                                <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="custom-form">
                                            <label>First Name <i class="fa fa-user-o"></i></label>
                                            <input type="text" placeholder="First Name" name="first-name" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>"/>
                                            <label>Last Name <i class="fa fa-user-o"></i></label>
                                            <input type="text" placeholder="Last Name" name="last-name" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>"/>
                                            <label>Username <i class="fa fa-user-o"></i></label>
                                            <input type="text" placeholder="Username" disabled="disabled" value="<?php the_author_meta( 'user_login', $current_user->ID ); ?>"/>
                                            <label>Email Address<i class="fa fa-envelope-o"></i>  </label>
                                            <input type="text" placeholder="email@domain.com" value=""/>
                                            <label>Phone<i class="fa fa-phone"></i>  </label>
                                            <input type="text" placeholder="+7(123)987654" value=""/>
                                            <label> Adress <i class="fa fa-map-marker"></i>  </label>
                                            <input type="text" placeholder="USA 27TH Brooklyn NY" value=""/>
                                            <label> Website <i class="fa fa-globe"></i>  </label>
                                            <input type="text" placeholder="www.domain.com" value=""/>  
                                            <label> Notes</label>                                              
                                            <textarea cols="40" rows="3" placeholder="About Me"></textarea>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end--> 
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container add-list-container">
                                        <div class="profile-edit-header fl-wrap">
                                            <h4>Tariff plan</h4>
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <!--col --> 
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender">
                                                        <span>Basic 99$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end--> 
                                                <!--col --> 
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender"  checked>
                                                        <span>Extended 99$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end--> 
                                                <!--col --> 
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline"> 
                                                        <input type="radio" name="gender">
                                                        <span>Professional 149$</span> 
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end-->                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->                                          
                                    <!-- profile-edit-container--> 
                                    <div class="profile-edit-container">
                                        <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                            <h4>My Socials</h4>
                                        </div>
                                        <div class="custom-form">
                                            <label>Facebook <i class="fa fa-facebook"></i></label>
                                            <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                            <label>Twitter<i class="fa fa-twitter"></i>  </label>
                                            <input type="text" placeholder="https://twitter.com/" value=""/>
                                            <label>Vkontakte<i class="fa fa-vk"></i>  </label>
                                            <input type="text" placeholder="vk.com" value=""/>
                                            <label> Whatsapp <i class="fa fa-whatsapp"></i>  </label>
                                            <input type="text" placeholder="https://www.whatsapp.com" value=""/>
                                            <input type="hidden" value="citybook-editprofile" name="action">
                                            <button type="submit" class="btn big-btn color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->                                        
                                </div>
                            </form>
                            <!-- profile-pic-container-->
                            <form action="<?php echo admin_url('admin-ajax.php'); ?>" class="profile-pic-form" method="post">
                                <div class="col-md-2">
                                    <div class="notification fl-wrap" id="pic_notification">
                                        <p id="notiftext"></p>
                                        <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="edit-profile-photo fl-wrap">
                                        <img id="previewing" src="<?php echo getuserpic(get_current_user_id()); ?>" class="respimg" alt="">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Upload Picture</span>
                                                <input type="file" name="profile-pic" class="upload" id="userprofile_img" accept="image/*">
                                                <input type="hidden" name="action" value="profile-pic-upload">
                                            </div>
                                            <div class="custom-form">
                                                <button type="submit" class="btn small-btn color-bg flat-btn">Save Picture<i class="fa fa-angle-right"></i></button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- profile-pic-container end-->
                        </div>
                    </div>
                    <!--profile-edit-wrap end -->
                </div>
                <!--container end -->
            </section>
            <!-- section end -->
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
                                <h3>Do You Have Questions ?</h3>
                                <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                            </div>
                            <div class="col-md-4"><a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
        </div>
    </div>
<!-- wrapper end -->

<?php get_footer(); ?>