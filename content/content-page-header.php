<?php
/**
 * blog Header
 *
 */
$heading = '';
if (defined('FW')) {
    $hero_heading = fw_get_db_settings_option('general_page_header');
    $heading = $hero_heading['header_title'];
}
?>

<div class="page-hero-bg">
    <div class="blog-hero page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="text-center  white-text"><?php echo esc_attr($heading); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>