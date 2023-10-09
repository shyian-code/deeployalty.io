<section id="cost" class="section cost aos-init aos-animate">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ( $section_title = get_sub_field('section_title') ): ?>
                    <span class="h2 cost__title title"><?php echo $section_title; ?></span>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="cost-card-list">
                    <?php if (have_rows('cards')): ?>
                        <?php while (have_rows('cards')) : the_row(); ?>

                            <div class="cost-card-item" data-aos="fade-up" data-aos-delay="400">
                                <?php
                                    $card_title = get_sub_field('card_title');
                                    $icon = get_sub_field('card_icon');
                                ?>
                                <div class="cost-card-item-heading">
                                    <span class="cost-card-item__title"><?php echo $card_title; ?></span>
                                    <img class="cost-card-item__icon"
                                         width="64" height="64"
                                         src="<?php echo esc_url($icon['url']); ?>"
                                         alt="<?php echo esc_attr($icon['alt']); ?>"
                                         loading="lazy"
                                    />
                                </div>

                                <?php if (have_rows('price')): ?>
                                    <ul class="cost-card-price-list">
                                        <?php while (have_rows('price')) : the_row(); ?>
                                            <?php
                                                $service_name = get_sub_field('service_name');
                                                $price = get_sub_field('price');
                                            ?>
                                            <li class="cost-card-price-item">
                                                <?php if ($service_name || $price): ?>
                                                    <span class="cost-card-price-item__title">
                                                        <?php echo $service_name; ?>
                                                    </span>
                                                    <span class="cost-card-price-item__price">
                                                         <?php echo $price; ?>
                                                    </span>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
