<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="news" class="moduletable">
  <div class="custom">
	<div class="full-width" style="background:#fff;">
		<div class="container" style="width:80%;">
		  <div class="text-block">
			<h2>松源动态</h2>
		  </div>

		  <?php if ( have_posts() ) : ?>


		  <?php
			  // Start the Loop.
			  while ( have_posts() ) : the_post();

				  /*
				   * Include the Post-Format-specific template for the content.
				   * If you want to override this in a child theme, then include a file
				   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				   */

				  ?>
				  <div class="news">
					  <a class="news-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					  <p class="news-time"><?php the_time('Y-m-d') ?></p>
					  <p class="news-text"><?php echo mb_strimwidth(strip_tags(apply_filters(‘the_content’, $post->post_content)), 0, 360,”……”); ?></p>
					  <p><a href="<?php echo get_permalink(); ?>"> [ 阅读详情 → ]</a></p>
				  </div>
				  <?php

			  // End the loop.
			  endwhile;
			  ?>
			  <div class="navigation">
			     <div class="alignleft">
			      <?php posts_nav_link('','','&laquo; Previous Entries') ?>
			     </div>
			     <div class="alignright">
			      <?php posts_nav_link('','Next Entries &raquo;','') ?>
			     </div>
			   </div>
			  <?php

		  // If no content, include the "No posts found" template.
		  else :
			  get_template_part( 'template-parts/content', 'none' );

		  endif;
		  ?>
	  </div>
	</div>
  </div>
</div>

<?php get_footer(); ?>
