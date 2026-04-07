<?php include('header.php'); ?>
<!-- HERO SECTION -->
<section class="product-page container-fluid">
  <div id="mainimg" class="row position-relative">
    <!-- PRODUCT IMAGE -->
    <div class="col-lg-8 p-0 product-gallery">
      <div class="swiper productSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo $base_url; ?>img/re.webp" class="img-fluid" />
          </div>

          <div class="swiper-slide">
            <img src="<?php echo $base_url; ?>img/re2.webp" class="img-fluid" />
          </div>

          <div class="swiper-slide">
            <img src="<?php echo $base_url; ?>img/re.webp" class="img-fluid" />
          </div>

          <div class="swiper-slide">
            <img src="<?php echo $base_url; ?>img/re2.webp" class="img-fluid" />
          </div>
        </div>

        <!-- Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- THUMBNAILS OVERLAY -->
        <div class="swiper productThumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo $base_url; ?>img/re.webp" />
            </div>

            <div class="swiper-slide">
              <img src="<?php echo $base_url; ?>img/re2.webp" />
            </div>

            <div class="swiper-slide">
              <img src="<?php echo $base_url; ?>img/re.webp" />
            </div>

            <div class="swiper-slide">
              <img src="<?php echo $base_url; ?>img/re2.webp" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PRODUCT INFO CARD -->
    <div id="prodetail" class="col-lg-4 d-flex align-items-center">
      <div>
        <div class="product-card">
          <h2>Maximillian</h2>
          <small>DOG BED</small>

          <div class="price">$750.00</div>

          <!-- Size -->
          <h6>Choose Size</h6>
          <div class="option-group my-3">
            <button class="opt active">Small</button>
            <button class="opt">Large</button>
          </div>

          <!-- Finish -->
          <h6>Choose Finish</h6>
          <div class="finish-group">
            <span class="finish f1"></span>
            <span class="finish f2"></span>
            <span class="finish f3"></span>
          </div>

          <!-- Fabric -->
          <h6>Choose Cushion Fabric</h6>
          <!-- <img src="https://picsum.photos/400/80?fabric" class="img-fluid" /> -->
          <div class="finish-group">
            <span class="finish f1"></span>
            <span class="finish f2"></span>
            <span class="finish f3"></span>
            <span class="finish f1"></span>
            <span class="finish f2"></span>
            <span class="finish f3"></span>
          </div>

          <button class="btn btn-dark w-100 mt-3 adcart">
            Add to Cart
          </button>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <div class="accordion product-accordion" id="productAccordion">
              <!-- About -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#aboutProduct">
                    About Maximillian
                  </button>
                </h2>

                <div
                  id="aboutProduct"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#productAccordion">
                  <div class="accordion-body">
                    <p>
                      Fun. Agile. And a little wild. The Phantigo is
                      inspired by a dog who loves chasing his own tail
                      around and around. So naturally his namesake bed is,
                      what else, a circle—achieved through precise cutting
                      and hand-assembly for perfect symmetry. Phantigo is
                      crafted from carefully selected wood and veneered
                      in-house with natural woods like oak and walnut. With
                      a low profile and a smooth, deeply plush cushion—with
                      a removable and washable cover—Phantigo offers a cozy
                      sanctuary for sprawling out.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Size Chart -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#sizeChart">
                    Size Chart
                  </button>
                </h2>

                <div
                  id="sizeChart"
                  class="accordion-collapse collapse"
                  data-bs-parent="#productAccordion">
                  <div class="accordion-body">
                    <div class="wrap">
                      <p>
                        <strong>ONE SIZE</strong><br />
                        <em>For dogs measuring 28″ or less from neck to
                          tail</em>
                      </p>
                      <p>
                        Diameter: 36″ (914 mm)<br />
                        Height: 4.7″ (118 mm)<br />
                        Bed Weight: 33 lbs (15.1 kg)
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Care -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#careInfo">
                    Care
                  </button>
                </h2>

                <div
                  id="careInfo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#productAccordion">
                  <div class="accordion-body">
                    <div class="wrap">
                      <p>
                        <strong>General finish maintenance</strong><br />
                        • Use a soft, dry cloth to regularly dust
                        Phantigo.<br />
                        • Microfiber cloths work well.<br />
                        • For routine cleaning, use a damp cloth followed by
                        a dry cloth to prevent moisture from sitting on the
                        surface.<br />
                        • Avoid soaking the wood.
                      </p>
                      <p>
                        <strong>Cleaning spills</strong><br />
                        • Wipe up any spills immediately to prevent staining
                        or damage to the varnish.<br />
                        • Use a mild soap solution (e.g. diluted dish soap)
                        for tougher spots.<br />
                        • Follow by wiping with a damp cloth and drying
                        thoroughly.
                      </p>
                      <p>
                        <strong>Polishing</strong><br />
                        • Given the low gloss finish, frequent polishing
                        isn’t necessary.<br />
                        • If you do polish, use a product recommended for
                        low-gloss finishes and test it on a small,
                        inconspicuous area first.<br />
                        • Avoid using wax on varnished plywood, as it can
                        build up and create a dull, cloudy appearance.
                      </p>
                      <p>
                        <strong>Environmental factors</strong><br />
                        • Maintain a stable humidity level in the room to
                        prevent the wood from expanding or contracting.<br />
                        • Use a dehumidifier in very humid conditions and a
                        humidifier in very dry conditions.<br />
                        • Avoid placing Phantigo near heat sources like
                        radiators or fireplaces.<br />
                        • Keep Phantigo out of direct sunlight to prevent
                        fading or discoloration.
                      </p>
                      <p>
                        <strong>Cushion cleaning</strong><br />
                        • Regularly remove and machine wash the outer
                        cover.<br />
                        • Do not wash the interior cushion-simply air it out
                        to keep fresh and spot clean with a damp cloth and
                        mild detergent.<br />
                        • Avoid direct sunlight to preserve the color and
                        material of the cushion.<br />
                        • Immediately wipe spills with a damp cloth, using a
                        mild detergent for stubborn stains.
                      </p>
                      <p>
                        <strong>Outer Cover Washing Instructions</strong><br />
                        • Machine wash cold 85°F/30°C.<br />
                        • Do not bleach.<br />
                        • Tumble dry on low heat.<br />
                        • Do not iron.<br />
                        • Dry cleanable.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2 class="mt-4 features-title">Features</h2>

        <div class="row g-4">
          <div class="col-12">
            <img src="<?php echo $base_url; ?>img/e1.webp" style="width: 100%" />
            <h4 class="mt-2">Hand-crafted, Detailed</h4>
            <p>
              Crafted with expert techniques ensuring beauty and durability.
            </p>
          </div>

          <div class="col-12 mt-2">
            <img src="<?php echo $base_url; ?>img/e3.webp" style="width: 100%" />
            <h4 class="mt-2">Seamless Design</h4>
            <p>Natural warmth finishes that blend effortlessly.</p>
          </div>

          <div class="col-12 mt-2">
            <img src="<?php echo $base_url; ?>img/e1.webp" style="width: 100%" />
            <h4 class="mt-2">Luxe Comfort</h4>
            <p>Water-resistant inner cushions and washable covers.</p>
          </div>
        </div>
        <div class="review-section2">
          <div class="container p-0">
            <!-- Header -->
            <h2 class="mt-3 features-title">
              See what happy sleepers are saying
            </h2>

            <!-- Reviews -->
            <div class="row g-5">
              <!-- Review 1 -->
              <div class="col-12">
                <div class="review-card2">
                  <div class="stars">★★★★★</div>

                  <h5>Mattress Rx</h5>

                  <p>
                    New mattress feels wonderful. Delivery was as promised.
                  </p>

                  <div class="review-user">
                    <div class="avatar">L</div>
                    <div>
                      <strong>Leigh R.</strong><br />
                      <small>Verified Reviewer</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Review 2 -->
              <div class="col-12 mt-3">
                <div class="review-card2">
                  <div class="stars">★★★★★</div>

                  <h5>Game changer</h5>

                  <p>
                    New mattress feels wonderful. Delivery was as promised.
                  </p>

                  <div class="review-user">
                    <div class="avatar">M</div>
                    <div>
                      <strong>Michelle</strong><br />
                      <small>Verified Reviewer</small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Review 3 -->
              <div class="col-12 mt-3">
                <div class="review-card2">
                  <div class="stars">★★★★★</div>

                  <h5>Mattress</h5>

                  <p>
                    Very pleased with the process and customer service.
                    Sleeping is great now.
                  </p>

                  <div class="review-user">
                    <div class="avatar">J</div>
                    <div>
                      <strong>Jeanette</strong><br />
                      <small>Verified Reviewer</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="quality-section">
  <!-- SECTION A: CRAFTSMANSHIP -->
  <div class="quality-subsection">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Left -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img
            src="<?php echo $base_url; ?>img/s1.jpg"
            alt="Craftsmanship"
            class="img-fluid quality-subsection-img" />
        </div>

        <!-- Text Right -->
        <div class="col-lg-6 quality-text-content">
          <div class="quality-section-label">CRAFTSMANSHIP</div>

          <h2>Crafted with<br>uncompromising quality</h2>
          <p>
            Every SÖMN mattress is made to order using premium materials. We
            source responsibly, build carefully, and deliver complete
            systems you can trust.
          </p>
          <a href="#" class="btn quality-cta-btn">Discover the Difference</a>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION B: 100 YEARS OF EXPERIENCE -->
  <div class="quality-subsection">
    <div class="container">
      <div class="row align-items-center">
        <!-- Text Left -->
        <div
          class="col-lg-6 quality-text-content quality-text-content2 order-lg-1 pl50">
          <div class="quality-section-label">100 YEARS OF EXPERIENCE</div>
          <h2>100 years of sleep expertise</h2>
          <p>
            SÖMN partners with manufacturers who have spent a century
            perfecting the craft of quality sleep. That experience shows in
            every stitch, every layer, every system we deliver.
          </p>
          <a href="#" class="btn quality-cta-btn">Learn Our Story</a>
        </div>

        <!-- Image Right -->
        <div class="col-lg-6 mb-4 mb-lg-0 order-lg-2">
          <img
            src="<?php echo $base_url; ?>img/s2.jpg"
            alt="Sleep Expertise"
            class="img-fluid quality-subsection-img" />
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION 7: SUSTAINABILITY -->
  <div class="quality-subsection sustainability-full">
    <div class="sustainability-overlay">
      <div class="sustainability-content-box">
        <div class="quality-section-label">SUSTAINABILITY</div>
        <h2>Sustainability is at our core</h2>
        <p>
          From responsibly sourced materials to eco-friendly manufacturing,
          our process reduces carbon impact while delivering enduring
          comfort. SÖMN is a proud Certified B Corporation.
        </p>
        <a href="#" class="btn quality-cta-btn btn-light">See Our Commitments</a>
      </div>
    </div>
    <img
      src="<?php echo $base_url; ?>img/s3.jpg"
      alt="Sustainability"
      class="sustainability-bg-img" />
  </div>
</section>
<?php include('footer.php'); ?>
<script>
  var thumbs = new Swiper(".productThumbs", {
    spaceBetween: 10,
    slidesPerView: 4,
    watchSlidesProgress: true,
  });

  var swiper = new Swiper(".productSlider", {
    loop: true,
    spaceBetween: 10,

    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    thumbs: {
      swiper: thumbs,
    },
  });
</script>
<style>
  @media (min-width: 1200px) {

    .h2,
    h2 {
      font-size: 4rem;
    }
  }

  @media (min-width: 1200px) {

    .h4,
    h4 {
      font-size: 2.5rem;
    }
  }
</style>