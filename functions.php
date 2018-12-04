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

function user_restriction(){
  if( is_admin() && !current_user_can( 'administrator' ) && !( defined( 'DOING_AJAX' ) && 'DOING_AJAX' )  ){
    wp_redirect(home_url()."/dashboard");
    exit;
  }
}
add_action('init','user_restriction');
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

/*==========================================================================================*/

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

  /* Get user info. */
global $current_user, $wp_roles;
//get_currentuserinfo(); //deprecated since 3.1

/* Load the registration file. */
//require_once( ABSPATH . WPINC . '/registration.php' ); //deprecated since 3.1
$error = array();    
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

    /* Update user information. */
    if ( !empty( $_POST['url'] ) ){
        wp_update_user( array( 'ID' => $current_user->ID, 'user_url' => esc_url( $_POST['url'] ) ) );
    }
    if ( !empty( $_POST['email'] ) ){
        if (!is_email(esc_attr( $_POST['email'] ))){
            $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
        }
        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->id ){
            $error[] = __('This email is already used by another user.  try a different one.', 'profile');
        }
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
  echo 'done';

  die();
}

add_action('wp_ajax_nopriv_profile-pic-upload', 'citybook_profile_pic_func');
add_action('wp_ajax_profile-pic-upload', 'citybook_profile_pic_func');
function citybook_profile_pic_func (){

  //echo 
  if(isset($_FILES["profile-pic"]["type"])){
  $validextensions = array("jpeg", "jpg", "png");
  $temporary = explode(".", $_FILES["profile-pic"]["name"]);
  $file_extension = end($temporary);
  
  if ((($_FILES["profile-pic"]["type"] == "image/png") || ($_FILES["profile-pic"]["type"] == "image/jpg") || ($_FILES["profile-pic"]["type"] == "image/jpeg")) && ($_FILES["profile-pic"]["size"] < 100000) && in_array($file_extension, $validextensions))
  {
      if ($_FILES["profile-pic"]["error"] > 0){
        echo "error1";
      }else{
        if ( !metadata_exists( 'user', $userid, $metakey ) ) {
          $picid = upload_user_file($_FILES['profile-pic']);
        }

        $userid = get_current_user_id();
        $metakey = 'profile_pic';

        if ( metadata_exists( 'user', $userid, $metakey ) ) {
          update_user_meta( $userid, $metakey, $picid);
        }else{
          add_user_meta( $userid, $metakey, $picid);
        }

        echo "success";
      }
  }else{
    echo "error2";
  }
}


  die();
}

function getuserpic($userid){
  $pic_url = get_template_directory_uri().'/assets/images/avatar/avatar-bg.png';
  $pic_id = get_user_meta( $userid, 'profile_pic', true );
  $picurl2 = wp_get_attachment_url( $pic_id );
  if(!empty($picurl2)){
      $pic_url = $picurl2;
  }
  return $pic_url;
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

add_filter( 'user_contactmethods', 'user_custom_contact_info' );
function user_custom_contact_info( $fields ) {
          
    $fields['phone'] = __( 'Phone' );
    $fields['address'] = __( 'Address' );
    $fields['facebook'] = __( 'Facebook' );
    $fields['twitter'] = __('Twitter');
    $fields['vkontakte'] = __('Vkontakte');
    $fields['whatsapp'] = __('Whatsapp');

    return $fields;
     
}

?>
