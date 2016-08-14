<?php
if (!defined('FW')) {
    die('Forbidden');
}

$image = $atts['image'];
$name = $atts['name'];
$title = $atts['title'];
$msg = $atts['message'];
?>

<div class="col-sm-10 col-sm-offset-1">
    <div class="main_client_content">
        <div class="single_client">
            <div class="single_client_img">
                <img class="img-circle img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo wp_kses_post($title); ?>" />
            </div>
            <div class="single_client_content">
                <p class="monseratregular"><?php echo wp_kses_post($name); ?></p>
                <p class="robotolight"><?php echo wp_kses_post($title); ?></p>
                <span class="separator4"></span>
                <p><?php echo wp_kses_post($msg); ?></p>
            </div>
        </div>

    </div>
</div>


