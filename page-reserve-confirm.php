
<?php get_header(); ?>

<main class="main p-reserve">

  <?php
  $current_step = 2;
  $step_file = get_stylesheet_directory() . '/parts/reserve-step.php';
  if (file_exists($step_file)) include($step_file);
  ?>

  <section class="p-reserve__minor-notice">
    <div class="p-reserve__minor-notice-inner">
      <?php
      $file = get_stylesheet_directory() . '/parts/reserve-minor-notice.php';
      if (file_exists($file)) include($file);
      ?>
    </div>
  </section>

  <section class="p-reserve__contact">
    <div class="p-reserve__contact-inner">
      <?php
      $file = get_stylesheet_directory() . '/parts/reserve-contact.php';
      if (file_exists($file)) include($file);
      ?>
    </div>
  </section>

  <section class="p-reserve__form">
    <div class="p-reserve__form-inner">
      <?php echo do_shortcode('[contact-form-7 id="6ab2752" title="予約_確認"]'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>