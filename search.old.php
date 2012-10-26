<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<div id="main-div">
              <h2>Search Results</h2>
      
              <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
      
              <?php while (have_posts()) : the_post(); ?>
      
                  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
                      <h2><?php the_title(); ?></h2>
      
                      <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
      
                      <div class="entry">
                          <?php the_excerpt(); ?>
                      </div>
      
                  </div>
      
              <?php endwhile; ?>
      
              <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		</div>
	<?php else : ?>
		<div id="main-div">
			<h2>No posts found.</h2>
		</div>
	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>