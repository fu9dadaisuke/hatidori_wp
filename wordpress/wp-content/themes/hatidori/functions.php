<?php

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( $scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
    }
}
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('template_redirect', 'rest_output_link_header', 11 );

// ログイン画面カスタマイズ
function custom_login_logo() { ?>
  <style>
    .login {
        background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/image00.jpg) no-repeat center center;
        background-size: cover;
    }
    .login form {
        background: rgba(0,0,0,0.5);
    }
    .login label {
        color: #ddd;
    }
    .login form img {
        padding: 6px;
        background: #fff;
    }
    .login form .input, .login input[type=text] {
        font-size: 21px;
    }
    .login #login h1 a {
      width: 80px;
      height: 160px;
      background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png) no-repeat 0 0;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );

//ロゴのリンク先を変更する
function custom_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

// ログイン画面プレースホルダ
function login_user_pass_placeholder() { ?>
  <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#loginform label[for="user_login"], #loginform label[for="user_pass"]').contents().filter(function() {
        return this.nodeType === 3;
      }).remove();

      $('#loginform input[type="text"]').attr('placeholder', 'Username');
      $('#loginform input[type="password"]').attr('placeholder', 'Password');
      $('#loginform input[name="siteguard_captcha"]').attr('placeholder', '');
    });
  </script>
<?php }
add_action( 'login_enqueue_scripts', 'login_user_pass_placeholder' );

// ログイン画面非表示項目
function login_nav_backtoblog_hide() { ?>
  <style>
    .login #nav,
    .login #backtoblog {
      display: none;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_nav_backtoblog_hide' );


// バージョン更新を非表示にする
add_filter('pre_site_transient_update_core', '__return_zero');
// APIによるバージョンチェックの通信をさせない
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

// 管理バーのヘルプメニューを非表示にする
function my_admin_head(){
 echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
 }
add_action('admin_head', 'my_admin_head');
// メニューを非表示にする
function remove_menus () {
 if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
 remove_menu_page('wpcf7'); //Contact Form 7
 global $menu;
 unset($menu[2]); // ダッシュボード
 unset($menu[6]); // 投稿
 unset($menu[15]); // リンク
 unset($menu[20]); // ページ
 unset($menu[25]); // コメント
 unset($menu[59]); // メニューの線2
 unset($menu[60]); // テーマ
 unset($menu[65]); // プラグイン
 unset($menu[70]); // ユーザー
 unset($menu[75]); // ツール
 unset($menu[80]); // 設定
 unset($menu[90]); // メニューの線3
 }
 }
add_action('admin_menu', 'remove_menus');
// ダッシュボードウィジェット非表示
function example_remove_dashboard_widgets() {
 if (!current_user_can('level_10')) { //level10以下のユーザーの場合ウィジェットをunsetする
 global $wp_meta_boxes;
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // アクティビティ
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_notes']); // プラグイン
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
 }
 }
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

// 投稿画面の項目を非表示にする
function remove_default_post_screen_metaboxes() {
 if (!current_user_can('level_10')) { // level10以下のユーザーの場合メニューをremoveする
 remove_meta_box( 'postexcerpt','post','normal' ); // 抜粋
 remove_meta_box( 'tagsdiv-post_tag','post','normal' ); // タグ
 remove_meta_box( 'commentstatusdiv','post','normal' ); // ディスカッション
 remove_meta_box( 'commentsdiv','post','normal' ); // コメント
 remove_meta_box( 'trackbacksdiv','post','normal' ); // トラックバック
 remove_meta_box( 'authordiv','post','normal' ); // 作成者
 remove_meta_box( 'slugdiv','post','normal' ); // スラッグ
 remove_meta_box( 'revisionsdiv','post','normal' ); // リビジョン
 remove_meta_box( 'menu_order','post','normal' ); // 順序
 }
 }
add_action('admin_menu','remove_default_post_screen_metaboxes');


// Activate Post thumbnails
add_theme_support( "post-thumbnails" );
add_image_size( 'single-main', 720, 480, true );
add_image_size( 'single-thumbnail', 480, 320, true );

// スマホ判別用
function is_mobile() {
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    'Android',         // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
 function set_fs_method($args) {
  return 'direct';
}
add_filter('filesystem_method','set_fs_method');

/* バーを消す */
add_filter( 'show_admin_bar', '__return_false' );



//headerをきれいに
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);

//絵文字削除
function disable_emoji() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );


//画像の余分なタグを削除
function remove_img_attr($html, $id, $alt, $title, $align, $size) {
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
  return preg_replace('/ class=[\'"]([^\'"]+)[\'"]/i', '', $html);
}
add_filter('get_image_tag','remove_img_attr', 10, 6);


//ヘッダー部分のCSS消去
add_action('wp_print_styles','lm_dequeue_header_styles');
function lm_dequeue_header_styles(){ wp_dequeue_style('yarppWidgetCss'); }

//フッター部分のCSS消去
add_action('get_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles(){ wp_dequeue_style('yarppRelatedCss'); }

//サムネイルを有効にした場合に呼び出されるCSS消去
add_action('wp_print_styles','lm_dequeue_header_styles1');
function lm_dequeue_header_styles1(){ wp_dequeue_style('yarpp-thumbnails-yarpp-thumbnail'); }
add_action('get_footer','lm_dequeue_footer_styles1');
function lm_dequeue_footer_styles1(){ wp_dequeue_style('yarpp-thumbnails-yarpp-thumbnail'); }

// ページ分割用のタグを挿入するボタンを追加
function add_my_quicktag() { ?>
<script type="text/javascript">
QTags.addButton( 'btn_h2', 'h2', '<h2>', '</h2>', 'false', '', '1' );
QTags.addButton( 'btn_h3', 'h3', '<h3>', '</h3>', 'false', '', '2' );
QTags.addButton( 'btn_text-big', '文字大きく', '<span class="text-big">', '</span>', 'false', '', '3' );
QTags.addButton( 'btn_text-small', '文字小さく', '<span class="text-small">', '</span>', 'false', '', '4' );
QTags.addButton( 'btn_text-center', '中央寄せ', '<div class="content-center">', '</div>', 'false', '', '5' );
</script>
<?php
}

add_action('admin_print_footer_scripts',  'add_my_quicktag');

/***********************************************************
* 投稿名変更
***********************************************************/
function change_post_menu_label() {
global $menu;
global $submenu;
$menu[5][0] = 'ニュース';
$submenu['edit.php'][5][0] = '投稿一覧';
$submenu['edit.php'][10][0] = '新しい投稿';
$submenu['edit.php'][16][0] = 'タグ';
//echo ”;
}
function change_post_object_label() {
global $wp_post_types;
$labels = &$wp_post_types['post']->labels;
$labels->name = 'post';
$labels->singular_name = 'post';
$labels->add_new = _x('作成', 'post');
$labels->add_new_item = '投稿のメニュー';
$labels->edit_item = '投稿の編集';
$labels->new_item = '新しい投稿';
$labels->view_item = '投稿を表示';
$labels->search_items = '投稿を検索';
$labels->not_found = '投稿が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱にも見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

?>