<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main p-salons-archive">
    <section class="c-fv">
        <div class="c-fv__heading">
            <div class="c-fv__inner">
                <h1 class="c-fv__title">salons</h1>
            </div>
        </div>
        <div class="c-fv__image-wrapper js-parallax">
            <div class="c-fv__image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/news_top-pc.webp"
                    alt="日本地図"
                    width="1440"
                    height="600">
            </div>
        </div>
    </section>

    <!-- パンくずリスト -->
    <nav class="breadcrumb"><?php breadcrumb(); ?></nav>

<?php
// エリア一覧を取得（表示順をslugで指定）
$areas = get_terms( array(
  'taxonomy'   => 'salons_area',
  'hide_empty' => true,
  'orderby'    => 'slug__in',
  'slug'       => array( 'tokyo', 'kanagawa', 'saitama', 'osaka', 'kyoto', 'fukuoka', 'okinawa' ),
) );
?>

<!-- PREFECTURES（都道府県リスト） -->
<section class="prefectures">
  <div class="section-head">
    <span class="en-bg" aria-hidden="true">Prefectures</span>
    <span class="en">PREFECTURES</span>
    <span class="ja">都道府県</span>
  </div>

  <ul class="pref-list">
    <?php if ( ! empty( $areas ) && ! is_wp_error( $areas ) ) : ?>
      <?php foreach ( $areas as $area ) : ?>
        <li>
          <!-- #エリアのslugでページ内ジャンプ -->
          <a href="#<?php echo esc_attr( $area->slug ); ?>">
            <span class="pref-arrow">▶</span>
            <span class="pref-en"><?php echo esc_html( $area->name ); ?></span>
            <?php if ( $area->description ) : ?>
              <span class="pref-ja"><?php echo esc_html( $area->description ); ?></span>
            <?php endif; ?>
          </a>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</section>

<!-- エリア別店舗セクション -->
<?php if ( ! empty( $areas ) && ! is_wp_error( $areas ) ) : ?>
  <?php foreach ( $areas as $area ) : ?>

    <!-- id="エリアslug" がページ内ジャンプの着地点 -->
    <div id="<?php echo esc_attr( $area->slug ); ?>" class="area-section">

      <div class="area-header">
        <h2><?php echo esc_html( $area->name ); ?></h2>
      </div>

      <?php
      $salons = new WP_Query( array(
        'post_type'      => 'salons',
        'posts_per_page' => -1,
        'tax_query'      => array(
          array(
            'taxonomy' => 'salons_area',
            'field'    => 'slug',
            'terms'    => $area->slug,
          ),
        ),
      ) );
      ?>

      <?php if ( $salons->have_posts() ) : ?>
        <div class="salons-grid">
          <?php while ( $salons->have_posts() ) : $salons->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="salon-card">
              <div class="salon-map">
                <?php if ( get_field('google_map_url') ) : ?>
                  <iframe
                    src="<?php the_field('google_map_url'); ?>"
                    allowfullscreen
                    loading="lazy">
                  </iframe>
                <?php endif; ?>
              </div>
              <div class="salon-info">
                <p class="salon-name-en"><?php echo strtoupper( get_the_title() ); ?></p>
                <span class="salon-name-ja"><?php the_field('salon_name_ja'); ?></span>
                <p class="salon-address"><?php the_field('address'); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>

    </div>

  <?php endforeach; ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>
