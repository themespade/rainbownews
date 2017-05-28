<?php
/**
 * RainbowNewsPro Theme Customizer.
 *
 * @package RainbowNewsPro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function rainbownews_customize_register( $wp_customize )
{
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    require_once get_template_directory() . '/inc/rainbownews-customize-class.php';

    //General Panel
    $wp_customize->add_panel( 'rainbownews_general_options',	array(
        'capabitity'         =>  'edit_theme_options',
        'priority' 			 =>  50,
        'title' 			 =>  esc_html__( 'General', 'rainbownews' )
    ) );

    $wp_customize->get_section( 'background_image' )->panel  = 'rainbownews_general_options';
    $wp_customize->get_section( 'static_front_page' )->panel  = 'rainbownews_general_options';
    $wp_customize->get_section( 'colors' )->panel  = 'rainbownews_general_options';

    //Activate Loader
    $wp_customize->add_section( 'rainbownews_activate_loader_section', array(
        'priority'             =>  2,
        'title'                =>  esc_html__('Activate Loader', 'rainbownews'),
        'panel'                =>  'rainbownews_general_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_activate_loader', array(
        'default' 			   =>  1,
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_activate_loader', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( 'Activate Loader', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_activate_loader',
        'section' 			   =>  'rainbownews_activate_loader_section'
    ) );

    //Activate Animation
    $wp_customize->add_section( 'rainbownews_activate_animation_section', array(
        'priority'             =>  2,
        'title'                =>  esc_html__('Activate Animation', 'rainbownews'),
        'panel'                =>  'rainbownews_general_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_activate_animation', array(
        'default' 			   =>  1,
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_activate_animation', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( 'Activate Animation', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_activate_animation',
        'section' 			   =>  'rainbownews_activate_animation_section'
    ) );


    // site layout setting
    $wp_customize->add_section( 'rainbownews_site_layout_section', array(
        'priority'             =>  5,
        'title'                =>  esc_html__( 'Theme Layout', 'rainbownews' ),
        'panel'                =>  'rainbownews_general_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_site_layout', array(
        'default'               =>  'wide',
        'capability'            =>  'edit_theme_options',
        'sanitize_callback'     =>  'rainbownews_sanitize_radio'
    ) );

    $wp_customize->add_control( 'rainbownews_site_layout', array(
        'type'                 =>  'radio',
        'priority'             =>  10,
        'label'                =>  esc_html__('Choose your theme layout. The change is reflected in whole site.', 'rainbownews'),
        'section'              =>  'rainbownews_site_layout_section',
        'setting'              =>  'rainbownews_site_layout',
        'choices'              =>  array(
            'box'               =>  esc_html__('Boxed layout', 'rainbownews'),
            'wide'              =>  esc_html__('Wide layout', 'rainbownews')
        )
    ) );

    //Activate Breadcrumb
    $wp_customize->add_section( 'rainbownews_activate_breadcrumb_section', array(
        'priority'             =>  15,
        'title'                =>  esc_html__('Breadcrumb Settings', 'rainbownews'),
        'panel'                =>  'rainbownews_general_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_activate_breadcrumb', array(
        'default' 			   =>  '',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_activate_breadcrumb', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( 'Activate Breadcrumb', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_activate_breadcrumb',
        'section' 			   =>  'rainbownews_activate_breadcrumb_section'
    ) );

    /********************************* HEADER-BAR-OPTIONS ****************************************/

    $wp_customize->add_panel( 'rainbownews_header_options',	array(
        'capabitity'         =>  'edit_theme_options',
        'priority' 			 =>  50,
        'title' 			 =>  esc_html__( 'Header', 'rainbownews' )
    ) );

    $wp_customize->get_section( 'header_image' )->panel  = 'rainbownews_header_options';
    $wp_customize->get_section( 'title_tagline' )->panel  = 'rainbownews_header_options';


    // Top Bar  Activate
    $wp_customize->add_section( 'rainbownews_top_bar_section', array(
        'priority' 			   =>  5,
        'title' 			   =>  esc_html__( 'Top Bar', 'rainbownews' ),
        'panel'				   =>  'rainbownews_header_options'
    ) );

    // Activate Top Bar
    $wp_customize->add_setting( 'rainbownews_top_bar_activate', array(
        'default' 			   =>  '',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_top_bar_activate', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( ' Activate Top Bar ', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_top_bar_activate',
        'section' 			   =>  'rainbownews_top_bar_section'
    ) );

    // logo and site title position options
    $wp_customize->add_setting( 'rainbownews_header_logo_placement', array(
        'default'              =>  'header_text_only',
        'capability'           =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_sanitize_radio'
    ) );

    $wp_customize->add_control( 'rainbownews_header_logo_placement', array(
        'type'                 =>  'radio',
        'priority'             =>  20,
        'label'                =>  esc_html__('Choose the option that you want from below.', 'rainbownews'),
        'section'              =>  'title_tagline',
        'choices'              =>  array(
            'header_logo_only'  =>  esc_html__('Header Logo Only', 'rainbownews'),
            'header_text_only'  =>  esc_html__('Header Text Only', 'rainbownews'),
            'show_both'         =>  esc_html__('Show Both', 'rainbownews'),
            'disable'           =>  esc_html__('Disable', 'rainbownews')
        ) ) );

    $wp_customize->add_setting( 'rainbownews_top_bar_date', array(
        'default' 			   =>  '',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_top_bar_date', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( ' Activate Date ', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_top_bar_date',
        'section' 			   =>  'rainbownews_top_bar_section'
    ) );

    // News Ticker
    $wp_customize->add_section( 'rainbownews_news_ticker_section', array(
        'priority'             =>  10,
        'title'                =>  esc_html__('News Ticker', 'rainbownews'),
        'panel'                =>  'rainbownews_header_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_top_bar_ticker', array(
        'default' 			   =>  '',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_top_bar_ticker', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( 'Enable Header Bar News Ticker', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_top_bar_ticker',
        'section' 			   =>  'rainbownews_news_ticker_section'
    ) );

    $wp_customize->add_setting( 'rainbownews_news_ticker_title', array(
        'default'              =>  '',
        'capability'           =>  'edit_theme_options',
        'sanitize_callback'	   =>  'rainbownews_sanitize_text'
    ) );

    $wp_customize->add_control('rainbownews_news_ticker_title', array(
        'label'                =>  esc_html__('Choose your Title for news.', 'rainbownews'),
        'settings' 			   =>  'rainbownews_news_ticker_title',
        'section'              =>  'rainbownews_news_ticker_section',
    ) );

    $wp_customize->add_setting( 'rainbownews_new_ticker_layout', array(
        'default'              =>  'latest_post',
        'capability'           =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_sanitize_radio'
    ) );

    $wp_customize->add_control( 'rainbownews_new_ticker_layout', array(
        'type'                 =>  'radio',
        'label'                =>  esc_html__('Choose your trending news.', 'rainbownews'),
        'section'              =>  'rainbownews_news_ticker_section',
        'choices'              =>  array(
            'latest_post'      =>  esc_html__('Latest Post', 'rainbownews'),
            'popular_post'     =>  esc_html__('Popular Post', 'rainbownews'),
            'category_post'    =>  esc_html__('Category Post', 'rainbownews')
            )
    ) );

    $wp_customize->add_setting( 'rainbownews_news_ticker_category_layout', array(
         'default'             =>  '',
         'capability'          =>  'edit_theme_options',
         'sanitize_callback'   =>  'rainbownews_sanitize_text'
    ) );

    $wp_customize->add_control( new RainbowNews_Category_Dropdown_Custom_Control($wp_customize, 'rainbownews_news_ticker_category_layout', array(
        'label'                =>  esc_html__('Choose category for News Ticker.', 'rainbownews'),
        'settings' 			   =>  'rainbownews_news_ticker_category_layout',
        'section'              =>  'rainbownews_news_ticker_section',
    ) ) );

    // Top Bar Number of Posts
    $wp_customize->add_setting(	'rainbownews_top_bar_news_ticker_posts', array(
        'default' 			   =>  '5',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'	   =>  'rainbownews_sanitize_integer'
    ) );

    $wp_customize->add_control(	'rainbownews_top_bar_news_ticker_posts', array(
        'type' 				   =>  'text',
        'label' 			   =>  esc_html__( 'Number of Posts', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_top_bar_news_ticker_posts',
        'section' 			   =>  'rainbownews_news_ticker_section'
    ) );

    //Activate Search Box
    $wp_customize->add_section( 'rainbownews_activate_search_section', array(
        'priority'             =>  20,
        'title'                =>  esc_html__('Search Box', 'rainbownews'),
        'panel'                =>  'rainbownews_header_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_activate_search', array(
        'default' 			   =>  '',
        'capability' 		   =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_checkbox_sanitize'
    ) );

    $wp_customize->add_control( 'rainbownews_activate_search', array(
        'type' 				   =>  'checkbox',
        'label' 			   =>  esc_html__( 'Activate Search Box', 'rainbownews' ),
        'settings' 			   =>  'rainbownews_activate_search',
        'section' 			   =>  'rainbownews_activate_search_section'
    ) );

    /************************************** Category Settings *******************************************************/

    // Category Settings Panel
    $wp_customize->add_panel( 'rainbownews_category_options', array(
        'capabitity'         =>  'edit_theme_options',
        'priority'           =>  55,
        'title'              =>  esc_html__('Category Settings', 'rainbownews')
    ) );

    $wp_customize->add_section('rainbownews_category_setting', array(
        'priority'             =>  20,
        'title'                =>  esc_html__('Color & Layouts', 'rainbownews'),
        'panel'                =>  'rainbownews_category_options'
    ) );

    $i = 1;

    $args = array(
        'orderby'     =>  'id',
        'hide_empty'  =>  0
    );

    $categories = get_categories($args);
    $wp_category_list = array();

    foreach ($categories as $category_list) {

        $wp_category_list[$category_list->cat_ID] = $category_list->cat_name;

        //category color
        $wp_customize->add_setting( 'rainbownews_category_color_' . get_cat_id($wp_category_list[$category_list->cat_ID] ), array(
            'capability'           =>  'edit_theme_options',
            'sanitize_callback'    =>  'rainbownews_color_option_hex_sanitize',
            'sanitize_js_callback' =>  'rainbownews_color_escaping_option_sanitize'
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rainbownews_category_color_' . get_cat_id($wp_category_list[$category_list->cat_ID]), array(
            'label'                =>  sprintf( esc_html__('%s Color', 'rainbownews'), $wp_category_list[$category_list->cat_ID]),
            'section'              =>  'rainbownews_category_setting',
            'settings'             =>  'rainbownews_category_color_' . get_cat_id($wp_category_list[$category_list->cat_ID]),
            'priority'             =>  $i
        ) ) );

        // category Layout
        $wp_customize->add_setting( 'rainbownews_category_layout_' . get_cat_id($wp_category_list[$category_list->cat_ID] ), array(
            'default'              =>  '',
            'capability'           =>  'edit_theme_options',
            'sanitize_callback'    =>  'rainbownews_sanitize_text',
        ) );

        $wp_customize->add_control( 'rainbownews_category_layout_' . get_cat_id($wp_category_list[$category_list->cat_ID]), array(
            'type'                 =>  'select',
            'label'                =>  esc_html__('Layout', 'rainbownews'),
            'section'              =>  'rainbownews_category_setting',
            'settings'             =>  'rainbownews_category_layout_' . get_cat_id($wp_category_list[$category_list->cat_ID]),
            'choices'              =>  array(
                'layout-1'         =>  esc_html__('Layout 1', 'rainbownews'),
                'layout-2'         =>  esc_html__('Layout 2', 'rainbownews'),
            ),
            'priority'             =>  $i
        ) );

        $i++;
    }

    // Sidebar Settings Panel
    $wp_customize->add_panel( 'rainbownews_sidebar_options', array(
        'capabitity'         =>  'edit_theme_options',
        'priority'           =>  55,
        'title'              =>  esc_html__('Sidebar Settings', 'rainbownews')
    ) );

    //side bar
    $wp_customize->add_section( 'rainbownews_default_sidebar_section', array(
        'priority'             =>  10,
        'title'                =>  esc_html__('Default Sidebar Settings', 'rainbownews'),
        'panel'                =>  'rainbownews_sidebar_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_default_sidebar_setting', array(
        'default'              =>  esc_html__('right-sidebar', 'rainbownews'),
        'capability'           =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_sanitize_text'
    ) );

    $wp_customize->add_control( new RainbowNews_Image_Radio_Control($wp_customize, 'rainbownews_default_sidebar_setting', array(
        'type'                 =>  'radio',
        'label'                =>  esc_html__('Select default layout for default pages.', 'rainbownews'),
        'section'              =>  'rainbownews_default_sidebar_section',
        'settings'             =>  'rainbownews_default_sidebar_setting',
        'choices'              =>  array(
            'right-sidebar'               =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/right-sidebar.png',
            'left-sidebar'                =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/left-sidebar.png',
            'no-sidebar-content-centered' =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/no-sidebar-content-centered-layout.png',
            'no-sidebar-full-width'       =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/no-sidebar-full-width-layout.png'
        )
    ) ) );

    $wp_customize->add_section( 'rainbownews_sidebar_section', array(
        'priority'             =>  15,
        'title'                =>  esc_html__('Category Sidebar Settings', 'rainbownews'),
        'panel'                =>  'rainbownews_sidebar_options'
    ) );

    $wp_customize->add_setting( 'rainbownews_category_sidebar_setting', array(
        'default'              =>  esc_html__('right-sidebar', 'rainbownews'),
        'capability'           =>  'edit_theme_options',
        'sanitize_callback'    =>  'rainbownews_sanitize_text'
    ) );

    $wp_customize->add_control( new RainbowNews_Image_Radio_Control($wp_customize, 'rainbownews_category_sidebar_setting', array(
        'type'                  =>  'radio',
        'label'                 =>  esc_html__('Select Category Sidebar layout for category. This layout will be reflected in all category page.', 'rainbownews'),
        'section'               =>  'rainbownews_sidebar_section',
        'settings'              =>  'rainbownews_category_sidebar_setting',
        'choices'               =>  array(
          'right-sidebar'               =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/right-sidebar.png',
          'left-sidebar'                =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/left-sidebar.png',
          'no-sidebar-content-centered' =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/no-sidebar-content-centered-layout.png',
          'no-sidebar-full-width'       =>  RAINBOWNEWS_IMAGES_ADMIN_URL . '/no-sidebar-full-width-layout.png'
        )
    ) ) );

    /************************************** FUNCTION SANITIZE*******************************************************/

    // sanitization of links
    function rainbownews_sanitize_links()
    {
        return false;
    }

    // radio sanitization
    function rainbownews_sanitize_radio($input, $setting)
    {
        // Ensuring that the input is a slug.
        $input = sanitize_key($input);
        // Get the list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;
        // If the input is a valid key, return it, else, return the default.
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }

    // Checkbox Sanitize
    function rainbownews_checkbox_sanitize( $input ) {
        if ( $input == 1 ) {
            return 1;
        } else {
            return '';
        }
    }

    // Sanitize Text
    function rainbownews_sanitize_text( $string ) {
        global $allowedtags;
        return wp_kses( $string , $allowedtags );
    }

    // Sanitize Integer
    function rainbownews_sanitize_integer( $number, $setting ) {
        // Ensure $number is an absolute integer (whole number, zero or greater).
        $number = absint( $number );

        // If the input is an absolute integer, return it; otherwise, return the default
        return ( $number ? $number : $setting->default );
    }

    // color sanitization
    function rainbownews_color_option_hex_sanitize($color)
    {
        if ($unhashed = sanitize_hex_color_no_hash($color))
            return '#' . $unhashed;

        return $color;
    }

    function rainbownews_color_escaping_option_sanitize($input)
    {
        $input = esc_attr($input);
        return $input;
    }

}

add_action('customize_register', 'rainbownews_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rainbownews_customize_preview_js()
{
    wp_enqueue_script('rainbownews_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'rainbownews_customize_preview_js');
