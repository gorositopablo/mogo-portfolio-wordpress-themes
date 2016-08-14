<?php
/**
 * @package _spx
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(array(
	    'before' => '<p>' . __('Pages: ', 'mogo'),
	    'after' => '</p>',
	    'next_or_number' => 'next_and_number', # activate parameter overloading
	    'nextpagelink' => __('Next ', 'mogo'),
	    'previouspagelink' => __(' Previous', 'mogo'),
	    'pagelink' => '%',
	    'echo' => 1 )
	); ?>
	<hr>
	<?php mogo_post_tags(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'mogo' ), '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
