<?php get_header(); ?>

<?php $auth_notice = somn_get_auth_notice(); ?>

<main class="site-main">
  <section class="auth-shell auth-shell-login">
    <div class="container-fluid px-4 px-md-5">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-6">
          <div class="auth-showcase">
            <p class="auth-eyebrow"><?php esc_html_e( 'Member Access', 'somn' ); ?></p>
            <h1><?php esc_html_e( 'Sign In To Your Sleep Space', 'somn' ); ?></h1>
            <p class="auth-copy"><?php esc_html_e( 'Review orders, update account details, and keep every SOMN purchase close at hand from one refined dashboard.', 'somn' ); ?></p>

            <div class="auth-feature-list">
              <div><span>01</span><p><?php esc_html_e( 'Track deliveries and recent orders without leaving the account hub.', 'somn' ); ?></p></div>
              <div><span>02</span><p><?php esc_html_e( 'Manage billing details and saved addresses for faster checkout.', 'somn' ); ?></p></div>
              <div><span>03</span><p><?php esc_html_e( 'Access a calmer, cleaner customer experience designed around the brand.', 'somn' ); ?></p></div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="auth-card">
            <p class="auth-kicker"><?php esc_html_e( 'Welcome Back', 'somn' ); ?></p>
            <h2><?php esc_html_e( 'Login', 'somn' ); ?></h2>

            <?php if ( is_user_logged_in() ) : ?>
              <div class="auth-notice auth-notice-success">
                <?php esc_html_e( 'You are already signed in.', 'somn' ); ?>
              </div>
              <a href="<?php echo esc_url( somn_get_account_page_url() ); ?>" class="button"><?php esc_html_e( 'Go To My Account', 'somn' ); ?></a>
            <?php else : ?>
              <?php if ( ! empty( $auth_notice['message'] ) ) : ?>
                <div class="auth-notice auth-notice-<?php echo esc_attr( $auth_notice['type'] ? $auth_notice['type'] : 'error' ); ?>">
                  <?php echo esc_html( $auth_notice['message'] ); ?>
                </div>
              <?php endif; ?>

              <form method="post" class="auth-form">
                <input type="hidden" name="somn_action" value="login" />
                <?php wp_nonce_field( 'somn_login_action', 'somn_login_nonce' ); ?>

                <p class="form-row">
                  <label for="somn-login-email"><?php esc_html_e( 'Email Or Username', 'somn' ); ?></label>
                  <input type="text" id="somn-login-email" name="log" required />
                </p>

                <p class="form-row">
                  <label for="somn-login-password"><?php esc_html_e( 'Password', 'somn' ); ?></label>
                  <input type="password" id="somn-login-password" name="pwd" required />
                </p>

                <p class="auth-inline-row">
                  <label class="auth-check">
                    <input type="checkbox" name="rememberme" value="forever" />
                    <span><?php esc_html_e( 'Keep me signed in', 'somn' ); ?></span>
                  </label>
                  <a href="<?php echo esc_url( somn_get_forgot_password_page_url() ); ?>"><?php esc_html_e( 'Forgot password?', 'somn' ); ?></a>
                </p>

                <button type="submit" class="button"><?php esc_html_e( 'Sign In', 'somn' ); ?></button>
              </form>

              <p class="auth-switch"><?php esc_html_e( 'New here?', 'somn' ); ?> <a href="<?php echo esc_url( somn_get_register_page_url() ); ?>"><?php esc_html_e( 'Create an account', 'somn' ); ?></a></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
