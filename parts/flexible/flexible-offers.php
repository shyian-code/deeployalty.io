<section id="offers" class="section offers">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="offers-card-list">
                    <?php if (have_rows('cards')): ?>
                        <?php while (have_rows('cards')) : the_row(); ?>

                            <div class="offers-card-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="2000">
                                <?php
                                    $card_title = get_sub_field('card_title');
                                    $card_description = get_sub_field('card_description');
                                    if ($card_title || $card_description): ?>
                                        <span class="h3 offers-card-item__title"><?php echo $card_title; ?></span>
                                        <p class="offers-card-item__description"><?php echo $card_description; ?></p>
                                <?php endif; ?>

                                <?php if (have_rows('capabilities')): ?>
                                    <ul class="offers-card-capabilities-list">
                                        <?php while (have_rows('capabilities')) : the_row(); ?>

                                            <li class="offers-card-capabilities-item">
                                                <?php
                                                $capability_name = get_sub_field('capability_name');
                                                $icon = get_sub_field('icon');
                                                if ($capability_name || $icon): ?>
                                                    <span class="offers-card-capabilities__title">
                                                        <?php echo $capability_name; ?>
                                                    </span>
                                                    <img class="offers-card-capabilities__icon"
                                                         width="32" height="24"
                                                         src="<?php echo esc_url($icon['url']); ?>"
                                                         alt="<?php echo esc_attr($icon['alt']); ?>"
                                                         loading="lazy"
                                                    />
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
