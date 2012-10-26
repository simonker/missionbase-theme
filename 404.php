<?php get_header(); ?>

	<div id="nav-div" class="clear">
    <hr/>
            <nav>
        	<?php wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
       		</nav>
            <div id="searchdiv"><?php get_search_form(); ?></div>
    <hr/>
    </div>

<div class="fourohfour">
	<h3>404</h3>
	<hr/>
    <p>Terribly sorry! The page that you are after seems to be missing (probably google linking to old things again). <br/>
    Maybe you could try using the search box or the menu above to find what you are looking for</p><br/>
    <p><a href="<?php bloginfo('blog_url'); ?>"><?php bloginfo('blog_url'); ?> home page</a></p>
    <hr/>
	

</div>

<?php get_footer(); ?>