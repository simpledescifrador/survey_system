<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php echo $title_page; ?> | Market View Research</title>
	<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
	<?php echo link_tag('assets/css/custom.css'); ?>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<a href="<?php echo base_url(); ?>" class="nav-brand">MVR</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault"
		aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<?php echo anchor(site_url('dashboard/home'), 'Dashboard<span class="sr-only">(current)</span>', array('class' => 'nav-link')); ?>
				</li>
				<li class="nav-item">
				<a href="<?php echo site_url('mysurvey'); ?>" class="nav-link">My Survey</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('create'); ?>" class="nav-link">Create Survey</a>
				</li>
			</ul>

			<!-- <li class="nav-item">
					<p class="text-success"><?php echo ucfirst($this->session->userdata['logged_in']['username']); ?>,</p>
				</li> -->
			<a href="<?php echo site_url('logout'); ?>" class="btn btn-md btn-outline-warning">Logout</a>

			</ul>
		</div>
	</nav>
