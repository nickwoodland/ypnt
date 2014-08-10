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

<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; // end of the loop. ?>

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

<div class="cta cta--yp">
	<div class="container">
		<div class="row">

			<div class="col-md-6 center">
				<span class='btn btn-nt '>Yes Please</span>
			</div>

			<div class="col-md-6">
				<h2 class="pull-right">Shooo be do wop this is a CTA</h2>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
