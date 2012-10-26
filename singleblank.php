<?php

	/*
	    Template Name: regular layout without comments or share
    */

?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="nav-div" class="clear">
    <hr/>
            
        	<div class="description"><?php bloginfo('description'); ?></div><?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
       		<p class="clear"/>
    <hr/>
    </div>
	<div id="main-narrow-div" class="clear">
               
             
                
                
        		<?php $image= get_post_meta($post->ID, 'blog_image', true); 
				
			if  (!$image=="") {
				echo "<img src='/wp-content/uploads/". get_post_meta($post->ID,'blog_image', true)."'/>";
					}else{
						
						}
				
				?>
                
              
        		
       
       
       
        <h2><em><?php the_title(); ?></em></h2>
        
        <?php $thepath=TEMPLATEPATH?>
        
                
        	
		 <p><?php the_content(); ?></p>
       
        <br/>
       
         <br/>       
	
			
			
		  
         <?php $originalcomments= get_post_meta($post->ID, 'original_post_url', true); 
				
				
				
		?>
        


	<?php endwhile; endif; ?>
    </div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>