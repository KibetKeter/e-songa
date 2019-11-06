<?php
    require_once "includes/ssignupdbconnect.php";

?>
<!DOCTYPE html>
<html  lang="en">
	<head>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel = "stylesheet" href = "market.css" />
		<title>Admin Account</title>
	</head>
	<body>
	<h1>Create Admin Account</h1>
	<hr />
		<div class="container" style ="background-color:#87CEEB">
	<table border ="0">
		<form action="proccess/admincreateaccconnect.php" method= "POST"/>
			<p class= "new">Create New Account </p>
			<tr>
				<td class= "mail">
				<label for ="firstname">First Name</label><br/>
				<input type= "text" maxlength= "50" name= "firstname" placeholder= "Enter your first name" size= "40" required autofocus />
				</td >
				<td class= "pad">
				<label for= "lastname">Last Name</label><br />
				<input type= "text" maxlength= "50" name= "lastname" placeholder= "Enter your last name" size= "40" required autofocus />
				</td>
			</tr>
			<tr>
				<td class= "mail">
				<label for ="id_no">Admin No.<label><br />
				<input type ="text" maxlength="10" name= "admin_no" placeholder ="Enter your id number"
				size="40" required autofocus />
				</td>
			</tr>
			<tr>
				<td class= "mail">
				<label for="Telephone">Telephone No.</label><br/>
				<input type= "number" maxlength= "10" name= "telephone" placeholder= "Enter your telephone number" size= "40" required autofocus />
				</td>
				<td class= "pad">
				<label for= "email">Email</label><br/>
				<input type = "email" maxlength = "50" name = "email" placeholder = "Please Enter your email" size= "40"required />
				</td>
			</tr>
			<tr>
				<td class= "mail">
				<label for="password">Password</label><br/>
				<input type="password" name="password" placeholder="Please enter your password" size="40" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				</td>
			</tr>
			<tr>
				<td class= "mail">
				<label for= "confirm_password">Confirm Password</label><br/>
				<input type= "password" maxlength= "30" name= "confirm_password" placeholder= "Confirm password" size= "40" required autofocus />
				</td>
				<td class= "pad">
				<label for="userRole">Choose Role</label>
				<select class="form-control form-control-md" name="userRole"  id="userRole" required />
				<option value = "" > Choose Role </option>
				<option value = "Sales Manager" >Sales Manager </option>
				<option value = "Packaging Associate" >Packaging Associate </option>
				<option value = "Stocker" >Stocker</option>
        
				</select>
				</td>
			</tr>
			<tr>
				<td>
				<input class="btn btn-primary" name="sign_up" type="submit" value="Sign Up">
				</td>
				<td style="padding-left:500px">
				<input class="btn btn-primary" name="reset" type="reset" value="Reset">
				</td>
			</tr>
	</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
