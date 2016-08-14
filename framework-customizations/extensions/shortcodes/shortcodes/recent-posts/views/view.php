<?php
if (!defined('FW')) {
    die('Forbidden');
}

$term_id = (int) $atts['category'];


if ($term_id == 0) {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date'
    );
} else {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $term_id
            )
        )
    );
}

$query = new WP_Query($args);
?>


<div class="main_blog_content">
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-sm-4">
                <div class="single_blog">
                    <div class="single_blog_img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('recent_post', array('class' => 'img-responsive')); ?>
                        </a>
                        <div class="single_bolg_date">
                            <h2><?php the_time('j'); ?></h2>
                            <p class="robotolight"> <?php the_time('M'); ?></p>
                        </div>
                    </div>
                    <div class="single_blog_content">
                        <a href="<?php the_permalink(); ?>"><p class="monseratregular"><?php echo substr(get_the_title(), 0, 25); ?></p></a>
                        <h6 class="robotolight">Posted by <?php the_author(); ?> in <strong><?php
                                $categories = get_the_category();
                                echo esc_html($categories[0]->name);
                                ?></strong></h6>
                        <p><?php echo substr(get_the_excerpt(), 0, 150); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('READ MORE ..', 'bt') ?></a>
                        <hr />

                        <div class="single_blog_bottom_content">
                            <a class="robotolight" href=""><i class="fa fa-eye"></i> 
                               <?php if(function_exists('the_views')) { the_views(); } ?>
                            </a>

                            <a class="robotolight" href=""><i class="fa fa-commenting"></i> <?php printf(_nx('One Comment', '%1$s comments', get_comments_number(), 'comments', 'bt'), number_format_i18n(get_comments_number())); ?></a>
                        </div>

                    </div>
                </div>
            </div>

            <?php
        endwhile;

    else :
        // If no content, include the "No posts found" template.
        get_template_part('content', 'none');

    endif;
    ?>

</div>



<?php wp_reset_query(); ?>