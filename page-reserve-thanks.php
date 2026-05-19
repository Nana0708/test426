<?php get_header(); ?>

<main class="main p-reserve">
<section class="c-fv">
    <div class="c-fv__heading">
        <div class="c-fv__inner">
            <h1 class="c-fv__title">reserve</h1>
        </div>
    </div>

    <div class="c-fv__image-wrapper js-parallax">
        <div class="c-fv__image">

            <picture>
                <!-- SP -->
                <source
                    media="(max-width: 767px)"
                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/reserve_top-sp.webp">

                <!-- PC -->
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/reserve_top-pc.webp"
                    alt="スマートフォンで予約するイメージ"
                    width="1440"
                    height="600">
            </picture>

        </div>
    </div>
</section>
        <!-- パンくずリスト -->
        <nav class="breadcrumb"><?php breadcrumb(); ?></nav>


  <section class="p-reserve__minor-notice">
    <div class="p-reserve__minor-notice-inner">
      <?php
      $file = get_template_directory() . '/template-parts/parts-reserve-minor-notice.php';
      if (file_exists($file)) include($file);
      ?>
    </div>
  </section>

  <section class="p-reserve__contact">
    <div class="p-reserve__contact-inner">
      <?php
      $file = get_template_directory() . '/template-parts/parts-reserve-contact.php';
      if (file_exists($file)) include($file);
      ?>
    </div>
  </section>

  <?php
    $current_step = 1;
    $step_file = get_template_directory() . '/template-parts/parts-reserve-step.php';
    if (file_exists($step_file)) {
        include($step_file);
    } else {
        echo '<!-- step file not found: ' . $step_file . ' -->';
    }
    ?>

  <section class="p-reserve__thanks">
    <div class="p-reserve__thanks-inner">
      <p class="p-reserve__thanks-title">お問い合わせありがとうございます。</p>
      <p class="p-reserve__thanks-text">3営業日以内に担当者の者から連絡いたします。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-reserve__thanks-link">TOPに戻る</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>