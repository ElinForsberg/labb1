<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php wp_title()?></title>
	<!-- <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script> -->
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- <a class="logo" href="index.html">Labb 1</a> -->
						<a class = "logo" href="<?php echo home_url(); ?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- <form method="get" id="searchform" class="searchform" action="?php echo esc_url( home_url( '/' ) ); ?>">
							<div>
							<label>
      							<span class="screen-reader-text">?php echo _x( 'Search for:', 'label', 'textdomain' ); ?></span>
      							<input type="search" class="search-field" placeholder="?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'textdomain' ); ?>" value="?php echo get_search_query(); ?>" name="s" />
   							</label> -->
								<!-- <label class="screen-reader-text" >Sök efter:</label> -->
								<!-- <input type="text" />
								<input type="submit" value="Sök" /> -->
								<?php get_search_form(); ?>
							<!-- </div>
						</form> -->
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
			<form id="searchform" class="searchform">
				<div>
				<?php get_search_form(); ?>
					<!-- <label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" /> -->
				</div>
			</form>
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
