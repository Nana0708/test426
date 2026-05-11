<?php get_header(); ?>

<!-- FEATURE -->
<section class="feature">
  <div class="feature__inner">

    <div class="feature__head">

      <!-- セクションタイトル（共通コンポーネント） -->
      <div class="c-section-title">
        <p class="c-section-title__bg capitalize" aria-hidden="true">feature</p>
        <h2 class="c-section-title__main uppercase">feature</h2>
      </div>

      <!-- 左カラム：ナビゲーションリスト（PCのみ表示） -->
      <div class="feature__left js-feature__left u-lg-none js-inview">
        <div class="feature__guide-wrap js-feature__guide-wrap">

          <div class="feature__guide js-feature__guide active">
            <span class="feature__guide-number">Ⅰ</span>
            <p class="feature__guide-text">高性能の機械を導入</p>
          </div>

          <div class="feature__guide js-feature__guide">
            <span class="feature__guide-number">Ⅱ</span>
            <p class="feature__guide-text">痛みを最小限まで抑えた施術</p>
          </div>

          <div class="feature__guide js-feature__guide">
            <span class="feature__guide-number">Ⅲ</span>
            <p class="feature__guide-text">1回の施術は<br>入店～退店まで約30分</p>
          </div>

        </div>
      </div><!-- /.feature__left -->

      <!-- 中央〜右カラム：スライダー -->
      <div class="slider js-slider js-inview">

        <!-- スライド 1 -->
        <div class="slider__item">
          <div class="slider__content">

            <div class="slider__img-wrap">
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/src/img/feature_01-pc.webp"
                  media="(min-width: 1025px)"
                  width="315"
                  height="550">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/src/img/feature_01-sp.webp"
                  alt="腕に脱毛機械を当てている様子"
                  class="slider__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </div>

            <div class="slider__right">
              <p class="slider__top">FEATURE&nbsp;I</p>
              <span class="slider__divider" aria-hidden="true"></span>
              <p class="slider__title">高性能の機械を導入</p>
              <p class="slider__text">
                美肌に特化したフィルターを使用し<br>
                真皮層に働きかけることで<br>
                コラーゲンの生成を促進させます。<br>
                また、むくみの原因である溜まった<br>
                リンパを流すことで顔のむくみを取り、<br>
                若々しいお肌と小顔効果が期待できます。
              </p>
            </div>

          </div>
        </div><!-- /.slider__item -->

        <!-- スライド 2 -->
        <div class="slider__item">
          <div class="slider__content">

            <div class="slider__img-wrap">
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/src/img/feature_02-pc.webp"
                  media="(min-width: 1025px)"
                  width="315"
                  height="550">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/src/img/feature_02-sp.webp"
                  alt="女性スタッフが笑顔で応対している様子"
                  class="slider__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </div>

            <div class="slider__right">
              <p class="slider__top">FEATURE&nbsp;Ⅱ</p>
              <span class="slider__divider" aria-hidden="true"></span>
              <p class="slider__title">痛みを最小限まで<br>抑えた施術</p>
              <p class="slider__text">
                毛質・毛量や脱毛箇所などに合わせて<br>
                オーダーメイドの脱毛プランを作成し、<br>
                メンズ専用の脱毛器を使用して施術します。
              </p>
            </div>

          </div>
        </div><!-- /.slider__item -->

        <!-- スライド 3 -->
        <div class="slider__item">
          <div class="slider__content">

            <div class="slider__img-wrap">
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/src/img/feature_03-pc.webp"
                  media="(min-width: 1025px)"
                  width="315"
                  height="550">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/src/img/feature_03-sp.webp"
                  alt="受付の様子"
                  class="slider__img"
                  width="450"
                  height="630"
                  loading="lazy">
              </picture>
            </div>

            <div class="slider__right">
              <p class="slider__top">FEATURE&nbsp;Ⅲ</p>
              <span class="slider__divider" aria-hidden="true"></span>
              <p class="slider__title">1回の施術は<br>入店～退店まで約30分</p>
              <p class="slider__text">
                施術自体は15分程度。<br>
                初回はカウンセリングもあるので<br>
                多少お時間をいただきますが、<br>
                2回目以降は薄化粧で来ていただくと、<br>
                入店から退店まで30分弱で済みます。
              </p>
            </div>

          </div>
        </div><!-- /.slider__item -->

      </div><!-- /.slider -->

    </div><!-- /.feature__head -->

  </div><!-- /.feature__inner -->
</section><!-- /.feature -->

<?php get_footer(); ?>