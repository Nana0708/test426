<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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


    <!-- 未成年注意書き -->
    <section class="p-reserve__minor-notice">
      <div class="p-reserve__minor-notice-inner">
        <?php
        $file = get_template_directory() . '/template-parts/parts-reserve-minor-notice.php';
        if (file_exists($file)) include($file);
        ?>
      </div>
    </section>

    <!-- TELセクション -->
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


    <!-- フォームセクション -->
    <section class="p-reserve__form">
      <div class="p-reserve__form-inner">
        <?php echo do_shortcode('[contact-form-7 id="89acfb5" title="予約"]'); ?>
      </div>
    </section>

  </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>