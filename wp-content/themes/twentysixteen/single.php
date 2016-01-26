<?php
/**
 * The template for displaying all single posts and attachments
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
		  <div class="news">
			<h2 class="news-title"><?php the_title(); ?></h2>
			<span class="news-time"><?php the_time('Y-m-d') ?></span>
			<div class="news-content"><?php echo $post->post_content;?></div>

		  </div>
	  </div>
	</div>
  </div>
</div>

<?php get_footer(); ?>
