<?php get_header(); ?>

<main class="site-main default-page">
  <section class="contact-page-section" style="padding-top: 3rem;">
    <div class="container-fluid px-4 px-md-5">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class('contact-form-wrap'); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <article class="contact-form-wrap">
          <h1><?php esc_html_e('Nothing Found', 'somn'); ?></h1>
          <p><?php esc_html_e('This page is ready for content inside WordPress.', 'somn'); ?></p>
        </article>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>