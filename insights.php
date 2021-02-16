<?php
/**
* Template Name: Insights Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-12">
		<div id="main" class="site-main blog container" role="main">
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
