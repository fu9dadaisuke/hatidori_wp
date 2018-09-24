<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>本づくりを通して楽しい明日をつくる｜株式会社八鳥（ハチドリ） | 株式会社 八鳥（ハチドリ）</title>
    <link rel="stylesheet" href="http://hatidori.jp/wp/wp-content/themes/hatidori/css/normalize.css">
    <!--  ★  <link rel="stylesheet" href="http://hatidori.jp/wp/wp-content/themes/hatidori/style.css"> -->

    <link rel="icon" href="http://hatidori.jp/wp/wp-content/themes/hatidori/images/favicon.ico" type="image/vnd.microsoft.icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
<![endif]-->
    <!-- All in One SEO Pack 2.3.11 by Michael Torbert of Semper Fi Web Design[73,110] -->
    <meta name="description" content="八鳥（ハチドリ）は、自分で本をつくりたいという方の出版をお手伝いしています。企画から出版まで、一貫してサポートするとともに、より多くの方の下へ届くよう日本中を飛び回ります。" />
    <link rel='next' href='http://hatidori.jp/page/2/' />
    <link rel="canonical" href="http://hatidori.jp/" />
    <meta property="og:title" content="本づくりを通して楽しい明日をつくる｜株式会社八鳥（ハチドリ）" />
    <meta property="og:url" content="http://hatidori.jp/" />
    <meta property="og:image" content="http://hatidori.jp/wp/wp-content/uploads/2016/11/photo02.jpg" />
    <meta property="og:site_name" content="株式会社八鳥（ハチドリ）" />
    <meta property="og:description" content="八鳥（ハチドリ）は、自分で本をつくりたいという方の出版をお手伝いしています。企画から出版まで、一貫してサポートするとともに、より多くの方の下へ届くよう日本中を飛び回ります。" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="本づくりを通して楽しい明日をつくる｜株式会社八鳥（ハチドリ）" />
    <meta name="twitter:description" content="八鳥（ハチドリ）は、自分で本をつくりたいという方の出版をお手伝いしています。企画から出版まで、一貫してサポートするとともに、より多くの方の下へ届くよう日本中を飛び回ります。" />
    <meta name="twitter:image" content="http://hatidori.jp/wp/wp-content/uploads/2016/11/photo02.jpg" />
    <meta itemprop="image" content="http://hatidori.jp/wp/wp-content/uploads/2016/11/photo02.jpg" />
    <!-- /all in one seo pack -->
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='contact-form-7-css' href='http://hatidori.jp/wp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.5.1' type='text/css' media='all' />
    <!-- ★bookinfo用新規css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/special.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ★rwd調整 -->
    <link rel="stylesheet" media="(min-width: 481px)" href="http://hatidori.jp/wp/wp-content/themes/hatidori/style.css">
    <link rel="stylesheet" media="(max-width: 480px)" href="http://hatidori.jp/wp/wp-content/themes/hatidori/css/style_sp.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">

</head>

