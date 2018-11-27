<?php
require 'includes/fslider-metabox/fslider.php';
require 'includes/functions/shortcodes.php';

function citybook_style(){

  /*CSS Start*/
  /*wp_enqueue_style('google-fonts','http://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700');*/
  wp_enqueue_style('reset_css', get_template_directory_uri().'/assets/css/reset.css');
  wp_enqueue_style('plugins_css', get_template_directory_uri().'/assets/css/plugins.css');
  wp_enqueue_style('style_css' , get_template_directory_uri().'/assets/css/style.css');
  wp_enqueue_style('color_css' , get_template_directory_uri().'/assets/css/color.css');
  /*CSS End*/
  /*JS Start*/
  wp_enqueue_script('jquery_min_js', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.0', true);
  wp_enqueue_script('plugins_js', get_template_directory_uri().'/assets/js/plugins.js', array(), '1.0', true);
  wp_enqueue_script('scripts_js', get_template_directory_uri().'/assets/js/scripts.js', array(), '1.0', true);
  /*JS End*/
  add_theme_support( 'html5' );
}

add_action('wp_enqueue_scripts','citybook_style');

add_theme_support('post-thumbnails');

include_once get_template_directory(). '/includes/framework/options-init.php';


$admin_bar = get_option('bcontrols_admin_bar');

if($admin_bar != "true"){
add_filter( 'show_admin_bar', '__return_false' ); 
}


/* Post Views Number*/
// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
/* Post Views Number END */

// Ajax Login Submission
add_action('wp_ajax_nopriv_citybooklogin', 'citybook_login_func');
add_action('wp_ajax_citybooklogin', 'citybook_login_func');

function citybook_login_func (){

  $username = $_POST['email'];
  $password = $_POST['password'];
  $remember = $_POST['check'];

  $creds = array(
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => $remember
    );
 
    $user = wp_signon( $creds, false );
 
    if ( is_wp_error( $user ) ) {
        /*echo $user->get_error_message();*/
    }

  die();
}
?>
