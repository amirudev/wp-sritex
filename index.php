<?php get_header(); ?>
<main id="content" class="position-relative">
	<?php
	if(!empty(get_theme_mod( 'wp_frontpage-image' ))) {
		echo '<img src="' . get_theme_mod( 'wp_frontpage-image' ) . '" class="w-100" id="content__master-image">';
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

		if ( has_custom_logo() ) {
			?>
			<div id="content__master-item" class="position-absolute w-100 text-center">
				<?php
			    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="mx-auto">'; ?>
				<div data-aos="fade-up" class="font-lato">
					<h1 class="mb-4 mt-2">World Quality Garments</h1>
					<p>Serve best Quality garments since 1988</p>
					<div class="mt-4 flex justify-content-around">
						<div data-aos="flip-left" id="master-item__button" class="text-shadow-none row">
							<a href="#" class="col-10 col-md-3 btn btn-danger rounded-pill my-1 mx-auto">Selengkapnya</a>
							<a href="#" class="col-10 col-md-3 btn btn-warning rounded-pill my-1 mx-auto text-white">Download Portfolio</a>
							<a href="#" class="col-10 col-md-3 btn btn-danger rounded-pill my-1 mx-auto">Hubungi Kami</a>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
	} ?>
	<section id="speciality">
		<div class="row">
			<div class="col-12 col-lg-6 text-center my-4">
				<div data-aos="zoom-in">
					<div class="icon-box my-2 mx-auto text-danger p-3">
						<object data="<?php echo get_template_directory_uri() . '/assets/svg/sewing.svg' ?>" fill="red" class="w-100"></object>
					</div>
					<p class="fs-5 fw-bold my-3">Best Quality</p>
					<p class="speciality__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
			</div>
			<div class="col-12 col-lg-6 text-center my-4">
				<div data-aos="zoom-in">
					<div class="icon-box my-2 mx-auto text-danger p-3">
						<object data="<?php echo get_template_directory_uri() . '/assets/svg/yarn.svg' ?>" fill="red" class="w-100"></object>
					</div>
					<p class="fs-5 fw-bold my-3">Best Materials</p>
					<p class="speciality__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="products" class="position-relative">
		<?php
		if(!empty(get_theme_mod( 'wp_frontpage-image' ))) {
			echo '<img src="' . get_theme_mod( 'wp_frontpage-image' ) . '" class="w-100 mt-4" id="products__banner-image">';
		} ?>
		<div id="products__banner-item" class="position-absolute w-100">
			<h4 class="fs-4 fw-bold text-white text-center">Hasil Produksi Kami</h4>
		</div>
		<div class="row w-full text-center">
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 p-4 products__item">
				<div data-aos="zoom-in-up">
					<img src="<?php echo get_template_directory_uri() . '/assets/baju.png' ?>" class="w-100">
				</div>
			</div>
		</div>
	</section>
	<section id="info" class="text-white text-center">
		<div class="w-full bg-primary p-5">
			<p class="fs-1 fw-bold">What we Do</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 p-0 info__banner-first">
				
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
				
			</div>
			<div class="col-12 col-md-6 p-0 info__banner-second">
				
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
				
			</div>
			<div class="col-12 col-md-6 p-5"></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

<style>
	.info__banner-first {
		background-image: url("<?php echo get_theme_mod( 'wp_frontpage-image' ) ?>");
		height: 300px;
		object-fit: cover;
		filter: brightness(50%);
	}
</style>