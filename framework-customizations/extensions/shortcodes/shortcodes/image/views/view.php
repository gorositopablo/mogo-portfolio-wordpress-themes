<?php
if (!defined('FW')) {
    die('Forbidden');
}

$large = $atts['large_image'];
$small = $atts['small_image'];
?>

<div class="col-sm-10 col-sm-offset-1">               
    <div class="main_device_area text-center">

        <div class="main_device_content">
            <div class="single_device">
                <img src="<?php echo $large['url']; ?>" alt="" />
            </div>
            <div class="single_device_two">
                <img src="<?php echo $small['url']; ?>" alt="" />
            </div>
        </div>

    </div>
</div>

