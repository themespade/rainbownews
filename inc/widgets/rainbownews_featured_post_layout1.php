<?php
/**
 * RainbowNews functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RainbowNews
 *
 * Rainbownews Featured Post Layout1 Widget Section
 */


add_action( 'widgets_init', 'register_rainbownews_featured_post_layout1' );

function register_rainbownews_featured_post_layout1()
{
    register_widget( "rainbownews_featured_post_layout1" );
}

class Rainbownews_featured_post_layout1 extends WP_Widget
{

    function __construct()
    {
        $widget_ops = array(
            'classname'      => 'rainbownews_featured_post_layout1',
            'description'    => esc_html__('Best for (Front Page: Top Area & Front Page: Bottom Area).', 'rainbownews'));

        parent::__construct( 'rainbownews_featured_post_layout1', '&nbsp;' . __( ' NNC: News [ Layout 1 ] ', 'rainbownews' ), $widget_ops );
    }// end of construct.

    function form( $instance )
    {
        $defaults['title']    =  '';
        $defaults['number']   =  4;
        $defaults['type']     =  'latest';
        $defaults['category'] =  '';

        $instance                =  wp_parse_args( (array) $instance, $defaults );

        $title                   =  $instance['title'];
        $number                  =  $instance['number'];
        $type                    =  $instance['type'];
        $category                =  $instance['category'];

        ?>

        <p><?php _e( 'Layout will be as below:', 'rainbownews' ) ?></p>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'rainbownews' ); ?></label>

            <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_html($title); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to display:', 'rainbownews' ); ?></label>

            <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo absint($number); ?>" size="3"/>
        </p>

        <p>
            <input type="radio" <?php checked( $type, 'latest' ); ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="latest"/><?php _e( 'Show latest Posts', 'rainbownews' ); ?><br/>

            <input type="radio" <?php checked( $type, 'category' ); ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" value="category"/><?php _e( 'Show posts from a category', 'rainbownews' ); ?><br/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'rainbownews' ); ?> :</label>

            <?php wp_dropdown_categories( array('show_option_none' => ' ', 'name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?>
        </p>

        <?php
    }// end of form.

    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['title']    =  strip_tags( $new_instance['title'] );
        $instance['number']   =  absint( $new_instance['number'] );
        $instance['type']     =  sanitize_key( $new_instance['type'] );
        $instance['category'] =  absint( $new_instance['category'] );

        return $instance;
    }// end of update.

    function widget( $args, $instance ) {

        extract( $args );
        extract( $instance );

        $title    =  isset( $instance['title'] ) ? $instance['title'] : '';
        $number   =  empty( $instance['number'] ) ? 4 : $instance['number'];
        $type     =  isset( $instance['type'] ) ? $instance['type'] : 'latest';
        $category =  isset( $instance['category'] ) ? $instance['category'] : '';

        if ( $type == 'latest' ) {

            $get_featured_posts = new WP_Query(
                 array(
                    'posts_per_page'      => $number,
                    'post_type'           => 'post',
                    'ignore_sticky_posts' => true
                 ));

        } else {

            $get_featured_posts = new WP_Query(array(
                'posts_per_page' => $number,
                'post_type'      => 'post',
                'category__in'   => $category
            ));

        }

        echo $before_widget;

        ?>

        <div class="nnc-category">
            <div class="nnc-title nnc-clearblock">

                <?php
                if ( $type != 'latest' ) {

                    $border_color = 'style="border-bottom-color:' . rainbownews_category_color( $category ) . ';"';
                    $title_color  = 'style="color:' . rainbownews_category_color( $category ) . ';"';

                } else {

                    $border_color = '';
                    $title_color  = 'style="color:#4db2ec;"';

                }
                if ( !empty($title) ) {

                    echo '<h2 class="widget-title" ' . $border_color . '><span ' . $title_color . '>' . esc_html( $title ) . '</span></h2>';

                }

               if( $category != '' )
                $cat_slug = get_category( $category );

                ?>
                <div class="nnc-viewmore"><a <?php if( !empty( $cat_slug->slug ) ) { ?> href="<?php echo site_url(). __( '/category/', 'rainbownews' ) . $cat_slug->slug; ?>" <?php }?>><i class="fa fa-th-large" title="View All"></i></a></div>

                <div class="nnc-category-block nnc-clearblock">

                <?php
                $i = 1;
                while ( $get_featured_posts->have_posts() ) : $get_featured_posts->the_post();
                    ?>

                    <?php if ( $i == 1 ) {

                        echo '<div class="nnc-category-large">';

                    } elseif ( $i == 3 ) {

                        echo '<div class="nnc-category-small nnc-clearblock">';

                    } ?>

                    <div class="nnc-category-single <?php echo has_post_thumbnail() ? '' : 'nnc-no-image'; ?> wow fadeInUp animated" data-wow-delay="0.5s">

                        <?php if ( $i == 1 || $i == 2 ) { ?>

                            <?php if ( has_post_thumbnail() ) : ?>

                                <figure class="nnc-img">
                                    <?php the_post_thumbnail( 'rainbownews-featured-large1' ); ?>
                                </figure>

                            <?php endif; ?>

                        <?php } else { ?>

                            <figure class="nnc-img">
                                <?php the_post_thumbnail( 'rainbownews-featured-small1' ); ?>
                            </figure>

                        <?php } ?>

                        <div class="nnc-category-dtl">

                            <div class="nnc-entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

                            <div class="nnc-entry-meta">
                                <?php if ( $i == 1 || $i == 2 ) { ?>

                                    <span class="author">By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php the_author(); ?>"><?php echo esc_html(get_the_author()); ?></a></span>

                                <?php } ?>

                                <span class="posted-on">
                                    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_time(); ?>" rel="bookmark">
                                        <time class="entry-date" datetime="">
                                            <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                        </time>
                                    </a>
                                </span>

                            <?php if ( $i == 1 || $i == 2 ): ?>
                                <span class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>" title="<?php esc_html_e('No Comments','rainbownews'); ?>"><?php comments_popup_link( esc_html__('No Comment','rainbownews'), '1', '%' ); ?></a></span>
                             <?php endif; ?>

                            </div>

                            <div class="nnc-category-list">
                                <?php if ( $i == 1 || $i == 2 )
                                    rainbownews_colored_category();
                                ?>
                            </div>

                        </div>
                    </div>

                    <?php if ( $i == 2 ) {
                        echo '</div>';
                    }
                    $i++;
                endwhile;
                if ( $i == $number ) {
                    echo '</div>';
                }

                // Reset Post Data
                wp_reset_query();
                ?>
            </div>

            </div>
        </div>

        <?php echo $after_widget;
    }// end of widdget function.
}// end of apply for action widget.



