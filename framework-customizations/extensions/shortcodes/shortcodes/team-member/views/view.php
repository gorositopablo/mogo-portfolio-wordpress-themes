<?php
if (!defined('FW')) {
    die('Forbidden');
}

$image = $atts['image'];
$name = $atts['name'];
$job = $atts['job'];

$social = $atts['socials'];
?>

<div class="main_team_content text-center">

    <div class="single_team">
        <div class="single_team_img">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr('name');?>" />
            <div class="single_team_overlay all_overlay">
                <?php foreach ($social as $item): ?>
                <a target="_blank" href="<?php echo esc_url($item['link']);?>"><i class="<?php echo esc_attr($item['icon']);?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="single_team_content">
            <h5><?php echo wp_kses_post($name);?></h5>
            <p class="robotolight"><?php echo wp_kses_post($job);?></p>
        </div>
    </div>


</div>
