<?php
/**
 * @package sensible-wp
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	
		<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sensible-wp' ), 
				'after'  => '</div>',
			) );
		?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php sensiblewp_entry_footer(); ?>
		</footer><!-- .entry-footer -->  
	</article><!-- #post-## -->
