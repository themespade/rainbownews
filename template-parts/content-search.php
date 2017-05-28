<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RainbowNews
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) { ?>
        <figure class="nnc-img">
            <?php the_post_thumbnail('full'); ?>
        </figure>
    <?php } ?>
    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="nnc-category">
                <div class="nnc-entry-meta">
                    <?php rainbownews_posted_on(); ?>
                </div><!-- .entry-meta -->
            </div>
        <?php endif; ?>
        <?php if (rainbownews_colored_category() > 0) {
            rainbownews_colored_category();
        }
        ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <footer class="entry-footer">
        <?php rainbownews_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
