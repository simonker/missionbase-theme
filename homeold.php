<?php

	/*
	    Template Name: blog homepage
    */

?>
<?php

// get posted data into local variables
$EmailFrom = "remote IP Tangohub";
$EmailTo = "simon <simon@tangohub.co.uk>";
$ip=@$REMOTE_ADDR;
$Subject = "th ip " . $_SERVER['REMOTE_ADDR'] ." homepage"; 
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

	<div id="nav-div" class="clear">
    <hr/>
            <nav>
        	<?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
       		</nav>
            <div id="searchdiv"><?php get_search_form(); ?></div>
    <hr/>
    </div>
    
    <div id="main-div" class="clear">

    <?php query_posts("posts_per_page=2&offset=0&cat=15");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
        	<div class="div1"> 
         		<a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" alt="blog image"/></a>
            	<div class="listingheader"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="price"><?php the_excerpt(); ?></div>
                <div class="morelink"><a href="<?php the_permalink() ?>">More...</a></div>
                <p class="clear"/>
        <hr/>  
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
             
        
	<?php endif; ?>
    
    
     <?php query_posts("posts_per_page=1&offset=2&cat=15");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
         	<div class="div2"> 
         		<a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" alt="blog image"/></a>
            	<div class="listingheader"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="price"><?php the_excerpt(); ?></div>
                <div class="morelink"><a href="<?php the_permalink() ?>">More...</a></div>
                <p class="clear"/>
        <hr/>  
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
        
	<?php endif; ?>
    
 
    <?php query_posts("posts_per_page=2&offset=0&cat=15");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
           	<div class="div1"> 
         		<a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" alt="blog image"/></a>
            	<div class="listingheader"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="price"><?php the_excerpt(); ?></div>
                <div class="morelink"><a href="<?php the_permalink() ?>">More...</a></div>
                <p class="clear"/>
        <hr/>  
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
             
        
	<?php endif; ?>
    
    
     <?php query_posts("posts_per_page=1&offset=2&cat=15");?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        	<div class="div2"> 
         		<a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" alt="blog image"/></a>
            	<div class="listingheader"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                <div class="price"><?php the_excerpt(); ?></div>
                <div class="morelink"><a href="<?php the_permalink() ?>">More...</a></div>
                <p class="clear"/>
        <hr/>  
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
             
        
	<?php endif; ?>
        
        <div class="clear"/>
        <hr/><br/>
	
    </div>
    </div> <!--END main-div -->

<!--< ?php get_sidebar(); ?>-->

<?php get_footer(); ?>
