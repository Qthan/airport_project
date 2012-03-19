// validate form on keyup and submit
$().ready(function() {
	$("#modelform").validate({
		rules: {
			model_code: {
				required: true,
				number: true
			},
			model_name: {
				required: true,
				minlength: 3
			},
			manufacturer: {
				required: true,
				minlength: 3
			},
			capacity: {
				required: true,
				number: true
			},
			weight: {
				required: true,
				number: true
			}
		},
		messages: {
			model_code: {
				required: " Please provide a model code",
				number: " Model code must have a numeric value"
			},
			model_name: {
				required: " Please provide a model name",
				minlength: " Model name must be at least 3 characters"
			},
			manufacturer: {
				required: " Please provide a manufacturer",
				minlength: " Manufacturer must be at least 3 characters"
			},
			capacity: {
				required: " Please fill the capacity of the model",
				number: " Capacity must have a numeric value"
			},
			weight: {
				required: " Please fill the weight of the model",
				number: " Weight must have a numeric value"
			}
		}
	});
	
	$("#aircraftform").validate({
		rules: {
			regnum: {
				required: true,
				number: true
			},
			carrier: {
				required: true,
				minlength: 3
			},
			condate: "required"
		},
		messages: {
			regnum: {
				required: " Please provide a registration number",
				number: " Registration Number must have a numeric value"
			},
			carrier: {
				required: " Please provide a carrier",
				minlength: " Carrier name must be at least 3 characters"
			},
			condate: " Please fill the construction date"
		}
	});
	
	$("#checksform").validate({
		rules: {
			duration: {
				required: true,
				number: true
			},
			score: {
				required: true,
				number: true
			},
			date: "required"
		},
		messages: {
			duration: {
				required: " Please fill the duration of the test",
				number: " Duration must have a numeric value"
			},
			score: {
				required: " Please fill the score of the test",
				number: " Score must have a numeric value"
			},
			date: " Please fill the date"
			
		}
	});
	
	$("#checktypesform").validate({
		rules: {
			checkname: {
				required: true,
				minlength: 2
			},
			maxscore: {
				required: true,
				number: true
			}
		},
		messages: {
			checkname: {
				required: " Please fill the check name",
				minlength: " Score name must be at least 2 characters"
			},
			maxscore: {
				required: " Please fill the max score of the test",
				number: " Max score must have a numeric value"
			}
		}
	});
	
});
