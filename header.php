<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
	<div class="bg-white p-1 px-2 d-flex justify-content-between border-bottom">
		<a id="header__logo" href="#">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			 
			if ( has_custom_logo() ) {
			    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="h-100">';
			} else {
			    echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
		?>	
		</a>
		<button id="header__control" class="border-0 bg-transparent my-auto">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
		</button>
	</div>
</header>
<div id="container">