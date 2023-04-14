
<?php get_header() ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>
                                <?php wp_title(""); ?>
                            </h1>
                            <?php while (have_posts()){ ?>
                                <article>
									<?php the_post(); ?>
								<!-- <img src="img/washington.jpg" /> -->
                                <img src= "<?php the_post_thumbnail_url();?>">
								<!-- <h2 class="title">
									<a href="inlagg.html">Det tredje inlägget</a>
								</h2> -->
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
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>  -->
                                <p>
                                <?php the_excerpt() ?> 
                                </p>
								</article>
                                <?php } ?>
                            </main>

<?php get_footer(); ?>