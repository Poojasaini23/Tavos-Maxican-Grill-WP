<?php /* Template Name:  gallery */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="gallery-section-1">
    <div class="gallery-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-repeater">
        <?php if (have_rows('gallery_repeater')) : ?>
        <?php while (have_rows('gallery_repeater')) : the_row(); ?>
        <div class="gallery-section">
            <div class="gallery-gradient"></div>
            <img src="<?php the_sub_field("gallery_repeater_image"); ?>" alt="">
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php endwhile;
endif; ?>
<?php get_footer() ?>