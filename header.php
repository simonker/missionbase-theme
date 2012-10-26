<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Person" <?php language_attributes(); ?> >

<head >
	<meta charset="<?php bloginfo('charset'); ?>" />
	
    <meta itemprop="name" content="Simon Ker">
	<meta itemprop="description" content="Graphics and Web Design by Simon Ker">
    
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
  	
    <link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/favicon.ico">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/home.css" />
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/footer.css" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 

    
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29373454-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
$(document).ready( function (){
    $(".div1").mouseenter(function(){ 
		  	
		
		
				$(this).find(".hider").animate({
    				top: '-160px'
 				 }, 300);
				
				
				 
				$(this).mouseleave(function(){ 
					$(this).find(".hider").animate({
    				top: '-60px'
 				 }, 500)
				 
				
				});
		
	});
});
</script>
</head>

<body <?php body_class(); ?>>
	<div id="header">
        <div id="headercontents">
                <div id="logo"><a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('description'); ?>" style="width:116px;"/></a></div>
                
                
                <h1><?php bloginfo('name'); ?></h1>
                <div id="buttons">
                    <div style="float:right; margin-left:10px;"><g:plusone size="medium" annotation="bubble" width="100"></g:plusone></div>
                </div>
                    <div id="nav-div" class="clear">
                
                    
                    <div class="description"><?php bloginfo('description'); ?></div><div class="menu-buttons"><?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?></div>
                    <p class="clear"/>
                 
                </div>
        </div>
	</div>
        
	<div id="page-wrap" class="clear" >

		