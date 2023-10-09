<section id="how_it_works" class="section integration-steps aos-init aos-animate" data-aos="fade-up" data-aos-delay="2000">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center integration-steps__heading">
                <?php
                $section_title = get_sub_field('section_title');
                $section_subtitle = get_sub_field('section_subtitle');
                if($section_title || $section_subtitle):?>
                    <span class="h2 integration-steps__title title"><?php echo $section_title; ?></span>
                    <p class="integration-steps__subtitle"><?php echo $section_subtitle; ?></p>
                <?php endif; ?>

                <?php
                $link = get_sub_field('link');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button integration-steps__link border-gradient modal-open"
                       href="<?php echo esc_url( $link_url ); ?>"
                       target="<?php echo esc_attr( $link_target ); ?>">
                        <span><?php echo esc_html( $link_title ); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <?php if( have_rows('step_item') ):?>
            <?php while( have_rows('step_item') ) : the_row();?>

                <div class="row integration-steps__side-by-side" data-aos="fade-up" data-aos-delay="400">
                    <?php
                        $image_position = get_sub_field('image_position');
                        $position = $image_position ? 'image-left' : '';
                        $text_position = $image_position ? 'text-right' : '';

                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                    ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center <?php echo $position; ?>">
                        <div class="integration-steps-info-text text-center">
                            <?php if ($title || $description): ?>
                                <span class="integration-steps-info-text__title"><?php echo $title; ?></span>
                                <p class="integration-steps-info-text__description">
                                    <?php echo $description; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 <?php echo $text_position; ?>">
                        <div class="integration-steps-info-image">
                                <?php echo wp_get_attachment_image($image['id'], 'full', false, array('class' => 'content__image-jpg')); ?>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif;?>
    </div>
</section>
