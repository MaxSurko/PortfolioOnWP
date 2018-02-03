<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

</head>
<body <?php body_class(); ?>>


<header>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="col-md-12 col-xs-12">
			<a href="#" class="navbar-brand"><?php
                $options = get_option('sample_theme_options');
                echo $options['logotext']; ?></a>
			<div class="navbar navbar-default navbar-right top-mnu">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
					<span class="sr-only">Open navigation</span>
					<span class="icon-bar">&nbsp;</span>
					<span class="icon-bar">&nbsp;</span>
					<span class="icon-bar">&nbsp;</span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="responsive-menu">
      		<ul class="nav navbar-nav">
			    	<li><a href="#home" class="active" data-anchor="home">Home</a></li>
			    	<li><a data-anchor="about" href="#about">About me</a></li>
			    	<li><a data-anchor="service" href="#service">Service</a></li>
			    	<li><a data-anchor="portfolio" href="#portfolio">Portfolio</a></li>
			    	<li><a data-anchor="contact" href="#contact">Contact</a></li>
    			</ul>
      	</div>
			</div>
		</div>
	</div>
</nav>
</header>
