<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RainbowNews
 */

get_header(); 

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h2><?php esc_html_e( '404', 'rainbownews' ); ?></h2>
					<p><?php esc_html_e( 'Unfortunately, the page you are looking for does not exist.', 'rainbownews' ); ?></p>
				<?php get_search_form(); ?>
                </header><!-- .page-header -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
 

<?php
get_footer();
