            <section class="bnr hr-top">
                <div class="container pt-large pb-large">
                    <ul class="clearfix">
                        <li><a href="<?php echo esc_url( home_url()); ?>/books/"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr_01.svg" class="img-responsive"></a></li>
                        <li><a href="http://shop.hatidori.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr_02.svg" class="img-responsive"></a></li>
                    </ul>
                </div>
            </section>

             <section class="contact hr-top">
                <div class="container nopadding mt-medium">
                    <div class="clearfix pb-medium">
                        <div class="link_contact">
                        <?php if(wp_is_mobile()): ?>
                            <h2 class="title black mincyo text-center">もっと自由に、もっと身近に、<br />あなたの本を出版しませんか？</h2>
                        <?php else: ?>
                            <h2 class="title black mincyo">もっと自由に、もっと身近に、<br />あなたの本を出版しませんか？</h2>
                        <?php endif; ?>
                            <p>八鳥は、自分で本をつくりたいという方の出版をお手伝いしています。企画から出版、イベント企画など、本づくりを一貫してサポートするとともに、より多くの方の下へ届くよう日本中を飛び回ります。</p>
                            <p>また、八鳥は出版と併せて、自然の保全活動を応援しています。人と自然の共存する循環型社会を目指し、その一助となることをお約束します。</p>
                            <p>本づくりに興味のある方、お気軽にお問い合わせください。</p>
                            <p class="mt-medium text-center"><a href="<?php echo esc_url( home_url()); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" height="48"></a></p>
                        </div>
                        <?php if(wp_is_mobile()): ?>
                        <div class="link_facebook mt-medium">
                                <div class="fb-page" data-href="https://www.facebook.com/hatidori/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/hatidori/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hatidori/">株式会社八鳥</a></blockquote></div>
                            <?php else: ?>
                        <div class="link_facebook mt-small mb-small">
                                <div class="fb-page" data-href="https://www.facebook.com/hatidori/" data-tabs="timeline" data-width="500" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/hatidori/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hatidori/">株式会社八鳥</a></blockquote></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- end #wrapper-->

        <footer>
            <?php if(!wp_is_mobile()): ?>
            <div class="container nopadding">
                <div id="inview" class="shelf clearfix">
                      <a class="book home-page" href="<?php echo esc_url( home_url()); ?>/books/">本づくり</a>
                      <a class="book about-us" href="<?php echo esc_url( home_url()); ?>/about/">八鳥とは</a>
                      <a class="book contact" href="<?php echo esc_url( home_url()); ?>/contact/">お問い合わせ</a>
                      <a class="book faq" href="http://shop.hatidori.jp/" target="_blank">ショップ</a>
                      <a class="book not-found" href="<?php echo esc_url( home_url()); ?>/news/">ブログ</a>
                      <span class="hatidori"><a href="<?php echo esc_url( home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mark.png"></a></span>

                      <span class="door left"></span>
                      <span class="door right"></span>
                </div>
            </div>
            <?php endif; ?>
            <small>Copyright hatidori,inc. all right reserved.</small>
        </footer><!-- end footer-->
        <?php if(wp_is_mobile()): ?>
            <button class="modal-aside"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" height="60"></button>
            <nav>
                <ul class="clearfix">
                    <li><a href="<?php echo esc_url( home_url()); ?>/">トップページ</a></li>
                    <li><a href="<?php echo esc_url( home_url()); ?>/books/">本づくり</a></li>
                    <li><a href="<?php echo esc_url( home_url()); ?>/about/">八鳥とは</a></li>
                    <li><a href="<?php echo esc_url( home_url()); ?>/news/">ブログ</a></li>
                    <li><a href="http://shop.hatidori.jp/" target="_blank">ショップ</a></li>
                    <li><a href="<?php echo esc_url( home_url()); ?>/contact/">お問い合わせ</a></li>
                </ul>
                <button class="close">閉じる</button>
            </nav>
        <?php endif; ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js'></script>
    <script>
    $('.searchBtn').click(function() {
        $("html,body").animate({scrollTop:$('#mainsrch').offset().top});
    });
    $('.modal-aside').click(function() {
        $('nav').toggleClass('open fixed');
        $('.close').css('display','block');
    });
    $('.close').off().click(function(){
        $('nav').removeClass('open fixed');
        $('close').css('display','none');
    });

    $('#inview').on('inview', function() {
       //ブラウザの表示域に表示されたときに実行する処理
       $(this).addClass('animation');
    });
    </script>

    <?php if (is_page('6') ) : ?>
    <script>
          $('.btn01').click(function() {
            $("html,body").animate({scrollTop:$('#books01').offset().top});
        });
        $('.btn02').click(function() {
            $("html,body").animate({scrollTop:$('#books02').offset().top});
        });
        $('.btn03').click(function() {
            $("html,body").animate({scrollTop:$('#books03').offset().top});
        });
        $('.btn04').click(function() {
            $("html,body").animate({scrollTop:$('#books04').offset().top});
        });
        $('.btn05').click(function() {
            $("html,body").animate({scrollTop:$('#books05').offset().top});
        });
        $('.btn06').click(function() {
            $("html,body").animate({scrollTop:$('#books06').offset().top});
        });
        $('.btn07').click(function() {
            $("html,body").animate({scrollTop:$('#books07').offset().top});
        });
        $('.btn08').click(function() {
            $("html,body").animate({scrollTop:$('#books08').offset().top});
        });
        //画像on,off切り替え
        function smartRollover() {
        if(document.getElementsByTagName) {
            var images = document.getElementsByTagName("img");
            for(var i=0; i < images.length; i++) {
                if(images[i].getAttribute("src").match("_off."))
                    {images[i].onmouseover = function() {this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));}
                    images[i].onmouseout = function() {this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));}
                    }
                }
            }
        }
        if(window.addEventListener) {window.addEventListener("load", smartRollover, false);}
        else if(window.attachEvent) {window.attachEvent("onload", smartRollover);}
    </script>
    <?php endif; ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=107783629321464";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>