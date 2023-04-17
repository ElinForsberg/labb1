

<?php get_header(); ?>
<!-- Detta är samlingssidan för alla blogginlägg -->
<main>
			<section>
                
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
                           
							<!-- Här hämtas sidans titel in -->
                            <h1>
                                <?php wp_title(""); ?> 
                            </h1>

							<!-- Här kommer loopen som hämtar alla inlägg -->
                            <?php while (have_posts()){ ?>
                              <?php  get_template_part('article')?>
								
                            <?php } ?>
							<!-- Här är sidnavigeringen	 -->
							<nav class="navigation pagination">
							<?php echo paginate_links(); ?> 
							</nav>
							
						</div>

						<!-- Här hämtar jag min sidebar -->
						<?php get_sidebar('sidebar') ?>
					</div>
				</div>
			</section>
</main>

		
		


<?php get_footer(); ?>