<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Pages</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/CSS" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
 	<div class="login-box">
 		<div class="row">
 			<div class="col-md-6 login-left">


 		<h2>Sign Up Form</h2>

 				<form action="index.php" onsubmit = "return Validate()"method="POST" name = "vform">
 			
 			<div class="form-group">
 				<label>Username</label>
 				<input type="text" id="name_error" name="username"  placeholder="John" class="form-control" required/>
 			</div>


 			<div class="form-group">
 				<label>E-mail</label>
 				<input type="email" id="email_error" name="email"  placeholder="john@domain.com" class="form-control" required/>
 			</div>


 			<div class="form-group">
 				<label>Password</label>
 				<input type="Password" name="password" class="form-control" placeholder="Password" required/>
 			</div>

 			<div class="form-group">
 				<label>Repeat Password</label>
 				<input type="Password" id="password_error" name="password_confirmation" class="form-control" placeholder = "Password Confirmation" required/>
 			</div>

 				</form> 

 			 <p>
 				<input type ="submit" value="Register" class="btn btn-primary" id="btn"></input>
 			</p>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>

<!--adding javascript-->

<script type = "text/javascript">

	//GETTING ALL INPUT TEXT OBJECTS
	var username = document.forms["vform"]["username"]
	var email = document.forms["vform"]["email"]
	var password = document.forms["vform"]["password"]
	var pasword_ confirmation = document.forms["vform"]["password_confirmation"]


	//GETTING ALL ERROR DISPLAY OBJECTS

	var name_error = document.getElementById("name_error");
	var email_error = document.getElementById("email_error");
	var password_error = document.getElementById("password_error");

	//SETTING ALL EVENT LISTENERS

	username.addEventListener("blur", nameVerify, true);
	email.addEventListener("blur", emailVerify, true);
	password.addEventListener("blur", passconfirmationVerify, true);


	//VALIDATION FUNCTION

	function Validate()
	{
		//USERNAME VALIDATION
		if(username.value="")
		{
			username.style.border = "1px solid red";
			name_error.textContent = "Username Is required";
			username.focus();
			return false;
		}

		//EMAIL VALIDATION
		if(email.value="")
		{
			email.style.border = "1px solid red";
			email_error.textContent = "E-mail Is required";
			email.focus();
			return false;
		}

		//PASSWORD VALIDATION

		if(password.value="")
		{
			password.style.border = "1px solid red";
			password_error.textContent = "Password Is required";
			password.focus();
			return false;
		}

	//PASSWORD VALIDATION

		if(password_confirmation.value="")
		{
			password_confirmation.style.border = "1px solid red";
			password_confirmation.textContent = "You need to confirm your password";
			password_confirmation.focus();
			return false;
		}


		//PASSWORD CONFIRMATION VALIDATION

		if(password_confirmation.value ! = pass.value)
		{
			pass.style.border = "1px solid red";
			pass.error_innerHTML = "Passwords do not Match";
			pass.focus();
			return false;
		}
	}


	//EVENT HANDLER FUNCTIONS

function nameVerify()
{
	if(username.value !="")
	{
		username.style.border="1px solid #5E6E66";
		username_error.innerHTML = "";
		return true;
	}
}

function emailVerify()
{
	if(email.value !="")
	{
		email.style.border="1px solid #5E6E66";
		email_error.innerHTML = "";
		return true;
	}
	
}

function passVerify()
{
	if(password.value !="")
	{
		password.style.border="1px solid #5E6E66";
		password_error.innerHTML = "";
		return true;
	}
}
</script>
	



	
	



