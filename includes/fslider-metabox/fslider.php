<?php

  function fslider_metabox_enqueue($hook) {
    if ( 'post.php' == $hook || 'post-new.php' == $hook ) {
      wp_enqueue_script('fslider-metabox', get_template_directory_uri() . '/includes/fslider-metabox/js/fslider-metabox.js', array('jquery', 'jquery-ui-sortable'));
      wp_enqueue_style('fslider-metabox', get_template_directory_uri() . '/includes/fslider-metabox/css/fslider-metabox.css');
    }
  }
  add_action('admin_enqueue_scripts', 'fslider_metabox_enqueue');

  function add_fslider_metabox($post_type) {
    $types = array('post', 'custom-post-type');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'fslider-metabox',
        'Featured Slider',
        'fslider_meta_callback',
        $post_type,
        'normal',
        'high'
      );
    }
  }
  add_action('add_meta_boxes', 'add_fslider_metabox');

  function fslider_meta_callback($post) {
    wp_nonce_field( basename(__FILE__), 'fslider_meta_nonce' );
    $ids = get_post_meta($post->ID, 'fslider_id', true);

    ?>
    <table class="form-table">
      <tr><td>
        <a class="fslider-add button" href="#" data-uploader-title="Add image(s) to fslider" data-uploader-button-text="Add image(s)">Add image(s)</a>

        <ul id="fslider-metabox-list">
        <?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value); ?>

          <li>
            <input type="hidden" name="fslider_id[<?php echo $key; ?>]" value="<?php echo $value; ?>">
            <img class="image-preview" src="<?php echo $image[0]; ?>">
            <a class="change-image button button-small" href="#" data-uploader-title="Change image" data-uploader-button-text="Change image">Change image</a><br>
            <small><a class="remove-image" href="#">Remove image</a></small>
          </li>

        <?php endforeach; endif; ?>
        </ul>

      </td></tr>
    </table>
  <?php }

  function fslider_meta_save($post_id) {
    if (!isset($_POST['fslider_meta_nonce']) || !wp_verify_nonce($_POST['fslider_meta_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['fslider_id'])) {
      update_post_meta($post_id, 'fslider_id', $_POST['fslider_id']);
    } else {
      delete_post_meta($post_id, 'fslider_id');
    }
  }
  add_action('save_post', 'fslider_meta_save');

?>