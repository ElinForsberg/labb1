<article>
	<?php the_post(); ?>
		<img src= "<?php the_post_thumbnail_url();?>">
                                
								
            <h2 class ="title">
				<a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a>
            </h2>
			<ul class="meta">
				<li>
					<i class="fa fa-calendar"> <?php echo get_the_date(); ?> </i>
				</li>
				<li>
					<i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link() ?></a>
										
				</li>
				<li>
					<i class="fa fa-tag"></i> <?php the_category($separator= ', ') ?>
				</li>
			</ul>
								
            <p>
                <?php the_excerpt() ?> 
            </p>
</article>