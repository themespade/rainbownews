<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RainbowNews
 */

get_header();
rainbownews_set_post_views(get_the_ID());

$sidebar_layout = get_post_meta( $post->ID, 'rainbownews_page_specific_layout', true );

if ( $sidebar_layout == 'left-sidebar' ):
    get_sidebar('left');
endif;
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if($sidebar_layout == 'right-sidebar'):
	get_sidebar();
endif;
get_footer();
