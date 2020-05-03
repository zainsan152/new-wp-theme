<div class="col-sm-12 zain-container">

			<div class="col-sm-4">
				<?php 
				if(has_post_thumbnail())
				{
					the_post_thumbnail_url('thumbnail'); //big
					the_post_thumbnail('small-thumbnail');
				}
				else
				{	
					?>
					<img src="<?php echo get_template_directory_uri().'/images/download.png';?> " style = "height: 120px;
					width: 120px;" alt=""/>
					<?php
				} 
				?>
			</div>
			<div class="col-sm-8">
				<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
				<p><?php the_time('F j , Y g:i a'); ?> | <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php $categories = get_the_category();
				$sperator = ", ";
				$catoptions = '';
				foreach ($categories as $cateogory) {
				 	# code...
				 	$catoptions .= "<a href = '".get_category_link($cateogory->term_id)."'/>".$cateogory->cat_name."</a>".$sperator; 
				 }
				 echo trim ($catoptions , $sperator); ?></p>
				<p><?php echo get_the_content(); ?></p>
			</div>
		</div>

		
	