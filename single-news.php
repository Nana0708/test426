<?php get_header();

if (have_posts()) :
    the_post();
else :
    wp_redirect(home_url());
    exit;
endif;


// カテゴリー取得
$terms     = get_the_terms(get_the_ID(), 'news_category');
$term_name = ($terms && ! is_wp_error($terms)) ? $terms[0]->name : '';
$term_link = ($terms && ! is_wp_error($terms)) ? get_term_link($terms[0]) : get_post_type_archive_link('news');

// SCF フィールド取得
$text_main  = SCF::get('text_main');
$sections   = SCF::get('section_group');
$img_sp     = SCF::get('thumbnail_sp');

// サイドバー用カテゴリー一覧
$categories = get_terms(array(
    'taxonomy'   => 'news_category',
    'hide_empty' => false,
));
?>

<!-- メインコンテンツ -->
<main class="main p-news-single">
    <section class="c-fv">
        <div class="c-fv__heading">
            <div class="c-fv__inner">
                <h1 class="c-fv__title">news</h1>
            </div>
        </div>
        <div class="c-fv__image-wrapper js-parallax">
            <div class="c-fv__image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/news_top-pc.webp"
                    alt="綺麗な薔薇とタオル"
                    width="1440"
                    height="600">
            </div>
        </div>
    </section>

    <!-- パンくずリスト -->
    <nav class="breadcrumb"><?php breadcrumb(); ?></nav>

    <div class="p-news-single__inner">
        <div class="p-news-single__layout">

            <!-- 記事本文エリア -->
            <article class="p-news-single__main">

                <!-- 記事タイトル -->
                <h2 class="p-news-single__title"><?php the_title(); ?></h2>

                <!-- カテゴリー・日付 -->
                <div class="p-news-single__meta">
    <?php if ($term_name) : ?>
        <span class="p-news-single__cat">
            <a href="<?php echo esc_url($term_link); ?>"><?php echo esc_html($terms[0]->slug ?? ''); ?></a>
        </span>
    <?php endif; ?>
    <span class="p-news-single__date"><?php echo get_the_date('Y.m.d'); ?></span>
</div>

                <?php if (has_post_thumbnail()) : ?>
    <div class="p-news-single__thumbnail">
        <?php if ($img_sp) : ?>
            <picture>
                <source media="(max-width: 767px)" src="<?php echo esc_url($img_sp); ?>">
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            </picture>
        <?php else : ?>
            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
        <?php endif; ?>
    </div>
<?php else : ?>
    <div class="p-news-single__no-image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/no-image.webp"
             alt="no image"
             width="1200"
             height="675"
             loading="lazy">
    </div>
<?php endif; ?>

                <!-- 本文（SCF フィールド） -->
                <div class="p-news-single__body">

                    <?php if ($text_main) : ?>
                        <div class="p-news-single__text">
                            <?php echo wp_kses_post(nl2br($text_main)); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($sections) : ?>
                        <?php foreach ($sections as $section) :
                            $title_sub = isset($section['title_sub']) ? $section['title_sub'] : '';
                            $text_sub  = isset($section['text_sub'])  ? $section['text_sub']  : '';
                        ?>
                            <div class="p-news-single__section">
                                <?php if ($title_sub) : ?>
                                    <h3 class="p-news-single__heading"><?php echo esc_html($title_sub); ?></h3>
                                <?php endif; ?>
                                <?php if ($text_sub) : ?>
                                    <div class="p-news-single__text">
                                        <?php echo wp_kses_post(nl2br($text_sub)); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div><!-- /.p-news-single__body -->

                <!-- 一覧へ戻るボタン -->
                <div class="p-news-single__back">
                <a class="c-btn" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">
    <span class="u-pc-only">お知らせ一覧へ</span>
    <span class="u-sp-only">一覧へ</span>
</a>
                </div>

            </article><!-- /.p-news-single__main -->

            <!-- サイドバー -->
            <aside class="p-news-single__sidebar">
                <div class="p-news-sidebar">
                    <p class="p-news-sidebar__title">Category</p>
                    <ul class="p-news-sidebar__list">
                        <li class="p-news-sidebar__item">
                            <a class="p-news-sidebar__link" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">すべて</a>
                        </li>
                        <?php if ($categories && ! is_wp_error($categories)) : ?>
                            <?php foreach ($categories as $cat) : ?>
                                <li class="p-news-sidebar__item <?php echo (isset($terms[0]) && $terms[0]->slug === $cat->slug) ? 'is-active' : ''; ?>">
                                    <a class="p-news-sidebar__link" href="<?php echo esc_url(get_term_link($cat)); ?>">
                                        <?php echo esc_html($cat->name); ?>
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