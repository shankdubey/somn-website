<?php get_header(); ?>

<?php $auth_notice = somn_get_auth_notice(); ?>

<main class="site-main">
  <section class="auth-shell auth-shell-register">
    <div class="container-fluid px-4 px-md-5">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-5">
          <div class="auth-showcase auth-showcase-light">
            <p class="auth-eyebrow"><?php esc_html_e( 'Create Account', 'somn' ); ?></p>
            <h1><?php esc_html_e( 'Join The SOMN Circle', 'somn' ); ?></h1>
            <p class="auth-copy"><?php esc_html_e( 'Set up your customer profile for faster checkout, clearer order history, and a more tailored shopping journey.', 'somn' ); ?></p>

            <div class="auth-metric-band">
              <article><strong>Fast</strong><span><?php esc_html_e( 'Checkout flow', 'somn' ); ?></span></article>
              <article><strong>Easy</strong><span><?php esc_html_e( 'Address management', 'somn' ); ?></span></article>
              <article><strong>Clear</strong><span><?php esc_html_e( 'Order visibility', 'somn' ); ?></span></article>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="auth-card">
            <p class="auth-kicker"><?php esc_html_e( 'Start Fresh', 'somn' ); ?></p>
            <h2><?php esc_html_e( 'Register', 'somn' ); ?></h2>

            <?php if ( is_user_logged_in() ) : ?>
              <div class="auth-notice auth-notice-success">
                <?php esc_html_e( 'Your account is already active.', 'somn' ); ?>
              </div>
              <a href="<?php echo esc_url( somn_get_account_page_url() ); ?>" class="button"><?php esc_html_e( 'Open My Account', 'somn' ); ?></a>
            <?php else : ?>
              <?php if ( ! empty( $auth_notice['message'] ) ) : ?>
                <div class="auth-notice auth-notice-<?php echo esc_attr( $auth_notice['type'] ? $auth_notice['type'] : 'error' ); ?>">
                  <?php echo esc_html( $auth_notice['message'] ); ?>
                </div>
              <?php endif; ?>

              <form method="post" class="auth-form">
                <input type="hidden" name="somn_action" value="register" />
                <?php wp_nonce_field( 'somn_register_action', 'somn_register_nonce' ); ?>

                <div class="row g-3">
                  <div class="col-md-6">
                    <p class="form-row mb-0">
                      <label for="somn-register-first-name"><?php esc_html_e( 'First Name', 'somn' ); ?></label>
                      <input type="text" id="somn-register-first-name" name="first_name" required />
                    </p>
                  </div>

                  <div class="col-md-6">
                    <p class="form-row mb-0">
                      <label for="somn-register-last-name"><?php esc_html_e( 'Last Name', 'somn' ); ?></label>
                      <input type="text" id="somn-register-last-name" name="last_name" required />
                    </p>
                  </div>

                  <div class="col-md-6">
                    <p class="form-row mb-0">
                      <label for="somn-register-email"><?php esc_html_e( 'Email Address', 'somn' ); ?></label>
                      <input type="email" id="somn-register-email" name="email" required />
                    </p>
                  </div>

                  <div class="col-md-6">
                    <p class="form-row mb-0">
                      <label for="somn-register-username"><?php esc_html_e( 'Username', 'somn' ); ?></label>
                      <input type="text" id="somn-register-username" name="username" />
                    </p>
                  </div>

                  <div class="col-12">
                    <p class="form-row mb-0">
                      <label for="somn-register-password"><?php esc_html_e( 'Password', 'somn' ); ?></label>
                      <input type="password" id="somn-register-password" name="password" required />
                    </p>
                  </div>
                </div>

                <p class="auth-meta"><?php esc_html_e( 'By creating an account, you can move through checkout faster and manage your orders from one place.', 'somn' ); ?></p>

                <button type="submit" class="button"><?php esc_html_e( 'Create Account', 'somn' ); ?></button>
              </form>

              <p class="auth-switch"><?php esc_html_e( 'Already have an account?', 'somn' ); ?> <a href="<?php echo esc_url( somn_get_login_page_url() ); ?>"><?php esc_html_e( 'Sign in', 'somn' ); ?></a></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>


