<?php 
get_header(); 
if ( have_posts() ): the_post();
?>
<div class="container clearfix">
       
    <div class="container clearfix">

        <article class="post" id="post-<?php the_id(); ?>">
        
            <h1><?php the_title(); ?></h1>

            <span class="meta">by <?php the_author(); ?> on <?php the_time('j F, Y \a\t H:i') ?></span>

            <?php the_content(); ?>
          
        </article>
        
    </div>
  
</div>
	
<?php
endif;
get_footer();
?>