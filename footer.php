<section class="store-news-section">
  <div class="container-fluid p-0">
    <div class="row g-0 align-items-stretch">
      <div class="col-12 col-lg-7 store-section order-2 order-lg-1">
        <div class="strlo">
          <div class="row align-items-center">
            <div class="col-lg-6 text-white">
              <h2 class="store-title"><?php esc_html_e( 'Store Locator', 'somn' ); ?></h2>
              <p class="store-desc my-2"><?php esc_html_e( 'Discover the nearest store or a multi-brand store featuring our products.', 'somn' ); ?></p>
              <a href="<?php echo esc_url( somn_get_page_url( 'contact' ) ); ?>" class="btn store-btn mt-4"><?php esc_html_e( 'Find a store', 'somn' ); ?></a>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
              <img src="<?php echo esc_url( somn_asset_url( 'img/d1.png' ) ); ?>" class="img-fluid globe-img" alt="" />
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-5 newsletter-section order-1 order-lg-2 d-flex align-items-center">
        <div class="container strlo">
          <h2><?php esc_html_e( 'Newsletter Signup', 'somn' ); ?></h2>
          <p><?php esc_html_e( 'Receive updates on new products, sleep tips, and exclusive offers.', 'somn' ); ?></p>
          <form class="newsletter-form mx-auto" action="#" method="post">
            <input type="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'somn' ); ?>" />
          </form>
          <div class="privacy mt-3">
            <input type="checkbox" /> <?php esc_html_e( 'I agree to the Privacy Policy', 'somn' ); ?>
          </div>
          <button class="btn signup-btn mt-3" type="button"><?php esc_html_e( 'Sign up', 'somn' ); ?></button>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container">
    <div class="row footer-links">
      <div class="col-md-2">
        <h6><?php esc_html_e( 'Company', 'somn' ); ?></h6>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_company', 'container' => false, 'menu_class' => '', 'fallback_cb' => 'somn_company_menu_fallback' ) ); ?>
      </div>
      <div class="col-md-2">
        <h6><?php esc_html_e( 'Products', 'somn' ); ?></h6>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_products', 'container' => false, 'menu_class' => '', 'fallback_cb' => 'somn_products_menu_fallback' ) ); ?>
      </div>
      <div class="col-md-3">
        <h6><?php esc_html_e( 'Support', 'somn' ); ?></h6>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_support', 'container' => false, 'menu_class' => '', 'fallback_cb' => 'somn_support_menu_fallback' ) ); ?>
      </div>
      <div class="col-md-2">
        <h6><?php esc_html_e( 'Follow', 'somn' ); ?></h6>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_follow', 'container' => false, 'menu_class' => '', 'fallback_cb' => 'somn_follow_menu_fallback' ) ); ?>
      </div>
      <div class="col-md-3">
        <h6><?php esc_html_e( 'Legal', 'somn' ); ?></h6>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_legal', 'container' => false, 'menu_class' => '', 'fallback_cb' => 'somn_legal_menu_fallback' ) ); ?>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-brand">
        <a href="#top" class="scroll-top" data-scroll-top>&uarr;</a>
        <span class="brand-name">
          <img src="<?php echo esc_url( somn_asset_url( 'img/white-logo.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="width: 50px" />
        </span>
      </div>

      <div class="footer-copy">
        <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved. Certified B Corporation.', 'somn' ); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
