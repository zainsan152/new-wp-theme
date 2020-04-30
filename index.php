<h4>Welcome</h4>
<?php
if(have_posts()): //have posts or not
	
		while(have_posts()): //loop section
		the_post();
?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); /* echo get_the_title(); */ ?></a></h3> 
<p><?php the_content(); ?></p>
<?php
endwhile;
endif;
?>