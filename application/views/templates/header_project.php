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
	<?php echo link_tag('/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>
	<?php echo link_tag('/assets/css/project.css'); ?>
	<?php echo link_tag('/assets/css/normalize.css'); ?>
	<script src="<?php echo base_url('/node_modules/jquery/dist/jquery.slim.min.js');?>"></script>
	<style>
		* {
			padding: 0;
			margin: 0;
		}

		input[type="text"] {
			border: 0;
			margin-bottom: 10px;
		}

		input[type="text"]:hover {
			border: 2px lightgray solid;
		}

		textarea {
			margin-top: 20px;
			width: 500px;
		}
		.radio-text{
			width: 50rem;
		}
		.q-block {
			heigth: auto;
			margin-bottom: 20px;
			padding: 10px;
		}

		.q-main:hover {
			border: 1px green solid;
		}

		.q-info:hover {
			border-right: 5px solid darkgray;
		}

		#q-title {
			padding: 10px;
		}

		.q-footer {
			padding: 20px;
			text-align: center;
		}

		.add-block {
			text-align: center;
		}
	</style>
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
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<?php if(!empty($projects)) : ?>
					<button id="btnCreateProject" type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#createProject">
						<i class="fas fa-plus"></i>&nbsp;&nbsp;Create a Project</button>
					<?php endif; ?>
				</li>
				<!-- <li class="nav-item">
						<p class="text-success">
							<?php echo ucfirst($this->session->userdata['logged_in']['username']); ?>,</p>
					</li> -->
				&nbsp;&nbsp;&nbsp;
				<li class="nav-item">
					<a id="btn-logout" href="<?php echo site_url('logout'); ?>" class="btn btn-md btn-outline-dark">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
