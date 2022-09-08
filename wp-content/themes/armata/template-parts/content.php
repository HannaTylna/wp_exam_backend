<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armata
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	<div class="post-item">
		<?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
            </div><!-- .featured-image -->
        <?php endif; ?>
        
		<div class="entry-container">			
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<div class="entry-meta">
	        	<?php armata_entry_meta(); ?>
				<span class="posted-ago"><?php the_time(); ?></span>
	        </div><!-- .entry-meta -->
		</div><!-- .entry-container -->
	</div><!-- .post-item -->
</article><!-- #post-## -->
