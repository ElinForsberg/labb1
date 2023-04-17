<!-- Dynamisk sidebar med widgetar.  -->

<aside id="secondary" class="col-xs-12 col-md-3">
	<div id="sidebar">
		<ul>
			<li>
										
				<?php get_search_form(); ?>
							
			</li>
		</ul>
		<ul role="navigation">
                                    
									
				<?php dynamic_sidebar('sidebar1'); ?>
                                   	
										
				<?php dynamic_sidebar('sidebar2'); ?>
                                   
									
										
				<?php dynamic_sidebar('sidebar3'); ?>
									
		</ul>
	</div>
</aside>