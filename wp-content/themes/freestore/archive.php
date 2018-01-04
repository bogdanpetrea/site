<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeStore
 */

get_header(); ?>

	<div id="primary" class="content-area <?php echo ( get_theme_mod( 'freestore-blog-archive-full-width' ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( !get_theme_mod( 'freestore-page-titles' ) ) : ?>
				<?php get_template_part( '/templates/titlebar' ); ?>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'templates/contents/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'templates/contents/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( get_theme_mod( 'freestore-blog-archive-full-width' ) ) : ?>
        <!-- No Sidebar -->
    <?php else : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>
	
	<div class="clearboth"></div>
	
<?php get_footer(); ?>
