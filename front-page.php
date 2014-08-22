<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<?php $custom_meta = get_post_meta($post->ID); ?>

<?php $nt = isset($custom_meta['fp_nt']) ? $custom_meta['fp_nt'] : false; ?>
<?php $yp = isset($custom_meta['fp_yp']) ? $custom_meta['fp_yp'] : false; ?>
<?php $goal = isset($custom_meta['fp_goal']) ? $custom_meta['fp_goal'] : false; ?>
		
<div class="container">
	<div class="feature" id="intro">
		<h2>Help Change The World Into Something (More) Beautiful...</h2>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>
	</div>

</div>
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

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="feature feature-cta">
				<?php if(false != $nt) : ?>
					<h2>No Thanks</h2>
					<?php echo $nt[0]; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-6 center">
			<div class="feature feature-cta">
				<?php if(false != $yp) : ?>
					<h2>Yes Please</h2>
					<?php echo $yp[0]; ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
</div>



<div class="container">
	<div class="row">
	<?php  $nt_page = get_page_by_title( 'No Thanks' ); ?>
	<?php  $yp_page = get_page_by_title( 'Yes Please' ); ?>

		<div class="col-md-6">
			<div class="cta cta--nt cta--half-width">
				<div class="cta-inner clearfix">
					<h2 class="pull-left">Learn More About ></h2>
					<a class='btn btn-nt pull-right' href="<?php echo get_permalink($nt_page->ID); ?>">No Thanks</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="cta cta--yp cta--half-width">
				<div class="cta-inner clearfix">
					<h2 class="pull-left">Learn More About ></h2>
					<a class='btn btn-yp pull-right' href="<?php echo get_permalink($yp_page->ID); ?>">Yes Please</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="feature">

		<?php if(false != $goal) : ?>
			<h2> Our Goal </h2>
			<?php echo $goal[0]; ?>
		<?php endif; ?>

	</div>
</div>




<?php get_footer(); ?>
