$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate signup form on keyup and submit
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
			}
		},
		messages: {
			regnum: {
				required: " Please provide a registration number",
				number: " Registration Number must have a numeric value"
			},
			carrier: {
				required: " Please provide a carrier",
				minlength: " Carrier name must be at least 3 characters"
			}
		}
	});
	
	
});
