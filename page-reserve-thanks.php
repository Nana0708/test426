<?php get_header(); ?>

<main class="main p-reserve">

  <?php
  $current_step = 3;
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

  <section class="p-reserve__thanks">
    <div class="p-reserve__thanks-inner">
      <p class="p-reserve__thanks-title">お問い合わせありがとうございます。</p>
      <p class="p-reserve__thanks-text">3営業日以内に担当者の者から連絡いたします。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-reserve__thanks-link">TOPに戻る</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>