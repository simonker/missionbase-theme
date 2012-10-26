<?php

	/*
	    Template Name: blog homepage
    */

?>



<?php


?>
<?php get_header(); ?>

	
    
    <div id="main-div" class="clear">
    
    
    <div id="contentshift">
	
	<div id="carousel"><?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?></div>
     <?php query_posts("posts_per_page=1&cat=7");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        <div id="introtext">
        <h3><?php the_title(); ?></h3>
		<hr/>
       <?php the_content(); ?>
          
         </div>  
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <p></p>
             
        
	<?php endif; ?>
    
    <div id="latest-work"><h3>Latest Work</h3>
    <hr />
    </div>
    
    <?php query_posts("posts_per_page=8&cat=1");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        	<div class="div1"> 
         		<div><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" width="300" alt="blog image"/></a></div>
            	<div class="hider">
                    <div class="titlediv"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                    <div class="littlehr"><hr/></div>
                    <div class="date"><?php new_excerpt(80);?></div>
                    <div class="morelink"><a href="<?php the_permalink() ?>">View Me »</a></div>
                </div>
      
           
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
             
        
	<?php endif; ?>
    </div>
    
    
   
        
        
        <br/>
	
    </div>
    </div> <!--END main-div -->

<!--< ?php get_sidebar(); ?>-->

<?php get_footer(); ?>
