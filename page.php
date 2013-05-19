<?php 
get_header();
if ( have_posts() ) : the_post(); 
?>
<div class="wrapper clearfix">
  
  <h1><?php the_title(); ?></h1>
  
  <div class="container clearfix">
  
    <section class="s1">
    
      <?php the_content(); ?>
      
    </section>
    
  </div>
  
</div>
<?php
endif;
get_footer();
?>