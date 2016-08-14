<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$number = $atts['number'];
$title = $atts['title'];
?>

<div class="main_counter_area text-center">
    <div class="single_counter border_right">

        <div class="single_counter_item">
            <h2 class="statistic-counter"> <?php
                if (number) {
                    echo esc_attr($number);
                }
                ?></h2>
            <h3>
                <?php
                if ($title) {
                    echo esc_attr($title);
                }
                ?></h3>
        </div>

    </div>
</div>




