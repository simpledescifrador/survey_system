
<div id="survey">
<?php echo form_open('survey/process', array('class' => 'form-survey')); ?>
	<br>
	<div class="container">
		<div class="sv-title">
			<?php foreach($survey_name as $value): ?>
			<div class="survey-description">
				<h2>
					<?php echo $value->project_name; ?>
				</h2>
				<p>Description</p>
				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur, quae fuga sed eligendi necessitatibus dolores quibusdam saepe ipsum, quod possimus quo odio ipsa, vel fugit nesciunt error. Et, beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nostrum perspiciatis sequi dolore illo voluptatum dignissimos accusantium. Dolore impedit repellat a molestiae unde nihil, omnis, iusto rerum nobis maxime eveniet!</small><br><br>
			</div>
			<?php endforeach; ?>
		</div>
		<h3 align="center">Questions</h3>
		<div class="q-block" id="blk1">
		</div>
		<div class="q-footer">
			<button type="button" class="btn btn-outline-success" id="create-mc">Multiple Choice</button>
			<button type="button" class="btn btn-outline-success" id="create-te">Text Entry</button>
		</div>

		<!-- <div class="add-block">
			<button type="button" class="btn btn-link" id="add-block">Add Block</button>
		</div> -->
	</div>
</div>
</div>
<?php echo form_close(); ?>
<!-- <script>
	$(document).ready(function () {
		var main = ques = 0;

		function addMCChoice(quesNum) {
			var svMainEl = $("#sv-main" + quesNum + "");
			svMainEl.find("#ques-choice").append("<input type='radio'>Hello");
		}
		// create multiple choice
		$("button#create-mc").on('click', function (e) {
			main++;
			ques++;
			var svBlk = $("div.sv-block").last();
			svBlk.append("<div id='sv-main" + main + "' class='sv-main row'></div>");
			var svMain = $("div#sv-main" + ques + "");
			svMain.append("<div id='ques-num" + ques + "' class='ques-num col-md-1'>Q" + ques + "</div>").append(
				"<div class='ques-title col-md-11' id='ques-title" + ques +
				"'><input class='form-control' type='text' name='ques-title" + ques +
				"' placeholder='Click to write the question' value='' autofocus required></div>");
			$("#ques-title" + ques + "").append("<div id='ques-choice'></div>").append(
				"<button type='button' class='btn bnt-link' id='add-mc-choice'>Add</button>");

			$("button#add-mc-choice").on('click', function () {
				addMCChoice();
			});
			// $("div.ques-title").last().prepend("<span style='float: right'><button type='button' class='btn btn-link ques-remove'  id='ques-remove" + ques + "'>X</button></span>");
		});

		//create text entry
		$("button#create-te").on('click', function (e) {
			main++;
			ques++;
			var svBlk = $("div.sv-block").last();
			svBlk.append("<div id='sv-main" + main + "' class='sv-main row'></div>");
			var svMain = $("div#sv-main" + ques + "");
			svMain.append("<div id='ques-num" + ques + "'class='ques-num col-md-1'>Q" + ques + "</div>").append(
				"<div class='ques-title col-md-11' id='ques-title" + ques +
				"'><input class='form-control' type='text' name='ques-title" + ques +
				"' placeholder='Click to write the question' value='' autofocus required></div>");
			$("#ques-title" + ques + "").append("<textarea col='100' id='text-entry" + ques + "'>");
			$("div.ques-title").last().prepend(
				"<span style='float: right'><button type='button' class='btn btn-link ques-remove'  id='ques-remove" + ques +
				"'>X</button></span>");
		});
	});

</script> -->
