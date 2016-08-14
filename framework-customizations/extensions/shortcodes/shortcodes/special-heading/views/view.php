<?php
if (!defined('FW'))
    die('Forbidden');

$sep = $atts['separator'];
?>

<div class="fw-heading heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo!empty($atts['centered']) ? 'fw-heading-center' : ''; ?>  <?php echo esc_attr($atts['class']); ?> wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s" style=" color:<?php echo esc_attr($atts['color']); ?>">
    <?php $heading = "<{$atts['heading']} class='fw-special-title'>{$atts['title']}</{$atts['heading']}>"; ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-title-half' : ''; ?>"><?php echo $heading; ?></div>

    <?php $subheading = "<{$atts['subheading']} class='fw-special-subtitle'>{$atts['subtitle']}</{$atts['subheading']}>"; ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-subtitle-half' : ''; ?>"><?php echo $subheading; ?></div>

    <?php
    if ($sep['show_separator'] == 'yes') :
        ?>
        <div class="separator<?php echo empty($atts['centered']) ? '-left' : ''; ?>"></div>
    <?php elseif ($sep['yes']['separator_style'] == 'separator-2'):
        ?>
        <div class="separator_wrap<?php echo empty($atts['centered']) ? '-left' : ''; ?>"> <div class="separator2 text-center"></div></div>

    <?php endif; ?>
</div>



