<?php /* Template Name: contact */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="about-background-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="about-section-1">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 about-section-description contact-section-description">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="col-lg-6 about-section-description contact-section-description">
                    <div class="contact-section-map">
                        <?php the_field("contact_map"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>