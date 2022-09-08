<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armata
 */

get_header(); ?>
	
	<?php
	$show_blog_posts_image         = armata_get_option( 'show_blog_posts_image' );
	$show_blog_posts_comment       = armata_get_option( 'show_blog_posts_comment' );
	$show_blog_posts_title         = armata_get_option( 'show_blog_posts_title' );
	$show_blog_posts_content       = armata_get_option( 'show_blog_posts_content' );
	$show_blog_posts_posted_ago    = armata_get_option( 'show_blog_posts_posted_ago' );
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-posts-wrapper" role="main">
			<div class="section-content grid col-4 clear <?php echo esc_attr($show_blog_posts_image); ?> <?php echo esc_attr($show_blog_posts_comment); ?> <?php echo esc_attr($show_blog_posts_title); ?> <?php echo esc_attr($show_blog_posts_content); ?> <?php echo esc_attr($show_blog_posts_posted_ago); ?>">

				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		<?php the_posts_pagination(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();