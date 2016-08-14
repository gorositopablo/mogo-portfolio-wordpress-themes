<?php
if (!defined('FW')) {
    die('Forbidden');
}

$testimonial = $atts['testimonial'];
?>

<div class="main_comment">
    <div class="main_comment_content">

        <?php foreach ($testimonial as $item): ?>
            <div class="single_comment">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="single_comment_image_left">
                            <img src="<?php echo $item['image']['url'];?>" alt="<?php echo $item['name']; ?>" />
                        </div>
                        <div class="single_comment_content_right">
                            <p class="robotolight">“<?php echo $item['description']; ?>”</p>
                            <a href=""><h4><span class="separator4"></span><?php echo $item['name']; ?></h4></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</div>

