<!-- footer -->
<?php wp_footer(); ?>
<footer>
    <div class="footer-top-image">
        <img src="<?php the_field("footer_top_image", "option"); ?>" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-4 col-md-5 footer-left-section">
                <a class="footer-navbar-brand" href="<?php echo get_home_url(); ?>">
                    <img src="<?php the_field("footer_image", "options"); ?>" alt="" />
                </a>
                <div class="footer-right-content">
                    <div class="footer-left-bottom-section">
                        <?php the_field("footer_left_bottom_content", "option"); ?>
                    </div>

                    <div class="footer-social-section row">
                        <?php $Case = get_field('footer_icon_repeater', "options");
                        if (is_array($Case)) {
                            foreach ($Case as $Case_list) {
                        ?>
                        <div class="social-icon-app">
                            <a target="_blank" href="<?php echo $Case_list['footer_icon_url']; ?>">
                                <?php echo $Case_list['footer_icon']; ?>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-7 footer-right-section">
                <div class="footer-menu">
                    <?php
                    $defaults = array(
                        'menu' => 'Footer Menu',
                        'menu_class' => 'nav navbar-nav'
                    );
                    wp_nav_menu($defaults);
                    ?>
                </div>
                <div class="row footer-bottom footer-repeater-section">
                    <div class="col-lg-4 col-md-6 footer-left-content">
                        <div class="footer-number">
                            <a href="tel: <?php the_field("footer_number_url", "option"); ?>">
                                <?php the_field("footer_number", "option"); ?>
                            </a>
                        </div>
                        <div class="footer-address">
                            <?php the_field("footer_left_content", "option"); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-bottom-center-content">
                        <?php the_field("footer_center_content", "option"); ?>
                    </div>
                    <div class="col-lg-4 footer-bottom-right-content">
                        <?php the_field("footer_right_content", "option"); ?>
                        <a target="_blank" href="<?php the_field("footer_gift_card_url", "option"); ?>">
                            <?php the_field("footer_gift_card", "option"); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
</body>

</html>