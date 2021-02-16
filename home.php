<?php
/**
* Template Name: Blog Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-12">
		<div id="main" class="site-main blog container" role="main">
			<?php echo get_post_field( 'post_content', get_option( 'page_for_posts' ) ); ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
