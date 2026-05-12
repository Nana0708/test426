<?php
/**
 * パーツ: RESERVE
 * 使い方: <?php get_template_part('template-parts/parts-reserve'); ?>
 */
?>

<section class="parts-reserve">
  <a class="parts-reserve__link" href="<?php echo esc_url( home_url('/reserve') ); ?>">
    <div class="parts-reserve__bg-wrapper">
      <img
        class="parts-reserve__bg-img"
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/reserve-link-sp.webp"
        alt="予約受付サロンのイメージ"
        width="1440"
        height="400"
        loading="lazy"
      >
      <div class="parts-reserve__overlay" aria-hidden="true"></div>
    </div>

    <div class="parts-reserve__inner">
      <div class="c-section-title">
        <p class="c-section-title__main uppercase">reserve</p>
        <p class="c-section-title__sub c-section-title__sub--center">予約はこちらから</p>
      </div>
    </div>
  </a>
</section>