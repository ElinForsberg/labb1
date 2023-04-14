<!-- <hi>hej från front-page-php</hi> -->
<?php get_header(); ?>

		<main>
            <?php
            while (have_posts()){
                the_post(); ?>
            
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<!-- <img src="img/city.jpg" /> -->
                                
                                <img src= "<?php the_post_thumbnail_url();?>">
                                
								<div class="text">
									<!-- <h1>Hej och välkommen!</h1> -->
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p> -->
                                    <p>
                                        <?php the_content(); ?>
                        
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php }?>
		</main>
            
		<?php get_footer(); ?>