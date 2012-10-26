<?php

	/*
	    Template Name: naked - nothing but the html
    */

?>

<script type="text/javascript">
	function swapdiv(where,what) { // get data from source (what)	
	 document.getElementById(where).innerHTML="<img src='/wp-content/uploads/"+what+"-620x374.jpg'/>";
	}
</script>


<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="nav-div" class="clear">
    <hr/>
            
        	<div class="description"><?php bloginfo('description'); ?></div><?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
       		<p class="clear"/>
    <hr/>
    </div>
	<div id="main-div" class="clear">
 
               
        
							
				
        <p><?php the_content(); ?></p>
        
         <br/>   
         
	<?php endwhile; endif; ?>



    </div>
	


<?php get_footer(); ?>