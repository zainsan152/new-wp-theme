<?php get_header(); ?>
<?php 
if(is_home())
{
	echo "Home page";
} 
else
{
	echo "Front page";
}
?>
<h4>Welcome Posts</h4>
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