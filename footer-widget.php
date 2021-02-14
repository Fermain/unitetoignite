<?php

if ( is_active_sidebar( 'footer-' ) ) {?>
        <div id="footer-widget">
            <?php if ( is_active_sidebar( 'footer' )) : ?>
                <?php dynamic_sidebar( 'footer' ); ?>
            <?php endif; ?>
        </div>
<?php }