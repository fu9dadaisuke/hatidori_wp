<?php get_header(); ?>
                <?php if (is_page('2') ) : ?>
                	<?php include( TEMPLATEPATH . '/content/about.php' ); ?>
                <?php elseif (is_page('6') ) : ?>
                    <?php include( TEMPLATEPATH . '/content/books.php' ); ?>
                <?php elseif (is_page('8') ) : ?>
                    <?php include( TEMPLATEPATH . '/content/contact.php' ); ?>
                <?php endif; ?>
                <?php include( TEMPLATEPATH . '/content/aside.php' ); ?>
            </section><!-- end #contents-->
<?php get_footer(); ?>