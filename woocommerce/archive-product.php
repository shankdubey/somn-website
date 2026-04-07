<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$product_categories = get_terms(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
	)
);
?>

<main class="site-main">
  <section class="archive-section pt-0">
    <div class="container-fluid px-4 px-md-5">
      <div class="archive-toolbar">
        <div>
          <h1>
            <?php woocommerce_page_title(); ?>
            <span class="archive-result">(<?php echo esc_html( wc_get_loop_prop( 'total' ) ); ?>)</span>
          </h1>
          <?php do_action( 'woocommerce_archive_description' ); ?>
        </div>
        <div class="archive-sort">
          <label for="woocommerce-ordering"><?php esc_html_e( 'Sort', 'somn' ); ?></label>
          <?php woocommerce_catalog_ordering(); ?>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-3">
          <aside class="archive-filters">
            <div class="filter-block">
              <h6><?php esc_html_e( 'Category', 'somn' ); ?></h6>
              <label><a href="<?php echo esc_url( somn_get_shop_url() ); ?>"><?php esc_html_e( 'All Products', 'somn' ); ?></a></label>
              <?php foreach ( $product_categories as $category ) : ?>
                <label>
                  <a href="<?php echo esc_url( get_term_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                </label>
              <?php endforeach; ?>
            </div>

            <?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
              <?php dynamic_sidebar( 'shop-sidebar' ); ?>
            <?php endif; ?>
          </aside>
        </div>

        <div class="col-lg-9">
          <?php if ( woocommerce_product_loop() ) : ?>
            <?php woocommerce_product_loop_start(); ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php wc_get_template_part( 'content', 'product' ); ?>
            <?php endwhile; ?>
            <?php woocommerce_product_loop_end(); ?>

            <?php do_action( 'woocommerce_after_shop_loop' ); ?>
          <?php else : ?>
            <p class="archive-empty"><?php esc_html_e( 'No products were found matching your selection.', 'somn' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer( 'shop' ); ?>
