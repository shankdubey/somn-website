<?php
/**
 * Thankyou page
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="checkout-thankyou">
  <div class="container-fluid px-4 px-md-5">
    <?php if ( $order ) : ?>
      <?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>

      <?php if ( $order->has_status( 'failed' ) ) : ?>
        <div class="checkout-thankyou-shell">
          <div class="checkout-thankyou-hero">
            <span class="checkout-thankyou-kicker"><?php esc_html_e( 'Payment Update', 'somn' ); ?></span>
            <h1><?php esc_html_e( 'Order Not Completed', 'somn' ); ?></h1>
            <p class="checkout-thankyou-copy"><?php esc_html_e( 'Your order was created, but the payment was not approved. You can try the payment again or return to your account to review the order.', 'somn' ); ?></p>
          </div>

          <div class="checkout-thankyou-card">
            <h2><?php esc_html_e( 'Next Step', 'somn' ); ?></h2>
            <ul class="checkout-thankyou-overview">
              <li>
                <span class="label"><?php esc_html_e( 'Order number', 'woocommerce' ); ?></span>
                <strong><?php echo esc_html( $order->get_order_number() ); ?></strong>
              </li>
              <li>
                <span class="label"><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
                <strong><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
              </li>
            </ul>
            <div class="checkout-thankyou-actions">
              <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button"><?php esc_html_e( 'Try Payment Again', 'somn' ); ?></a>
              <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button alt-link"><?php esc_html_e( 'My Account', 'somn' ); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="checkout-thankyou-shell">
          <div class="checkout-thankyou-hero">
            <span class="checkout-thankyou-kicker"><?php esc_html_e( 'Order Confirmed', 'somn' ); ?></span>
            <h1><?php esc_html_e( 'Thank You', 'somn' ); ?></h1>
            <p class="checkout-thankyou-copy">
              <?php
              $message = apply_filters(
                'woocommerce_thankyou_order_received_text',
                esc_html__( 'Your order has been received and is now being prepared with care.', 'somn' ),
                $order
              );
              echo esc_html( $message );
              ?>
            </p>

            <div class="checkout-thankyou-points">
              <article>
                <span>01</span>
                <p><?php esc_html_e( 'A confirmation email has been sent with your order details and billing summary.', 'somn' ); ?></p>
              </article>
              <article>
                <span>02</span>
                <p><?php esc_html_e( 'Our team will begin preparing your items and update you as fulfillment progresses.', 'somn' ); ?></p>
              </article>
              <article>
                <span>03</span>
                <p><?php esc_html_e( 'You can revisit your order anytime from your account area.', 'somn' ); ?></p>
              </article>
            </div>
          </div>

          <div class="checkout-thankyou-grid">
            <div class="checkout-thankyou-details">
              <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
              <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
            </div>

            <aside class="checkout-thankyou-card">
              <h2><?php esc_html_e( 'Order Summary', 'somn' ); ?></h2>
              <ul class="checkout-thankyou-overview">
                <li>
                  <span class="label"><?php esc_html_e( 'Order number', 'woocommerce' ); ?></span>
                  <strong><?php echo esc_html( $order->get_order_number() ); ?></strong>
                </li>
                <li>
                  <span class="label"><?php esc_html_e( 'Date', 'woocommerce' ); ?></span>
                  <strong><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></strong>
                </li>
                <?php if ( $order->get_billing_email() ) : ?>
                  <li>
                    <span class="label"><?php esc_html_e( 'Email', 'woocommerce' ); ?></span>
                    <strong><?php echo esc_html( $order->get_billing_email() ); ?></strong>
                  </li>
                <?php endif; ?>
                <li>
                  <span class="label"><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
                  <strong><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
                </li>
                <?php if ( $order->get_payment_method_title() ) : ?>
                  <li>
                    <span class="label"><?php esc_html_e( 'Payment method', 'woocommerce' ); ?></span>
                    <strong><?php echo esc_html( $order->get_payment_method_title() ); ?></strong>
                  </li>
                <?php endif; ?>
              </ul>

              <div class="checkout-thankyou-actions">
                <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="button"><?php esc_html_e( 'Continue Shopping', 'somn' ); ?></a>
                <?php if ( is_user_logged_in() ) : ?>
                  <a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" class="button alt-link"><?php esc_html_e( 'View Order', 'somn' ); ?></a>
                <?php endif; ?>
              </div>

              <p class="checkout-thankyou-note"><?php esc_html_e( 'Need help with your order? Contact the SOMN support team and include your order number for faster assistance.', 'somn' ); ?></p>
            </aside>
          </div>
        </div>
      <?php endif; ?>
    <?php else : ?>
      <div class="checkout-thankyou-empty">
        <span class="checkout-thankyou-kicker"><?php esc_html_e( 'Order Update', 'somn' ); ?></span>
        <h1><?php esc_html_e( 'Thank You', 'somn' ); ?></h1>
        <p class="checkout-thankyou-copy"><?php esc_html_e( 'Your order details are not available right now, but the checkout session has been completed.', 'somn' ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>
