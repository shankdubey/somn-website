<?php

/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * @package somn
 */

if (! defined('ABSPATH')) {
  exit;
}

$hero_video_url = '';

if (isset($post) && $post instanceof WP_Post) {
  $hero_video_meta = get_post_meta($post->ID, 'somn_home_video_url', true);

  if (is_numeric($hero_video_meta)) {
    $hero_video_url = wp_get_attachment_url((int) $hero_video_meta);
  } elseif (is_string($hero_video_meta)) {
    $hero_video_url = trim($hero_video_meta);
  }
}

$hero_video_url = apply_filters('somn_home_hero_video_url', $hero_video_url);

get_header();
?>

<main class="site-main">
  <section class="hero-section" id="heroScrubSection">
    <div class="hero-video-scrub" aria-hidden="true">
      <video
        id="heroScrubVideo"
        class="hero-video-scrub__media"
        muted
        playsinline
        preload="auto"
        poster="<?php echo esc_url(somn_asset_url('img/hero.png')); ?>">
        <source src="<?php echo esc_url(somn_asset_url('img/vid.mp4')); ?>" type="video/mp4">
      </video>
    </div>
    <div class="container hero-content">
      <div class="row w-100">
        <div class="col-lg-7">
          <h1><?php esc_html_e("There's No Sleep Like SÖMN", 'somn'); ?></h1>
          <p class="herosub"><?php esc_html_e('Complete sleep systems engineered to optimize rest, so you wake refreshed each morning.', 'somn'); ?></p>
          <a href="<?php echo esc_url(somn_get_shop_url()); ?>" class="abtsm2"><?php esc_html_e('Shop Now', 'somn'); ?></a>
          <a href="<?php echo esc_url(somn_get_page_url('about')); ?>" class="abtsm"><?php esc_html_e('About SÖMN', 'somn'); ?></a>
        </div>
      </div>
    </div>

  </section>

  <section id="vidc" class="mybg">
    <div class="container content2">
      <div class="row w-100">
        <div class="col-lg-6 d-flex pr70">
          <div>
            <h2><?php the_field('about_heading'); ?></h2>
            <div class="mt-3"><?php the_field('about_description'); ?></div>
            <a href="<?php echo esc_url(somn_get_page_url('about')); ?>" class="btn review-btn2 mt-3"><?php esc_html_e('Discover SÖMN', 'somn'); ?></a>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-start justify-content-lg-start mt-lg-0">
          <div class="hero-side-text">
            <button
              type="button"
              class="hero-video-trigger"
              data-video-popup-trigger
              data-video-url="<?php the_field('about_video_url'); ?>"
              aria-haspopup="dialog"
              aria-controls="heroVideoPopup"
              aria-label="<?php esc_attr_e('Play SOMN brand video', 'somn'); ?>">
              <span class="hero-video-frame">
                <img src="<?php the_field('about_poster_image'); ?>" class="vidd" alt="<?php esc_attr_e('Play video preview', 'somn'); ?>" />
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="designer-section allbg" style="padding: 0">
    <div class="container-fluid p-0">
      <div class="container">
        <div class="mb-5">
          <h2 class="review-title"><?php esc_html_e('Everything works together', 'somn'); ?></h2>

          <p class="review-subtitle"><?php esc_html_e('Premium mattresses with perfectly paired bedding.', 'somn'); ?></p>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-7 p-0">
          <div class="designer-card"><img src="<?php the_field('cozify_image_left'); ?>" alt="" /></div>
        </div>
        <div class="col-md-5">
          <?php
          $cozify_image_default = get_field('cozify_image_right');
          $cozify_image_hover   = get_field('cozify_image_right_2');
          ?>
          <div id="de1" class="designer-card dark-card">
            <img
              src="<?php echo esc_url($cozify_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--default" />
            <img
              src="<?php echo esc_url($cozify_image_hover ? $cozify_image_hover : $cozify_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--hover" />
            <div class="card-overlay">
              <h3><?php esc_html_e('Cozify', 'somn'); ?></h3>
              <p class="overlay-subtitle"><?php the_field('cozify_text'); ?></p>
              <a href="<?php echo esc_url(somn_get_product_url('cozify')); ?>" class="overlay-btn"><?php esc_html_e('Shop Now', 'somn'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-md-5 p-0">
          <?php
          $felicity_image_default = get_field('felicity_image_left');
          $felicity_image_hover   = get_field('felicity_image_left_2');
          ?>
          <div class="designer-card dark-card">
            <img
              src="<?php echo esc_url($felicity_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--default" />
            <img
              src="<?php echo esc_url($felicity_image_hover ? $felicity_image_hover : $felicity_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--hover" />
            <div class="card-overlay">
              <h3><?php esc_html_e('Felicity', 'somn'); ?></h3>
              <p class="overlay-subtitle"><?php the_field('felicity_text'); ?></p>
              <a href="<?php echo esc_url(somn_get_product_url('felicity')); ?>" class="overlay-btn"><?php esc_html_e('Shop Now', 'somn'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="designer-card"><img src="<?php the_field('felicity_image_right'); ?>" alt="" /></div>
        </div>
        <div class="col-md-7 p-0">
          <div class="designer-card"><img src="<?php the_field('sci-temp_image_left'); ?>" alt="" /></div>
        </div>
        <div class="col-md-5">
          <?php
          $scitemp_image_default = get_field('sci-temp_image_right');
          $scitemp_image_hover   = get_field('sci-temp_image_right_2');
          ?>
          <div class="designer-card dark-card">
            <img
              src="<?php echo esc_url($scitemp_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--default" />
            <img
              src="<?php echo esc_url($scitemp_image_hover ? $scitemp_image_hover : $scitemp_image_default); ?>"
              alt=""
              class="designer-card__image designer-card__image--hover" />
            <div class="card-overlay">
              <h3><?php esc_html_e('Sci-Temp', 'somn'); ?></h3>
              <p class="overlay-subtitle"><?php the_field('sci-temp_text'); ?></p>
              <a href="<?php echo esc_url(somn_get_product_url('sci-temp')); ?>" class="overlay-btn"><?php esc_html_e('Shop Now', 'somn'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="softly-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 mb-4 softly-title">
          <h2><?php esc_html_e('Sleep the way it was meant to be', 'somn'); ?></h2>
          <p class="review-subtitle"><?php esc_html_e('Most people spend weeks researching mattresses, then grab random sheets and pillows and hope it all works together. SOMN systems eliminate the guesswork by pairing each mattress with bedding engineered to optimize breathability, temperature regulation, and support.', 'somn'); ?></p>
        </div>
        <div class="col-lg-9">
          <div class="row g-4">
            <?php $home_products = class_exists('WooCommerce') ? new WP_Query(array('post_type' => 'product', 'posts_per_page' => 4)) : null; ?>
            <?php if ($home_products && $home_products->have_posts()) : ?>
              <?php while ($home_products->have_posts()) : $home_products->the_post();
                global $product; ?>
                <div class="col-md-3">
                  <div class="product-item">
                    <div class="product-image">
                      <?php echo $product ? $product->get_image('large', array('class' => 'product-img-default')) : ''; ?>
                    </div>
                    <div class="product-info">
                      <div>
                        <h6><?php the_title(); ?></h6>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 12)); ?></p>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="arrow-btn"><?php esc_html_e('View product', 'somn'); ?></a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <div class="col-12">
                <p><?php esc_html_e('Add WooCommerce products to populate this section.', 'somn'); ?></p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="review-section">
    <div class="container">
      <div class="text-center mb-5" style="text-align: center">
        <h2 class="review-title"><?php esc_html_e('Join thousands in sleeping better', 'somn'); ?></h2>
        <a href="<?php echo esc_url(somn_get_shop_url()); ?>" class="btn review-btn mt-3"><?php esc_html_e('Shop the collection', 'somn'); ?></a>
      </div>
      <div class="row g-5">
        <div class="col-md-4">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <h5><?php esc_html_e('Best sleep investment', 'somn'); ?></h5>
            <div class="review-user">
              <div class="avatar">L</div>
              <div class="newf"><strong><?php esc_html_e('Leigh R.', 'somn'); ?></strong><br /><small><?php esc_html_e('Verified Buyer', 'somn'); ?></small></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <h5><?php esc_html_e('Game changer', 'somn'); ?></h5>
            <div class="review-user">
              <div class="avatar">M</div>
              <div class="newf"><strong><?php esc_html_e('Michelle', 'somn'); ?></strong><br /><small><?php esc_html_e('Verified Buyer', 'somn'); ?></small></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="review-card">
            <div class="stars">★★★★★</div>
            <h5><?php esc_html_e('Worth every penny', 'somn'); ?></h5>
            <div class="review-user">
              <div class="avatar">J</div>
              <div class="newf"><strong><?php esc_html_e('Jeanette', 'somn'); ?></strong><br /><small><?php esc_html_e('Verified Buyer', 'somn'); ?></small></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="quality-section">
    <div class="quality-subsection">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0"><img src="<?php echo esc_url(somn_asset_url('img/s1.jpg')); ?>" alt="" class="img-fluid quality-subsection-img" /></div>
          <div class="col-lg-6 quality-text-content">
            <div class="quality-section-label"><?php esc_html_e('Craftsmanship', 'somn'); ?></div>
            <h2><?php esc_html_e('Crafted with uncompromising quality', 'somn'); ?></h2>
            <p><?php esc_html_e('Every SOMN mattress is made to order using premium materials. We source responsibly, build carefully, and deliver complete systems you can trust.', 'somn'); ?></p>
            <a href="<?php echo esc_url(somn_get_page_url('about')); ?>" class="btn quality-cta-btn"><?php esc_html_e('Discover the Difference', 'somn'); ?></a>
          </div>
        </div>
      </div>
    </div>

    <div class="quality-subsection quality-subsection--image-first-mobile">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 quality-text-content quality-text-content2 quality-subsection__text order-lg-1 pr50">
            <div class="quality-section-label"><?php esc_html_e('100 Years of Experience', 'somn'); ?></div>
            <h2><?php esc_html_e('100 years of sleep expertise', 'somn'); ?></h2>
            <p><?php esc_html_e('SOMN partners with manufacturers who have spent a century perfecting the craft of quality sleep. That experience shows in every stitch, every layer, every system we deliver.', 'somn'); ?></p>
            <a href="<?php echo esc_url(somn_get_page_url('about')); ?>" class="btn quality-cta-btn"><?php esc_html_e('Learn Our Story', 'somn'); ?></a>
          </div>
          <div class="col-lg-6 mb-4 mb-lg-0 quality-subsection__image order-lg-2"><img src="<?php the_field('sleep_expertise_image'); ?>" alt="" class="img-fluid quality-subsection-img" /></div>
        </div>
      </div>
    </div>

    <div class="quality-subsection sustainability-full">
      <div class="sustainability-overlay">
        <div class="sustainability-content-box">
          <div class="quality-section-label"><?php esc_html_e('Sustainability', 'somn'); ?></div>
          <h2><?php esc_html_e('Sustainability is at our core', 'somn'); ?></h2>
          <p><?php esc_html_e('From responsibly sourced materials to eco-friendly manufacturing, our process reduces carbon impact while delivering enduring comfort.', 'somn'); ?></p>
          <a href="<?php echo esc_url(somn_get_page_url('about')); ?>" class="btn quality-cta-btn btn-light"><?php esc_html_e('See Our Commitments', 'somn'); ?></a>
        </div>
      </div>
      <img src="<?php echo esc_url(somn_asset_url('img/s3.jpg')); ?>" alt="" class="sustainability-bg-img" />
    </div>
  </section>

  <section class="sustainability-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0"><img src="<?php the_field('shop_complete_systems'); ?>" class="img-fluid sustainability-img" alt="" /></div>
        <div class="col-lg-6 sustainability-content">
          <h2><?php esc_html_e('Your best sleep is one decision away', 'somn'); ?></h2>
          <p class="one-decision"><?php esc_html_e('Choose your system. Rest better tonight.', 'somn'); ?></p>
          <div>
            <a href="<?php echo esc_url(somn_get_shop_url()); ?>" class="btn sustainability-btn"><?php esc_html_e('Shop Complete Systems', 'somn'); ?></a>
            <p class="mt-4"><?php esc_html_e('Free shipping & returns • 10-year warranty', 'somn'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="hero-video-popup" id="heroVideoPopup" aria-hidden="true">
  <div class="hero-video-popup__backdrop" data-video-popup-close></div>
  <div class="hero-video-popup__dialog" role="dialog" aria-modal="true" aria-labelledby="heroVideoPopupTitle">
    <button type="button" class="hero-video-popup__close" data-video-popup-close aria-label="<?php esc_attr_e('Close video popup', 'somn'); ?>">
      <span aria-hidden="true">+</span>
    </button>

    <div class="hero-video-popup__player-shell">
      <div class="hero-video-popup__glow hero-video-popup__glow--one" aria-hidden="true"></div>
      <div class="hero-video-popup__glow hero-video-popup__glow--two" aria-hidden="true"></div>
      <div class="hero-video-popup__player">
        <div class="hero-video-popup__empty" data-video-popup-empty>
          <p><?php esc_html_e('Add your video URL in the Home page custom field: somn_home_video_url', 'somn'); ?></p>
        </div>
        <video
          data-video-popup-player
          controls
          playsinline
          preload="metadata"
          poster="<?php echo esc_url(somn_asset_url('img/vid.png')); ?>">
          <source data-video-popup-source src="" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</div>
<script>
  const scrubSection = document.getElementById("heroScrubSection");
  const scrubVideo = document.getElementById("heroScrubVideo");
  const clamp = (n, min, max) => Math.max(min, Math.min(n, max));

  let scrubDuration = 0;
  let scrubMaxTime = 0;
  let scrubTargetTime = 0;
  let scrubRafId = null;
  let scrubLastFrameTime = 0;
  const scrubEase = 0.12;
  const scrubPixelsPerSecond = 462;
  const scrubMobileQuery = window.matchMedia("(max-width: 767.98px)");

  function isScrubDisabled() {
    return scrubMobileQuery.matches;
  }

  function setScrubDistance() {
    if (!scrubSection || !scrubDuration) return;
    if (isScrubDisabled()) {
      scrubSection.style.minHeight = "";
      return;
    }

    const scrubDistance = Math.max(scrubDuration * scrubPixelsPerSecond, window.innerHeight * 2);
    scrubSection.style.minHeight = `${window.innerHeight + scrubDistance}px`;
  }

  function scrubProgress() {
    if (!scrubSection) return 0;
    const rect = scrubSection.getBoundingClientRect();
    const total = rect.height - window.innerHeight;
    if (total <= 0) return 0;
    return clamp(-rect.top / total, 0, 1);
  }

  function updateScrubVideo(timestamp) {
    if (!scrubVideo || isScrubDisabled()) return;
    scrubRafId = null;
    if (!scrubLastFrameTime) scrubLastFrameTime = timestamp;
    const elapsed = timestamp - scrubLastFrameTime;
    scrubLastFrameTime = timestamp;
    const delta = scrubTargetTime - scrubVideo.currentTime;

    if (Math.abs(delta) < 0.003) {
      scrubVideo.currentTime = scrubTargetTime;
      return;
    }

    const easedAmount = 1 - Math.pow(1 - scrubEase, elapsed / 16.67);
    scrubVideo.currentTime += delta * easedAmount;
    scrubRafId = requestAnimationFrame(updateScrubVideo);
  }

  function syncScrubVideo() {
    if (!scrubVideo || !scrubDuration || isScrubDisabled()) return;
    scrubTargetTime = clamp(scrubProgress() * scrubDuration, 0, scrubMaxTime);
    if (!scrubRafId) {
      scrubLastFrameTime = 0;
      scrubRafId = requestAnimationFrame(updateScrubVideo);
    }
  }

  if (scrubSection && scrubVideo) {
    scrubVideo.loop = false;

    function initScrubVideo() {
      scrubDuration = scrubVideo.duration || 0;
      scrubMaxTime = Math.max(scrubDuration - 0.04, 0);
      scrubVideo.pause();
      scrubVideo.currentTime = 0;
      setScrubDistance();
      if (isScrubDisabled()) return;
      syncScrubVideo();
    }

    if (scrubVideo.readyState >= 1) {
      initScrubVideo();
    } else {
      scrubVideo.addEventListener("loadedmetadata", initScrubVideo, {
        once: true
      });
    }

    window.addEventListener("scroll", syncScrubVideo, {
      passive: true
    });
    function handleScrubResize() {
      if (scrubRafId && isScrubDisabled()) {
        cancelAnimationFrame(scrubRafId);
        scrubRafId = null;
      }

      setScrubDistance();
      if (isScrubDisabled()) {
        scrubVideo.pause();
        scrubVideo.currentTime = 0;
        return;
      }

      syncScrubVideo();
    }

    window.addEventListener("resize", handleScrubResize);

    if (scrubMobileQuery.addEventListener) {
      scrubMobileQuery.addEventListener("change", handleScrubResize);
    }
  }

  const proSliderEl = document.querySelector(".proSwiper");
  if (proSliderEl) {
    new Swiper(".proSwiper", {
      loop: true,
      spaceBetween: 20,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
      },
    });
  }
</script>
<?php get_footer(); ?>
