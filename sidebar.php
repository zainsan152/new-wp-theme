<?php if(is_active_sidebar('right-sidebar')): ?>
	<ul id = "sidebar">
		<?php dynamic_sidebar('right-sidebar'); ?>
	</ul>
	<?php endif; ?>

	<br>
	<h4>Sample Image</h4>
	<br>
	<img src="<?php echo get_option("zain_image_uploader")?>" alt="" style="height: 200px; width: 200px;">