<?php
/**
 * @package Simple Grey
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
<?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id, 'full');
    
    ?><a href="<?php echo $thumb_url[0]; ?>"><?php the_post_thumbnail('large'); ?></a>
    </div><!-- .post-thumbnail -->
<?php } ?>

    <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'simple-grey' ),
				'after'  => '</div>',
			) );
		?>
        <?php the_meta(); ?> 
	</div><!-- .entry-content -->

	<footer class="entry-meta">
        <?php simple_grey_posted_on(); ?>
		<?php edit_post_link( __( 'Edit', 'simple-grey' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->