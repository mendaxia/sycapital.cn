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
			<h2><?php the_title(); ?></h2>
			<div>
                <?php the_content(); ?>
            </div>
		  </div>
	  </div>
	</div>
  </div>
</div>

<?php get_footer(); ?>
