<?php

/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');


/**
 * CSSとJavaScriptの読み込み
 */


function my_script_init()
{

  // // WordPress提供のjquery.jsを読み込まない
  // wp_deregister_script('jquery');

  //GoogleCDNからJqueryを読み込む
  wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');

  // CSS
  wp_enqueue_style('animate', get_template_directory_uri() . '/CSS/animate.css', array(), '1.0.0', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/CSS/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style-map', get_template_directory_uri() . '/CSS/style.css.map', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/CSS/style.css', array(), '1.0.0', 'all');


  // Google Fonts
  wp_enqueue_style('Google-fonts', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@400;500;600;700&family=Patua+One&display=swap');
  wp_enqueue_style('Google-fonts-2ub', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@400;500;600;700&family=Patua+One&display=swap');


  //SNS icon
  wp_enqueue_style('sns-fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');


  // swiper & iScroll
  wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_style('swiper2', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('iScroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array('jquery'), '1.0.0', true);

  // Drawer
  wp_enqueue_script('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_style('drawer2', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', array(), '1.0.0', 'all');

  // js
  wp_enqueue_script('wow', get_template_directory_uri() . '/JS/wow.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/JS/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');



/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{

  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archive'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
function my_widget_init()
{
  register_sidebar(
    array(
      'name' => 'サイドバー', //表示するエリア名
      'id' => 'sidebar', //id
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<div class="widget-title">',
      'after_title' => '</div>',
    )
  );
}
add_action('widgets_init', 'my_widget_init');


/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title)
{

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


