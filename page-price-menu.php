<?php get_header(); ?>

<main class="main p-price">
  <section class="c-fv">
    <div class="c-fv__heading">
      <div class="c-fv__inner">
        <h1 class="c-fv__title">price menu</h1>
      </div>
    </div>

    <div class="c-fv__image-wrapper js-parallax">
      <div class="c-fv__image">
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/price-menu_top-pc.webp"
          alt="おしゃれな雑貨が置いてある店内"
          width="1440"
          height="600">
      </div>
    </div>
  </section>

    <!-- パンくずリスト -->
    <nav class="breadcrumb breadcrumb"> <?php breadcrumb(); ?> </nav>


<section class="p-price-summary">
  <div class="p-price-summary__inner">

    <!-- PC: 左カラム / SP: column-reverseで下に表示 -->
    <div class="p-price-summary__text">
      <p class="p-price-summary__desc">
        バレンタインローズは、お客様のなりたい姿に合わせて選択いただけるよう「トライアルコース」「減毛コース」「脱毛コース」の3種類のコースをご用意しています。
      </p>
      <p class="p-price-summary__desc">
        トライアルコースは脱毛効果を実感したい方に、減毛コースは体毛を薄くしたい・減らしたい方に、脱毛コースは施術箇所の体毛をすべて脱毛したい方におすすめのコースです。
      </p>
    </div>

    <!-- PC: 右カラム / SP: column-reverseで上に表示 -->
    <div class="p-price-summary__nav">
      <?php get_template_part('template-parts/parts-price-menu'); ?>
    </div>

  </div>
</section>

<?php
// p-price セクション
// カテゴリ: Body / V-line / Set
// アンカー id="body" / id="vline" / id="set" を付与
?>

<!-- -------------------------------------------------------------------------------- -->

<?php
// p-price-menu セクション
// カテゴリ: Body / V-line / Set
// アンカー id="body" / id="vline" / id="set" を付与
?>

