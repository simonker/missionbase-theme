<?php

	/*
	    Template Name: Product Category
    */

?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="main-div">

		<?php
		
			$categoriesCF = get_post_meta($post->ID, "categories" , true);
			//example value = "redshoes|36,blueshoes|31"
			
			$allCategories= explode(",",$categoriesCF);
			//$allCategories[0]= "redshoes|36"
			//$allCategories[1]= "blueshoes|31"
			
			foreach($allCategories as $category){
				
				$pieces = explode("|", $category);
				
				$link = get_permalink($pieces[1]);
				
				echo"<div id='storediv'><p class='topbar'>". $pieces[0] . "</p>";
				echo"<div class='product'>"; 
				echo"<img src='/images/300x300.jpg' width='150px' height='150px'alt='blog image'/>";
            	echo"<h2><a href='$link'>". $pieces[0] . "</a></h2>";
				
				query_posts("posts_per_page=-1&post_type=page&post_parent=$pieces[1]");
				
				while (have_posts()) : the_post(); ?>
                 
                <h5><em><?php the_title(); ?></em></h5>
       	
       
				
                <?php endwhile; wp_reset_query(); 
                 
				echo"</div>";
				echo"</div>";
				}
			
	
		
		?>

                
                
</div> <!-- END main content-->    

<?php get_sidebar(); ?>

<?php get_footer(); ?>