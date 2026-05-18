<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main p-reserve">

  <!-- 未成年注意書き -->
<section class="p-reserve__minor-notice">
  <div class="p-reserve__minor-notice-inner">
    <?php
    $file = get_stylesheet_directory() . '/parts/reserve-minor-notice.php';
    if (file_exists($file)) include($file);
    ?>
  </div>
</section>

<!-- TELセクション -->
<section class="p-reserve__contact">
  <div class="p-reserve__contact-inner">
    <?php
    $file = get_stylesheet_directory() . '/parts/reserve-contact.php';
    if (file_exists($file)) include($file);
    ?>
  </div>
</section>

    <?php 
    $current_step = 1;
    $step_file = get_stylesheet_directory() . '/parts/reserve-step.php';
    if (file_exists($step_file)) {
        include($step_file);
    } else {
        echo '<!-- step file not found: ' . $step_file . ' -->';
    }
    ?>

    <!-- フォームセクション -->
    <section class="p-reserve__form">
      <div class="p-reserve__form-inner">
        <?php echo do_shortcode('[contact-form-7 id="89acfb5" title="予約"]'); ?>
      </div>
    </section>

  </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>