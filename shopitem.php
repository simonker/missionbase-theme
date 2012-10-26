</php

	/*
	    Template Name: Product Page
    */

?>

<?php get_header(); ?>
<?php the_post(); ?>

<div id="main-div">
	 	<p class="topbar"><?php echo get_post_meta($post->ID,'store_name', true)?></p>
        <img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'product_large', true)?>" alt="product image"/>
        <h5><em><?php the_title(); ?></em></h5>
        <p>Size: <?php echo get_post_meta($post->ID,'size', true)?>
        <br/>Colour: <?php echo get_post_meta($post->ID,'shoe_colour', true)?></p>
        <p><?php the_content(); ?></p>
        <h3><br /><em>£<?php echo get_post_meta($post->ID,'price', true)?></em></h3>
        <a href="<?php echo get_post_meta($post->ID,'buy_link', true)?>" class="button">buy me</a>
        
        <hr />
                
                
</div> <!-- END main content-->    

<?php get_sidebar(); ?>

<?php get_footer(); ?>