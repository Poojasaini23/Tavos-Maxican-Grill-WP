<?php /* Template Name: Home page */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="about-background-image" style="background-image: url('<?php the_field("section_1_background_image"); ?>');">
    <div class="background-linear"></div>
    <div class="index-section-1">
        <div class="container">
            <div class="row home-section-1">
                <div class="col-md-12">
                    <div class="home-section-1-top-image">
                        <img src="<?php the_field("section_1_top_image"); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6 home-section-1-left">
                    <div class="home-section-1-heading">
                        <img src="<?php the_field("section_1_heading_icon"); ?>" alt="">
                        <span><?php the_field("section_1_heading"); ?></span>
                        <img src="<?php the_field("section_1_heading_icon"); ?>" alt="">
                    </div>
                    <div class="home-section-1-title">
                        <h1><?php the_field("section_1_title"); ?></h1>
                    </div>
                    <div class="home-section-1-icon">
                        <img src="<?php the_field("section_1_icon"); ?>" alt="">
                    </div>
                    <a target="_blank" class="index-section-1-button"
                        href="<?php the_field("section_1_button_url"); ?>">
                        <div class="home-section-1-button"
                            style="background-image: url('<?php the_field("section_1_button_image"); ?>');">
                            <img src="<?php the_field("section_1_button_image"); ?>" alt="" style="visibility: hidden;">
                            <div class="home-section-1-btn">
                                <?php the_field("section_1_button_text"); ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 index-bottom-left-section">
                    <div class="home-section-1-right"
                        style="background-image: url('<?php the_field("section_1_right_background_image"); ?>');">
                        <img src="<?php the_field("section_1_right_background_image"); ?>" alt=""
                            style="visibility: hidden;">
                        <div class="home-section-1-right-description">
                            <div class="home-section-1-right-image">
                                <img src="<?php the_field("section_1_right_image"); ?>" alt="">
                            </div>
                            <div class="home-section-1-right-heading">
                                <?php the_field("section_1_right_heading"); ?>
                            </div>
                            <div class="home-section-1-right-title">
                                <?php the_field("section_1_right_title"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row index-bottom-sction">
            <div class="col-md-12 index-bottom-right-section">
                <div class="index-section-1-left-description">
                    <h2><?php the_field("section_1_left_title")?></h2>
                    <?php the_field("section_1_left_content"); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="mobile-home-section" style="background-image: url('<?php the_field("mobile_1_background_image"); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mobile-section-1">
                <div class="home-section-1-heading">
                    <img src="<?php the_field("mobile_1_heading_icon"); ?>" alt="">
                    <span><?php the_field("mobile_1_heading"); ?></span>
                    <img src="<?php the_field("mobile_1_heading_icon"); ?>" alt="">
                </div>
                <div class="home-section-1-title">
                    <h1><?php the_field("mobile_1_title"); ?></h1>
                </div>
                <div class="home-section-1-icon">
                    <img src="<?php the_field("mobile_1_icon"); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-section-image">
        <img src="<?php the_field("mobile_1_image");?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mobile-section-1">
                <a target="_blank" class="index-section-1-button" href="<?php the_field("mobile_1_button_url"); ?>">
                    <div class="home-section-1-button"
                        style="background-image: url('<?php the_field("mobile_1_button_image"); ?>');">
                        <img src="<?php the_field("mobile_1_button_image"); ?>" alt="" style="visibility: hidden;"
                            class="mobile-home-button mobile-button-section">
                        <div class="home-section-1-btn">
                            <?php the_field("mobile_1_button_text"); ?>
                        </div>
                    </div>
                </a>
                <div class="mobile-section-title">
                    <?php the_field("mobile_bottom_title");?>
                </div>
                <div class="mobile-section-content">
                    <?php the_field("mobile_bottom_content");?>
                </div>
                <div class="home-section-1-button mobile-call-button mobile-buttom-button"
                    style="background-image: url('<?php the_field("mobile_call_button_image"); ?>');">
                    <img src="<?php the_field("mobile_call_button_image"); ?>" alt="" style="visibility: hidden;"
                        class="mobile-home-button">
                    <div class="home-section-1-btn">
                        <a class="index-section-1-button" href="tel:<?php the_field("mobile_call_button_url"); ?>">
                            <img src="<?php the_field("mobile_call_button_icon");?>" alt="">
                            <?php the_field("mobile_call_button_text"); ?>
                        </a>
                    </div>
                </div>
                <div class="home-section-1-button mobile-address-button mobile-buttom-button"
                    style="background-image: url('<?php the_field("mobile_address_button_image"); ?>');">
                    <img src="<?php the_field("mobile_address_button_image"); ?>" alt="" style="visibility: hidden;"
                        class="mobile-home-button">
                    <div class="home-section-1-btn">
                        <a class="index-section-1-button" href="<?php the_field("mobile_address_button_url"); ?>">
                            <img src="<?php the_field("mobile_address_button_icon");?>" alt="">
                            <?php the_field("mobile_address_button_text"); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php endwhile;
endif; ?>
<?php get_footer() ?>