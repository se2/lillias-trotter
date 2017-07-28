<?php get_header(); ?>

<?php if (get_field('home_hero', 'option')) : ?>
<div class="home-hero" style="background-image: url('<?php the_field('home_hero', 'option'); ?>');">
</div>
<?php endif; ?>

<?php get_footer(); ?>