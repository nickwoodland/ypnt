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
<div class="cta">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Shooo be do wop this is a CTA</h2>
			</div>
			<div class="col-md-6 center">
				<span class='btn btn-yp'>Yes Please</span>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
