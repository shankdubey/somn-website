<?php get_header(); ?>

<main class="site-main">
  <section class="about-hero">
    <div class="container-fluid px-4 px-md-5">
      <p class="about-eyebrow mb-1"><?php esc_html_e( 'Our Story', 'somn' ); ?></p>
      <h1><?php the_title(); ?></h1>
      <p class="about-subtitle"><?php esc_html_e( 'SOMN builds complete sleep systems where every layer works together to improve comfort, support, and recovery.', 'somn' ); ?></p>
    </div>
  </section>

  <section class="about-story">
    <div class="container-fluid px-4 px-md-5">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6"><img src="<?php echo esc_url( somn_asset_url( 'img/hero.jpg' ) ); ?>" class="img-fluid" alt="" /></div>
        <div class="col-lg-6 pl50">
          <h2><?php esc_html_e( 'One System. One Better Morning.', 'somn' ); ?></h2>
          <p><?php esc_html_e( 'SOMN started with a simple idea: sleep products should not be purchased in isolation. Mattresses, pillows, and bedding affect each other, and mismatched combinations create inconsistent rest.', 'somn' ); ?></p>
          <p><?php esc_html_e( 'We design complete systems that align pressure relief, spinal support, and thermal control so each part contributes to deeper, more restorative sleep.', 'somn' ); ?></p>
          <a href="<?php echo esc_url( somn_get_shop_url() ); ?>" class="btn review-btn2 mt-2"><?php esc_html_e( 'Explore Collection', 'somn' ); ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="about-principles">
    <div class="container-fluid px-4 px-md-5">
      <div class="text-center mb-4">
        <h2 class="mb-2"><?php esc_html_e( 'What We Build Around', 'somn' ); ?></h2>
        <p><?php esc_html_e( 'Every SOMN product is developed through three core principles.', 'somn' ); ?></p>
      </div>
      <div class="row g-4">
        <div class="col-md-4"><article class="about-principle-card"><img src="<?php echo esc_url( somn_asset_url( 'img/c1.jpg' ) ); ?>" alt="" /><h3><?php esc_html_e( 'Performance', 'somn' ); ?></h3><p><?php esc_html_e( 'Materials and structures are selected for measurable support, pressure distribution, and sleep durability.', 'somn' ); ?></p></article></div>
        <div class="col-md-4"><article class="about-principle-card"><img src="<?php echo esc_url( somn_asset_url( 'img/c2.jpg' ) ); ?>" alt="" /><h3><?php esc_html_e( 'Comfort', 'somn' ); ?></h3><p><?php esc_html_e( 'Comfort is engineered with layered ergonomics that adapt to body shape, movement, and temperature needs.', 'somn' ); ?></p></article></div>
        <div class="col-md-4"><article class="about-principle-card"><img src="<?php echo esc_url( somn_asset_url( 'img/c3.jpg' ) ); ?>" alt="" /><h3><?php esc_html_e( 'Simplicity', 'somn' ); ?></h3><p><?php esc_html_e( 'We remove guesswork by offering pre-paired sleep systems so customers can choose with confidence.', 'somn' ); ?></p></article></div>
      </div>
    </div>
  </section>

  <section class="about-milestones">
    <div class="container-fluid px-4 px-md-5">
      <div class="row g-4">
        <div class="col-lg-4">
          <h2><?php esc_html_e( 'Milestones', 'somn' ); ?></h2>
          <p><?php esc_html_e( 'From concept to complete systems, SOMN has grown with a clear focus on product quality and sleep outcomes.', 'somn' ); ?></p>
        </div>
        <div class="col-lg-8">
          <div class="about-milestone-item"><span>2019</span><p><?php esc_html_e( 'SOMN is founded with a focus on integrated sleep design.', 'somn' ); ?></p></div>
          <div class="about-milestone-item"><span>2021</span><p><?php esc_html_e( 'Launched first complete system with matched bedding layers.', 'somn' ); ?></p></div>
          <div class="about-milestone-item"><span>2024</span><p><?php esc_html_e( 'Expanded cooling and hybrid lines for all sleep profiles.', 'somn' ); ?></p></div>
          <div class="about-milestone-item"><span>2026</span><p><?php esc_html_e( 'Opened flagship showroom and sleep consultation program.', 'somn' ); ?></p></div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-cta">
    <div class="container-fluid px-4 px-md-5">
      <div class="about-cta-wrap">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7 pr50"><img src="<?php echo esc_url( somn_asset_url( 'img/e3.webp' ) ); ?>" class="img-fluid" alt="" /></div>
          <div class="col-lg-5">
            <h2><?php esc_html_e( 'Meet SOMN In Person', 'somn' ); ?></h2>
            <p><?php esc_html_e( 'Visit our showroom to test complete systems and get guidance from a sleep specialist.', 'somn' ); ?></p>
            <a href="<?php echo esc_url( somn_get_page_url( 'contact' ) ); ?>" class="btn sustainability-btn mt-2"><?php esc_html_e( 'Contact Our Team', 'somn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
