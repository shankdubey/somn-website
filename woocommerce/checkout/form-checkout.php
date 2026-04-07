<?php
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_checkout_form', $checkout );

if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}
?>

<section class="checkout-page" style="padding-top: 3rem;">
  <div class="container-fluid px-4 px-md-5">
    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
      <div class="row g-4">
        <div class="col-xl-8">
          <div class="checkout-form-wrap">
            <div class="cart-panel-head d-flex justify-content-between align-items-center">
              <h2><?php esc_html_e( 'Checkout', 'somn' ); ?></h2>
            </div>
            <div class="checkout-progress">
              <span class="active"><?php esc_html_e( '1. Information', 'somn' ); ?></span>
              <span><?php esc_html_e( '2. Shipping', 'somn' ); ?></span>
              <span><?php esc_html_e( '3. Payment', 'somn' ); ?></span>
              <span><?php esc_html_e( '4. Review', 'somn' ); ?></span>
            </div>

            <?php if ( $checkout->get_checkout_fields() ) : ?>
              <div class="checkout-block">
                <h2><?php esc_html_e( 'Contact', 'somn' ); ?></h2>
                <?php do_action( 'woocommerce_checkout_billing' ); ?>
              </div>

              <div class="checkout-block">
                <h2><?php esc_html_e( 'Shipping Address', 'somn' ); ?></h2>
                <?php do_action( 'woocommerce_checkout_shipping' ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xl-4">
          <aside class="checkout-summary">
            <h2><?php esc_html_e( 'Order Summary', 'somn' ); ?></h2>
            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
          </aside>
        </div>
      </div>
    </form>
  </div>
</section>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
