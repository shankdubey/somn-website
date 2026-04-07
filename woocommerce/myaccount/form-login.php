<?php
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_customer_login_form' );
?>

<section class="wc-auth-shell">
  <div class="row g-4 align-items-stretch">
    <div class="col-lg-5">
      <div class="wc-auth-showcase">
        <p class="wc-auth-kicker"><?php esc_html_e( 'Welcome To SOMN', 'somn' ); ?></p>
        <h2><?php esc_html_e( 'Your Account, Refined.', 'somn' ); ?></h2>
        <p><?php esc_html_e( 'Sign in to review orders, manage your saved details, and continue your shopping journey with a calmer account experience.', 'somn' ); ?></p>

        <div class="wc-auth-points">
          <article>
            <span>01</span>
            <p><?php esc_html_e( 'Track active orders and revisit past purchases in one place.', 'somn' ); ?></p>
          </article>
          <article>
            <span>02</span>
            <p><?php esc_html_e( 'Save your addresses for a faster, smoother checkout flow.', 'somn' ); ?></p>
          </article>
          <article>
            <span>03</span>
            <p><?php esc_html_e( 'Keep account details current without leaving the brand experience.', 'somn' ); ?></p>
          </article>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="wc-auth-card">
        <div class="row g-4">
          <div class="col-lg-<?php echo get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ? '6' : '12'; ?>">
            <div class="wc-auth-block">
              <p class="wc-auth-label"><?php esc_html_e( 'Member Access', 'somn' ); ?></p>
              <h3><?php esc_html_e( 'Login', 'woocommerce' ); ?></h3>

              <form class="woocommerce-form woocommerce-form-login login" method="post">
                <?php do_action( 'woocommerce_login_form_start' ); ?>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ! empty( $_POST['username'] ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                </p>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
                  <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                </p>

                <?php do_action( 'woocommerce_login_form' ); ?>

                <div class="wc-auth-actions">
                  <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                    <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                  </label>
                  <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                </div>

                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>

                <?php do_action( 'woocommerce_login_form_end' ); ?>
              </form>
            </div>
          </div>

          <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
            <div class="col-lg-6">
              <div class="wc-auth-block wc-auth-block-register">
                <p class="wc-auth-label"><?php esc_html_e( 'New Customer', 'somn' ); ?></p>
                <h3><?php esc_html_e( 'Register', 'woocommerce' ); ?></h3>

                <form method="post" class="woocommerce-form woocommerce-form-register register">
                  <?php do_action( 'woocommerce_register_form_start' ); ?>

                  <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                      <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
                      <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ! empty( $_POST['username'] ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                    </p>
                  <?php endif; ?>

                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ! empty( $_POST['email'] ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
                  </p>

                  <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                      <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
                      <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
                    </p>
                  <?php else : ?>
                    <p class="wc-auth-helper"><?php esc_html_e( 'A secure password will be sent to your email after registration.', 'somn' ); ?></p>
                  <?php endif; ?>

                  <?php do_action( 'woocommerce_register_form' ); ?>
                  <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                  <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                  <?php do_action( 'woocommerce_register_form_end' ); ?>
                </form>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
