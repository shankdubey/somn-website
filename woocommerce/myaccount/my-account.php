<?php
defined('ABSPATH') || exit;

$user              = wp_get_current_user();
$user_id           = get_current_user_id();
$order_count       = function_exists('wc_get_customer_order_count') ? (int) wc_get_customer_order_count($user_id) : 0;
$download_count    = function_exists('wc_get_customer_available_downloads') ? count(wc_get_customer_available_downloads($user_id)) : 0;
$saved_addresses   = wc_shipping_enabled() ? 2 : 1;
$display_name      = $user instanceof WP_User ? $user->display_name : '';
$account_endpoints = wc_get_account_menu_items();
?>


<section class="account-page">
  <div class="container-fluid px-4 px-md-5">
    <div class="row g-4">
      <div class="col-xl-4 col-lg-5">
        <aside class="account-nav-card">
          <div class="account-nav-top">
            <p class="account-user-kicker mb-1"><?php esc_html_e('Logged In As', 'somn'); ?></p>
            <h2><?php echo esc_html($display_name); ?></h2>

          </div>

          <!-- <div class="account-stat-grid">
            <article>
              <span><?php echo esc_html($order_count); ?></span>
              <p><?php esc_html_e('Orders', 'somn'); ?></p>
            </article>
            <article>
              <span><?php echo esc_html($download_count); ?></span>
              <p><?php esc_html_e('Downloads', 'somn'); ?></p>
            </article>
            <article>
              <span><?php echo esc_html($saved_addresses); ?></span>
              <p><?php esc_html_e('Addresses', 'somn'); ?></p>
            </article>
            <article>
              <span><?php echo esc_html(count($account_endpoints)); ?></span>
              <p><?php esc_html_e('Shortcuts', 'somn'); ?></p>
            </article>
          </div> -->

          <div class="account-nav-links">
            <?php do_action('woocommerce_before_account_navigation'); ?>
            <?php do_action('woocommerce_account_navigation'); ?>
            <?php do_action('woocommerce_after_account_navigation'); ?>
          </div>
        </aside>
      </div>

      <div class="col-xl-8 col-lg-7">
        <div class="account-content-card">
          <?php do_action('woocommerce_before_account_content'); ?>
          <?php do_action('woocommerce_account_content'); ?>
          <?php do_action('woocommerce_after_account_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
