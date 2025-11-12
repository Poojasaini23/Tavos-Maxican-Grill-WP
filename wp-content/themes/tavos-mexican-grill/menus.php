<?php /* Template Name: menus */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="about-background-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="about-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-section-description">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php if (have_rows('menus_repeater')) : ?>
                <?php while (have_rows('menus_repeater')) : the_row(); ?>

                <div class="col-md-2 menu-section-repeater">
                    <a target="_blank" href="<?php the_sub_field("url"); ?>">
                        <div class="menu-section-repeater-image">
                            <img src="<?php the_sub_field("image"); ?>" alt="">
                        </div>
                        <h2> <?php the_sub_field("title"); ?></h2>
                    </a>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>