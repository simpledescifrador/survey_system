$(document).ready(function () {
	var i = qMCChoice = 0;
	var formData = {};
	var quesEl;
	function addQues() {
		var el = $(".q-block").children().find("#q-title");
		el.last().append("<input class='form-control' type='text' name='ques" + i + "' value='Click to write the question text'>");
		el.last().append("<div class='q-choices'></div>");
	}
	function quesNum() {
		quesEl = $(".q-info").last();
		return quesEl;
	}
	function addQuesBlock() {
		i++;
		$(".q-block").append("<div class='q-main row' data-qid='" + i + "'></div>");
		$(".q-main[data-qid='" + i + "']").append("<div class='q-info col-md-1'><input type='text' size='2px' value='Q"+i+"'></div>");
		$(".q-main[data-qid='" + i + "']").append("<div id='q-title' class='col-md-11'></div>");
		$(".q-main").css({
			'backgroundColor': 'rgb(255,255,255)',
			'marginTop': '10px',
			'marginBottom': '10px',
			'borderRadius': '10px',
			'padding': '10px 5px 10px 5px'
		});
	}
	//add Multiple Choice event
	$("button#create-mc").click(function () {
		addQuesBlock();
		addQues();
		var el = $(".q-block").children().find("#q-title").last().append("<button id='add-mc-btn' class='btn btn-link' type='button'>ADD MORE OPTION</button>");
		var addMCBtn = el.find(".q-choices");
		addMCBtn.append("&nbsp;&nbsp;<input type='radio' name='radio' value='choice1'>&nbsp;&nbsp;<input class='radio-text' type='text' value='Click to write your option' ><button hidden type='button' class='btn btn-link' id='remove-option'>X</button><br>");
		addMCBtn.append("&nbsp;&nbsp;<input type='radio' name='radio' value='choice2'>&nbsp;&nbsp;<input class='radio-text' type='text' value='Click to write your option' ><button hidden type='button' class='btn btn-link' id='remove-option'>X</button><br>");
		$("button#add-mc-btn").click(function () {
			qMCChoice++;
			addMCBtn.append("&nbsp;&nbsp;<input type='radio' name='radio' value='choice" + (qMCChoice+ 1) + "'>&nbsp;&nbsp;<input class='radio-text' type='text' value='Click to write your option' ><button hidden type='button' class='btn btn-link' id='remove-option'>X</button>");
		});
		add
		//add data to json
		formData[quesNum().text()] = {}
	});
	$("button#create-te").click(function() {
		addQuesBlock();
		addQues();
		//add data to json	
		formData[quesNum().text()] = {}
	});
	// //add question-block
	// $("button#add-block").click(function() {
	// 	var blkId = $(".q-block").attr('id');
	// 	$(".q-block").next().after(addQuesBlock());
	// });
});
