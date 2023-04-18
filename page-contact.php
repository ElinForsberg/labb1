<!-- Detta är kontakt sidan. Kontaktformuläret är ett plugin: Contactform 7 -->
<?php get_header(); ?>


 <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1> <?php wp_title(""); ?> </h1>
							<form>
                            <?php while (have_posts()){ ?>
                                <?php the_post(); ?>
								<?php  the_content();?>
                            <?php } ?>    
							</form>
							
						</div>
					</div>
				</div>
			</section>
		</main>

			
    
    <?php get_footer(); ?>
