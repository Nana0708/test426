<?php get_header(); ?>

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

  <nav class="breadcrumb"><?php breadcrumb(); ?></nav>

  <?php
  $areas = get_terms( array(
    'taxonomy'   => 'salons_area',
    'hide_empty' => true,
    'orderby'    => 'name',
  ) );

  $order = array( 'tokyo', 'kanagawa', 'saitama', 'osaka', 'kyoto', 'fukuoka', 'okinawa' );
  if ( ! empty( $areas ) && ! is_wp_error( $areas ) ) {
    usort( $areas, function( $a, $b ) use ( $order ) {
      $pos_a = array_search( $a->slug, $order );
      $pos_b = array_search( $b->slug, $order );
      $pos_a = $pos_a === false ? 999 : $pos_a;
      $pos_b = $pos_b === false ? 999 : $pos_b;
      return $pos_a - $pos_b;
    });
  }
  ?>

  <section class="p-salons-archive__prefectures">
    <div class="p-salons-archive__prefectures-inner"> <!-- ① 追加 -->
      <div class="c-section-title">
        <p class="c-section-title__bg capitalize" aria-hidden="true">prefectures</p>
        <h2 class="c-section-title__main uppercase">prefectures</h2>
        <p class="c-section-title__sub">都道府県</p>
      </div>

      <ul class="p-salons-archive__pref-list">
        <?php if ( ! empty( $areas ) && ! is_wp_error( $areas ) ) : ?>
          <?php foreach ( $areas as $area ) : ?>
            <li class="p-salons-archive__pref-item">
              <a class="p-salons-archive__pref-link" href="#<?php echo esc_attr( $area->slug ); ?>">
                <span class="p-salons-archive__pref-arrow" aria-hidden="true">
                  <i class="fa-solid fa-play"></i>
                </span>
                <span class="p-salons-archive__pref-en"><?php echo esc_html( $area->name ); ?></span>
                <?php if ( $area->description ) : ?>
                  <span class="p-salons-archive__pref-ja"><?php echo esc_html( $area->description ); ?></span>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div> <!-- /__prefectures-inner -->
  </section>

  <?php if ( ! empty( $areas ) && ! is_wp_error( $areas ) ) : ?>
    <?php foreach ( $areas as $area ) : ?>

      <div id="<?php echo esc_attr( $area->slug ); ?>" class="p-salons-archive__area">

        <div class="p-salons-archive__area-header"> <!-- ② 帯は全幅なのでinnerは外 -->
          <h2 class="p-salons-archive__area-title"><?php echo esc_html( $area->name ); ?></h2>
        </div> <!-- /__area-header -->

        <div class="p-salons-archive__area-inner"> <!-- ② innerはheaderの外 -->
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
            <div class="p-salons-archive__grid">
              <?php while ( $salons->have_posts() ) : $salons->the_post();
                $post_id = get_the_ID();
                $name_ja = get_the_title();
                $name_en = get_post_meta( $post_id, 'shop_name_en', true );
                $map_url = get_post_meta( $post_id, 'shop_map', true );
                $address = get_post_meta( $post_id, 'shop_address', true );
              ?>
                <a href="<?php the_permalink(); ?>" class="p-salons-archive__card">

                  <div class="p-salons-archive__card-map">
                    <?php if ( $map_url ) : ?>
                      <iframe
                        src="<?php echo esc_url( $map_url ); ?>"
                        allowfullscreen
                        loading="lazy"
                        title="<?php echo esc_attr( $name_ja ); ?>の地図">
                      </iframe>
                    <?php endif; ?>
                  </div>

                  <div class="p-salons-archive__card-info">
                    <?php if ( $name_en ) : ?>
                      <p class="p-salons-archive__card-name-en"><?php echo esc_html( strtoupper( $name_en ) ); ?></p>
                    <?php endif; ?>
                    <p class="p-salons-archive__card-name-ja"><?php echo esc_html( $name_ja ); ?></p>
                    <?php if ( $address ) : ?>
                      <p class="p-salons-archive__card-address"><?php echo esc_html( $address ); ?></p>
                    <?php endif; ?>
                  </div>

                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          <?php endif; ?>
        </div> <!-- /__area-inner -->

      </div> <!-- /__area -->

    <?php endforeach; ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>