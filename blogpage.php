<?php

	/*
	Template Name: Inspriation Blog
	*/

?>
<?php
	$categoryidnumber=0;
?>
<?php get_header(); ?>


<div id="main-div" class="clear">

    <div id="contentshift">
    
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           
            
            <?php the_content(); ?>
            
        <?php endwhile;  ?>
        <?php	endif; ?>
        
        <?php get_posts('post_type=page');?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
			<?php $categoryidnumber = get_post_meta($post->ID,'category_number', true);
            $catnum = $categoryidnumber;
            ?>
            
        
        <?php endwhile;  ?>
        <?php	endif; ?>
    </div><p class="clear"></p>
 
    <div class="blogpage">
        
        <?php query_posts("posts_per_page=45&cat=$catnum");?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <div class="blogpost"> 
                <div class="titlediv"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="date"><?php the_date(); ?></div>
                <?php the_content();?>
                <div class="morelink"><a href="<?php the_permalink() ?>">View Me »</a></div>
                <p class="clear"></p>
                <hr/>  
                
            </div>
        
        <?php endwhile; ?>
        <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
        <?php else : ?>
        
        <h2>Not Found</h2>
        
        
        <?php endif; ?>
        <p class="clear"></p>
    </div>
    <?php get_sidebar(); ?>
</div>





<div class="clear"/>
<hr/><br/>

</div> <!--END main-div -->
</div>
</div>
</div>


<?php get_footer(); ?>
