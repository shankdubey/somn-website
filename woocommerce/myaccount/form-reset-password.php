<?php
/**
 * Lost password reset form.
 *
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_reset_password_form' );
?>

<section class="wc-auth-shell wc-auth-shell-recovery">
  <div class="row g-4 align-items-stretch">
    <div class="col-lg-5">
      <div class="wc-auth-showcase wc-auth-showcase-recovery">
        <p class="wc-auth-kicker"><?php esc_html_e( 'Secure Reset', 'somn' ); ?></p>
        <h2><?php esc_html_e( 'Choose A New Password', 'somn' ); ?></h2>
        <p><?php echo esc_html( apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'woocommerce' ) ) ); ?></p>

        <div class="wc-auth-points wc-auth-points-recovery">
          <article>
            <span>01</span>
            <p><?php esc_html_e( 'Use a password that is unique to this account.', 'somn' ); ?></p>
          </article>
          <article>
            <span>02</span>
            <p><?php esc_html_e( 'Repeat it once more to confirm there are no typing mistakes.', 'somn' ); ?></p>
          </article>
          <article>
            <span>03</span>
            <p><?php esc_html_e( 'Save the new password and return to your SOMN account.', 'somn' ); ?></p>
          </article>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="wc-auth-card">
        <div class="wc-auth-block wc-auth-block-recovery">
          <p class="wc-auth-label"><?php esc_html_e( 'Password Reset', 'somn' ); ?></p>
          <h3><?php esc_html_e( 'Create New Password', 'somn' ); ?></h3>
          <p class="wc-auth-helper wc-auth-helper-intro"><?php esc_html_e( 'Choose a strong password you have not used before for this account.', 'somn' ); ?></p>

          <form method="post" class="woocommerce-ResetPassword lost_reset_password auth-form auth-form-recovery">
            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
              <label for="password_1"><?php esc_html_e( 'New password', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
              <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_1" id="password_1" autocomplete="new-password" required aria-required="true" />
            </p>

            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
              <label for="password_2"><?php esc_html_e( 'Re-enter new password', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
              <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_2" id="password_2" autocomplete="new-password" required aria-required="true" />
            </p>

            <input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
            <input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />

            <?php do_action( 'woocommerce_resetpassword_form' ); ?>

            <p class="woocommerce-form-row form-row">
              <input type="hidden" name="wc_reset_password" value="true" />
              <button type="submit" class="woocommerce-Button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" value="<?php esc_attr_e( 'Save', 'woocommerce' ); ?>"><?php esc_html_e( 'Save', 'woocommerce' ); ?></button>
            </p>

            <?php wp_nonce_field( 'reset_password', 'woocommerce-reset-password-nonce' ); ?>
          </form>

          <div class="wc-auth-actions wc-auth-actions-recovery">
            <span><?php esc_html_e( 'Need the login screen instead?', 'somn' ); ?></span>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'Back to login', 'somn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
do_action( 'woocommerce_after_reset_password_form' );


