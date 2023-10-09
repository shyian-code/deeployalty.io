<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!--HOME PAGE SLIDER-->
<?php home_slider_template(); ?>
<!--END of HOME PAGE SLIDER-->

<!-- BEGIN of main content -->
<?php if (have_rows('flexible_content')): ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>
        <?php get_template_part('parts/flexible/flexible', get_row_layout()); // Flexible content section ?>
    <?php endwhile; ?>
<?php endif; ?>
<!-- END of main content -->

<?php get_footer(); ?>
