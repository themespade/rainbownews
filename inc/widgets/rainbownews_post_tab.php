<?php
/**
 * RainbowNews functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RainbowNews
 *
 * Rainbownews Post Tab Widget Section
 */

add_action( 'widgets_init', 'register_rainbownews_post_tab' );

function register_rainbownews_post_tab()
{
    register_widget( 'rainbownews_post_tab' );
}

/**
 * Posts Tabs Widget Class
 */
class Rainbownews_post_tab extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'classname'      => 'rainbownews_post_tab',
            'description'    => __('Latest, Popular posts & recent comments', 'rainbownews')
        );

        parent::__construct( 'rainbownews_post_tab', '&nbsp;' . __( 'NNC: Posts Tabs', 'rainbownews' ), $widget_ops );
    }// end of construct.

    function form( $instance ) {

        $instance = wp_parse_args( (array) $instance, array(
            'latest'   => true,
            'popular'  => true,
            'recent'   => true
        ));
        $number = ( isset( $instance['number'] ) && $instance['number'] != 0 ) ? absint( $instance['number'] ) : 3;

        ?>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance['latest'], true ); ?> id="<?php echo $this->get_field_id( 'latest' ); ?>" name="<?php echo $this->get_field_name( 'latest' ); ?>"/>

            <label for="<?php echo $this->get_field_id( 'latest' ); ?>"><?php _e( 'Latest Posts', 'rainbownews' ); ?></label>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance['popular'], true ); ?> id="<?php echo $this->get_field_id( 'popular' ); ?>" name="<?php echo $this->get_field_name( 'popular' ); ?>"/>

            <label for="<?php echo $this->get_field_id( 'popular' ); ?>"><?php _e( 'Popular Posts', 'rainbownews' ); ?></label>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance['recent'], true ); ?> id="<?php echo $this->get_field_id( 'recent' ); ?>" name="<?php echo $this->get_field_name( 'recent' ); ?>"/>

            <label for="<?php echo $this->get_field_id( 'recent' ); ?>"><?php _e( 'Recent Comments', 'rainbownews' ); ?></label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( "Enter the number of recent comments, popular and latest posts you'd like to display", 'rainbownews' ); ?>:<br/><br/>

                <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo absint( $number ); ?>" size="3"/>

                <small class="s_red"><?php _e( 'default is', 'rainbownews' ); ?> 3</small>

                <br/>
            </label>
        </p>

        <div class="cl"></div>
        <?php
    }// end of form.

    function update( $new_instance, $old_instance ) {

        $new_instance = (array) $new_instance;
        $instance = array(
            'latest'  => 0,
            'popular' => 0,
            'recent'  => 0
        );

        foreach ( $instance as $field => $val ) {
            if ( isset( $new_instance[$field] ) ) {
                $instance[$field] = 1;
            }
        }

        if ( $new_instance['latest'] == '' && $instance['popular'] == '' && $instance['recent'] == '' ) {
            $instance['latest'] = 1;
        }

        $instance['number'] = absint( $new_instance['number'] );

        return $instance;
    }// end of update.

    function widget( $args, $instance ) {
        extract( $args );

        $latest  = isset( $instance['latest'] ) ? $instance['latest'] : true;
        $popular = isset( $instance['popular'] ) ? $instance['popular'] : true;
        $recent  = isset( $instance['recent'] ) ? $instance['recent'] : true;
        $number  = isset( $instance['number'] ) ? (int)$instance['number'] : '';

        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }


        echo $before_widget;

        ?>
        <h2 class="widget-title"><span style="color:red;">Our Posts</span></h2>
        <div class="nnc-tabs">
            <ul class="tab">
                <?php
                if ($latest) {
                    ?>
                    <li class="tablinks active"
                        onclick="openCity(event, 'Popular')"><?php echo __( 'Latest', 'rainbownews' ); ?></li>
                    <?php
                }

                if ($popular) {
                    ?>
                    <li class="tablinks"
                        onclick="openCity(event, 'Random')"> <?php echo __( 'Popular', 'rainbownews' ); ?></li>
                    <?php
                }

                if ($recent) {
                    ?>
                    <li class="tablinks"
                        onclick="openCity(event, 'Comments')"><?php echo __( 'Comments', 'rainbownews' ); ?></li>
                    <?php
                }

                if ( !$latest && !$popular && !$recent) {
                    ?>

                    <li>
                        <span><?php echo __( 'Latest', 'rainbownews' ); ?></span>
                    </li>

                    <?php
                }
                ?>
            </ul>
            <?php
            if ($latest) {
                $l = new WP_Query(array(
                    'posts_per_page'      => $number,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                    'post_type'            => 'post'
                ));

                if ( $l->have_posts() ) {
                    ?>
                    <div id="Popular" class="tabcontent tab-active">
                        <div class="nnc-popular nnc-category">
                            <div class="nnc-category-block nnc-clearblock">
                                <div class="nnc-category-small nnc-clearblock">
                                    <?php
                                    while ( $l->have_posts() ) : $l->the_post();

                                        ?>
                                        <div class="nnc-category-single">
                                            <figure class="nnc-img">
                                                <?php

                                                if ( has_post_thumbnail() ) {

                                                    wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail');
                                                    echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array(
                                                        'alt'   => get_the_title(),
                                                        'title' => get_the_title(),
                                                    ));
                                                }
                                                ?>


                                            </figure>
                                            <div class="nnc-category-dtl">
                                                <div class="nnc-entry-title"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="nnc-entry-meta">
														<span class="posted-on">
															<a href="#" title="3:39 pm" rel="bookmark">
                                                                <time class="entry-date" datetime="">
                                                                    <i class="fa fa-calendar"></i> May 18, 2016
                                                                </time>
                                                            </a>
														</span>
                                                    <span class="comments-link"><i class="fa fa-comments"
                                                            aria-hidden="true"></i> <a href="#"
                                                            title="No Comments"><?php comments_popup_link( '0', '1', '%' ); ?></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }

            if ($popular) {
                $p = new WP_Query(array(
                    'posts_per_page'      => $number,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                    'post_type'           => 'post',
                    'order'               => 'DESC',
                    'orderby'             => 'meta_value',
                    'meta_key'            => 'rainbownews_post_views_count'
                ));


                if ( $p->have_posts() ) {
                    ?>
                    <div id="Random" class="tabcontent">
                        <div class="nnc-popular nnc-category">
                            <div class="nnc-category-block nnc-clearblock">
                                <div class="nnc-category-small nnc-clearblock">
                                    <?php
                                    while ( $p->have_posts() ) : $p->the_post(); ?>
                                        <div class="nnc-category-single <?php echo has_post_thumbnail() ? '' : 'nnc-no-image'; ?>">
                                            <figure class="nnc-img">
                                                <?php
                                                if ( has_post_thumbnail() ) {

                                                    echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array(
                                                        'alt'   => get_the_title(),
                                                        'title' => get_the_title(),
                                                        //'style' => 'width:150px; height:200px;'
                                                    ));
                                                }
                                                ?>
                                            </figure>
                                            <div class="nnc-category-dtl">
                                                <div class="nnc-entry-title"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="nnc-entry-meta">
														<span class="posted-on">
															<a href="#" title="<?php echo get_the_time(); ?>" rel="bookmark">
                                                                <time class="entry-date" datetime="<?php echo get_the_date(); ?>">
                                                                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                                                </time>
                                                            </a>
														</span>
                                        <span class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i> <a
                                                href="#"
                                                title="No Comments"><?php comments_popup_link( '0', '1', '%' ); ?></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }

                wp_reset_postdata();
                //wp_reset_query();
            }

            if ($recent) {
                $rcomments = get_comments(array(
                    'number'    => $number,
                    'post_type' => 'post',
                    'status'    => 'approve'
                ));

                if ($rcomments) {
                    ?>
                    <div id="Comments" class="tabcontent">
                        <ul>

                        </ul>
                    </div>

                    <?php
                }
            }
            ?>


        </div>


        <?php echo $after_widget; ?>


        <?php
    }// end of widdget function.
}// end of apply for action widget.

