<?php get_header(); ?>
<h4>Date archive Page</h4>
<?php 
if (is_day()) {
	# code...
	echo "Day";
}
elseif (is_month()) {
	# code...
	echo "Month";
}
elseif (is_year()) {
	# code...
	echo "Year";
}
?>
<div class="container">
	<div class="row">
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
						endif;
		?> 
	</div>
	
		
</div>



<?php get_footer(); ?>