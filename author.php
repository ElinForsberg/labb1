
<?php get_header() ?>
<!-- Här hämtas inläggen efter vilken författare som skrivit dem. -->
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>
                                <?php wp_title(""); ?>
                            </h1>
                            <?php while (have_posts()){ ?>
                                <?php  get_template_part('article')?>
                            <?php } ?>
							<!-- Här kommer sidnavigeringen -->
							<nav class="navigation pagination">
								<?php echo paginate_links(); ?> 
							</nav>
						</div>
					</div>
				</div>
			</section>
</main>