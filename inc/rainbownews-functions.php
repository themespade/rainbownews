<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function rainbownews_widgets_init()
{
    // Registering main right sidebar

    register_sidebar( array(
        'name'              => esc_html__('Right Sidebar', 'rainbownews'),
        'id'                => 'sidebar-1',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>',
    ));

    // Registering main left sidebar
    register_sidebar( array(
        'name'              => esc_html__('Left Sidebar', 'rainbownews'),
        'id'                => 'rainbownews_left_sidebar',
        'description'       => esc_html__('Shows widgets at Left side.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>'
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Sidebar', 'rainbownews'),
        'id'                => 'rainbownews_front_page_sidebar',
        'description'       => esc_html__('Add Widget here for front page side bar.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>'
    ));

    register_sidebar( array(
        'name'              => esc_html__('Top Advertisement', 'rainbownews'),
        'id'                => 'rainbownews_advertisement',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Left Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_left_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Right Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_right_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Full Width Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_latest_post_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Top Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_content_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Middle Left Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_middle_left_content_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Middle Right Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_middle_right_content_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Front Page: Bottom Area', 'rainbownews'),
        'id'                => 'rainbownews_front_page_bottom_content_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title">',
        'after_title'       => '</h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Footer 1', 'rainbownews'),
        'id'                => 'rainbownews_footer1_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Footer 2', 'rainbownews'),
        'id'                => 'rainbownews_footer2_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Footer 3', 'rainbownews'),
        'id'                => 'rainbownews_footer3_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>',
    ));

    register_sidebar( array(
        'name'              => esc_html__('Footer 4', 'rainbownews'),
        'id'                => 'rainbownews_footer4_area',
        'description'       => esc_html__('Add widgets here.', 'rainbownews'),
        'before_widget'     => '<section id="%1$s" class="widget %2$s">',
        'after_widget'      => '</section>',
        'before_title'      => '<h2 class="widget-title"><span>',
        'after_title'       => '</span></h2>',
    ));

}

add_action( 'widgets_init', 'rainbownews_widgets_init' );

//rainbownews category news function
if ( ! function_exists( 'rainbownews_category_news' ) ) :

    function rainbownews_category_news() {

        $cat           =   get_theme_mod( 'rainbownews_news_ticker_category_layout' );
        $title         =   get_theme_mod( 'rainbownews_news_ticker_title' );
        $no_of_post    =   get_theme_mod( 'rainbownews_top_bar_news_ticker_posts' );


        $args = array(
            'post_type'      =>   'post',
            'post_status'    =>   'publish',
            'posts_per_page' =>   $no_of_post,
            'order'          =>   'DESC',
            'cat'            =>   $cat,
        );

        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) {   ?>

            <div class="nnc-trending-single">

                <div class="nnc-trend-title"><?php echo esc_html( $title ); ?></div>

                <ul class="newsticker">

                    <?php while ( $loop->have_posts() ) : $loop->the_post();     ?>

                        <li class="pm_single_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                    <?php endwhile;

                    wp_reset_postdata();

                    ?>

                </ul>
            </div>

            <?php
        }
    }

endif;

//rainbownews latest news function
if ( ! function_exists( 'rainbownews_latest_news' ) ) :

function rainbownews_latest_news()
{
    $title       =   get_theme_mod( 'rainbownews_news_ticker_title' );
    $no_of_post  =   get_theme_mod( 'rainbownews_top_bar_news_ticker_posts' );

    $p = new WP_Query(array(
        'post_type'              =>  'post',
        'posts_per_page'         =>  $no_of_post,
        'ignore_sticky_posts'    =>  true,
        'post_status'            =>  'publish',
        'order'                  =>  'DESC',
    ));

    if ( $p->have_posts() ) {  ?>

        <div class="nnc-trending-single">
            <div class="nnc-trend-title"><?php echo esc_html( $title ); ?></div>

            <ul class="newsticker">
                <?php  while ( $p->have_posts() ) {
                        $p->the_post();   ?>

                    <li class="pm_single_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                <?php  } ?>
            </ul>

        </div>

        <?php
    }
    wp_reset_postdata();
}

endif;

//rainbownews trending news function
if ( ! function_exists( 'rainbownews_trending_news' ) ) :

    function rainbownews_trending_news() {

        $title = get_theme_mod( 'rainbownews_news_ticker_title' );
        $no_of_post  =  get_theme_mod( 'rainbownews_top_bar_news_ticker_posts' );

        $rainbownews = array(
            'post_type'             =>  'post',
            'posts_per_page'        =>  $no_of_post,
            'ignore_sticky_posts'   =>  true,
            'post_status'           =>  'publish',
            'order'                 =>  'DESC',
        );

        $query = new WP_Query( $rainbownews );
        ?>

        <div class="nnc-trending-single">

            <div class="nnc-trend-title"><?php echo esc_html( $title ); ?></div>

            <ul class="newsticker">
                <?php
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>

                    <li class="pm_single_title"><a href="<?php  the_permalink() ; ?>"><?php  the_title(); ?></a></li>

                    <?php } wp_reset_postdata(); ?>
            </ul>

        </div>
        <?php

    }

