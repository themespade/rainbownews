<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RainbowNews
 */

?>

</div>
</div><!-- #content -->
<?php do_action( 'rainbownews_after_body_content' ); ?>

<!-- Gallery-start -->
<?php if ( is_active_sidebar( 'rainbownews_front_page_gallery_area' ) ) { ?>
    <div class="nnc-f-gallery nnc-top-latest">
        <?php dynamic_sidebar( 'rainbownews_front_page_gallery_area' ); ?>
    </div>
<?php } ?>
<!-- Gallery-end -->

<?php if ( is_active_sidebar( 'rainbownews_footer1_area' ) || is_active_sidebar( 'rainbownews_footer2_area' )
           || is_active_sidebar( 'rainbownews_footer3_area' ) || is_active_sidebar( 'rainbownews_footer4_area' ) ) : ?>
    <div class="nnc-footer">
        <div class="nnc-container">
            <div class="nnc-footer-block nnc-clearblock nnc-footer-column-<?php echo absint(rainbownews_footer_count()); ?>">
                <?php if ( is_active_sidebar( 'rainbownews_footer1_area' ) ) { ?>

                    <div class="nnc-footer-single">
                        <?php dynamic_sidebar( 'rainbownews_footer1_area' ); ?>
                    </div>

                <?php } ?>

                <?php if ( is_active_sidebar( 'rainbownews_footer2_area' ) ) { ?>

                    <div class="nnc-footer-single">
                        <?php dynamic_sidebar( 'rainbownews_footer2_area' ); ?>
                    </div>

                <?php } ?>

                <?php if ( is_active_sidebar( 'rainbownews_footer3_area' ) ) { ?>
                    <div class="nnc-footer-single">
                        <?php dynamic_sidebar( 'rainbownews_footer3_area' ); ?>
                    </div>
                <?php } ?>

                <?php if ( is_active_sidebar( 'rainbownews_footer4_area' ) ) { ?>
                    <div class="nnc-footer-single">
                        <?php dynamic_sidebar( 'rainbownews_footer4_area' ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="nnc-bottom-footer">
    <div class="nnc-container">
        <?php  do_action( 'rainbownews_footer_copyright' ); ?>
    </div>
</div>

<div class="nnc-scroll-top">
    <span class="nnc-scroll-top-inner"><i class="fa fa-long-arrow-up"></i></span>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>
<?php if( get_theme_mod('rainbownews_activate_animation') == '1'): ?>
<script>
    /* Animation */
    wow = new WOW({
        animateClass: 'animated',
        offset: 10
    });
    wow.init();
</script>
<?php endif; ?>

</body>
</html>
