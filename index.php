<?php 
/*
The posts loop. Fetches 'loop-posts.php' to output the posts themselves.
*/

get_header(); 

if ( have_posts() ): 
?>
<div class="container clearfix">
    
    <?php get_template_part('loop', 'posts'); ?>
  
</div>
	
<?php
endif;

get_footer(); ?>