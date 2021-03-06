<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Chris\'s_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'WOW! That sucks doesnt it just wanna make you....', 'chriss-theme' ); ?></h1>
				</header><!-- .page-header -->
				<img src="/cgroce84/wordpress/wp-content/themes/wordpress-theme/assets/IMG-2126.jpg">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found up in dis bish', 'chriss-theme' ); ?></p>

					<?php
					get_search_form();

					?>

					<?php
					/* translators: %1$s: smiley */
					$chriss_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'chriss-theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$chriss_theme_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
