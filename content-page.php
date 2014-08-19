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
<div class="cta cta--nt">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Donate to the Initiative ></h2>
			</div>
			<div class="col-md-6 center">
				<span class='btn btn-yp pull-right'>Yes Please</span>
			</div>
		</div>
	</div>
</div>
<div class="container"> <!--reopen all the things -->
	<div class="row">
		<div class="main-content-inner">
<?php endif; ?>
