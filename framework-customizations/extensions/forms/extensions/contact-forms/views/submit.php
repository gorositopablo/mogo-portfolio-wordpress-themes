<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $submit_button_text
 */
?>
<div class="form-group m-b-0">
    <button type="submit" class="<?php fw_theme_button_class('send_contact'); ?> btn btn-shadow btn-green"><?php echo esc_attr($submit_button_text) ?></button>
</div>