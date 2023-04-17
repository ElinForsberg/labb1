<?php
/*
Template Name: Undersida
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
						<div id="primary" class="col-xs-12 col-md-9">
							
                            <h1>
                                <?php the_title(); ?>
                            </h1>
							
                            <p>
                                <?php the_content(); ?>
                            </p>
                        
                        </div>
						<aside id="secondary" class="col-xs-12 col-md-3">
                         
                                <?php wp_nav_menu(array('theme_location' => 'sidmeny',
							'items_wrap' => '<ul class="side-menu">%3$s<ul>')); ?>

						</aside>
					</div>
				</div>
                <?php }?>
			</section>
		</main>


 <?php get_footer(); ?>