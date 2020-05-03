<?php get_header(); ?>
<h4>Page Contact</h4>
<div class="container">
	<div class="row">
		<?php
						if(have_posts()): //have posts or not
							
								while(have_posts()): //loop section
								the_post();
								?>

								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
								<?php
								
								

						endwhile;
						endif;
		?> 
	</div>
	
		
</div>



<?php get_footer(); ?>