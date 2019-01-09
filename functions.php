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
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $url = $_POST['user-url'];
  $description = $_POST['description'];
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $vkontakte = $_POST['vkontakte'];
  $whatsapp = $_POST['whatsapp'];

  $userid = get_current_user_id();

  

  if($first_name){
    update_user_meta( $userid, 'first_name', $first_name);
  }
  if($last_name){
  update_user_meta( $userid, 'last_name', $last_name);
  }
  if($email){
  update_user_meta( $userid, 'user_email', $email);
  }
  if($phone){
  update_user_meta( $userid, 'phone', $phone);
  }
  if($address){
  update_user_meta( $userid, 'address', $address);
  }
  if($url){
  update_user_meta( $userid, 'user_url', $url);
  }
  if($description){
  update_user_meta( $userid, 'description', $description);
  }
  if($facebook){
  update_user_meta( $userid, 'facebook', $facebook);
  }
  if($twitter){
  update_user_meta( $userid, 'twitter', $twitter);
  }
  if($vkontakte){
  update_user_meta( $userid, 'vkontakte', $vkontakte);
  }
  if($whatsapp){
  update_user_meta( $userid, 'whatsapp', $whatsapp);
  }

  /*wp_send_json( array(
        'loggedin' => $first_name,
        'message'  => $last_name,
    ) );*/
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
