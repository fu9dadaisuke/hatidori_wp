<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>本づくりを通して楽しい明日をつくる｜株式会社八鳥（ハチドリ） | 株式会社 八鳥（ハチドリ）</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <?php if(wp_is_mobile()): ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_sp.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php endif; ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/vnd.microsoft.icon">

    <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
    <!-- top専用-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
    <link rel="stylesheet" media="(max-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/top_sp.css">
    <!-- rwd設定 -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- slide設定 -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
<![endif]-->
    <?php if ( is_home() || is_front_page() ) : ?>
    <?php wp_deregister_script('jquery'); ?>
    <?php endif; ?>

    <?php wp_head();?>

</head>

<body>
    <div id="wrapper">
        <header>
            <section class="header_inner">
                <h1>
                    <a href="http://hatidori.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/top/logo_top.png" width="147" height="35" alt="八鳥"></a>
                </h1>
                <nav>
                    <ul>
                        <li>
                            <a href="http://hatidori.jp/books/">本づくり</a>
                        </li>
                        <li>
                            <a href="http://hatidori.jp/about/">八鳥とは</a>
                        </li>
                        <li>
                            <a href="http://hatidori.jp/news/">ブログ</a>
                        </li>
                        <li>
                            <a href="http://shop.hatidori.jp/">ショップ</a>
                        </li>
                        <li>
                            <a href="http://hatidori.jp/contact/">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </header>
        <!-- end header-->
        <section id="contents" class="container clearfix nopadding">
            <main>
                <article>
                    <section class="books">
                        <h2>本のご紹介</h2>
                        <p class="sub_title">本のわくから飛び出した本のかたち</p>
                        <div class="cover">
                            <ul class="slick-box pc_block">
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                            </ul>
                            <ul class="slick-box sp_block">
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                                <li><img src="https://placehold.jp/1170x400.png" alt=""></li>
                            </ul>

                        </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.slick-box').slick({
                                    autoplay: true,
                                    prevArrow: '<div class="prev">◀</div>',
                                    nextArrow: '<div class="next">▶</div>'
                                });
                            });

                        </script>
                    </section>
                    <section>
                        <h2>作家のご紹介</h2>
                        <p class="sub_title pc_block">個性あふれる作家さんたちの活動や本のつくり方
                        </p>
                        <p class="sub_title sp_block">作家さんの活動や本のつくり方
                        </p>
                        <div class="column_box">
                            <div class="column_3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/author01.png" alt="写真">
                                <div class="text_box">
                                    <p class="name">melancolia storytelling<br>（相澤 歩）</p>
                                    <p class="text-center">シンガーソングライター</p>
                                    <p> 見たことはないけれどよく知ってるような景色をテーマにしたうたと物語と写真と映像と庭をつくる。<br class="pc_block">Twitterとinstagramでオリジナルストーリーをほぼ毎日配信中。
                                    </p>
                                </div>
                            </div>
                            <div class="column_3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/author02.png" alt="写真">
                                <div class="text_box">
                                    <p class="name">水上 庭</p>
                                    <p class="text-center">舞台俳優／小説家</p>
                                    <p>東京芸術大学美術学部先端芸術表現科卒。俳優として活動する傍ら、桐沢たえ名義で同人誌小説を執筆。<br class="pc_block">舞台の脚本のような視覚化しやすい表現と繊細な心の変化を捉えた描写に定評がある。
                                    </p>
                                </div>
                            </div>
                            <div class="column_3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top/author03.png" alt="写真">
                                <div class="text_box">
                                    <p class="name">joh</p>
                                    <p class="text-center">絵描き</p>
                                    <p>東京と名古屋を中心に活動中。暮らしのなかにある気づきをコンセプトにした作品をつくる。<br>ショッピングモールでのライブペイントや子どものための絵画教室などを通して、絵を描くことの楽しさも伝える。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2>ブログ</h2>
                        <p class="sub_title">日々の活動や出版情報など</p>
                        <div id="media_list">
                            <ul class="clearfix column_box">
                                <!-- news -->
                                <?php query_posts('posts_per_page=8'); ?>

                                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <li class="column_4">
                                    <a href="<?php the_permalink();?>">
                                        <?php if(in_category('1')): ?>
                                        <div class="corner blue">
                                            <?php elseif(in_category('2')): ?>
                                            <div class="corner red">
                                                <?php elseif(in_category('3')): ?>
                                                <div class="corner yellow">
                                                    <?php elseif(in_category('4')): ?>
                                                    <div class="corner green">
                                                        <?php else: ?>
                                                        <div class="corner blue">
                                                            <?php endif; ?>
                                                            <div class="media_image">
                                                                <?php $title = get_the_title(); the_post_thumbnail('single-thumbnail', array( 'class' => 'img-responsive', 'alt' => $title )); ?>
                                                            </div>
                                                        </div>
                                                        <div class="media_info">
                                                            <h3>
                                                                <?php the_title(); ?>
                                                            </h3>
                                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; // end of the loop. ?>
                                <!-- end news -->
                            </ul>
                            </div>
                    </section>
                </article>
            </main>
            <!-- end main-->
        </section>
        <!-- end #contents-->
        <section class="bnr hr-top">
            <div class="container pt-large pb-large">
                <ul class="clearfix">
                    <li>
                        <a href="http://hatidori.jp/books/"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/bnr_01.svg" class="img-responsive"></a>
                    </li>
                    <li>
                        <a href="http://shop.hatidori.jp/" target="_blank"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/bnr_02.svg" class="img-responsive"></a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="contact hr-top">
            <div class="container nopadding mt-medium">
                <div class="clearfix pb-medium">
                    <div class="link_contact">
                        <h2 class="title black mincyo">もっと自由に、もっと身近に、<br />あなたの本を出版しませんか？</h2>
                        <p>八鳥は、自分で本をつくりたいという方の出版をお手伝いしています。企画から出版、イベント企画など、本づくりを一貫してサポートするとともに、より多くの方の下へ届くよう日本中を飛び回ります。</p>
                        <p>また、八鳥は出版と併せて、自然の保全活動を応援しています。人と自然の共存する循環型社会を目指し、その一助となることをお約束します。</p>
                        <p>本づくりに興味のある方、お気軽にお問い合わせください。</p>
                        <p class="mt-medium text-center">
                            <a href="http://hatidori.jp/contact/"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/contact.png" height="48"></a>
                        </p>
                    </div>
                    <div class="link_facebook mt-small mb-small">
                        <div class="fb-page" data-href="https://www.facebook.com/hatidori/" data-tabs="timeline" data-width="500" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/hatidori/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hatidori/">株式会社八鳥</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!-- end #wrapper-->

        <footer>
            <div class="container nopadding">
                <div id="inview" class="shelf clearfix">
                    <a class="book home-page" href="http://hatidori.jp/books/">本づくり</a>
                    <a class="book about-us" href="http://hatidori.jp/about/">八鳥とは</a>
                    <a class="book contact" href="http://hatidori.jp/contact/">お問い合わせ</a>
                    <a class="book faq" href="http://shop.hatidori.jp/" target="_blank">ショップ</a>
                    <a class="book not-found" href="http://hatidori.jp/news/">ブログ</a>
                    <span class="hatidori"><a href="http://hatidori.jp"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/logo_mark.png"></a></span>

                    <span class="door left"></span>
                    <span class="door right"></span>
                </div>
            </div>
            <small>Copyright hatidori,inc. all right reserved.</small>
        </footer>
        <!-- end footer-->
        <!-- sp nav -->
        <button class="modal-aside"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/menu.svg" height="60"></button>
        <nav class="sp_nav">
            <ul class="clearfix">
                <li><a href="http://hatidori.jp/">トップページ</a></li>
                <li><a href="http://hatidori.jp/books/">本づくり</a></li>
                <li><a href="http://hatidori.jp/about/">八鳥とは</a></li>
                <li><a href="http://hatidori.jp/news/">ブログ</a></li>
                <li><a href="http://shop.hatidori.jp/" target="_blank">ショップ</a></li>
                <li><a href="http://hatidori.jp/contact/">お問い合わせ</a></li>
            </ul>
            <button class="close">閉じる</button>
        </nav>
        <!--end sp nav -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://hatidori.jp/wp/wp-content/themes/hatidori/js/jquery.inview.min.js'></script>
        <script>
            $('.searchBtn').click(function() {
                $("html,body").animate({
                    scrollTop: $('#mainsrch').offset().top
                });
            });
            $('.modal-aside').click(function() {
                $('nav').toggleClass('open fixed');
                $('.close').css('display', 'block');
            });
            $('.close').off().click(function() {
                $('nav').removeClass('open fixed');
                $('close').css('display', 'none');
            });

            $('#inview').on('inview', function() {
                //ブラウザの表示域に表示されたときに実行する処理
                $(this).addClass('animation');
            });

        </script>


        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=107783629321464";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        </script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
</body>

</html>
