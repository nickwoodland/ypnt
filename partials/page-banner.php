<?php $headerimage = "" ?>
<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php $thumbnail_id = get_post_thumbnail_id($post->ID); ?>
    <?php $headerimage = wp_get_attachment_image_src($thumbnail_id, 'full'); ?>
<?php endif; ?>
<div class="page-banner" style="background:url(<?php echo $headerimage != '' ? $headerimage[0] : get_stylesheet_directory_uri().'/assets/header/default.jpg'; ?>);">
	<div class="container">
		<header>
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
	</div>
</div>