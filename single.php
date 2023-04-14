
<?php get_header() ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
                            <?php while (have_posts()){ ?>
                                <article>
									<?php the_post(); ?>
								<!-- <img src="img/washington.jpg" /> -->
                                <img src= "<?php the_post_thumbnail_url();?>">
								<!-- <h2 class="title">
									<a href="inlagg.html">Det tredje inlägget</a>
								</h2> -->
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
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>  -->
                                <p>
                                <?php the_content() ?> 
                                </p>
								</article>
                                <?php } ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<!-- <h2>Sidor</h2> -->
										<?php dynamic_sidebar('sidebar1'); ?>
										
										<!-- <h2>Arkiv</h2> -->
										<?php dynamic_sidebar('sidebar2'); ?>
										

									
										<!-- <h2>Kategorier</h2> -->
										
										<?php dynamic_sidebar('sidebar3'); ?>
									
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>


        <?php get_footer() ?>