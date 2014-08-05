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

	<?php while ( have_posts() ) : the_post(); ?>

		<?php //  get_template_part( 'content', 'page' ); ?>

		<?php the_content(); ?>
		<div class="row">
			<div class="ypnt-holder col-md-6">
				<?php $yp = get_post_ul_meta($post->ID,"like"); ?>
				<h1>
					<?php echo $yp; ?>
				</h1>	
				<?php // if(function_exists('like_counter_p')) { like_counter_p('text for like'); } ?>
				<span class='ldc-ul_cont' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','like')">YES PLEASE</span>

			</div>
			<div class="ypnt-holder col-md-6">
				<?php $nt = get_post_ul_meta($post->ID,"dislike"); ?>
				<h1>
					<?php echo $nt; ?>
				</h1>	
				<?php //if(function_exists('dislike_counter_p')) { dislike_counter_p('text for un-like'); } ?>
				<span class='ldc-ul_cont' onclick="wp_ypnt_ajax_script(this,'<?php echo $post->ID; ?>','dislike')">NO THANKS</span>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
