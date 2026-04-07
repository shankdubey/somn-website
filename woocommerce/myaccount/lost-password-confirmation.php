<?php
/**
 * Lost password confirmation text.
 *
 * @package WooCommerce\Templates
 * @version 3.9.0
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="wc-auth-shell wc-auth-shell-recovery">
  <div class="row g-4 align-items-stretch">
    <div class="col-lg-5">
      <div class="wc-auth-showcase wc-auth-showcase-recovery">
        <p class="wc-auth-kicker"><?php esc_html_e( 'Check Your Inbox', 'somn' ); ?></p>
        <h2><?php esc_html_e( 'Reset Email Sent', 'somn' ); ?></h2>
        <p><?php esc_html_e( 'If an account matches the details you entered, a password reset email is on its way.', 'somn' ); ?></p>

        <div class="wc-auth-points wc-auth-points-recovery">
          <article>
            <span>01</span>
            <p><?php esc_html_e( 'Look for an email from your SOMN store account.', 'somn' ); ?></p>
          </article>
          <article>
            <span>02</span>
            <p><?php esc_html_e( 'Give it a few minutes to arrive and check your spam folder as well.', 'somn' ); ?></p>
          </article>
          <article>
            <span>03</span>
            <p><?php esc_html_e( 'Use the secure link inside that email to finish resetting your password.', 'somn' ); ?></p>
          </article>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="wc-auth-card">
        <div class="wc-auth-block wc-auth-block-recovery">
          <p class="wc-auth-label"><?php esc_html_e( 'Email Sent', 'somn' ); ?></p>
          <h3><?php esc_html_e( 'Password Reset Email Has Been Sent', 'somn' ); ?></h3>
          <?php wc_print_notice( esc_html__( 'Password reset email has been sent.', 'woocommerce' ) ); ?>

          <?php do_action( 'woocommerce_before_lost_password_confirmation_message' ); ?>

          <p class="wc-auth-helper wc-auth-helper-intro"><?php echo esc_html( apply_filters( 'woocommerce_lost_password_confirmation_message', __( 'A password reset email has been sent to the email address on file for your account, but may take several minutes to show up in your inbox. Please wait at least 10 minutes before attempting another reset.', 'woocommerce' ) ) ); ?></p>

          <?php do_action( 'woocommerce_after_lost_password_confirmation_message' ); ?>

          <div class="wc-auth-actions wc-auth-actions-recovery">
            <span><?php esc_html_e( 'Want to try signing in again?', 'somn' ); ?></span>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'Back to login', 'somn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
