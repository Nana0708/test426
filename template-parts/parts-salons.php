<?php
/**
 * パーツ: SALONS
 * 使い方: <?php get_template_part('template-parts/parts-price-menu'); ?>
 */
?>

<div class="parts-salons">
  <a class="parts-salons__link" href="<?php echo esc_url( get_post_type_archive_link('salons') ); ?>">
    <div class="parts-salons__inner">
      <div class="c-section-title">
        <p class="c-section-title__main uppercase">salons</p>
        <p class="c-section-title__sub c-section-title__sub--center">店舗一覧</p>
      </div>
    </div>
  </a>
</div>