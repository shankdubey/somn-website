<?php get_header(); ?>

<main class="site-main account-page-template">
  <section class="account-page-shell">
    <div class="container-fluid px-4 px-md-5">
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'account-page-entry' ); ?>>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