<body>
    <div id="wrapper">
        <header>
            <a href="http://hatidori.jp" class="logo"><img src="http://hatidori.jp/wp/wp-content/themes/hatidori/images/logo.png" alt="ハチドリ・株式会社八鳥" class="img-responsive"></a>
            <div class="fukidashi">
                <?php if(wp_is_mobile()): ?>
                <?php $value = get_field( "message_sp", 2 ); ?>
                <h1>
                    <?php echo $value; ?>
                </h1>
                <?php else: ?>
                <?php $value = get_field( "message_pc", 2 ); ?>
                <h1>
                    <?php echo $value; ?>
                </h1>
                <?php endif; ?>
            </div>
        </header>
        <!-- end header-->
        <section id="contents" class="container clearfix nopadding">
            <main>
                <article>
                    <h1 class="info-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php if( get_field('book_image') ): ?>
                    <img src="<?php the_field('book_image'); ?>" />
                    <?php endif; ?>
                    <div class="anchor-box">
                        <a href="#book"><i class="fas fa-angle-double-down"></i>本のご紹介</a>
                        <a href="#review"><i class="fas fa-angle-double-down"></i>みんなの声</a>
                        <a href="#shop"><i class="fas fa-angle-double-down"></i>ショップ情報</a>
                        <a href="#author"><i class="fas fa-angle-double-down"></i>作家のご紹介</a>
                    </div>

                    <section id="book">
                        <h2 class="info-title">本のご紹介</h2>
                        <?php echo get_post_meta($post->ID, 'book_info', true); ?>

                    </section>
                    <section id="review">
                        <h2 class="info-title">みんなの声</h2>
                        <div class="column_box">
                            <div class="column_2">
                                <p class="review-title">
                                    <?php echo get_post_meta($post->ID, 'review1_title', true); ?>
                                </p>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'review1_text', true); ?>
                                </p>
                                <p class="name">
                                    <?php echo get_post_meta($post->ID, 'review1_name', true); ?>
                                </p>
                            </div>
                            <?php if(post_custom('review2_on') == 'display'): ?>
                            <div class="column_2">
                                <p class="review-title">
                                    <?php echo get_post_meta($post->ID, 'review2_title', true); ?>
                                </p>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'review2_text', true); ?>
                                </p>
                                <p class="name">
                                    <?php echo get_post_meta($post->ID, 'review2_name', true); ?>
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="column_box">
                            <?php if(post_custom('review3_on') == 'display'): ?>
                            <div class="column_2">
                                <p class="review-title">
                                    <?php echo get_post_meta($post->ID, 'review3_title', true); ?>
                                </p>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'review3_text', true); ?>
                                </p>
                                <p class="name">
                                    <?php echo get_post_meta($post->ID, 'review3_name', true); ?>
                                </p>
                            </div>
                            <?php endif; ?>
                            <?php if(post_custom('review4_on') == 'display'): ?>
                            <div class="column_2">
                                <p class="review-title">
                                    <?php echo get_post_meta($post->ID, 'review4_title', true); ?>
                                </p>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'review4_text', true); ?>
                                </p>
                                <p class="name">
                                    <?php echo get_post_meta($post->ID, 'review4_name', true); ?>
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if(post_custom('review_btn_on') == 'display'): ?>
                        <span>
                            <a class="btn" href="<?php echo get_post_meta($post->ID, 'review_btn', true); ?>">その他の読者の感想へ</a>
                        </span>
                        <?php endif; ?>
                    </section>
                    <section id="shop">
                        <h2 class="info-title">ショップ情報</h2>
                        <div class="column_box">
                            <div class="column_2">
                                <?php if( get_field('shop_book_image') ): ?>
                                <img src="<?php the_field('shop_book_image'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="column_2">
                                <dl>
                                    <dt>著者</dt>
                                    <dd>
                                        <?php echo get_post_meta($post->ID, 'shop_author', true); ?>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>発売日</dt>
                                    <dd>
                                        <?php echo get_post_meta($post->ID, 'shop_day', true); ?>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>価格</dt>
                                    <dd>
                                        <?php echo get_post_meta($post->ID, 'shop_price', true); ?>
                                    </dd>
                                </dl>

                                <a class="btn" href="<?php echo get_post_meta($post->ID, 'shop_link', true); ?>" target="_blank">ショップへ</a>
                            </div>
                        </div>
                    </section>
                    <section id="author">
                        <h2 class="info-title">作家のご紹介</h2>
                        <div class="column_box">
                            <div class="column_2">
                                <?php if( get_field('author_image') ): ?>
                                <img src="<?php the_field('author_image'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="column_2">
                                <div class="profile">
                                    <p class="name">
                                        <?php echo get_post_meta($post->ID, 'author_name', true); ?>
                                    </p>
                                    <ul class="sns">
                                        <?php if(post_custom('twitter_on') == 'display'): ?>
                                        <li><a href="<?php echo get_post_meta($post->ID, 'twitter', true); ?>"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(post_custom('facebook_on') == 'display'): ?>
                                        <li><a href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>"><i class="fab fa-facebook fa-2x"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(post_custom('instagram_on') == 'display'): ?>
                                        <li><a href="<?php echo get_post_meta($post->ID, 'instagram', true); ?>"><i class="fab fa-instagram fa-2x"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <p>
                                    <?php echo nl2br(get_post_meta($post->ID, 'author_text', true)); ?>
                                </p>
                            </div>
                        </div>
                        <?php if(post_custom('twitter_on') == 'display'): ?>
                        <div class="movie">
                            <?php echo get_post_meta($post->ID, 'movie', true); ?>
                        </div>
                        <?php endif; ?>
                        <div class="event">
                            <?php echo nl2br(get_post_meta($post->ID, 'author_event', true)); ?>

                        </div>
                    </section>
                    <?php if(post_custom('relation_on') == 'display'): ?>
                    <section id="relation">
                        <h2 class="info-title">関連情報</h2>

                        <div class="relation-box">
                            <h3 class="relation-title">
                                <?php echo get_post_meta($post->ID, 'relation_title', true); ?>
                            </h3>

                            <div class="column_box">
                                <div class="column_2">
                                    <?php if( get_field('relation_image') ): ?>
                                    <img src="<?php the_field('relation_image'); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="column_2">
                                    <p>
                                        <?php echo get_post_meta($post->ID, 'relation_text', true); ?>
                                    </p>
                                    <a href="<?php echo get_post_meta($post->ID, 'relation_link', true); ?>">詳しく読む</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>
                </article>
            </main>
            <!-- end main-->
            <aside>
                <nav>
                    <ul class="clearfix">
                        <li><a href="http://hatidori.jp/books/">本づくり</a></li>
                        <li><a href="http://hatidori.jp/about/">八鳥とは</a></li>
                        <li><a href="http://hatidori.jp/news/">ブログ</a></li>
                        <li><a href="http://shop.hatidori.jp/" target="_blank">ショップ</a></li>
                        <li><a href="http://hatidori.jp/contact/">お問い合わせ</a></li>
                    </ul>
                </nav>
                <section class="category">
                    <span class="text-right gray">Blog Category</span>
                    <ul class="clearfix">
                        <li class="cat-item cat-item-4"><a href="http://hatidori.jp/category/store/">お店</a>
                        </li>
                        <li class="cat-item cat-item-1"><a href="http://hatidori.jp/category/info/">お知らせ</a>
                        </li>
                        <li class="cat-item cat-item-2"><a href="http://hatidori.jp/category/writer/">作家紹介</a>
                        </li>
                        <li class="cat-item cat-item-3"><a href="http://hatidori.jp/category/books/">本づくり</a>
                        </li>
                    </ul>
                </section>
            </aside>
            <!-- end aside-->
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
    <!-- ★sp nav -->
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
</body>

</html>
