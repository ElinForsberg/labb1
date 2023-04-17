

<?php
/*
Template Name: Undersida3
*/
?>

 <?php get_header(); ?>


<main>
			<section>
                <?php
                while (have_posts()){
                    the_post(); ?>
                
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
							
                            <h1>
                            <?php the_title(); ?>
                            </h1>
                            <p>
                                <?php the_content(); ?>
                            </p>
							
						</div>
					</div>
				</div>
			</section>
            <?php }?>
		</main>


<?php get_footer(); ?>
