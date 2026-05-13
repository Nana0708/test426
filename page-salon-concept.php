<?php get_header(); ?>

<main class="main p-concept">
  <section class="c-fv">
    <div class="c-fv__heading">
      <div class="c-fv__inner">
        <h1 class="c-fv__title">salon concept</h1>
      </div>
    </div>

    <div class="c-fv__image-wrapper js-parallax">
      <div class="c-fv__image">
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/page-concept_top-pc.webp"
          alt="美しい脚のイメージ"
          width="1440"
          height="600">
      </div>
    </div>
  </section>


  <!-- パンくずリスト -->
  <nav class="breadcrumb breadcrumb--sub"> <?php breadcrumb(); ?> </nav>
 
 <!-- aboutセクション -->
 <section class="p-concept-about">
    <div class="p-concept-about__inner">
 
      <!-- 上エリア：見出し（左）+ 画像（右）の2カラム -->
      <div class="p-concept-about__visual">
 
        <h2 class="p-concept-about__heading">
          洗練されたワンランク上の<br>女性を目指すために
        </h2>
 
        <div class="p-concept-about__image-wrap">
          <img
            src="/src/img/page-concept_about.webp"
            alt="洗練された女性のイメージ"
            width="720"
            height="405"
            loading="lazy"
            class="p-concept-about__image"
          >
        </div>
 
      </div><!-- /.p-concept-about__visual -->
 
      <!-- 下エリア：テキスト -->
      <div class="p-concept-about__body">
        バレンタインローズは、東京や大阪、名古屋などの都市部をはじめ日本全国に店舗を構える脱毛サロンで、「洗練されたワンランク上の女性を目指す」というコンセプトのもとオーダーメイドの脱毛サービスを提供しています。毎年30,000人以上のお客様にバレンタインローズの脱毛サービスをご利用いただいており、これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。お客様と脱毛サロンという関係だけでなく、脱毛の卒業後もお客様の隣で女性磨きをサポートすることができる存在となり、そしてバレンタインローズに通っていることを誇りに思ってもらえる、そんな脱毛サロンを目指していきます。
      </div><!-- /.p-concept-about__body -->
 
    </div><!-- /.p-concept-about__inner -->
  </section>

  <section class="p-concept-sns">
  <div class="p-concept-sns__inner">
 
    <div class="p-concept-sns__title">
      <div class="c-section-title">
        <p class="c-section-title__bg uppercase" aria-hidden="true">instagram</p>
        <h2 class="c-section-title__main uppercase">instagram</h2>
        <p class="c-section-title__sub">公式インスタグラム</p>
      </div>
    </div>
 
    <div class="p-concept-sns__feed">
      <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
 
    <div class="p-concept-sns__btn-wrap">
      <a
        href="https://www.instagram.com/nn20250708/"
        target="_blank"
        rel="noopener noreferrer"
        class="c-btn c-btn--icon p-concept-sns__btn"
        aria-label="公式インスタグラムを見る（外部リンク）"
      >
        <i class="fa-brands fa-instagram c-btn__icon" aria-hidden="true"></i>
        Instagram
      </a>
    </div>
 
  </div><!-- /.p-concept-sns__inner -->
</section>


<section class="p-concept-company">
  <div class="p-concept-company__inner">

    <!-- 見出し（作成済みコンポーネント） -->
    <div class="p-concept-company__title">
      <div class="c-section-title">
        <p class="c-section-title__bg uppercase" aria-hidden="true">company profile</p>
        <h2 class="c-section-title__main uppercase">company profile</h2>
        <p class="c-section-title__sub">会社概要</p>
      </div>
    </div>

    <!-- メイン画像 -->
    <div class="p-concept-company__image-wrap">
      <img
        src="/src/img/company-main.webp"
        alt="VALENTINE ROSEのサロン内観"
        width="1080"
        height="540"
        loading="lazy"
        class="p-concept-company__image"
      >
    </div>

    <!-- 会社情報テーブル -->
    <div class="p-concept-company__table-wrap">

      <!--
        PC: __table 内を左列・右列の2カラムで表示
        SP: display:contents により __col が消え、__row がフラットに縦積み
      -->
      <dl class="p-concept-company__table">

        <!-- 左列 -->
        <div class="p-concept-company__col p-concept-company__col--left">
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">運営会社</dt>
            <dd class="p-concept-company__value">株式会社VALENTINE ROSE</dd>
          </div>
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">代表者</dt>
            <dd class="p-concept-company__value">山田 花子</dd>
          </div>
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">電話番号</dt>
            <dd class="p-concept-company__value">000-0000-0000</dd>
          </div>
        </div>

        <!-- 右列 -->
        <div class="p-concept-company__col p-concept-company__col--right">
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">商号</dt>
            <dd class="p-concept-company__value">VALENTINE ROSE</dd>
          </div>
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">所在地</dt>
            <dd class="p-concept-company__value">〒000-0000　東京都港区青山0-00-00</dd>
          </div>
          <div class="p-concept-company__row">
            <dt class="p-concept-company__label">資本金</dt>
            <dd class="p-concept-company__value">3000万円</dd>
          </div>
        </div>

      </dl><!-- /.p-concept-company__table -->

      <!-- 全幅行（従業員数・業務内容）-->
      <div class="p-concept-company__row">
        <dt class="p-concept-company__label">従業員数</dt>
        <dd class="p-concept-company__value">200名</dd>
      </div>

      <div class="p-concept-company__row">
        <dt class="p-concept-company__label">業務内容</dt>
        <dd class="p-concept-company__value">-脱毛サロン「VALENTINE ROSE」の運営</dd>
      </div>

    </div><!-- /.p-concept-company__table-wrap -->

  </div><!-- /.p-concept-company__inner -->
</section><!-- /.p-concept-company -->
</main>
 
<?php get_footer(); ?>

