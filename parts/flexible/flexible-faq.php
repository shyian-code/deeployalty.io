<section class="section faq aos-init aos-animate">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ( $section_title = get_sub_field('section_title') ): ?>
                    <span class="h2 faq__title title"><?php echo $section_title; ?></span>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="faq-list">
                    <?php if (have_rows('faq_list')): ?>
                        <?php while (have_rows('faq_list')) : the_row(); ?>

                            <div class="faq-list-item" data-aos="fade-up" data-aos-delay="350">
                                <?php
                                    $question = get_sub_field('question');
                                    $answer = get_sub_field('answer');
                                ?>
                                <div class="faq-list-item-heading">
                                    <p class="faq-list-item__question"><?php echo $question; ?></p>
                                    <p class="faq-list-item__answer"><?php echo $answer; ?></p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php echo get_sub_field('snippet'); ?>
        </div>
    </div>
</section>
