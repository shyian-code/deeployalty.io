<section class="section partners aos-init aos-animate" data-aos="fade-up" data-aos-delay="2000">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ( $section_title = get_sub_field('section_title') ): ?>
                    <span class="h2 partners__title title"><?php echo $section_title; ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="partners__logo-wrapper carousel__slider slider">
        <?php
        $images = get_sub_field('partners_logo');
        if( $images ): ?>
            <div class="carousel__list slide-track">
                <?php foreach( $images as $image ):
                setup_postdata($image); ?>

                    <div class="carousel__item slide">
                        <img class="partners__logo-item"
                             src="<?php echo esc_url($image['sizes']['partners_logo']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"
                        />
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
