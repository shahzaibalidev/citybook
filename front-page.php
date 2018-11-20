<?php get_header(); ?>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Content-->   
    <div class="content">

<?php if(have_posts()){
    while (have_posts()) {
       the_post();
    }

    the_content();

}
?>
    </div>
    <!-- Content end -->      
</div>
<!-- wrapper end -->

<?php get_footer(); ?>