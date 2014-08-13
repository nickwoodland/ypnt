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
	<div class="feature">
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
	<div class="feature">

		<?php if(false != $goal) : ?>
			<h2> Our Goal </h2>
			<?php echo $goal[0]; ?>
		<?php endif; ?>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php if(false != $nt) : ?>
				<h2>No Thanks</h2>
				<?php echo $nt[0]; ?>
			<?php endif; ?>
		</div>
		<div class="col-md-6 center">
			<?php if(false != $yp) : ?>
				<h2>Yes Please</h2>
				<?php echo $yp[0]; ?>
			<?php endif; ?>
		</div>
	</div>
</div>



<div class="row">

	<div class="col-md-6 center cta cta--yp">

		<span class='btn btn-nt '>Yes Please</span>

	</div>

	<div class="col-md-6 cta cta--nt">

			<h2 class="pull-right">Shooo be do wop this is a CTA</h2>

	</div>
</div>




<?php get_footer(); ?>
