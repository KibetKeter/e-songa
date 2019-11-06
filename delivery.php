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
		<title>Delivery</title>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="">Myshopper</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminmodule.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  </div>
	  </nav>
	</head>
	<body>
	<h1>Delivery</h1>
	<hr /><br /><br />
		<div class="container" style ="background-color:#ff9999">
	<table border ="0">
		<form action="proccess/deliveryconn.php" method= "POST"/>
			<tr>
				<td class= "mail">
				<label for ="driverid">Driver's ID No.</label><br/>
				<input type= "number" maxlength= "50" name= "driverid" placeholder= "Enter Driver's ID no" size= "40" required autofocus />
				</td >
				<td class= "pad">
				<label for= "drivername">Driver,s Name</label><br />
				<input type= "text" maxlength= "50" name= "drivername" placeholder= "Enter Driver's Name" size= "40" required autofocus />
				</td>
			</tr>
			<tr>
				<td colspan = "2" class= "mail">
				<label for="cust_address"> Customer's Home Addresss</label><br/>
				<input type= "text" maxlength= "70" name= "cust_address" placeholder= "Enter Delivery Location" size= "40" required autofocus />
				</td>
			</tr>
			<tr>
				<td class= "mail">
				<label for="drivertelephone">Driver's Telephone No.</label><br/>
				<input type= "number" maxlength= "10" name= "drivertelephone" placeholder= "Enter Driver's Telephone number" size= "40" required autofocus />
				</td>
				<td class= "pad">
				<label for= "customertelephone">Customer's Phone No.</label><br/>
				<input type = "number" maxlength = "50" name = "customertelephone" placeholder = "Please Enter Customer's No." size= "40"required />
				<span class="invalid-feedback"><?php echo($err['email_err']); ?></span>
				</td>
			</tr>
			<tr>
				<td>
				<input class="btn btn-primary" name="savedelivery" type="submit" value="Save">
				</td>
				<td style="padding-left:500px">
				<input class="btn btn-primary" name="reset" type="reset" value="Reset">
				</td>
			</tr>
	</table>
	</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
