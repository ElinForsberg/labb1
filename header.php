<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php wp_title()?></title>
	<!-- läser in css -->
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						
						<a class = "logo" href="<?php echo home_url(); ?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- hämtar sökformulär från searchform.php -->
						<?php get_search_form(); ?>
							
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
						
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
		</header>

		<div class="mobile-search">
			
				<div>
				<?php get_search_form(); ?>
					
				</div>
			
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
                       <?php wp_nav_menu(array('theme_location' => 'huvudmeny')); ?>
						
					</div>
				</div>
			</div>
		</nav>
