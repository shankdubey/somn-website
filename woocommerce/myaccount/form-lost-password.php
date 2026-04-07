<?php
/**
 * Lost password form
 *
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>

<section class="wc-auth-shell wc-auth-shell-recovery">
  <div class="row g-4 align-items-stretch">
    <div class="col-lg-5">
      <div class="wc-auth-showcase wc-auth-showcase-recovery">
        <p class="wc-auth-kicker"><?php esc_html_e( 'Account Recovery', 'somn' ); ?></p>
        <h2><?php esc_html_e( 'Reset Your Password', 'somn' ); ?></h2>
        <p><?php echo esc_html( apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ) ); ?></p>

        <div class="wc-auth-points wc-auth-points-recovery">
          <article>
            <span>01</span>
            <p><?php esc_html_e( 'Enter the email address or username connected to your SOMN account.', 'somn' ); ?></p>
          </article>
          <article>
            <span>02</span>
            <p><?php esc_html_e( 'Check your inbox for a secure link to continue the reset process.', 'somn' ); ?></p>
          </article>
          <article>
            <span>03</span>
            <p><?php esc_html_e( 'Choose a new password and sign back in with confidence.', 'somn' ); ?></p>
          </article>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="wc-auth-card">
        <div class="wc-auth-block wc-auth-block-recovery">
          <p class="wc-auth-label"><?php esc_html_e( 'Password Help', 'somn' ); ?></p>
          <h3><?php esc_html_e( 'Send Reset Link', 'somn' ); ?></h3>
          <p class="wc-auth-helper wc-auth-helper-intro"><?php esc_html_e( 'We will email password reset instructions to the address connected with your account.', 'somn' ); ?></p>

          <form method="post" class="woocommerce-ResetPassword lost_reset_password auth-form auth-form-recovery">
            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
              <label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
              <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" required aria-required="true" />
            </p>

            <?php do_action( 'woocommerce_lostpassword_form' ); ?>

            <p class="woocommerce-form-row form-row">
              <input type="hidden" name="wc_reset_password" value="true" />
              <button type="submit" class="woocommerce-Button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
            </p>

            <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
          </form>

          <div class="wc-auth-actions wc-auth-actions-recovery">
            <span><?php esc_html_e( 'Remembered your details?', 'somn' ); ?></span>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'Back to login', 'somn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
do_action( 'woocommerce_after_lost_password_form' );
