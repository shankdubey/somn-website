<?php
defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
  <article class="archive-card">
    <a href="<?php the_permalink(); ?>" class="archive-card-image-link">
      <?php echo $product->get_image( 'large' ); ?>
    </a>
    <div class="archive-card-body">
      <p class="archive-card-kicker"><?php echo wp_kses_post( wc_get_product_category_list( $product->get_id(), ', ' ) ); ?></p>
      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 14 ) ); ?></p>
      <div class="archive-card-bottom">
        <span><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
        <a href="<?php the_permalink(); ?>" class="abtsm2"><?php esc_html_e( 'Shop', 'somn' ); ?></a>
      </div>
    </div>
  </article>
</li>
