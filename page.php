<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page page-body">

	<div class="container">
		<div class="column-featured-img">
			<?php if (has_post_thumbnail()): ?>
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
				$thumb_url = $thumb_url_array[0];
			?>
			<div class="featured-img-holder bg-cover" style="background-image: url(<?php echo $thumb_url; ?>);"></div>
			<?php endif; ?>
		</div>
		<div class="column-content">
			<?php the_content(); ?>
		</div>
	</div>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>