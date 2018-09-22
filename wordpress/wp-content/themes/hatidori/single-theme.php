<?php get_header(); ?>
            <section id="contents" class="container clearfix nopadding">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php
                    $category = get_the_category();
                    $cat_id   = $category[0]->cat_ID;
                    $cat_name = $category[0]->cat_name;
                    $cat_slug = $category[0]->category_nicename;
                ?>
                <?php if(!wp_is_mobile()): ?>
                <section class="info-box">
                    <ul class="sns">
                        <li class="facebook">
                            <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" height="48">
                                <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="http://twitter.com/share?text=<?php echo $title_encode ?>&url=<?php echo $url_encode ?>&tw_p=tweetbutton">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" height="48">
                                <?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?>
                            </a>
                        </li>
                    </ul>
                    <p class="date gray text-small mt-medium"><?php the_date(); ?></p>
                    <p class="category gray text-small"><?php echo $cat_name; ?></p>
                </section>
                <?php endif; ?>
                <main class="single">
                    <article>
                        <section class="pt-medium mb-large">
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
                                <?php $title = get_the_title(); the_post_thumbnail('single-main', array( 'class' => 'img-responsive', 'alt' => $title )); ?>
                            </div>
                            <h1 class="title mt-medium pb-small hr-bottom"><?php the_title(); ?></h1>
                            <div class="clearfix">
                                <div class="page-text mt-small">
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        </section>
                    </article>
                </main><!-- end main-->
            <?php endwhile; ?>

                <?php include( TEMPLATEPATH . '/content/aside.php' ); ?>

            </section><!-- end #contents-->
<?php get_footer(); ?>