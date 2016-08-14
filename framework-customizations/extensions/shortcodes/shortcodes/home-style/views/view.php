<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$home = $atts['homepage'];
?>


    <div class="main_home_slider text-center">

        <?php foreach ($home as $item) : ?>
            <div class="single_home_slider">
                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                    <h4><?php echo $item['home_title']; ?></h4>
                    <h1><?php echo $item['home_subtitle']; ?></h1>

                    <div class="whiteseparator"></div>
                    <div class="home_btn">
                        <a href="" class="btn btn-primary"><?php echo $item['btn_txt']; ?></a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
