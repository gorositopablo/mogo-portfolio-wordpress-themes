<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$image = $atts['image'];
$icon = $atts['icon'];
$title = $atts['title'];

?>


<div class="main_about_area text-center main_about_content">
        <div class="single_about">
            <div class="single_about_img">
                <img src="<?php echo $image['url'];?>" alt="" />
            </div>
            <div class="single_about_img_overlay all_overlay">
                <a href=""><i class="<?php echo $icon;?>"></i>
                    <p><?php echo $title;?></p>
                </a>
            </div>
        </div>
</div>
