<section class="section hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    $title = get_sub_field('main_title', false, false);
                    $subtitle = get_sub_field('main_subtitle');
                ?>

                <?php if ($title || $subtitle): ?>
                    <span class="h1 hero-section__title aos-init aos-animate" data-aos="fade-in" data-aos-delay="1600">
                        <?php echo $title; ?>
                    </span>
                    <p class="hero-section__subtitle">
                        <?php echo $subtitle; ?>
                    </p>
                <?php endif; ?>

                <?php
                $link = get_sub_field('link');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button hero-section__link border-gradient modal-open"
                       href="<?php echo esc_url( $link_url ); ?>"
                       target="<?php echo esc_attr( $link_target ); ?>">
                        <span><?php echo esc_html( $link_title ); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
