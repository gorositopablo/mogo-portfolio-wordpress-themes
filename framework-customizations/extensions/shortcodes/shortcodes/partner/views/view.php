<?php
if (!defined('FW'))
    die('Forbidden');

$partner = $atts['partner_gallery'];
?>


<div class="main_clinetslogo text-center">
    <?php foreach ($partner as $partners): ?>
    <div class="col-sm-2"> <a target="_blank" href="<?php echo esc_url($partners['partner_link']);?>"><img src="<?php echo esc_url($partners['partner_image']['url']);?>" alt="<?php echo esc_attr($partners['partner_text']);?>" /></a></div>
            <?php endforeach; ?>
</div>

