<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main p-reserve">

    <?php $current_step = 1; get_template_part('parts/reserve-step'); ?>

    <div class="p-reserve__inner">
      <div class="p-reserve-form">
      <?php echo do_shortcode('[contact-form-7 id="89acfb5" title="予約"]'); ?>
      </div>
    </div>

  </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>