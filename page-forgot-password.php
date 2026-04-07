<?php get_header(); ?>

<?php $auth_notice = somn_get_auth_notice(); ?>

<main class="site-main">
  <section class="wc-auth-shell wc-auth-shell-recovery">
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-5">
        <div class="wc-auth-showcase wc-auth-showcase-recovery">
          <p class="wc-auth-kicker"><?php esc_html_e( 'Account Recovery', 'somn' ); ?></p>
          <h2><?php esc_html_e( 'Reset Your Password', 'somn' ); ?></h2>
          <p><?php esc_html_e( 'Secure your account access in a few calm steps. Enter the email address or username tied to your profile and we will send reset instructions.', 'somn' ); ?></p>

          <div class="wc-auth-points wc-auth-points-recovery">
            <article>
              <span>01</span>
              <p><?php esc_html_e( 'Use the email or username connected to your existing account.', 'somn' ); ?></p>
            </article>
            <article>
              <span>02</span>
              <p><?php esc_html_e( 'Open the reset email and follow the secure link we send you.', 'somn' ); ?></p>
            </article>
            <article>
              <span>03</span>
              <p><?php esc_html_e( 'Choose a new password, then return to sign in as usual.', 'somn' ); ?></p>
            </article>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="wc-auth-card">
          <div class="wc-auth-block wc-auth-block-recovery">
            <p class="wc-auth-label"><?php esc_html_e( 'Password Help', 'somn' ); ?></p>
            <h3><?php esc_html_e( 'Send Reset Link', 'somn' ); ?></h3>
            <p class="wc-auth-helper wc-auth-helper-intro"><?php esc_html_e( 'We will email password reset instructions if we find a matching account.', 'somn' ); ?></p>

            <?php if ( ! empty( $auth_notice['message'] ) ) : ?>
              <div class="auth-notice auth-notice-<?php echo esc_attr( $auth_notice['type'] ? $auth_notice['type'] : 'error' ); ?>">
                <?php echo esc_html( $auth_notice['message'] ); ?>
              </div>
            <?php endif; ?>

            <?php if ( ! is_user_logged_in() ) : ?>
              <form method="post" class="auth-form auth-form-recovery">
                <input type="hidden" name="somn_action" value="forgot_password" />
                <?php wp_nonce_field( 'somn_forgot_password_action', 'somn_forgot_password_nonce' ); ?>

                <p class="form-row">
                  <label for="somn-forgot-password"><?php esc_html_e( 'Email Or Username', 'somn' ); ?></label>
                  <input type="text" id="somn-forgot-password" name="user_login" required />
                </p>

                <button type="submit" class="button"><?php esc_html_e( 'Send Reset Link', 'somn' ); ?></button>
              </form>
            <?php else : ?>
              <div class="auth-notice auth-notice-success">
                <?php esc_html_e( 'You are already signed in. You can manage your account directly from your dashboard.', 'somn' ); ?>
              </div>
              <a href="<?php echo esc_url( somn_get_account_page_url() ); ?>" class="button"><?php esc_html_e( 'Go To My Account', 'somn' ); ?></a>
            <?php endif; ?>

            <div class="wc-auth-actions wc-auth-actions-recovery">
              <span><?php esc_html_e( 'Remembered your details?', 'somn' ); ?></span>
              <a href="<?php echo esc_url( somn_get_login_page_url() ); ?>"><?php esc_html_e( 'Back to login', 'somn' ); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
