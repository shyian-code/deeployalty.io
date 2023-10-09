<?php $image = get_sub_field('background_form'); ?>
<section class="section main-form" <?php bg($image); ?>>
    <div class="main-form__overlay">
        <div class="container">
            <div class="row">
                <?php if (($contact_form = get_sub_field('contact_form')) && is_array($contact_form)): ?>
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <div class="main-form__form">

                            <div class="gform__heading text-center">
                                <span class="h2 gform__title"><?php echo $contact_form['title']; ?></span>
                                <h4 class="gform__description"><?php echo $contact_form['description']; ?></h4>
                            </div>

                            <?php echo do_shortcode("[gravityform id='{$contact_form['id']}' title='false' description='false' ajax='true']"); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>