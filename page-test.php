<?php 
/* Template Name: Citybook WP */
 get_header(); ?>

<div id="wrapper">
    <!-- content -->
    <div class="content">
    	<section class="gray-section" id="sec1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        	<h1>HIII</h1>
                        	<!-- <form method="POST" name="my_form">
                        		<label>Select File</label>
                        		<input type="file" class="form-control" id="file" name="uploadfile" accept="image/*">
                        		<input type="submit" name="BtnSubmit" value="Upload File">
                        	</form> -->
                        	<form action="" enctype="multipart/form-data" id="form" method="post" name="form">
<div id="upload">
<input id="file" name="file" type="file">
</div>
<input id="submit" name="submit" type="submit" value="Upload">
</form>

<div id="detail">
<div id="preview" style="height:100px;width:100px; display:none">
<img id="previewimg" src="" style="height:100px;width:100px;">
<img id="deleteimg"    src="">
</div>

<div id="message">
</div>
</div>

<?php
if( ! empty( $_FILES ) ) {
  foreach( $_FILES as $file ) {
    if( is_array( $file ) ) {
      $attachment_id = upload_user_file( $file );
    }
  }
}
echo $attachment_id;
// echo get_user_meta('1','cupp_upload_meta', true);



?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php  get_footer(); ?>