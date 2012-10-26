<?php

	/*
	    Template Name: groups
    */

?>


<?php

// get posted data into local variables
$EmailFrom = "remote IP Tangohub";
$EmailTo = "simon <simon@tangohub.co.uk>";
$ip=@$REMOTE_ADDR;
$Subject = "th ip " . $_SERVER['REMOTE_ADDR'] ." groups page"; 
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
    <br class="clear"/><br class="clear"/>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_content(); ?></p>
        	<?php endwhile; endif; ?>
        
        <div class="msg_list">
       
       
       
       
	<?php query_posts("posts_per_page=0&cat=3");?>
	<h2 class="msg_head">all <?php echo get_cat_name(3) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		   
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    
    <br/>
    
    
    	
    <?php query_posts("posts_per_page=0&cat=19");?>
    <h2 class="msg_head"><?php echo get_cat_name(19) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title();?> <?php $cat_id ?> </h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    <br/>
    
    
    
    
    <?php query_posts("posts_per_page=0&cat=18");?>
	  <h2 class="msg_head"><?php echo get_cat_name(18) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    <br/>
    
    <?php query_posts("posts_per_page=0&cat=20");?>
	<h2 class="msg_head"><?php echo get_cat_name(20) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    <br/>
    
    
        <?php query_posts("posts_per_page=0&cat=21");?>
	<h2 class="msg_head"><?php echo get_cat_name(21) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    <br/>       
    
     <?php query_posts("posts_per_page=0&cat=119");?>
	<h2 class="msg_head"><?php echo get_cat_name(119) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    <br/>
    
    
        <?php query_posts("posts_per_page=0&cat=22");?>
	<h2 class="msg_head"><?php echo get_cat_name(22) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
            <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    <br/>
    
    
    
            <?php query_posts("posts_per_page=0&cat=23");?>
	<h2 class="msg_head"><?php echo get_cat_name(23) ?></h2>
	<div class="msg_body">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        
		
			<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
               
		
             <?php endwhile; ?>
     		</div>
        	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>   
        
            <?php else : ?>
              <h3>Oh dear.. It doesn't look like we have any groups in your selected region. That isn't very good is it?. We can only say sorry and we promise to try harder!</h3>
			   </div>
	<?php endif; ?>
    
    </div>
   
   <br/>
   
   
   
   
    </div> <!--END main-div -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>