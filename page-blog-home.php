<?php

	/*
	    Template Name: blog homepage old
    */

?>
<?php get_header(); ?>

	<div id="main-div">
		<ul>
	<?php query_posts("posts_per_page=3");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
        
         <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_image', true)?>" alt="blog image"/>
            	<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <div class="date"><?php the_date(); ?></div>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
               
               
               
        
            <?php endwhile; ?>
        
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
		</li>
	<?php endif; ?>
    </ul>
    </div> <!--END main-div -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>