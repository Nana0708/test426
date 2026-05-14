<?php
/*
 * Template Name: ニュース詳細
 * Description: news カスタム投稿タイプの詳細ページ
 */
get_header();

the_post();

// カテゴリー取得
$terms     = get_the_terms( get_the_ID(), 'news_category' );
$term_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Uncategorized';
$term_link = ( $terms && ! is_wp_error( $terms ) ) ? get_term_link( $terms[0] ) : get_post_type_archive_link( 'news' );

// SCF フィールド取得
$sections = SCF::get( 'news_section_group' );

// サイドバー用カテゴリー一覧
$categories = get_terms( array(
    'taxonomy'   => 'news_category',
    'hide_empty' => false,
) );
?>


<!-- ヒーローエリア（カテゴリー名を表示） -->
<section class="p-news-hero">
    <div class="p-news-hero__inner">
        <p class="p-news-hero__title"><?php echo esc_html( $term_name ); ?></p>
    </div>
    <div class="p-news-hero__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/hero-bg.jpg" alt="">
    </div>
</section>

<!-- メインコンテンツ -->
<main class="p-news-single">
    <div class="p-news-single__inner">

        <!-- パンくず -->
        <nav class="c-breadcrumb" aria-label="パンくずリスト">
            <ol class="c-breadcrumb__list">
                <li class="c-breadcrumb__item">
                    <a class="c-breadcrumb__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
                </li>
                <li class="c-breadcrumb__item c-breadcrumb__item--separator" aria-hidden="true">|</li>
                <li class="c-breadcrumb__item">
                    <a class="c-breadcrumb__link" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">ニュース一覧</a>
                </li>
                <li class="c-breadcrumb__item c-breadcrumb__item--separator" aria-hidden="true">|</li>
                <li class="c-breadcrumb__item"><?php the_title(); ?></li>
            </ol>
        </nav>

        <div class="p-news-single__layout">

            <!-- 記事本文エリア -->
            <article class="p-news-single__main">

                <!-- 記事タイトル -->
                <h1 class="p-news-single__title"><?php the_title(); ?></h1>

                <!-- カテゴリー・日付 -->
                <div class="p-news-single__meta">
                    <span class="p-news-single__cat">
                        <a href="<?php echo esc_url( $term_link ); ?>"><?php echo esc_html( $term_name ); ?></a>
                    </span>
                    <span class="p-news-single__date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                </div>

                <!-- アイキャッチ画像 -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="p-news-single__thumbnail">
                        <?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- 本文（SCF フィールド） -->
                <div class="p-news-single__body">
                    <?php if ( $sections ) : ?>
                        <?php foreach ( $sections as $section ) :
                            $text_main   = isset( $section['text_main'] )   ? $section['text_main']   : '';
                            $title_sub   = isset( $section['title_sub'] )   ? $section['title_sub']   : '';
                            $text_sub    = isset( $section['text_sub'] )    ? $section['text_sub']    : '';
                            $title_sub_2 = isset( $section['title_sub_2'] ) ? $section['title_sub_2'] : '';
                            $text_sub_2  = isset( $section['text_sub_2'] )  ? $section['text_sub_2']  : '';
                        ?>
                            <div class="p-news-single__section">

                                <?php if ( $text_main ) : ?>
                                    <div class="p-news-single__text">
                                        <?php echo wp_kses_post( nl2br( $text_main ) ); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $title_sub ) : ?>
                                    <h2 class="p-news-single__heading"><?php echo esc_html( $title_sub ); ?></h2>
                                <?php endif; ?>

                                <?php if ( $text_sub ) : ?>
                                    <div class="p-news-single__text">
                                        <?php echo wp_kses_post( nl2br( $text_sub ) ); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $title_sub_2 ) : ?>
                                    <h3 class="p-news-single__heading p-news-single__heading--sub"><?php echo esc_html( $title_sub_2 ); ?></h3>
                                <?php endif; ?>

                                <?php if ( $text_sub_2 ) : ?>
                                    <div class="p-news-single__text">
                                        <?php echo wp_kses_post( nl2br( $text_sub_2 ) ); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div><!-- /.p-news-single__body -->

                <!-- 一覧へ戻るボタン -->
                <div class="p-news-single__back">
                    <a class="c-btn" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">
                        お知らせ一覧へ
                    </a>
                </div>

            </article><!-- /.p-news-single__main -->

            <!-- サイドバー -->
            <aside class="p-news-single__sidebar">
                <div class="p-news-sidebar">
                    <p class="p-news-sidebar__title">Category</p>
                    <ul class="p-news-sidebar__list">
                        <li class="p-news-sidebar__item">
                            <a class="p-news-sidebar__link" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">すべて</a>
                        </li>
                        <?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
                            <?php foreach ( $categories as $cat ) : ?>
                                <li class="p-news-sidebar__item <?php echo ( isset( $terms[0] ) && $terms[0]->slug === $cat->slug ) ? 'is-active' : ''; ?>">
                                    <a class="p-news-sidebar__link" href="<?php echo esc_url( get_term_link( $cat ) ); ?>">
                                        <?php echo esc_html( $cat->name ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </aside><!-- /.p-news-single__sidebar -->

        </div><!-- /.p-news-single__layout -->
    </div><!-- /.p-news-single__inner -->
</main>

<?php get_footer(); ?>
