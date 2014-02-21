function error_html(error) {
	//Generate error in bootstrap style.
	var errorhtml = " \
		<div class='alert alert-danger alert-dismissable'> \
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'> \
			&times; \
		</button> \
		<strong> \
			Warning ! \
		</strong>";
	errorhtml += error + "</div>";
	return errorhtml;
}

//validation function. validating form
function validate() {
	var name=$('#name').val();
	if(name==""){
		$('#error').html("");
		$('#error').html(error_html("Enter your name."));
		return false;
	}

	var email = $('#email').val();
	var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(regex.test(email) == false) {
		$('#error').html("");
		$('#error').html(error_html("Does not seem to be a correct email-id."));
		return false;
	}
	return false;
}
