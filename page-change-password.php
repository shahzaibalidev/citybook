<?php 
/* Template Name: Citybook WP */

if(!is_user_logged_in()){
	wp_redirect(home_url());
}
get_header();
?>
<?php if(isset($_POST['current_password'])){
		$_POST = array_map('stripslashes_deep', $_POST);
		$current_password = sanitize_text_field($_POST['current_password']);
		$new_password = sanitize_text_field($_POST['new_password']);
		$confirm_new_password = sanitize_text_field($_POST['confirm_new_password']);
		$user_id = get_current_user_id();
		$errors = array();
		$current_user = get_user_by('id', $user_id);
		// Check for errors
		if (empty($current_password) && empty($new_password) && empty($confirm_new_password) ) {
		$errors[] = 'All fields are required';
		}
		if($current_user && wp_check_password($current_password, $current_user->data->user_pass, $current_user->ID)){
		//match
		} else {
			$errors[] = 'Password is incorrect';
		}
		if($new_password != $confirm_new_password){
			$errors[] = 'Password does not match';
		}
		if(strlen($new_password) < 6){
			$errors[] = 'Password is too short, minimum of 6 characters';
		}
		if(empty($errors)){
			wp_set_password( $new_password, $current_user->ID );
			$notification = '<div class="notification success fl-wrap">
                                    <p>Password successfully changed!</p>
                                    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                </div>';
		} else {
			// Echo Errors
		    foreach($errors as $error){
		        $notification = '<div class="notification reject fl-wrap">
                                    <p>'.$error.'</p>
                                    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                </div>';
		    }
		}
    } ?>

<!-- wrapper -->	
<div id="wrapper">
    <!--content -->  
    <div class="content">
        <!--section --> 
        <section id="sec1">
            <!-- container -->
            <div class="container">
                <!-- profile-edit-wrap -->
                <div class="profile-edit-wrap">
                    <div class="profile-edit-page-header">
                        <h2>Change Password</h2>
                        <div class="breadcrumbs"><a href="<?php echo site_url(); ?>">Home</a><a href="<?php echo site_url(); ?>/dashboard">Dasboard</a><span>Change Password</span></div>
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
                                            <li><a href="dashboard-myprofile.html"><i class="fa fa-user-o"></i> Edit profile</a></li>
                                            <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                                            <li><a href="<?php echo site_url(); ?>/dashboard/change-password/" class="user-profile-act"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
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
                                    <a href="#" class="log-out-btn">Log Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- profile-edit-container--> 
                            <div class="profile-edit-container">
                                <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                    <h4>Change Password</h4>
                                </div>
                                <?php echo $notification; ?>
                                <div class="custom-form no-icons">
                                	<form action="" method="post">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Current Password</label>
                                        <input type="password" class="pass-input" placeholder="" id="current_password" name="current_password" title="current_password" required/>
                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                    </div>
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>New Password</label>
                                        <input type="password" class="pass-input" placeholder="" id="new_password" name="new_password" title="new_password" required/>
                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                    </div>
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="pass-input" placeholder="" id="confirm_new_password" name="confirm_new_password" title="confirm_new_password" required/>
                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                    </div>
                                    <button class="btn  big-btn  color-bg flat-btn" type="submit">Save Changes<i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                            <!-- profile-edit-container end-->                                        
                        </div>
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
                <div class="bg" data-bg="images/bg/circle.png"></div>
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