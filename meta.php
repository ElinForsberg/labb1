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