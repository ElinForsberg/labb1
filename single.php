
<?php get_header() ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
                            <?php while (have_posts()){ ?>
                                <article>
									<?php the_post(); ?>
								
                                	<img src= "<?php the_post_thumbnail_url();?>">
								
                                	<h2 class ="title">
								
                                    	<?php the_title(); ?></a>
                                	</h2>
									<ul class="meta">
										<li>
											<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?> 
										</li>
										<li>
											<i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link() ?></a>
										
										</li>
										<li>
											<i class="fa fa-tag"></i> <?php the_category($separator= ', ') ?>
										</li>
									</ul>
								
                                	<p>
                                		<?php the_content() ?> 
                                	</p>
								</article>
                            <?php } ?>
						</div>
						<?php get_sidebar('sidebar') ?>
					</div>
				</div>
			</section>
		</main>


        <?php get_footer() ?>