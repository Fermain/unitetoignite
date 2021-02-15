<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<?php if ( is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php wp_bootstrap_starter_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php wp_bootstrap_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
<?php else: ?>
	<article id="post-<?php the_ID(); ?>" class="card mb-3">
		<?php // the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid']); ?>
		<div class="card-body">
			<?php the_title( '<h5 class="card-title">', '</h5>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php wp_bootstrap_starter_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
			<p class="card-text"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) ); ?></p>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary">Read more</a>
		</div>
	</article>
<?php endif; ?>
