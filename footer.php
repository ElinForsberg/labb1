<!-- Detta är min footer. Den är dynamisk med widgetar. -->

<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						
						<?php dynamic_sidebar('footer1'); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					
						<?php dynamic_sidebar('footer2'); ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						
					<?php dynamic_sidebar('footer3'); ?>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<?php dynamic_sidebar('footer4'); ?>
					</div>
				</div>
			</div>
        
		</footer>

	</div>

    <?php wp_footer(); ?>
</body>
</html>