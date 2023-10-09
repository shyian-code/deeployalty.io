<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    $title = get_sub_field('about_title');
                    $description = get_sub_field('about_description');
                ?>

                <?php if ($title || $description): ?>
                    <span class="h2 about__title"><?php echo $title; ?></span>
                    <div class="about__description">
                        <?php echo $description; ?>
                    </div>
                <?php endif; ?>

                <?php
                $link = get_sub_field('about_link');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button about__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>