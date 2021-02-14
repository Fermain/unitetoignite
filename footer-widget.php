<?php

if ( is_active_sidebar( 'footer-' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer' )) : ?>
                        <div class="col-12"><?php dynamic_sidebar( 'footer' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="bg-primary mailchimp-subscribe">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="motif text-center">
                        <img src="/wp-content/themes/unitetoignite/images/motif/thunderbolt-white.svg" class="img-fluid" />
                    </div>
                    <h2>are you ready to ignite?</h2>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-4 my-2">
                        <input type="text" class="form-control bg-primary border-3 border-white rounded-0" id="signupName" placeholder="name">
                    </div>
                    <div class="col-12 col-md-4 my-2">
                        <input type="email" class="form-control bg-primary border-3 border-white rounded-0" id="signupEmail" placeholder="email">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-dark btn-lg px-5 h3">> unite</button>
                </div>
            </div>
        </div>
<?php }