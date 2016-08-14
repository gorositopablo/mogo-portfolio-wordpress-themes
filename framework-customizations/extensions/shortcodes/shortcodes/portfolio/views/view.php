<?php if (!defined('FW')) die('Forbidden'); ?>


<?php
$portfolio = $atts['portfolios'];
?>


<div class="main_portfolio_content text-center">
    <div class="grid text-center">
        <?php foreach ($portfolio as $item): ?>
            <div class="grid-item">
                <img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                <div class="grid_item_overlay all_overlay">
                    <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                    <p class="monseratregular"><?php echo wp_kses_post($item['title']); ?></p>
                    <p class="robotolight"><?php echo wp_kses_post($item['subtitle']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




