<?php get_header(); ?>
<h4>Singular Posts</h4>                
<div class="container">
	<div class="row">
		<?php
						if(have_posts()): //have posts or not        //single.php > singular.php > index.php
							
								while(have_posts()): //loop section
								the_post();
								
								get_template_part("template-parts/content" , get_post_format());

						endwhile;
						endif;
		?> 
	</div>
	
		
</div>



<?php get_footer(); ?>