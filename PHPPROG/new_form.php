<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
#register_form fieldset:not(:first-of-type) {
display: none;
}
</style>

<?php include('include/connection.php'); ?>

<body>

<div class="container">
<h2>FIT Program Intake Form </h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="alert alert-success hide"></div>
<form id="register_form" novalidate action="form_action.php" method="post">
	<fieldset>
		<h2>Step 1: Add Requestor Details</h2>
		<div class="form-group">
		<label for="Requestor_Name">Requestor Name *</label>
		<input type="text" class="form-control" required id="Requestor_Name " name="email" placeholder="Requestor Name ">
		</div>
		<div class="form-group">
		<label for="email">Email address*</label>
		<input type="email2" class="form-control" required id="email2" name="email" placeholder="Email">
		</div>
		<div class="form-group">
		<label for="Team">Team *</label>
		<input type="text" class="form-control" required id="Team" name="email" placeholder="Team">
		</div>
		<div class="form-group">
		<label for="email4">Business Owner</label>
		<input type="email" class="form-control" required id="Business_Owner" name="Business_Owner" placeholder="Business Owner">
		</div>

		<input type="button" class="next-form btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
		<h2> Step 2: Add Project Information</h2>
		<div class="form-group">
		<label for="Project_Name">Project Name</label>
		<input type="text" class="form-control" name="Project Name" id="Project Name" placeholder="Project Name">
		</div>

		<div class="form-group">
		<label for="Business Problem Statement">Business Problem Statement</label>
		<input type="text" class="form-control" name="Business Problem Statement" id="Business Problem Statement" placeholder="Business Problem Statement">
		</div>

		<div class="form-group">
		<label for="Goals_Outcomes">Goals or Outcomes</label>
		<input type="text" class="form-control" name="Goals_Outcomes" id="Goals_Outcomes" placeholder="Goals or Outcomes">
		</div>

		<div class="form-group">
		<label for="Business Problem Statement">Benefits</label>
		<input type="text" class="form-control" name="Benefits" id="Benefits" placeholder="Benefits">
		</div>

		<div class="form-group">
		<label for="Business Problem Statement">Benefits</label>
		<input type="text" class="form-control" name="Benefits" id="Benefits" placeholder="Benefits">
		</div>

		<div class="form-group">
		<label for="Target_Completion">Target Completion</label>
		<input type="Date" class="form-control" name="Target_Completion" id="Target_Completion" placeholder="Target Completion">
		</div>

		<div class="form-group">
		<label for="RAD">Risk Assumptions Dependencies.</label>
		<input type="text" class="form-control" name="RAD" id="Rad" placeholder="Risk Assumptions Dependencies.">
		</div>

		<div class="form-group">
		<label for="Addtional_Info">Comments/ Addtional info(attachement, if required ).</label>
		<input type="text" class="form-control" name="Addtional_Info" id="Rad" placeholder="Addtional info.">
		</div>

		<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
		<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	</fieldset>

</form>
</div>

</body>
<script>
	$(document).ready(function(){
	var form_count = 1, previous_form, next_form, total_forms;
	total_forms = $("fieldset").length;
	$(".next-form").click(function(){
	previous_form = $(this).parent();
	next_form = $(this).parent().next();
	next_form.show();
	previous_form.hide();
	setProgressBarValue(++form_count);
	});
	$(".previous-form").click(function(){
	previous_form = $(this).parent();
	next_form = $(this).parent().prev();
	next_form.show();
	previous_form.hide();
	setProgressBarValue(--form_count);
	});
	setProgressBarValue(form_count);
	function setProgressBarValue(value){
	var percent = parseFloat(100 / total_forms) * value;
	percent = percent.toFixed();
	$(".progress-bar")
	.css("width",percent+"%")
	.html(percent+"%");
	}
	// Handle form submit and validation
	$( "#register_form" ).submit(function(event) {
	var error_message = '';
	if(!$("#email").val()) {
	error_message+="Please Fill Email Address";
	}
	if(!$("#password").val()) {
	error_message+="<br>Please Fill Password";
	}
	if(!$("#mobile").val()) {
	error_message+="<br>Please Fill Mobile Number";
	}
	// Display error if any else submit form
	if(error_message) {
	$('.alert-success').removeClass('hide').html(error_message);
	return false;
	} else {
	return true;
	}
	});
	});
</script>
// Save Multi Form Data to MySQL Database

<?php
if (isset($_POST['submit']))
	{
		
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	if(mysqli_query($conn, "INSERT INTO user(email, pass, first_name, last_name, mobile, address) VALUES('".$email."', '" . $password . "', '". $first_name."', '".$last_name."', '".$mobile."', '". $address."')")) {

echo "You're Registered Successfully!";
} else {
echo "Error in registering...Please try again later!";
}
}
?>
</body>
</html>
