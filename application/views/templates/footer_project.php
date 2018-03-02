<script src="<?php echo base_url('/assets/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/survey.js'); ?>"></script>
<script src="<?php echo base_url('/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

<script>
	$(document).ready(function () {
		$('#project-name').on('input', function (e) {
			var value = $("#project-name").val();
			if (value != '') {
				$('#btn-create-project').removeClass('disabled');
			} else {
				$('#btn-create-project').addClass('disabled');
			}
		});

		$('#btn-logout').hover(function () {
			$('#btn-logout').removeClass('btn-outline-dark');
			$('#btn-logout').addClass('btn-outline-danger');
		},
			function () {
				$('#btn-logout').removeClass('btn-outline-danger');
				$('#btn-logout').addClass('btn-outline-dark');
			});
		$("#delete").hover(function() {
			console.log(this);
		});
	});

</script>
</body>

</html>
