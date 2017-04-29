<?php
/**
 * Template Name: HomePage
 * @package 99RainbowNews
 * @subpackage RainbowNews
 */
?>

<?php get_header(); ?>

<!-- banner-start -->
<?php if ( is_active_sidebar( 'rainbownews_front_page_left_area' ) || is_active_sidebar( 'rainbownews_front_page_right_area' ) ): ?>

    <div class="nnc-highlight-banner nnc-clearblock">
        <div class="nnc-highlight-slider">

            <?php
            if ( is_active_sidebar( 'rainbownews_front_page_left_area' )) {
                dynamic_sidebar('rainbownews_front_page_left_area');
            } ?>

        </div>

        <div class="nnc-highlight-post">

            <?php
            if ( is_active_sidebar( 'rainbownews_front_page_right_area' ) ) {

                dynamic_sidebar( 'rainbownews_front_page_right_area' );

            }  ?>

        </div>
    </div>
<?php endif; ?>
    <!-- banner-end -->

    <!-- latest-start -->
    <div class="nnc-top-latest nnc-clearblock wow fadeInUp animated" data-wow-delay="0.5s">

        <?php
        if ( is_active_sidebar( 'rainbownews_front_page_latest_post_area' ) ) {

            dynamic_sidebar( 'rainbownews_front_page_latest_post_area' );

        } ?>

    </div>

    <?php if ( is_active_sidebar( 'rainbownews_front_page_content_area' ) || is_active_sidebar( 'rainbownews_front_page_middle_left_content_area' )
        || is_active_sidebar( 'rainbownews_front_page_middle_right_content_area' ) || is_active_sidebar( 'rainbownews_front_page_bottom_content_area' )
        ): ?>

    <div id="content" class="content nnc-clearblock">

        <div id="primary">
            <main id="main" class="site-main">

                <?php
                if ( is_active_sidebar( 'rainbownews_front_page_content_area' ) ) {
                    dynamic_sidebar('rainbownews_front_page_content_area');
                } ?>

                <div class="nnc-single-column-block nnc-clearblock">

                    <div class="nnc-category nnc-category-layout-3 nnc-left">

                        <?php
                        if ( is_active_sidebar( 'rainbownews_front_page_middle_left_content_area' ) ) {

                            dynamic_sidebar( 'rainbownews_front_page_middle_left_content_area' );

                        } ?>

                    </div>

                    <div class="nnc-category nnc-category-layout-3 nnc-right">

                        <?php
                        if ( is_active_sidebar( 'rainbownews_front_page_middle_right_content_area' ) ) {

                            dynamic_sidebar( 'rainbownews_front_page_middle_right_content_area' );

                        }
                        ?>

                    </div>

                </div>

                <?php
                if ( is_active_sidebar( 'rainbownews_front_page_bottom_content_area' ) ) {

                    dynamic_sidebar( 'rainbownews_front_page_bottom_content_area' );

                } ?>
            </main>
        </div>


        <aside id="secondary" class="widget-area" role="complementary">
            <?php
            if (is_active_sidebar('rainbownews_front_page_sidebar')) {

                dynamic_sidebar('rainbownews_front_page_sidebar');

            } ?>
        </aside>

    </div>
<?php endif;

get_footer(); ?>
