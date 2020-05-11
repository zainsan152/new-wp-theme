<?php get_header(); ?>
<h4>Search Page</h4>
<p>Search for: <?php echo get_search_query(); ?></p>
<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<?php
						if(have_posts()): //have posts or not
							
								while(have_posts()): //loop section
								the_post();
								//get_post_format():aside => aside -> content-aside.php
								//get_post_format():link => link -> content-link.php
								//get_post_format():gallery => gallery -> content-gallery.php
								//default -> content.php
								//content-{post-formats}.php > content.php > index.php
								get_template_part("template-parts/content" , get_post_format());
								endwhile;
					else:
						echo "<h4 class = 'alert alert-danger'>no post found</h4>";
						endif;
		?> 
		</div>
		<div class="col-sm-2">
			<?php get_search_form(); ?>
		</div>
		
	</div>
	
		
</div>



<?php get_footer(); ?>