<div id="aside">

	
        
        
       <div class="widget">
        
         <h2>Latest Blog Items</h2>
	<?php query_posts("posts_per_page=10&offset=0&cat=50");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        <div class="colpost">
        
         
         		<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" align="left" hspace="5px" alt="blog image"/></a>
            	<a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a>
                <a href="<?php the_permalink() ?>"><p>View item...</p></a>
              
        </div> <p class="clear"/>  
        <hr/>
            <?php endwhile; ?>
        
           
        
            <?php else : ?>
        
                <h3>None Found</h3>
		
	<?php endif; ?>
                <br/>
                <br/>
          <h2>Latest Work</h2>
	<?php query_posts("posts_per_page=10&offset=0&cat=1");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        <div class="colpost">
        
         
         		<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" align="left" hspace="5px" alt="blog image"/></a>
            	<a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a>
                <a href="<?php the_permalink() ?>"><p>View item...</p></a>
               
               
               
        </div> <p class="clear"/>  
        <hr/>
            <?php endwhile; ?>
        
           
        
            <?php else : ?>
        
                <h3>None Found</h3>
		
	<?php endif; ?>
                <br/>
    
             
        <p class="clear"/>    
         
         
       
         
      
         
        </div>
    	
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
	
	<?php endif; ?>

</div>
