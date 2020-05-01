<?php get_header(); ?>
<h4>Welcome Posts</h4>
<div class="container">
	<div class="row">
		<?php
if(have_posts()): //have posts or not
	
		while(have_posts()): //loop section
		the_post();
?>
		<div class="col-sm-12 zain-container">

			<div class="col-sm-4">
				<?php the_post_thumbnail('small-thumbnail'); ?>
			</div>
			<div class="col-sm-8">
				<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
				<p><?php echo get_the_content(); ?></p>
			</div>
		</div>

		<?php
endwhile;
endif;
?>
	</div>
</div>



<?php get_footer(); ?>