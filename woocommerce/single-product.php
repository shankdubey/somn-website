<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<main class="site-main">
  <?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
    <?php wc_get_template_part( 'content', 'single-product' ); ?>
  <?php endwhile; ?>
</main>

<?php get_footer( 'shop' ); ?>
