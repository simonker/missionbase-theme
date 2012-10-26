<?php

	/*
	    Template Name: header and content - no images
    */

?>

<script type="text/javascript">
	function swapdiv(where,what) { // get data from source (what)	
	 document.getElementById(where).innerHTML="<img src='/wp-content/uploads/"+what+"-620x374.jpg'/>";
	}
</script>


<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="main-div" class="clear">
 
              
        <br/><br/>
					
        <p><?php the_content(); ?></p>
        
         <br/>   
         
	<?php endwhile; endif; ?>



    </div>
    </div>
	


<?php get_footer(); ?>