<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$front_page_id       = (int) get_option( 'page_on_front' );
$front_page_template = $front_page_id ? get_page_template_slug( $front_page_id ) : '';

// Let the assigned static front page template render when one is selected in wp-admin.
if ( $front_page_template ) {
	$front_page_template_path = locate_template( $front_page_template );

	if ( $front_page_template_path ) {
		include $front_page_template_path;
		return;
	}
}

get_header();
?>

<main class="site-main default-page">
	<section class="contact-page-section" style="padding-top: 3rem;">
		<div class="container-fluid px-4 px-md-5">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'contact-form-wrap' ); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<article class="contact-form-wrap">
					<h1><?php esc_html_e( 'Home', 'somn' ); ?></h1>
				</article>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
