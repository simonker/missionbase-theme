<?php

	/*
	    Template Name: events
    */

?>
<?php

// get posted data into local variables
$EmailFrom = "remote IP Tangohub";
$EmailTo = "simon <simon@tangohub.co.uk>";
$ip=@$REMOTE_ADDR;
$Subject = "th ip " . $_SERVER['REMOTE_ADDR'] ." events page"; 
$Name = "Remote IP";



// prepare email body text
$Body .= $_SERVER['REMOTE_ADDR']; 

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: $Name <$EmailFrom>");



 // send copy of email to visitor
//mail("$Name <$EmailFrom>", "eyetoi have received your message '$Subject'", 
//"You wrote: $Message", "From: eyetoi <info@eyetoi.net>");


?>
<?php get_header(); ?>

	<div id="archive-div" class="clear">
    
    <div id='storediv'><p class='topbar'><?php the_title(); ?></p></div>
   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_content(); ?></p>
        	<?php endwhile; endif; ?>
        
    <br class="clear"/>
		<ul>
	
    <?php query_posts("posts_per_page=80&cat=1&orderby=date&order=ASC");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
        
        		<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <h3><?php echo get_post_meta($post->ID,'event_date', true)?></h3>
            	 <a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" align="left" hspace="5px" alt="blog image"/></a>
            	<p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>"><p>more...</p></a><br class="clear"/>
                <br />
                <hr/>
               
               
               
        
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