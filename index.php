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
 			<div class="col-md-6 login-centre">
 				<h2>Login Form</h2>
 				<form action="process.php" method="POST">
 			
 			<div class="form-group">
 				<label>E-Mail </label>
 				<input type="email",id="user",name="user",placeholder="example@domain.com",class= "form-control" required/>
 			</div>


 			<div class="form-group">
 				<label>Password</label>
 				<input type="Password",id="pass",name="pass",class="form-control" required/>
 			</div>
 				</form> 

 			 <p>
 				<button type ="submit",class="btn btn-primary",id="btn">Login</button>
 			</p>

 			<p>
 				<button href="signup.php ?>" button type="submit" class="btn btn-primary" id="btn">Sign Up</button>
 			</p>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>