endif;

//rainbownews footer count function
if ( ! function_exists( 'rainbownews_footer_count' ) ) :

    function rainbownews_footer_count()
    {
        $rainbownews_count = 0;
        if ( is_active_sidebar( 'rainbownews_footer1_area' ) )
            $rainbownews_count++;

        if ( is_active_sidebar( 'rainbownews_footer2_area' ) )
            $rainbownews_count++;

        if ( is_active_sidebar( 'rainbownews_footer3_area' ) )
            $rainbownews_count++;

        if ( is_active_sidebar( 'rainbownews_footer4_area' ) )
            $rainbownews_count++;

        return $rainbownews_count;
    }

endif;

// rainbownews category layout function
if ( !function_exists( 'rainbownews_category_layout' ) ) :

    function rainbownews_category_layout( $wp_category_id ) {

        $args = array(
            'orderby'    => 'id',
            'hide_empty' => 0
        );
        $category = get_categories( $args );
        foreach ($category as $category_list) {
            $layout = get_theme_mod( 'rainbownews_category_layout_' . $wp_category_id, 'layout-1' );
        }
        return $layout;
    }
endif;

// rainbownews Breadcrums function
if ( ! function_exists( 'rainbownews_breadcrumbs' ) ) :

    function rainbownews_breadcrumbs()
    {
        global $post;

        $rainbownews_et_to = get_theme_mod( 'rainbownews_breadcrumbs_activate', 1 );

        if ( $rainbownews_et_to == 1 ):
            $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show

            if ( isset( $rainbownews_et_to['breadcrumb_separator'] ) ) {
                $delimiter = '<span class="breadcrumb_separator">' . $rainbownews_et_to['breadcrumb_separator'] . '</span>';
            } else {
                $delimiter = '<span class="breadcrumb_separator"> <i class="fa fa-angle-right"></i> </span>'; // delimiter between crumbs
            }

            if ( isset( $rainbownews_et_to['breadcrumb_home_text'] ) ) {
                $home = $rainbownews_et_to['breadcrumb_home_text'];
            } else {
                $home = '<i class="fa fa-home"></i>'; // text for the 'Home' link
            }

            $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
            $before = '<span class="current">'; // tag before the current crumb
            $after = '</span>'; // tag after the current crumb

            $homeLink = esc_url( home_url() );

            if ( is_home() || is_front_page() ) {
                if ($showOnHome == 1) echo '<div id="rainbownews--breadcrumbs"><div class="nnc-top-breadcrumbs"><a href="' . $homeLink . '" class="breadcrumb_home_text">' . $home . '</a></div></div>';
            }
            else {
                echo '<div id="rainbownews--breadcrumbs"><div class="nnc-top-breadcrumbs"><a href="' . $homeLink . '" class="breadcrumb_home_text">' . $home . '</a>' . $delimiter . ' ';

                if ( is_category() ) {
                    $thisCat = get_category( get_query_var('cat'), false );
                    if ($thisCat->parent != 0) echo get_category_parents( $thisCat->parent, TRUE, ' ' . $delimiter . ' ' );
                    echo $before . single_cat_title( '', false ) . $after;

                }
                elseif ( is_search() ) {
                    echo $before . esc_html__('Search results for "', 'rainbownews') . get_search_query() . '"' . $after;

                }
                elseif ( is_day() ) {

                    echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . $delimiter . ' ';
                    echo '<a href="' . get_month_link( get_the_time( 'Y' ),  get_the_time( 'm' )) . '">' . get_the_time( 'F' ) . '</a> ' . $delimiter . ' ';
                    echo $before . get_the_time( 'd' ) . $after;

                }
                elseif ( is_month() ) {

                    echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . $delimiter . ' ';
                    echo $before . get_the_time( 'F' ) . $after;

                }
                elseif ( is_year() ) {
                    echo $before . get_the_time( 'Y' ) . $after;

                }
                elseif ( is_single() && !is_attachment() ) {

                    if ( get_post_type() != 'post' ) {
                        $post_type = get_post_type_object( get_post_type() );
                        $slug = $post_type->rewrite;
                        echo '<a href="' . esc_url( home_url() . '/' . $slug['slug'] ) . '/">' . $post_type->labels->singular_name . '</a>';
                        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                    }
                    else {
                        $cat = get_the_category();
                        $cat = $cat[0];
                        $cats = get_category_parents( $cat, TRUE, ' ' . $delimiter . ' ' );
                        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                        echo $cats;
                        if ($showCurrent == 1) echo $before . get_the_title() . $after;
                    }

                }
                elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' && !is_404() ) {
                    $post_type = get_post_type_object( get_post_type() );
                    echo $before . $post_type->labels->singular_name . $after;

                }
                elseif ( is_attachment() ) {

                    $parent = get_post( $post->post_parent );
                    $cat = get_the_category( $parent->ID );
                    $cat = $cat[0];
                    echo get_category_parents( $cat, TRUE, ' ' . $delimiter . ' ' );
                    echo '<a href="' . get_permalink( $parent) . '">' . $parent->post_title . '</a>';

                    if ( $showCurrent == 1 ) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

                }
                elseif ( is_page() && ! $post->post_parent ) {
                    if ( $showCurrent == 1 ) echo $before . get_the_title() . $after;

                }
                elseif ( is_page() && $post->post_parent ) {

                    $parent_id = $post->post_parent;
                    $breadcrumbs = array();

                    while ($parent_id) {
                        $page = get_page( $parent_id );
                        $breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                        $parent_id = $page->post_parent;
                    }

                    $breadcrumbs = array_reverse( $breadcrumbs );

                    for ($i = 0; $i < count( $breadcrumbs ); $i++) {
                        echo $breadcrumbs[$i];
                        if ($i != count( $breadcrumbs) - 1 ) echo ' ' . $delimiter . ' ';
                    }

                    if ( $showCurrent == 1 ) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

                }
                elseif ( is_tag() ) {
                    echo $before . esc_html__( 'Posts tagged "', 'rainbownews'). single_tag_title( '', false ) . '"' . $after;

                }
                elseif ( is_author() ) {
                    global $author;
                    $userdata = get_userdata( $author );
                    echo $before . esc_html__( 'Articles posted by ', 'rainbownews' ). $userdata->display_name . $after;

                }
                elseif ( is_404() ) {
                    echo $before . esc_html__( 'Error 404', 'rainbownews' ) . $after;
                }

                if ( get_query_var('paged') ) {
                    if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
                    echo __( 'Page', 'rainbownews' ) . ' ' . get_query_var( 'paged' );
                    if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
                }

                echo '</div></div>';

            }
        endif;
    }

