<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$footer_bg = mogo_get_option('footer_bg');
if (defined("FW")) {
    if ($footer_bg['bg_style'] == 'color') {
        $bg_style = $footer_bg['color']['bg_color'];

        $bg = "style='background-color: $bg_style; '";

        $overlay = "";
    } else {
        $bg_style = $footer_bg['image']['bg_image'];
        if (!empty($bg_style)) {
            $bg = "style='background: url(" . $bg_style['url'] . ") no-repeat center top fixed;'";
        }
        $overlay = "footer-img-overlay";
    }
} else {
    $bg = $overlay = '';
}

$logo = mogo_get_option('footer_logo');
$footer_text = mogo_get_option('text');
$copyright = mogo_get_option('copyright');
?>


<!-- FOOTER -->

<section id="contact" class="footer_widget">
    <div class="container">
        <div class="row">
            <div class="main_widget">
                <div class="col-sm-4 col-xs-12">
                    <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                        <div class="footer_logo">
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo bloginfo('name'); ?>" />
                        </div>
                        <p>
                            <?php echo $footer_text; ?>
                        </p>


                        <div class="footer_subcribs_area">
                            <!--<p class="monseratregular"><strong>15k</strong> followers</p>-->
                            <hr />
                            <div class="flowus">
                                <?php if (is_active_sidebar('social')) : ?>
                                    <ul id="sidebar">
                                        <?php dynamic_sidebar('social'); ?>
                                    </ul>
                                <?php endif; ?>
                            </div>

                            <!--<form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button type="submit" class="submit_btn">Subscribe</button>
                                </div>

                            </form> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-7  col-xs-12">
                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                <p class="monseratregular">blogs</p>
                                <span class="separator4"></span>

                                <?php if (is_active_sidebar('blog')) : ?>
                                    <ul id="sidebar">
                                        <?php dynamic_sidebar('blog'); ?>
                                    </ul>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="col-sm-5 col-xs-12">
                            <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                <div class="footer_gellary">
                                    <div class="row">
                                        <?php if (is_active_sidebar('flickr')) : ?>
                                            <ul id="sidebar">
                                                <?php dynamic_sidebar('flickr'); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<footer id="footer" class="footer">
    <div class="container">
        <div class="main_footer text-center">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="copyright_text">
                        <p class=" wow fadeInRight" data-wow-duration="1s"><?php echo $copyright; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

</body>
</html>