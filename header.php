<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Anchor CMS">
	<meta name="description" content="<?php echo site_description(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo e(current_url()); ?>">
	<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">

	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

	<link rel="stylesheet" href="<?php echo theme_url('/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/vendor/bootstrap/css/bootstrap-theme.min.css'); ?>">
	<!--[if eq IE 10]>
		<link rel="stylesheet" href="<?php echo theme_url('/css/ie10-fix.css'); ?>
	<![endif]-->

	<?php if (customised()) : ?>
		<!-- Custom CSS -->
		<style><?php echo article_css(); ?></style>
	<?php endif; ?>
	
	<!--[if eq IE 10]>
		<script src="<?php echo theme_url('/js/ie10-fix.js'); ?>"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body class="<?php echo body_class(); ?>">
	<a href="#content" class="sr-only">Skip to main content</a>
	<div id="wrap">

		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">

						<?php if (has_menu_items()) : ?>
							<?php while (menu_items()) : ?>
							<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
								<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<?php echo menu_name(); ?>
								</a>
							</li>
							<?php endwhile; ?>
						<?php endif; ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php while (categories()) : ?>
									<li>
										<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
											<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						</li>
					</ul>
					<div class="col-sm-3 col-md-3 pull-right">
						<form class="navbar-form navbar-right" role="search" action="<?php echo search_url(); ?>" method="post">
							<div class="input-group">
								<input type="search" name="term" class="form-control" placeholder="Search..." value="<?php echo search_term(); ?>" />
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container" id="content">

