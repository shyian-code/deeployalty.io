<section class="section get-started aos-init aos-animate" data-aos="fade-up" data-aos-delay="2600">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ($title = get_sub_field('get_started_title')): ?>
                    <span class="h2 get-started__main-title"><?php echo $title; ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <?php if (have_rows('get_started_steps')): ?>
                <?php while (have_rows('get_started_steps')): the_row();
                    $number = get_sub_field('number');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    ?>
                    <div class="col-xl-4 text-xl-left">
                        <div class="get-started__information d-flex">
                            <span class="get-started__number"><?php echo $number; ?></span>
                            <span class="h3 get-started__title"><?php echo $title; ?></span>
                            <p class="get-started__description align-content-end"><?php echo $description; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <?php
                $link = get_sub_field('schedule_assesment');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button get-started__link" href="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
