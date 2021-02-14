<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer bg-dark text-white py-5" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer-one',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'navbar navbar-dark p-0',
                        'container_id'    => 'main-nav',
                        'menu_class'      => 'navbar-nav flex-column',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
                <div class="col-6 col-md-3">
                    <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer-two',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'navbar navbar-dark p-0',
                        'container_id'    => 'main-nav',
                        'menu_class'      => 'navbar-nav flex-column',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                    <div class="mt-3">
                        <?php get_template_part('partials/social', 'nav'); ?>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer-three',
                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'navbar navbar-dark p-0',
                        'container_id'    => 'main-nav',
                        'menu_class'      => 'navbar-nav flex-column',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
                <div class="d-none d-md-block col-md-3">
                    <div class="footer-branding">
                        <object data="/wp-content/themes/unitetoignite/images/branding/logo-stacked.svg" type="image/svg+xml" class="img-fluid w-100"></object>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>