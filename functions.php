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

/*==========================================================================================*/
add_action('init', 'redirect_wplogin');

function redirect_wplogin(){
  global $pagenow;
  if($pagenow == 'wp-login.php' && $_GET['action'] != "logout"){
    wp_redirect(home_url());
    exit();
  }
}

add_action('init', 'redirect_wpadmin');
function redirect_wpadmin(){
  $GLOBALS['userisadmin'] = false;
  $user = wp_get_current_user();
  $allowed_roles = array('editor', 'administrator');
  if( array_intersect($allowed_roles, $user->roles ) ) {
    $GLOBALS['userisadmin'] = true;
  }else{
    wp_redirect(home_url()."/dashboard");
  }
}
/*==========================================================================================*/
// add a link to the WP Toolbar
function custom_toolbar_link($wp_admin_bar) {
    $args = array(
        'id' => 'fedashlink',
        'title' => 'Dashboard', 
        'href' => ''.site_url().'/dashboard', 
        'meta' => array(
            'class' => 'fedashlink', 
            'title' => 'Dashboard'
            )
    );
    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'custom_toolbar_link', 31);

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

// Ajax Reset Submission
add_action('wp_ajax_nopriv_citybookreset', 'citybook_reset_func');
add_action('wp_ajax_citybookreset', 'citybook_reset_func');

function citybook_reset_func (){

  $resetemail = $_POST['email'];

  echo $resetemail;

  die();
}

add_action('wp_ajax_nopriv_citybook-editprofile', 'citybook_editpro_func');
add_action('wp_ajax_citybook-editprofile', 'citybook_editpro_func');

function citybook_editpro_func (){

  $file = $_FILES['profile-pic']['tmp_name'];

  if(upload_user_file($_FILES['profile-pic'])){
    echo 'done';
  }else{
    echo 'not done';
  }
  echo $file;

  die();
}

add_action('wp_ajax_nopriv_profile-pic-upload', 'citybook_profile_pic_func');
add_action('wp_ajax_profile-pic-upload', 'citybook_profile_pic_func');
$GLOBALS['x'] = false;
function citybook_profile_pic_func (){

  $save = $_POST['save-profile'];

  if($save == 'yes'){
    // From Save Button
    
    do {
      $picid = upload_user_file($_FILES['profile-pic']);
    } while ($GLOBALS['x'] = true);
    
    $userid = get_current_user_id();
    $metakey = 'profile_pic';

    if ( metadata_exists( 'user', $userid, $metakey ) ) {
      update_user_meta( $userid, $metakey, $picid);
    }else{
      add_user_meta( $userid, $metakey, $picid);
    }

    $picurl = get_template_directory_uri().'/assets/images/avatar/avatar-bg.png';
    $picid = get_user_meta( get_current_user_id(), 'profile_pic', true );
    $picurl2 = wp_get_attachment_url( $picid );
    if(!empty($picurl2)){
        $picurl = $picurl2;
    }
    
    echo $picurl;
  

  }else{
    // From Upload Button
    
    $file_tmp = $_FILES['profile-pic']['tmp_name'];
    $file_name = $_FILES['profile-pic']['name'];
    $path = ABSPATH . 'wp-content/themes/citybook/assets/images/temp';
    $uploaded_loc = $path . '/' . $file_name;
    move_uploaded_file($file_tmp, $uploaded_loc);

    $file_path = get_template_directory_uri() . '/assets/images/temp/' . $file_name;
    
    echo $file_path;
  }


  die();
}

/*==========================================================================================*/

function upload_user_file( $file = array() ) {
 
      require_once( ABSPATH . 'wp-admin/includes/admin.php' );
 
      $file_return = wp_handle_upload( $file, array('test_form' => false ) );
 
      if( isset( $file_return['error'] ) || isset( $file_return['upload_error_handler'] ) ) {
          return false;
      } else {
 
          $filename = $file_return['file'];
 
          $attachment = array(
              'post_mime_type' => $file_return['type'],
              'post_title' => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
              'post_content' => '',
              'post_status' => 'inherit',
              'guid' => $file_return['url']
          );
 
          $attachment_id = wp_insert_attachment( $attachment, $file_return['url'] );
 
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          $attachment_data = wp_generate_attachment_metadata( $attachment_id, $filename );
          wp_update_attachment_metadata( $attachment_id, $attachment_data );
 
          if( 0 < intval( $attachment_id ) ) {
              return $attachment_id;
          }
      }
 
      return false;
}


/*==========================================================================================*/


?>
