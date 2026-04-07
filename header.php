<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="side-menu">
    <button class="menu-item mmit1 side-menu-button" id="menuToggle" type="button" aria-expanded="false" aria-controls="megaMenu">
      <i class="bi bi-list"></i>
    </button>

    <a class="menu-item mmit1 side-menu-link" href="<?php echo esc_url(function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/')); ?>" aria-label="<?php esc_attr_e('View cart', 'somn'); ?>">
      <i class="bi bi-cart"></i>
      <?php if (function_exists('WC')) : ?>
        <span class="side-menu-count"><?php echo esc_html(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?></span>
      <?php endif; ?>
    </a>

    <a class="menu-item mmit1 side-menu-link" href="<?php echo esc_url(somn_get_shop_url()); ?>" aria-label="<?php esc_attr_e('Browse products', 'somn'); ?>">
      <i class="bi bi-search"></i>
    </a>

    <a class="menu-item mmit1 side-menu-link" href="<?php echo esc_url(somn_get_account_page_url()); ?>" aria-label="<?php echo esc_attr(is_user_logged_in() ? __('My account', 'somn') : __('Login or register', 'somn')); ?>">
      <i class="bi bi-person"></i>
    </a>

    <div class="menu-item2 mmit2 logo-text" style="border-bottom: none">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-link">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <img src="<?php echo esc_url(somn_asset_url('img/logo.png')); ?>" style="width: 70px" alt="<?php bloginfo('name'); ?>" />
        <?php endif; ?>
      </a>
    </div>

    <a class="menu-item bdrtp mmit1 side-menu-link" href="<?php echo esc_url(somn_get_page_url('contact')); ?>" aria-label="<?php esc_attr_e('Contact us', 'somn'); ?>">
      <i class="bi bi-heart"></i>
    </a>

    <button class="menu-item mmit1 side-menu-button" type="button" data-scroll-top aria-label="<?php esc_attr_e('Scroll to top', 'somn'); ?>">
      <i class="bi bi-arrow-up"></i>
    </button>
  </div>

  <div class="mega-menu" id="megaMenu" aria-hidden="true">
    <div class="mega-inner container-fluid">
      <button class="menu-close" id="menuClose" type="button" aria-label="<?php esc_attr_e('Close menu', 'somn'); ?>">&times;</button>

      <div class="row">
        <div class="col-lg-4 mega-col">
          <h6><?php esc_html_e('Shop', 'somn'); ?></h6>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'mega-menu-list',
              'fallback_cb'    => 'somn_primary_menu_fallback',
            )
          );
          ?>
          <img src="<?php echo esc_url(somn_asset_url('img/n1.webp')); ?>" alt="" />
        </div>

        <div class="col-lg-4 mega-col">
          <h6><?php esc_html_e('Explore', 'somn'); ?></h6>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'explore',
              'container'      => false,
              'menu_class'     => 'mega-menu-list',
              'fallback_cb'    => 'somn_explore_menu_fallback',
            )
          );
          ?>

          <img src="<?php echo esc_url(somn_asset_url('img/n3.webp')); ?>" alt="" />
        </div>

        <div class="col-lg-4 mega-col">
          <h6><?php esc_html_e('Support', 'somn'); ?></h6>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer_support',
              'container'      => false,
              'menu_class'     => 'mega-menu-list',
              'fallback_cb'    => 'somn_support_menu_fallback',
            )
          );
          ?>

          <img src="<?php echo esc_url(somn_asset_url('img/n1.webp')); ?>" alt="" />
        </div>
      </div>
    </div>
  </div>