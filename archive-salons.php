<?php get_header(); ?>

<main class="main p-price">
  <section class="c-fv">
    <div class="c-fv__heading">
      <div class="c-fv__inner">
        <h1 class="c-fv__title">salon concept</h1>
      </div>
    </div>

    <div class="c-fv__image-wrapper js-parallax">
      <div class="c-fv__image">
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/news_top-pc.webp"
          alt="美しい脚のイメージ"
          width="1440"
          height="600">
      </div>
    </div>
  </section>

    <!-- パンくずリスト -->
    <nav class="breadcrumb breadcrumb--sub"> <?php breadcrumb(); ?> </nav>


</main>

<?php get_footer(); ?>