<?php
    require_once "includes/ssignupdbconnect.php";

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel= "stylesheet" href= "market.css"/>

    <title>Login</title>
  </head>
  <body >
    <h1 style ="text-align:center;">My Account Log In</h1>
	<hr />
		<div class="container" style ="background-color:#6a5acd" >
			<table border = "0">
				<form action="process/loginconn.php" method= "POST"/>
					<tr class = "head">
						<td>Customer</td>
						<td style="padding-left: 80px;">New Customer?</td>
					</tr><br />
					<tr>
						<td class= "mail">
						<label for= "email">Email Address*</label><br/>
						<input type = "email" maxlength = "50" name = "email" placeholder = "Please Enter your email" size= "50"required />
						</td>
						<td style ="font-size:15px; padding-left: 80px;">Create an account to check out faster in the future and receive emails about your orders, new products, events and special offers!</td>
					</tr><br />
					<tr>
						<td class = "pass">
						<label for = "password">Password*</label><br />
						<input type = "password" maxlength ="50" name= "password" placeholder= "Please enter your password" size ="50" required />
						</td>
						<td class="create">
						<a  href = "screateaccount.php" style= "background-color:#373737; color:#ffffff; font-size:20px;">CREATE  ACCOUNT</a>
						</td>
					</tr><br />
					<tr>
						<td style ="text-align: right; font-size: 11px"><u>Forgot your password?</u></td>
					<tr>
						<td>
						<label for= "remember">Remember Me</label><br />
						<input type ="checkbox" name ="remember" />
						</td>
					</tr>
					<tr>
						<td>
						<div style= "text-align: right;">
						<input class="btn btn-primary" name="login" type="submit" value="LOG IN">
						</div>
						</td>
					</tr>
	</table>
		</div>
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>