<?php get_header(); ?>
<main id="content">
	<?php
	if(!empty(get_theme_mod( 'wp_frontpage-image' ))) {
		echo 'A';
	} else {
		echo 'B';
	}?>
</main>
<?php get_footer(); ?>