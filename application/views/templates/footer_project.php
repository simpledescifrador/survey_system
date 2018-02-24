<script src="<?php echo base_url('/assets/js/jquery-slim.min.js'); ?>">


</script>

<script src="<?php echo base_url('/assets/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
<script>
	$(function () {
		$('#project-name').on('input',function(e){
			var value = $("#project-name").val();
			if(value != '') {
				$('#btn-create-project').removeClass('disabled');
			}else{
				$('#btn-create-project').addClass('disabled');
			}	
		});
	});
</script>
</body>

</html>
