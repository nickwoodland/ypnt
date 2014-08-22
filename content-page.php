<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content feature feature-bump">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
<?php if(get_post_meta($post->ID, '_cta_banner_display', true)) : ?>
			</div> <!-- close the bloody main-content-inner -->
		</div> <!--close the bloody row -->
	</div> <!--close the bloody container -->

	<?php $colour = get_post_meta($post->ID, '_cta_banner_colour', true); ?>
	<?php $cta_text = get_post_meta($post->ID, '_cta_banner_text', true); ?>
	<?php $cta_link = get_post_meta($post->ID, '_cta_banner_link', true); ?>
	<?php $cta_btn_text = get_post_meta($post->ID, '_cta_banner_button_text', true); ?>
	

	<div class="cta <?php echo false != $colour ? 'cta--'.$colour : ''; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php if (false != $cta_text) : ?> 
						<h2><?php echo $cta_text; ?></h2>
					<?php endif; ?>
				</div>
				<div class="col-md-6 center">
					<a href="<?php echo '' != $cta_link ? $cta_link : ''; ?>"  class='btn <?php echo false != $colour ? 'btn-'.$colour : ''; ?> pull-right'><?php echo $cta_btn_text; ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container"> <!--reopen all the things -->
		<div class="row">
			<div class="main-content-inner">
<?php endif; ?>
