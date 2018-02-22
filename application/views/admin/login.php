<body data-gr-c-s-loaded="true">
	<?php $attributes = array('class' => 'form-signin'); ?>
	<?php echo form_open('login', $attributes); ?>
	<h3 align="center">Admin Login</h3>
	<?php if($this->session->flashdata('display_msg') != null): ?>
	<div align="justify" class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('display_msg'); ?>
	</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('error_msg') != null): ?>
	<div align="justify" class="alert alert-danger" role="alert">
		<?php echo $this->session->flashdata('error_msg'); ?>

	</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('validate_msg') != null): ?>
	<div align="justify" class="alert alert-danger" role="alert">
		<?php echo $this->session->flashdata('validate_msg'); ?>
	</div>
	<?php endif; ?>
	<div class="form-label-group">
		<input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" autofocus>
		<label for="inputUser">Username</label>
	</div>
	<div class="form-label-group">
		<input type="password" name="password" id="inputPass" class="form-control" placeholder="Password">
		<label for="inputPass">Password</label>
	</div>
	<button type="submit" name="buttonLogin" class="btn btn-md btn-block btn-dark">Login</button>
	<?php echo form_close(); ?>
