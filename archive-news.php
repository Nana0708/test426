<?php
/*
 * Template Name: ニュース一覧
 * Description: news カスタム投稿タイプの一覧ページ
 */
get_header();

// 現在のカテゴリー情報を取得
$current_cat      = get_queried_object();
$current_cat_slug = '';
$current_cat_name = 'ALL';

if ( $current_cat instanceof WP_Term ) {
    $current_cat_slug = $current_cat->slug;
    $current_cat_name = $current_cat->name;
}

// WP_Query で news を取得
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
    'post_type'      => 'news',
    'posts_per_page' => 10,
    'paged'          => $paged,
);

// カテゴリーで絞り込み
if ( $current_cat_slug ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'news_category',
            'field'    => 'slug',
            'terms'    => $current_cat_slug,
        ),
    );
}

$news_query = new WP_Query( $args );

// サイドバー用カテゴリー一覧
$categories = get_terms( array(
    'taxonomy'   => 'news_category',
    'hide_empty' => false,
) );
?>


<section class="p-news-hero">
    <div class="p-news-hero__inner">
        <p class="p-news-hero__title"><?php echo esc_html( $current_cat_name ); ?></p>
    </div>
    <div class="p-news-hero__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/hero-bg.jpg" alt="">
    </div>
</section>

<!-- メインコンテンツ -->
<main class="p-news-archive">
    <div class="p-news-archive__inner">

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
                <?php if ( $current_cat_slug ) : ?>
                <li class="c-breadcrumb__item c-breadcrumb__item--separator" aria-hidden="true">|</li>
                <li class="c-breadcrumb__item"><?php echo esc_html( $current_cat_name ); ?></li>
                <?php endif; ?>
            </ol>
        </nav>

        <div class="p-news-archive__layout">

            <!-- 記事一覧 -->
            <div class="p-news-archive__main">
                <?php if ( $news_query->have_posts() ) : ?>
                    <ul class="p-news-list">
                        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                            <?php
                            $terms     = get_the_terms( get_the_ID(), 'news_category' );
                            $term_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Uncategorized';
                            ?>
                            <li class="p-news-list__item">
                                <a class="p-news-list__link" href="<?php the_permalink(); ?>">
                                    <span class="p-news-list__date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                                    <span class="p-news-list__title"><?php the_title(); ?></span>
                                    <span class="p-news-list__cat"><?php echo esc_html( $term_name ); ?></span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <!-- ページネーション -->
                    <div class="c-pagination">
                        <?php
                        echo paginate_links( array(
                            'total'   => $news_query->max_num_pages,
                            'current' => $paged,
                        ) );
                        ?>
                    </div>

                <?php else : ?>
                    <p class="p-news-archive__empty">記事が見つかりませんでした。</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div><!-- /.p-news-archive__main -->

            <!-- サイドバー -->
            <aside class="p-news-archive__sidebar">
                <div class="p-news-sidebar">
                    <p class="p-news-sidebar__title">Category</p>
                    <ul class="p-news-sidebar__list">
                        <li class="p-news-sidebar__item <?php echo ( ! $current_cat_slug ) ? 'is-active' : ''; ?>">
                            <a class="p-news-sidebar__link" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">すべて</a>
                        </li>
                        <?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
                            <?php foreach ( $categories as $cat ) : ?>
                                <li class="p-news-sidebar__item <?php echo ( $current_cat_slug === $cat->slug ) ? 'is-active' : ''; ?>">
                                    <a class="p-news-sidebar__link" href="<?php echo esc_url( get_term_link( $cat ) ); ?>">
                                        <?php echo esc_html( $cat->name ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </aside><!-- /.p-news-archive__sidebar -->

        </div><!-- /.p-news-archive__layout -->
    </div><!-- /.p-news-archive__inner -->
</main>

<?php get_footer(); ?>
