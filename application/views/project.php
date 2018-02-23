<div class="container-fluid">
	<?php if($this->session->flashdata('error_msg') != null): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?php echo $this->session->flashdata('error_msg'); ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>
	<?php foreach($projects as $value): ?>
	<div class="container">
		<div class="project row">
			<div class="project-description col-md-10">
				<span class="project-name">
					<input type="hidden" name="projectId" value="<?php echo $value->id; ?>">
					<?php echo ucwords($value->project_name); ?>
				</span>
				<div class="date-modified">Survey Modified
					<em>
						<?php echo date_format(date_create($value->date_modified), 'M/d/Y'); ?>
					</em>
				</div>
				<div class="status">
					<?php echo $value->status; ?>
				</div>
			</div>
			<div id="projectOption" class="btn-group btn-group-sm" role="group" aria-label="projectoptio	n">
				<a type="button" class="btn btn-outline-info" href="<?php echo site_url('project/edit'); ?>">Edit</a>
				<a type="button" name="projectDelete" class="btn btn-outline-danger" href="<?php echo site_url('project/delete'); ?>">Delete</a>
				<a type="button" class="btn btn-outline-success" href="<?php echo site_url('project/distribute'); ?>">Distribute</a>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	<!-- Modal -->
	<div class="modal fade" id="createProject" tabindex="-1" role="dialog" aria-labelledby="enterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="longTitle">Create Blank Survey Project</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" align="center">
					<?php echo form_open('project/create', array('molalCreateProject')); ?>
					<div class="input-group input-group-md mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Project Name</span>
						</div>
						<input name="project_name" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required
						autofocus>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success" name="btnCreateProject" id="btnModalCreateProject">Create Project</button>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>

	</div>
