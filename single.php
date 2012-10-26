<?php

	/*
	    Template Name: regular layout 2 columns
    */

?>

<script type="text/javascript">
	function swapdiv(where,what) { // get data from source (what)	
	 document.getElementById(where).innerHTML="<img src='<?php bloginfo('wpurl'); ?>/wp-content/uploads/"+what+"-620x374.jpg'/>";
	}
</script>


<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	

	<div id="main-div" class="clear">
 				    <br/><br/><br/>
               
               
                
                
        		<?php $image= get_post_meta($post->ID, 'blog_image', true); 
							
				if  (!$image=="") {
				echo"<div id='heroimage' class='clear'>";
				echo "<img src='../wp-content/uploads/". get_post_meta($post->ID,'blog_image', true)."'/>";
				echo "<div class='date'>". get_post_meta($post->ID,'blog_image_description', true)."</div><br/>";
			
				
        		
				$eximage1= get_post_meta($post->ID, 'extra_image_1', true); 
				if  (!$eximage1=="") {
				$tempurl=get_post_meta($post->ID,'extra_image_1', true);
				echo "<a><img src='../wp-content/uploads/". get_post_meta($post->ID,'extra_image_1', true)."'/></a>";
				echo "<div class='date'>". get_post_meta($post->ID,'extra_image_1_description', true)."</div><br/>";
					}else{}
				
				
				$eximage2= get_post_meta($post->ID, 'extra_image_2', true); 
				if  (!$eximage2=="") {
				$tempurl=get_post_meta($post->ID,'extra_image_2', true);
				echo "<a><img src='../wp-content/uploads/". get_post_meta($post->ID,'extra_image_2', true)."'/></a>";
				echo "<div class='date'>". get_post_meta($post->ID,'extra_image_2_description', true)."</div><br/>";
					}else{}
					
				$eximage3= get_post_meta($post->ID, 'extra_image_3', true); 
				if  (!$eximage3=="") {
				$tempurl=get_post_meta($post->ID,'extra_image_3', true);
				echo "<a><img src='../wp-content/uploads/". get_post_meta($post->ID,'extra_image_3', true)."'/></a>";
				echo "<div class='date'>". get_post_meta($post->ID,'extra_image_3_description', true)."</div><br/>";
					}else{}
					
				$eximage4= get_post_meta($post->ID, 'extra_image_4', true); 
				if  (!$eximage4=="") {
				$tempurl=get_post_meta($post->ID,'extra_image_4', true);
				echo "<a><img src='../wp-content/uploads/". get_post_meta($post->ID,'extra_image_4', true)."'/></a>";
				echo "<div class='date'>". get_post_meta($post->ID,'extra_image_4_description', true)."</div><br/>";
					}else{}

				$eximage5= get_post_meta($post->ID, 'extra_image_5', true); 
				if  (!$eximage5=="") {
				$tempurl=get_post_meta($post->ID,'extra_image_5', true);
				echo "<a><img src='../wp-content/uploads/". get_post_meta($post->ID,'extra_image_5', true)."'/></a>";
				echo "<div class='date'>". get_post_meta($post->ID,'extra_image_5_description', true)."</div><br/>";
				
				echo"</div>
				<div id='rightcol'>"
				;
				
				
					}else{}	
					
					echo"
              </div>
        		";
					
					}		
				?>
               
         <?php $herocode= get_post_meta($post->ID, 'code_above_subject', true);
		  $heroswf= get_post_meta($post->ID, 'swf_above_subject', true);
          if  (!$herocode=="") {
			  	  echo "<div>" . get_post_meta($post->ID,'code_above_subject', true) . "</div><div>";
		 
		  }else if (!$heroswf=="") {
		wp_swfobject_echo(get_post_meta($post->ID, 'swf_above_subject', true), get_post_meta($post->ID, 'swf_width', true),get_post_meta($post->ID, 'swf_height', true)); 
		echo"<div>";
		
		  }
           ?>   
           

              
        <h2><em><?php the_title(); ?></em></h2><hr/>
        <div class="date"><?php the_date(); ?></div>
      	
        <p><?php the_content(); ?></p>
        <br/>
    	<br/>
        <hr/>
        
    

           
           
           <p class="clear"/>
        <br/>

        <hr />
        <div id="fb-root"><?php if (function_exists('easy_retweet_button')) {
			echo easy_retweet_button();
		}?></div><script src="http://connect.facebook.net/en_US/all.js#appId=111175202307704&amp;xfbml=1"></script><fb:like href="<?php the_permalink() ?>" send="true" width="450" show_faces="true" font="arial"></fb:like>
         <br class="clear" />
         <hr/>
         <br/> 
         <?php
		 global $post;
		$thePostID = $post->ID;
		 ?>  
           <?php $thiscatno = get_the_category($thePostID); ?>
         
	<?php endwhile; endif; ?>
    	
        <p><?php echo $thiscatno ?></p>
    
    <?php query_posts("posts_per_page=5&cat=$thiscatno");?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        		<div class="div1"> 
         		<div><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/<?php echo get_post_meta($post->ID,'blog_300', true)?>" width="300" alt="blog image"/></a></div>
            	<div class="hider">
                    <div class="titlediv"><a href="<?php the_permalink() ?>"><h2 style="text-decoration:none;"><?php the_title(); ?></h2></a></div>
                    <div class="littlehr"><hr/></div>
                    <div class="date"><?php new_excerpt(80);?></div>
                    <div class="morelink"><a href="<?php the_permalink() ?>">View Me »</a></div>
                </div>
      
           
               </div>
        
            <?php endwhile; ?>
        
            <?php else : ?>
        
                <h2>Not Found</h2>
             
        
	<?php endif; ?>

	</div>
</div>
    </div>
	


<?php get_footer(); ?>