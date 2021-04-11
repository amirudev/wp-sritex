<?php get_header(); ?>
<main id="content">
	<?php
	if(!empty(get_theme_mod( 'wp_frontpage-image' ))) { ?>
		<img src="<?php echo get_theme_mod( 'wp_frontpage-image' ); ?>" class="w-100">
	<?php } ?>
</main>
<?php get_footer(); ?>