<section class="p-price-menu">

  <?php /* ========== Body ========== */ ?>
  <div id="body" class="p-price-menu__category">
    <div class="p-price-menu__inner">

      <h2 class="p-price-menu__cat-title"><span class="uppercase">Body</span></h2>

      <?php /* --- S パーツ --- */ ?>
      <div class="p-price-menu__group">
        <h3 class="p-price-menu__group-title">Sパーツ</h3>
        <p class="p-price-menu__group-desc">おでこ・ほほ・口周り・あご下の首・うなじ・両脇・手の指&amp;甲・<br class="u-pc-only">足の指&amp;甲・へそ周り・乳輪周り</p>

        <div class="p-price-menu__table">
          <div class="p-price-menu__table-head">
            <div class="p-price-menu__col p-price-menu__col--label"></div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">トライアルコース</span>
              <span class="p-price-menu__course-count">（3回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">減毛コース</span>
              <span class="p-price-menu__course-count">（6回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">脱毛コース</span>
              <span class="p-price-menu__course-count">（12回）</span>
            </div>
          </div>
          <div class="p-price-menu__table-body">
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">1箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">7,600 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">6,500 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">4,900 円</span>
              </div>
            </div>
          </div>
        </div>
        <p class="p-price-menu__note">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>

      <?php /* --- M パーツ --- */ ?>
      <div class="p-price-menu__group">
        <h3 class="p-price-menu__group-title">Mパーツ</h3>
        <p class="p-price-menu__group-desc">お腹全体・胸全体（乳輪周りを含む）・お尻・両腕上（肘含む）・<br class="u-pc-only">両腕下・V（ハイジニーナ）</p>

        <div class="p-price-menu__table">
          <div class="p-price-menu__table-head">
            <div class="p-price-menu__col p-price-menu__col--label"></div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">トライアルコース</span>
              <span class="p-price-menu__course-count">（3回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">減毛コース</span>
              <span class="p-price-menu__course-count">（6回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">脱毛コース</span>
              <span class="p-price-menu__course-count">（12回）</span>
            </div>
          </div>
          <div class="p-price-menu__table-body">
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">1箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">14,900 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">13,200 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">9,900 円</span>
              </div>
            </div>
          </div>
        </div>
        <p class="p-price-menu__note">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>

      <?php /* --- L パーツ --- */ ?>
      <div class="p-price-menu__group">
        <h3 class="p-price-menu__group-title">Lパーツ</h3>
        <p class="p-price-menu__group-desc">背中全体・両膝上（膝含む）・両膝下</p>

        <div class="p-price-menu__table">
          <div class="p-price-menu__table-head">
            <div class="p-price-menu__col p-price-menu__col--label"></div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">トライアルコース</span>
              <span class="p-price-menu__course-count">（3回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">減毛コース</span>
              <span class="p-price-menu__course-count">（6回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">脱毛コース</span>
              <span class="p-price-menu__course-count">（12回）</span>
            </div>
          </div>
          <div class="p-price-menu__table-body">
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">1箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">22,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">19,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">16,500 円</span>
              </div>
            </div>
          </div>
        </div>
        <p class="p-price-menu__note">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>

    </div>
  </ぢ>

  <?php /* ========== V-line ========== */ ?>
  <section id="vline" class="p-price-menu__category">
    <div class="p-price-menu__inner">

      <h2 class="p-price-menu__cat-title">V-line</h2>

      <div class="p-price-menu__group p-price-menu__group--no-desc">

        <div class="p-price-menu__table">
          <div class="p-price-menu__table-head">
            <div class="p-price-menu__col p-price-menu__col--label"></div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">トライアルコース</span>
              <span class="p-price-menu__course-count">（3回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">減毛コース</span>
              <span class="p-price-menu__course-count">（6回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">脱毛コース</span>
              <span class="p-price-menu__course-count">（12回）</span>
            </div>
          </div>
          <div class="p-price-menu__table-body">
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">1箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">7,600 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">6,500 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">4,900 円</span>
              </div>
            </div>
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">2箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">14,900 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">13,200 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">9,900 円</span>
              </div>
            </div>
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">3箇所</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">22,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">19,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">16,500 円</span>
              </div>
            </div>
          </div>
        </div>
        <p class="p-price-menu__note">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>

      </div>
    </div>
  </section>

  <?php /* ========== Set ========== */ ?>
  <section id="set" class="p-price-menu__category">
    <div class="p-price-menu__inner">

      <h2 class="p-price-menu__cat-title"><span class="capitalize">Set</span></h2>

      <div class="p-price-menu__group p-price-menu__group--no-desc">

        <div class="p-price-menu__table">
          <div class="p-price-menu__table-head">
            <div class="p-price-menu__col p-price-menu__col--label"></div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">トライアルコース</span>
              <span class="p-price-menu__course-count">（3回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">減毛コース</span>
              <span class="p-price-menu__course-count">（6回）</span>
            </div>
            <div class="p-price-menu__col p-price-menu__col--course">
              <span class="p-price-menu__course-name">脱毛コース</span>
              <span class="p-price-menu__course-count">（12回）</span>
            </div>
          </div>
          <div class="p-price-menu__table-body">
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">顔全体</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">7,600 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">6,500 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">4,900 円</span>
              </div>
            </div>
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">腕全体</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">14,900 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">13,200 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">9,900 円</span>
              </div>
            </div>
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">足全体</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">22,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">19,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">16,500 円</span>
              </div>
            </div>
            <div class="p-price-menu__row">
              <div class="p-price-menu__col p-price-menu__col--label">全身脱毛</div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">トライアルコース（3回）</span>
                <span class="p-price-menu__amount">27,200 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">減毛コース（6回）</span>
                <span class="p-price-menu__amount">24,800 円</span>
              </div>
              <div class="p-price-menu__col p-price-menu__col--price">
                <span class="p-price-menu__sp-course-label">脱毛コース（12回）</span>
                <span class="p-price-menu__amount">20,900 円</span>
              </div>
            </div>
          </div>
        </div>
        <p class="p-price-menu__note">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>

      </div>
    </div>
  </section>

 <!-- -------------------------------------------------------------------------------- -->
 <?php
/**
 * Template: p-price-custom セクション
 * PC: 左画像 / 右テキスト（2カラム）
 * SP: 上画像 / 下テキスト（1カラム）
 */
?>

<section class="p-price-custom">
  <div class="p-price-custom__inner">

    <!-- 左カラム：画像 -->
    <div class="p-price-custom__image-wrapper">
      <img
        src="https://placehold.co/520x520"
        alt="カスタム脱毛の施術イメージ"
        width="520"
        height="520"
        loading="lazy"
        class="p-price-custom__image"
      >
    </div>

    <!-- 右カラム：テキスト -->
    <div class="p-price-custom__body">
      <h2 class="p-price-custom__title">Custom</h2>
      <div class="p-price-custom__text">
        <p>施術の効果は、脱毛箇所や毛質・毛量、毛周期などによって大きく左右されるため、画一的な施術ではお客様に合わせた最適な脱毛サービスを提供することはできません。</p>
        <p>バレンタインローズでは、お客様に施術の効果をしっかりと感じていただくことができるよう、カウンセリング内容や脱毛箇所、毛質・毛量などを考慮し、オーダーメイドの脱毛メニューを作成しています。</p>
        <p>よりお求めやすい価格で脱毛サービスを提供することができるケースもございますので、オーダーメイドの脱毛メニューをご希望の方はお気軽にご相談ください。</p>
      </div>
    </div>

  </div>
</section>




</main>

<?php get_footer(); ?>