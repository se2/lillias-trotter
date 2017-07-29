	<?php if (is_front_page()): ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		</div>
	<footer class="bg-cover footer" style="background-image: url('<?php echo IMG_PATH; ?>/footer-bg.png');">
		<div class="footer-content">
			<div class="grid-col s-11 sm-12 m-14 l-14 lg-14 col-1">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-1' ); ?>
				<?php endif; ?>
				<div class="footer-divider"></div>
			</div>
			<div class="grid-col s-11 sm-12 m-14 l-14 lg-14 col-2">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-2' ); ?>
				<?php endif; ?>
				<div class="footer-divider"></div>
			</div>
			<div class="grid-col s-11 sm-12 m-14 l-14 lg-14 col-3">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php endif; ?>
				<div class="footer-divider"></div>
			</div>
			<div class="grid-col s-11 sm-12 m-14 l-14 lg-14 col-4">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer>
	<?php else: ?>
	<footer class="bg-cover subpage-footer" style="background-image: url('<?php echo IMG_PATH; ?>/subpage-footer-bg.png');">
		<div class="container">
			<div class="social-footer">
				<ul class="social-list">
					<?php if (get_field('contact_email', 'option')): ?>
					<li class="social-item">
						<a href="mailto:<?php the_field('contact_email', 'option'); ?>" title="Email">
							<img src="<?php echo IMG_PATH; ?>/footer-email.png" alt="">
						</a>
					</li>
					<?php endif; ?>
					<?php if (get_field('social', 'option')):
						$socials = (get_field('social', 'option')); ?>
					<?php foreach ($socials as $key => $social) : ?>
					<li class="social-item">
						<a href="<?php echo $social['social_link']; ?>">
							<img src="<?php echo $social['social_icon']; ?>" alt="<?php echo $social['social_host']; ?>" title="<?php echo $social['social_host']; ?>">
						</a>
					</li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>
	<?php endif; ?>

	<?php wp_footer(); ?>

</body>