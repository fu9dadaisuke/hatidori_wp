                <?php if(!wp_is_mobile()): ?>
                <aside>
                    <nav>
                        <ul class="clearfix">
                            <li><a href="<?php echo esc_url( home_url()); ?>/books/">本づくり</a></li>
                            <li><a href="<?php echo esc_url( home_url()); ?>/about/">八鳥とは</a></li>
                            <li><a href="<?php echo esc_url( home_url()); ?>/news/">ブログ</a></li>
                            <li><a href="http://shop.hatidori.jp/" target="_blank">ショップ</a></li>
                            <li><a href="<?php echo esc_url( home_url()); ?>/contact/">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <section class="category">
                        <span class="text-right gray">Blog Category</span>
                        <ul class="clearfix">
                            <?php wp_list_categories('title_li=&depth=1'); ?>
                        </ul>
                    </section>
                </aside><!-- end aside-->
                <?php else: ?>
                <aside>
                    <section class="category">
                        <span class="text-right gray">Blog Category</span>
                        <ul class="clearfix">
                            <?php wp_list_categories('title_li=&depth=1'); ?>
                        </ul>
                    </section>
                </aside><!-- end aside-->
                <?php endif; ?>