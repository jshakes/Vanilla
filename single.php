<?php 
get_header(); 
if ( have_posts() ): the_post();
?>
<div class="wrapper clearfix">
       
  <div class="container clearfix">
  
    <section class="s1">
          
      <article class="post" id="post-<?php the_id(); ?>">
      
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        
        <span class="meta">by <?php the_author(); ?> on <?php the_time('j F, Y \a\t H:i') ?></span>
        
        <?php the_content(); ?>
        
      </article>
      
    </section>
    
  </div>
  
</div>
	
<?php
endif;
get_footer();
?>