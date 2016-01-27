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

<div id="job" class="moduletable">
  <div class="custom">
	<div class="full-width" style="background:#fff;">
		<div class="container">
		  <div class="text-block">
			<h2><?php the_title(); ?></h2>
        </div>
        <div class="job">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
		  </div>
	  </div>
	</div>
  </div>
</div>

<?php get_footer(); ?>