endif;

if ( ! function_exists( 'rainbownews_set_post_views' ) ) :

    function rainbownews_set_post_views( $postID )
    {
        $count_key = 'rainbownews_post_views_count';
        $count = get_post_meta( $postID, $count_key, true );

        if ( $count == '' ) {

            delete_post_meta( $postID, $count_key );
            add_post_meta( $postID, $count_key, '0' );
        }
        else {
            $count++;
            update_post_meta( $postID, $count_key, $count );
        }
    }

endif;

// rainbownews comment posted on cb function
if ( !function_exists('rainbownews_comments_posted_on_cb') ) :

function rainbownews_comments_posted_on_cb( $comment_id )
{

    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

    if (get_comment_date( 'Ymd', $comment_id ) == date( 'Ymd' )):

        $time_string_human = human_time_diff( get_comment_date( 'His', $comment_id ), current_time( 'His' ) ) . ' ' . __( 'ago', 'rainbownews' );
        $time_string = '<time class="entry-date published" datetime="%1$s">' . $time_string_human . '</time><time class="updated" datetime="%3$s">%4$s</time>';

    endif;

    $time_string = sprintf( $time_string,
        esc_attr( get_comment_date( 'c', $comment_id ) ),
        esc_html( get_comment_date( 'M d, Y', $comment_id ) ),
        esc_attr( get_the_modified_date( 'c', $comment_id ) ),
        esc_html( get_the_modified_date( 'M d, Y', $comment_id ) )
    );

    $posted_on = sprintf(
        _x( '%s', 'post date', 'rainbownews' ),
        '<a href="' . esc_url( get_permalink() ) . '" title="' . esc_attr( get_the_time() ) . '" rel="bookmark">' . $time_string . '</a>'
    );

    echo '<span class="posted-on"><i class="fa fa-calendar-o"></i>' . $posted_on . '</span>';

}

add_action( 'rainbownews_comment_posted_on', 'rainbownews_comments_posted_on_cb', 11 );

endif;

// function to show the footer info, copyright information
if ( ! function_exists( 'rainbownews_footer_copyright_info' ) ) :

function rainbownews_footer_copyright_info()
{
    $site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" >' . get_bloginfo( 'name', 'display' ) . '</a>';

    $wp_link = '<a href="' . esc_url( 'http://wordpress.org' ) . '" target="_blank" title="' . esc_attr__( 'WordPress', 'rainbownews' ) . '"><span>' . esc_html__( 'WordPress', 'rainbownews' ) . '</span></a>';

    $tm_link = '<a href="' . 'http://99colorthemes.com/' . '" target="_blank" title="' . esc_attr__( '99colorthemes', 'rainbownews' ) . '" rel="designer"><span>' . esc_html__( '99colorthemes', 'rainbownews' ) . '</span></a>';

    $default_footer_value = '<p class="nnc-left">' . sprintf( esc_html__(' &copy; %1$s %2$s. All Right Reserved. ', 'rainbownews'), $site_link, date( 'Y' ) ) . sprintf( esc_html__( '| Powered by %s.', 'rainbownews' ), $wp_link ) . '</p><p class="nnc-right">' . sprintf( esc_html__( 'Built by %s.', 'rainbownews' ), $tm_link ) . '</p>';

    $rainbownews_footer_copyright = '<div class="nnc-footer-bottom"><div class="nnc-container">' . $default_footer_value . '</div></div>';

    echo $rainbownews_footer_copyright;
}

add_action( 'rainbownews_footer_copyright', 'rainbownews_footer_copyright_info', 10 );

endif;
