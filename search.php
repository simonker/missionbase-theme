<?php get_header(); ?>



	<div id="nav-div" class="clear">
    <hr/>
            <nav>
        	<?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
       		</nav>
            <div id="searchdiv"><?php get_search_form(); ?></div>
    <hr/>
    </div>


	<?php if (have_posts()) : ?>


    <div id="main-div" class="clear">
    
       <div id="contentshift">
       
 
              <br/>
      
              <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
      
              <?php while (have_posts()) : the_post(); ?>
      
                <div class="div1"> 
         		<a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" width="300px" alt="blog image"/></a>
            	<div ><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="date"><?php the_date(); ?></div>
                <div class="morelink"><a href="<?php the_permalink() ?>">View Me...</a></div>
                <p class="clear"/>
        <hr/>  
               </div>
        
      
              <?php endwhile; ?>
      
              <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		</div>
        
	<?php else : ?>
		<div id="heroimage" style="height:400px;">
			<h2>No posts found.</h2>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>