<?php

	/*
	    Template Name: portfolio display page
    */

?>
<?php
$categoryidnumber=0;


?>
<?php get_header(); ?>

	   
    <div id="main-div" class="clear">
    
    <div id="contentshift">
	<div class="portfoliopage">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <h2 style="text-align:center;"><?php the_title(); ?></h2>
    
       <?php
		$cc = get_the_content();
		if($cc != '') { ?>
        <div class="div1" style="height:auto;">
        <h2><em><?php the_title(); ?></em></h2>
        <hr/>
        <br/>
		<?php the_content(); ?>
        </div>
		<?php } ?>
        
        
        <?php endwhile;  ?>
	<?php	endif; ?>
        </div>
    <?php get_posts('post_type=page');?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php $categoryidnumber = get_post_meta($post->ID,'category_number', true);
		$catnum = $categoryidnumber;
		 ?>
        
    
        <?php endwhile;  ?>
	<?php	endif; ?>
    
    
    <?php query_posts("posts_per_page=45&cat=$catnum");?>
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
    
    
   
        
        <div class="clear"/>
        <hr/><br/>
	
    </div>
       </div>
    </div> <!--END main-div -->


<?php get_footer(); ?>
