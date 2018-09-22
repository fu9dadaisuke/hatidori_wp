
<?php get_header(); ?>
            <section id="contents" class="container clearfix nopadding">
                <main>
                    <article>
                        <?php query_posts("&posts_per_page=9&paged=".$paged); ?>
                        <section id="media_list">
                            <ul class="clearfix">

                            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <li>
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
                                            <h2><?php the_title(); ?></h2>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; // end of the loop. ?>
                            </ul>
                        </section>
                        <?php wp_pagenavi(); ?>
                        <?php wp_reset_query(); ?>
                    </article>
                </main><!-- end main-->
                <?php include( TEMPLATEPATH . '/content/aside.php' ); ?>
            </section><!-- end #contents-->
<?php get_footer(); ?>