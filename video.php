<?php

	/*
	    Template Name: video
    */

?>
<?php

// get posted data into local variables
$EmailFrom = "remote IP Tangohub";
$EmailTo = "simon <simon@tangohub.co.uk>";
$ip=@$REMOTE_ADDR;
$Subject = "th ip " . $_SERVER['REMOTE_ADDR'] ." video page"; 
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
    <?php the_content(); ?>
		<ul>
	
    <?php query_posts("posts_per_page=1&cat=16");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
        
        		<?php echo "<iframe width='620' height='495' src='http://www.youtube.com/embed/".get_post_meta($post->ID,'video_embed', true)."?rel=0' frameborder='0' allowfullscreen></iframe>"?><br/>
            	<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
            	<div class="date"><?php the_date(); ?></div><br />
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>"><p>more...</p></a><br class="clear"/>
                <br />
                <hr/>
               
               
               
        
            <?php endwhile; ?>
        
        
            <?php else : ?>
        
                <h2>Not Found</h2>
		</li>
	<?php endif; ?>
    
     <?php query_posts("posts_per_page=19&offset=1&cat=16");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<li>
        
               	<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
            	<div class="date"><?php the_date(); ?></div><br />
               <a href="<?php the_permalink() ?>"><img src="http://i1.ytimg.com/vi/<?php echo get_post_meta($post->ID,'video_embed', true)?>/default.jpg" alt="vid image" align="left"/></a>
            	<p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>"><p>more...</p></a><br class="clear"/>
                <br />
                <hr/>
               
        
            <?php endwhile; ?>
        
           
        
            <?php else : ?>
        
                <h2>Not Found</h2>
		</li>
       
	<?php endif; ?>

        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
    </ul>
    </div> <!--END main-div -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>