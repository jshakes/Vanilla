<?php 
get_header();
if ( have_posts() ) : the_post(); 
?>
<div class="container clearfix">
  
  <h1><?php the_title(); ?></h1>
  
  <div class="wrapper clearfix">
    
      <?php the_content(); ?>
    
  </div>
  
</div>
<?php
endif;
get_footer();
?>