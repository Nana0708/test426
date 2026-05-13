<?php get_header(); ?>

<!-- FEATURE -->
<section class="feature">
  <div class="feature__inner">

    <!-- セクションタイトル（feature専用） -->
    <div class="feature__title-wrap">
      <p class="feature__title-bg" aria-hidden="true">Feature</p>
      <h2 class="feature__title">FEATURE</h2>
    </div>

    <div class="feature__body">

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

    </div><!-- /.feature__body -->

  </div><!-- /.feature__inner -->
</section>


<section class="price">
  <div class="price__inner">

    <!-- 見出し（既存コンポーネント） -->
    <div class="c-section-title">
      <p class="c-section-title__bg capitalize" aria-hidden="true">price menu</p>
      <h2 class="c-section-title__main uppercase">price menu</h2>
      <p class="c-section-title__sub">メニュー料金</p>
    </div>
    <?php get_template_part('template-parts/parts-price-menu'); ?>

  </div><!-- /.price__inner -->
</section><!-- /.price -->


<section class="faq">
  <div class="faq__inner">

    <div class="c-section-title">
      <p class="c-section-title__bg uppercase" aria-hidden="true">faq</p>
      <h2 class="c-section-title__main uppercase">faq</h2>
      <p class="c-section-title__sub">よくある質問</p>
    </div>

    <div class="faq__list">

      <!-- item 01 -->
      <div class="faq__item is-open">
        <button class="faq__question" type="button" aria-expanded="true" aria-controls="faq-answer-01">
          <span class="faq__label faq__label--q">Q</span>
          <span class="faq__question-text">脱毛後にまた毛が生えてくることはありますか？</span>
          <span class="faq__icon" aria-hidden="true"></span>
        </button>
        <div class="faq__answer" id="faq-answer-01" role="region">
          <div class="faq__answer-inner">
            <span class="faq__label faq__label--a">A</span>
            <p class="faq__answer-text">出産や生理といったホルモンバランスの変化によって、脱毛後も体毛が生えてくるケースがあります</p>
          </div>
        </div>
      </div>

      <!-- item 02 -->
      <div class="faq__item">
        <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-02">
          <span class="faq__label faq__label--q">Q</span>
          <span class="faq__question-text">脱毛すると汗の量が増えると聞いたことがあるのですが本当ですか？</span>
          <span class="faq__icon" aria-hidden="true"></span>
        </button>
        <div class="faq__answer" id="faq-answer-02" role="region">
          <div class="faq__answer-inner">
            <span class="faq__label faq__label--a">A</span>
            <p class="faq__answer-text">脱毛によって発汗量が増えるというエビデンスはありませんが、毛がなくなることによって汗が直接衣服に触れることで、汗が増えたように感じることはあるかもしれません。</p>
          </div>
        </div>
      </div>

      <!-- item 03 -->
      <div class="faq__item">
        <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-03">
          <span class="faq__label faq__label--q">Q</span>
          <span class="faq__question-text">コースの勧誘やセールスなどはありますか？</span>
          <span class="faq__icon" aria-hidden="true"></span>
        </button>
        <div class="faq__answer" id="faq-answer-03" role="region">
          <div class="faq__answer-inner">
            <span class="faq__label faq__label--a">A</span>
            <p class="faq__answer-text">お客様の毛質や毛量、ご予算等をお伺いして最適な脱毛プランを提案しますが、最終的にはお客様が無理なく通える範囲のコースを、ご自身で決定いただきたいと考えています。特に、初めての脱毛の場合は不安になる気持ちもよくわかりますので、その場で契約せずにゆっくりと考えていただく時間も大切です。バレンタインローズでは、無理な勧誘やしつこい営業行為は一切行いませんので、安心して無料体験にお越しください。</p>
          </div>
        </div>
      </div>

      <!-- item 04 -->
      <div class="faq__item">
        <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-04">
          <span class="faq__label faq__label--q">Q</span>
          <span class="faq__question-text">脱毛することで毛が濃くなることはありますか？</span>
          <span class="faq__icon" aria-hidden="true"></span>
        </button>
        <div class="faq__answer" id="faq-answer-04" role="region">
          <div class="faq__answer-inner">
            <span class="faq__label faq__label--a">A</span>
            <p class="faq__answer-text">脱毛によって毛が濃くなることはありません。ただし、硬毛化という現象によって一時的に体毛が濃くなるケースが稀にありますが、施術を進めていくことで少しずつ体毛は薄くなっていきます。</p>
          </div>
        </div>
      </div>

      <!-- item 05 -->
      <div class="faq__item">
        <button class="faq__question" type="button" aria-expanded="false" aria-controls="faq-answer-05">
          <span class="faq__label faq__label--q">Q</span>
          <span class="faq__question-text">脱毛箇所を剃毛することで、かえって体毛が太くなることはありますか？</span>
          <span class="faq__icon" aria-hidden="true"></span>
        </button>
        <div class="faq__answer" id="faq-answer-05" role="region">
          <div class="faq__answer-inner">
            <span class="faq__label faq__label--a">A</span>
            <p class="faq__answer-text">剃毛によって体毛が太くなることはありません。剃毛すると体毛の断面が見えやすくなることによって太く見えることはありますが、施術を重ねるたびに少しずつ薄く・細くなっていきます。</p>
          </div>
        </div>
      </div>

      <!-- パーツ -->
      <?php get_template_part('template-parts/parts-reserve'); ?>

      <div class="parts-salons-sns">
  <?php get_template_part('template-parts/parts-salons'); ?>
  <?php get_template_part('template-parts/parts-sns'); ?>
</div>
 

    </div><!-- /.faq__list -->
  </div><!-- /.faq__inner -->
</section><!-- /.faq -->

<?php get_footer(); ?>