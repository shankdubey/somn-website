<?php
/**
 * Template Name: Contact Page
 *
 * @package somn
 */

get_header();
?>

<main class="site-main">
  <section class="contact-page-section" style="padding-top: 3rem;">
    <div class="container-fluid px-4 px-md-5">
      <div class="row g-4">
        <div class="col-lg-8">
          <div class="contact-form-wrap">
            <h2><?php the_title(); ?></h2>
            <p class="mb-4">
              <?php esc_html_e( 'Tell us what you need and our team will connect you with the right specialist.', 'somn' ); ?>
            </p>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label"><?php esc_html_e( 'First Name', 'somn' ); ?></label>
                <input type="text" id="firstName" class="form-control" />
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label"><?php esc_html_e( 'Last Name', 'somn' ); ?></label>
                <input type="text" id="lastName" class="form-control" />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label"><?php esc_html_e( 'Email Address', 'somn' ); ?></label>
                <input type="email" id="email" class="form-control" />
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label"><?php esc_html_e( 'Phone Number', 'somn' ); ?></label>
                <input type="tel" id="phone" class="form-control" />
              </div>
              <div class="col-12">
                <label for="topic" class="form-label"><?php esc_html_e( 'Subject', 'somn' ); ?></label>
                <select id="topic" class="form-select">
                  <option selected><?php esc_html_e( 'Product Consultation', 'somn' ); ?></option>
                  <option><?php esc_html_e( 'Order Support', 'somn' ); ?></option>
                  <option><?php esc_html_e( 'Warranty & Returns', 'somn' ); ?></option>
                  <option><?php esc_html_e( 'Showroom Appointment', 'somn' ); ?></option>
                  <option><?php esc_html_e( 'Trade Inquiry', 'somn' ); ?></option>
                </select>
              </div>
              <div class="col-12">
                <label for="message" class="form-label"><?php esc_html_e( 'Message', 'somn' ); ?></label>
                <textarea
                  id="message"
                  class="form-control"
                  rows="5"
                  placeholder="<?php esc_attr_e( 'How can we help?', 'somn' ); ?>"></textarea>
              </div>
              <div class="col-12 d-flex align-items-start gap-2">
                <input id="privacy" type="checkbox" class="mt-1" />
                <label for="privacy" class="privacy-text">
                  <?php esc_html_e( "I agree to SOMN's Privacy Policy and consent to be contacted.", 'somn' ); ?>
                </label>
              </div>
              <div class="col-12">
                <button type="submit" class="btn review-btn2">
                  <?php esc_html_e( 'Submit Message', 'somn' ); ?>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 contact-sticky-col">
          <div class="contact-method-card">
            <h3><?php esc_html_e( 'Talk To Us', 'somn' ); ?></h3>
            <p><?php esc_html_e( 'Mon-Fri: 8:00 AM - 8:00 PM (ET)', 'somn' ); ?></p>
            <a href="tel:+18005557666">+1 (800) 555-7666</a>
          </div>
          <div class="contact-method-card">
            <h3><?php esc_html_e( 'Email Support', 'somn' ); ?></h3>
            <p><?php esc_html_e( 'Typical response time within 24 hours.', 'somn' ); ?></p>
            <a href="mailto:support@somn.com">support@somn.com</a>
          </div>
          <div class="contact-method-card">
            <h3><?php esc_html_e( 'Visit A Showroom', 'somn' ); ?></h3>
            <p>
              245 Mercer Street<br />
              New York, NY 10012
            </p>
            <a href="#"><?php esc_html_e( 'Book Appointment', 'somn' ); ?></a>
          </div>
        </div>
      </div>

      <div class="contact-visit-card mt-4">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <img src="<?php echo esc_url( somn_asset_url( 'img/ge.png' ) ); ?>" class="img-fluid" alt="SOMN Showroom" />
          </div>
          <div class="col-lg-5">
            <h2><?php esc_html_e( 'Visit Our New York Flagship', 'somn' ); ?></h2>
            <p><?php esc_html_e( 'Experience complete sleep systems in person and get fitted by an in-store sleep specialist.', 'somn' ); ?></p>
            <p class="mb-4">
              <?php esc_html_e( 'Open daily: 10:00 AM - 7:00 PM', 'somn' ); ?><br />
              <?php esc_html_e( '245 Mercer Street, New York, NY', 'somn' ); ?>
            </p>
            <a href="#" class="btn sustainability-btn"><?php esc_html_e( 'Get Directions', 'somn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
