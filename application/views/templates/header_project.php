<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<title>
		<?php echo $title_page; ?> | MVR Survey System</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<?php echo link_tag('/assets/css/bootstrap.min.css'); ?>
	<?php echo link_tag('/assets/css/project.css'); ?>
	<?php echo link_tag('/assets/css/normalize.css'); ?>
</head>

<body>
	<nav id="nav-project" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a href="<?php echo base_url(); ?>" class="nav-brand">
			<img src="/assets/img/brand/mvr_logo.png" width="100" height="60" alt="" class="d-inline-block">Market View Research</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault"
		aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsDefault">
			<ul class="navbar-nav mr-auto">
				<!-- <li class="nav-item active">
					<?php echo anchor(site_url('dashboard/home'), 'Dashboard<span class="sr-only">(current)</span>', array('class' => 'nav-link')); ?>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('mysurvey'); ?>" class="nav-link">My Survey</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('create'); ?>" class="nav-link">Create Survey</a>
				</li> -->
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<button id="btnCreateProject" type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#createProject">
						<i class="fas fa-plus"></i>&nbsp;&nbsp;Create Project</button>
				</li>
				<!-- <li class="nav-item">
						<p class="text-success">
							<?php echo ucfirst($this->session->userdata['logged_in']['username']); ?>,</p>
					</li> -->
				&nbsp;&nbsp;&nbsp;
				<li class="nav-item">
					<a href="<?php echo site_url('logout'); ?>" class="btn btn-md btn-outline-dark">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
