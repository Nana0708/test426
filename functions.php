<?php
// favicon
function add_favicon()
{
    $template_uri = get_template_directory_uri();
    echo '<link rel="icon" type="image/x-icon" href="' . $template_uri . '/images/favicon.ico" />' . "\n";
    echo '<link rel="apple-touch-icon" href="' . $template_uri . '/images/apple-touch-icon.png" />' . "\n";
}
add_action('wp_head', 'add_favicon');
add_action('admin_head', 'add_favicon'); // WordPress管理画面用
function theme_setup()
{
    // アイキャッチ有効化
    add_theme_support('post-thumbnails');
    // RSSフィードリンクを自動生成する
    add_theme_support('automatic-feed-links');
    // titleタグを自動生成する
    add_theme_support('title-tag');
    // HTML5によるマークアップを行う
    add_theme_support(
        'html5',
        array(
            'search-form',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

add_post_type_support('page', 'excerpt');



function script_init()
{
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    wp_enqueue_style(
        'my-style',
        get_theme_file_uri('/css/style.css'),
        array(),
        filemtime(get_theme_file_path('/css/style.css')),
        'all'
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    wp_enqueue_script(
        'hamburger-js',
        get_theme_file_uri('/js/hamburger.js'),
        array(),
        filemtime(get_theme_file_path('/js/hamburger.js')),
        true
    );

    wp_enqueue_script(
        'accordion-js',
        get_theme_file_uri('/js/accordion.js'),
        array(),
        filemtime(get_theme_file_path('/js/accordion.js')),
        true
    );

    wp_enqueue_script(
        'swiper-custom-js',
        get_theme_file_uri('/js/swiper.js'),
        array('swiper-js'),
        filemtime(get_theme_file_path('/js/swiper.js')),
        true
    );

    wp_enqueue_script(
        'animation-js',
        get_theme_file_uri('/js/animation.js'),
        array(),
        filemtime(get_theme_file_path('/js/animation.js')),
        true
    );

    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('/js/main.js'),
        array(),
        filemtime(get_theme_file_path('/js/main.js')),
        true
    );
}

add_action('wp_enqueue_scripts', 'script_init');


/**
 * 投稿スラッグを投稿IDに自動変換（固定ページを除く）
 */
function auto_post_slug_to_id($slug, $post_ID, $post_status, $post_type)
{
    // 固定ページとサービス投稿タイプは除外する
    if ($post_type === 'page' || $post_type === 'service') {
        return $slug;
    }

    // パブリックな投稿タイプのみ対象とする場合
    $post_type_object = get_post_type_object($post_type);
    if ($post_type_object && $post_type_object->public) {
        // スラッグを投稿IDに置き換える
        $slug = (string) $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug_to_id', 10, 4);

// パンくずリスト
function breadcrumb()
{
    $home = '<li><a href="' . get_bloginfo('url') . '" >ホーム</a></li>';

    echo '<ul>';
    if (is_front_page()) {
        // トップページの場合は表示させない
    }
    // カテゴリページ
    else if (is_category()) {
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_archive_title('<li>', '</li>');
    }
    // 投稿ページ
    else if (is_single()) {
        $cat = get_the_category();
        if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_title('<li>', '</li>');
    }
    // 固定ページ
    else if (is_page()) {
        echo $home;
        the_title('<li>', '</li>');
    }
    // 404ページの場合
    else if (is_404()) {
        echo $home;
        echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}
// アーカイブのタイトルを削除
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_month()) {
        $title = single_month_title('', false);
    }
    return $title;
});

// コンタクトフォーム７カスタム
function my_wpcf7_validation_error_message_kana($result, $tag)
{
    if ('your-email' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, '正しいメールアドレスを入力してください');
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'my_wpcf7_validation_error_message_kana', 10, 2);



// お知らせ投稿タイプ + タクソノミー
function register_news_post_type()
{
    $labels = array(
        'name'                  => _x('ニュース', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('ニュース', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('ニュース', 'Admin Menu text', 'textdomain'),
        'add_new'               => __('ニュースを追加', 'textdomain'),
        'add_new_item'          => __('新しいニュースを追加', 'textdomain'),
        'edit_item'             => __('ニュースを編集', 'textdomain'),
        'new_item'              => __('新規ニュース', 'textdomain'),
        'view_item'             => __('ニュースを見る', 'textdomain'),
        'all_items'             => __('すべてのニュース', 'textdomain'),
        'search_items'          => __('ニュースを検索', 'textdomain'),
        'not_found'             => __('ニュースが見つかりません。', 'textdomain'),
        'not_found_in_trash'    => __('ゴミ箱にニュースはありません。', 'textdomain'),
        'archives'              => _x('ニュースアーカイブ', 'textdomain'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'news'),
        'menu_position'      => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest'       => true,
    );
    register_post_type('news', $args);
    // お知らせカテゴリー
    register_taxonomy('news_category', 'news', array(
        'label'        => __('お知らせ用カテゴリー', 'textdomain'),
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'news-category'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_news_post_type');

// 店舗投稿タイプ + タクソノミー
function register_salons_post_type()
{
    $labels = array(
        'name'                  => _x('店舗', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('店舗', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('店舗', 'Admin Menu text', 'textdomain'),
        'add_new'               => __('店舗を追加', 'textdomain'),
        'add_new_item'          => __('新しい店舗を追加', 'textdomain'),
        'edit_item'             => __('店舗を編集', 'textdomain'),
        'new_item'              => __('新規店舗', 'textdomain'),
        'view_item'             => __('店舗を見る', 'textdomain'),
        'all_items'             => __('すべての店舗', 'textdomain'),
        'search_items'          => __('店舗を検索', 'textdomain'),
        'not_found'             => __('店舗が見つかりません。', 'textdomain'),
        'not_found_in_trash'    => __('ゴミ箱に店舗はありません。', 'textdomain'),
        'archives'              => _x('店舗一覧', 'textdomain'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'salons'),
        'menu_position'      => 6, // newsと被らない位置
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest'       => true,
    );
    register_post_type('salons', $args);
    // 店舗エリア（都道府県など）
    register_taxonomy('salons_area', 'salons', array(
        'label'        => __('店舗エリア', 'textdomain'),
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'salons-area'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_salons_post_type');

// 店舗投稿ページ　タイトルを追加⇨店舗名を入力
function change_title_placeholder( $title ) {
    $screen = get_current_screen();
    
    // 'shop'の部分を実際のカスタム投稿タイプのスラッグに変更
    if ( $screen->post_type == 'salons' ) {
        $title = '店舗名を入力';
    }
    
    return $title;
}
add_filter( 'enter_title_here', 'change_title_placeholder' );

// デフォルト投稿タイプの削除
function remove_menus()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');