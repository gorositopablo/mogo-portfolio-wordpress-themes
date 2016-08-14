<?php
if (!defined('FW')) {
    die('Forbidden');
}

$icon = $atts['icon'];
$title = $atts['title'];
$content = $atts['content'];

?>


<div class="main_service_content">
    <div class="single_service">
        <div class="single_service_icon">
            <i class="<?php echo esc_attr($icon);?>"></i>
        </div>
        <div class="single_service_content">
            <h3><?php echo wp_kses_post($title);?></h3>
            <p><?php echo wp_kses_post($content);?></p>
        </div>
    </div>
</div>

