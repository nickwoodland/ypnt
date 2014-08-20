<?php $subtitle = get_post_meta($post->ID, '_header_subtitle', true); ?>
<?php $headerimage = "" ?>
<?php if (has_post_thumbnail($post->ID)) : ?>
    <?php $thumbnail_id = get_post_thumbnail_id($post->ID); ?>
    <?php $headerimage = wp_get_attachment_image_src($thumbnail_id, 'full'); ?>
<?php endif; ?>
<div class="page-banner" style="background:url(<?php echo $headerimage != '' ? $headerimage[0] : get_stylesheet_directory_uri().'/assets/header/default.jpg'; ?>);">
	<div class="container">
		<header>
			<div class="title-wrapper">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
			
			<?php if("" != $subtitle) : ?>
				<div class="subtitle-wrapper">
					<span> <?php echo $subtitle; ?> </span>
				</div>		
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
</div>