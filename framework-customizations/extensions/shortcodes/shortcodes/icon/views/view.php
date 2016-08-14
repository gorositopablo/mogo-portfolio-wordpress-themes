<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
    <ul class="describe-list">
        <li><div class="row"><div class="col-xs-1"><i class="<?php echo  $atts['icon'] ?>"></i></div>
                <div class="col-xs-11"><?php if (!empty($atts['title'])): ?>
                        <br/>
                        <span class=""><?php echo  $atts['title'] ?></span>
                    <?php endif; ?>
                </div></div>
        </li>
    </ul>
</div>