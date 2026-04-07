<?php
defined( 'ABSPATH' ) || exit;
?>

<section class="cart-page">
  <div class="container-fluid px-4 px-md-5">
    <div class="row g-4">
      <div class="col-xl-8">
        <div class="cart-items-panel">
          <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <?php do_action( 'woocommerce_before_cart_table' ); ?>
            <div class="cart-panel-head d-flex justify-content-between align-items-center">
              <h2><?php esc_html_e( 'Your Cart', 'somn' ); ?></h2>
              <span><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?> <?php esc_html_e( 'Products', 'somn' ); ?></span>
            </div>

            <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : ?>
              <?php
              $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
              $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

              if ( ! $_product || ! $_product->exists() || $cart_item['quantity'] <= 0 ) {
                continue;
              }
              ?>
              <article class="cart-item-card">
                <div>
                  <?php echo $_product->get_image( 'woocommerce_thumbnail' ); ?>
                </div>
                <div class="cart-item-content">
                  <div>
                    <p class="cart-item-kicker"><?php echo wp_kses_post( wc_get_product_category_list( $product_id, ', ' ) ); ?></p>
                    <h3><a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>"><?php echo esc_html( $_product->get_name() ); ?></a></h3>
                    <p class="cart-item-meta"><?php echo wc_get_formatted_cart_item_data( $cart_item ); ?></p>
                  </div>
                  <div class="cart-item-actions">
                    <div class="qty-control">
                      <?php
                      woocommerce_quantity_input(
                        array(
                          'input_name'   => "cart[{$cart_item_key}][qty]",
                          'input_value'  => $cart_item['quantity'],
                          'max_value'    => $_product->get_max_purchase_quantity(),
                          'min_value'    => 0,
                          'product_name' => $_product->get_name(),
                        ),
                        $_product,
                        false
                      );
                      ?>
                    </div>
                    <p class="cart-item-price"><?php echo wp_kses_post( WC()->cart->get_product_price( $_product ) ); ?></p>
                    <a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="cart-item-remove"><?php esc_html_e( 'Remove', 'somn' ); ?></a>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>

            <div class="summary-promo mt-4">
              <?php if ( wc_coupons_enabled() ) : ?>
                <input type="text" name="coupon_code" placeholder="<?php esc_attr_e( 'Promo code', 'somn' ); ?>" />
                <button type="submit" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'somn' ); ?>"><?php esc_html_e( 'Apply', 'somn' ); ?></button>
              <?php endif; ?>
              <button type="submit" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'somn' ); ?>"><?php esc_html_e( 'Update Cart', 'somn' ); ?></button>
              <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
            </div>
            <?php do_action( 'woocommerce_cart_actions' ); ?>
            <?php do_action( 'woocommerce_after_cart_table' ); ?>
          </form>

          <div class="cart-support-band">
            <div>
              <h4><?php esc_html_e( 'White-Glove Delivery Included', 'somn' ); ?></h4>
              <p><?php esc_html_e( 'Free premium delivery, in-room setup, and old mattress removal on eligible orders.', 'somn' ); ?></p>
            </div>
            <a href="<?php echo esc_url( somn_get_page_url( 'contact' ) ); ?>" class="btn review-btn2" style="padding: 11px 15px 12px 15px;"><?php esc_html_e( 'Learn More', 'somn' ); ?></a>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <aside class="cart-summary-card">
          <h2><?php esc_html_e( 'Order Summary', 'somn' ); ?></h2>
          <?php woocommerce_cart_totals(); ?>
        </aside>
      </div>
    </div>
  </div>
</section>
