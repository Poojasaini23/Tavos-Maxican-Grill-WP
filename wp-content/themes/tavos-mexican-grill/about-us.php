<?php /* Template Name: About Us */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="about-background-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="about-gradient"></div>
    <div class="about-section-1">
        <div class="container">
            <div class="row about-heading-section">
                <div class="col-lg-6 about-section-description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>