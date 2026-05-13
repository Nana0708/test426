<?php
/**
 * パーツ: PRICE MENU
 * 使い方: <?php get_template_part('template-parts/parts-price-menu'); ?>
 */
?>

<div class="parts-price-menu">
    <nav class="parts-price-menu__nav" aria-label="料金メニュー">
      <ul class="parts-price-menu__list">

        <li class="parts-price-menu__item">
          <a href="/price/body/" class="parts-price-menu__link">
            <span class="parts-price-menu__name">
              <span class="parts-price-menu__name-en capitalize">body</span>
              <span class="parts-price-menu__name-ja">体脱毛</span>
            </span>
            <i class="fa-solid fa-chevron-right parts-price-menu__arrow" aria-hidden="true"></i>
          </a>
        </li>

        <li class="parts-price-menu__item">
          <a href="/price/v-line/" class="parts-price-menu__link">
            <span class="parts-price-menu__name">
              <span class="parts-price-menu__name-en capitalize">v-line</span>
              <span class="parts-price-menu__name-ja">vio脱毛</span>
            </span>
            <i class="fa-solid fa-chevron-right parts-price-menu__arrow" aria-hidden="true"></i>
          </a>
        </li>

        <li class="parts-price-menu__item">
          <a href="/price/custom/" class="parts-price-menu__link">
            <span class="parts-price-menu__name">
              <span class="parts-price-menu__name-en capitalize">custom</span>
              <span class="parts-price-menu__name-ja">オーダーメイド</span>
            </span>
            <i class="fa-solid fa-chevron-right parts-price-menu__arrow" aria-hidden="true"></i>
          </a>
        </li>

        <li class="parts-price-menu__item">
          <a href="/price/set/" class="parts-price-menu__link">
            <span class="parts-price-menu__name">
              <span class="parts-price-menu__name-en capitalize">set</span>
              <span class="parts-price-menu__name-ja">セット脱毛</span>
            </span>
            <i class="fa-solid fa-chevron-right parts-price-menu__arrow" aria-hidden="true"></i>
          </a>
        </li>

        <li class="parts-price-menu__item parts-price-menu__item--full">
          <a href="/price/" class="parts-price-menu__link">
            <span class="parts-price-menu__name">
              <span class="parts-price-menu__name-en capitalize">all</span>
              <span class="parts-price-menu__name-ja">全てのメニュー</span>
            </span>
            <i class="fa-solid fa-chevron-right parts-price-menu__arrow" aria-hidden="true"></i>
          </a>
        </li>

        <!-- PC用ダミーセル（右列の空白・ボーダー補完） -->
        <li class="parts-price-menu__item parts-price-menu__item--dummy" aria-hidden="true"></li>

      </ul>
    </nav>
</div>