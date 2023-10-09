<?php
/**
 * Footer
 */
?>

<!--                <div class="footer__phone-links">-->
<!--                    --><?php //if ( $phone = get_field( 'phone', 'options' ) ): ?>
<!--                        <p class="footer__phone-link"><span>Phone: </span><a href="tel:--><?php //echo sanitize_number( $phone ); ?><!--">--><?php //echo $phone; ?><!--</a></p>-->
<!--                    --><?php //endif; ?>
<!--                </div>-->

<!-- BEGIN of footer -->
<footer class="footer">
    <div class="container">
        <div class="row text-sm-center">
            <div class="col-12">
                <div class="footer__inner-wrapper">
                    <div class="footer__links-wrapper">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'footer__menu',
                            'container' => false,
                            'items_wrap' => '<ul id="%1$s" class="footer__menu-list">%3$s</ul>',
                            'walker' => new Bootstrap_Navigation(),
                        )); ?>
                    </div>


                    <div class="footer__copy">
                        <?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
                            <?php echo $copyright; ?>
                        <?php endif; ?>
                    </div>


                    <div class="footer__socials-wrapper">
                        <?php $link = get_field('twitter_link', 'options');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="footer__link footer__link--twitter"
                               href="<?php echo esc_url($link_url); ?>"
                               rel="nofollow"
                               target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        <?php endif; ?>

                        <?php $link = get_field('linkedin_link', 'options');if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="footer__link footer__link--linkedin"
                               href="<?php echo esc_url($link_url); ?>"
                               rel="nofollow"
                               target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<div class="modal" id="getInTouch">
    <span class="side-menu__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g id="close"><path id="x" d="M18.717 6.697l-1.414-1.414-5.303 5.303-5.303-5.303-1.414 1.414 5.303 5.303-5.303 5.303 1.414 1.414 5.303-5.303 5.303 5.303 1.414-1.414-5.303-5.303z"></path></g></svg>
    </span>

    <div class="contact text-center">
        <div class="contact__form">
            <span class="h3 contact__title"><?php the_field('contact_form_title'); ?></span>
            <div id="hbst-general" class="hubspot-wrapper hubspot-wrapper-header">
                <?php echo do_shortcode(get_field('hubspot_contact_form')); ?>
            </div>
<!--            --><?php //get_template_part('parts/modal_form', get_post_format()); ?>
        </div>
    </div>
</div>


<!-- END of footer -->

<?php wp_footer(); ?>
<?php if ( $footer_text = get_field( 'custom_code', 'options' ) ): ?>
    <?php echo $footer_text ?>
<?php endif; ?>
</body>

</html>
