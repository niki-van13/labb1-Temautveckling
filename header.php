<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    <link href=<?php echo get_template_directory_uri().'/css/font-awesome.css'?> rel="stylesheet" type="text/css" />
	<link href=<?php echo get_template_directory_uri().'/css/bootstrap.css'?> rel="stylesheet" type="text/css" />
	<link href=<?php echo get_template_directory_uri().'/css/style.css'?> rel="stylesheet" type="text/css" />
	<script src=<?php echo get_template_directory_uri()."/js/jquery.js"?>></script>
    <?php wp_head(); ?>
</head>
<body>



<div id="wrap">


	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href=<?php echo get_bloginfo('url') ?>>Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<?php get_search_form(); ?>
							</div>
						</form>
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
</div>

<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'huvudmeny',
								'container' => false
							)); 
							?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>