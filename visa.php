<?php 
session_start();
 require_once "includes/ssignupdbconnect.php";
 //session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel = "stylesheet" href = "market.css" />
    <title>Visa</title>
  </head>
  <body>
    <h1>Visa
	<div class = "text-white mr-sm-2" style ="text-align: right">
			<h5> 
			<img src= "image/account.jpg"width ="50" height="50"/>
			<?php
					
			if(isset($_SESSION["control"])){
			print $_SESSION["control"]["CustomerName"];
						 }
			?> 
			</h5>
		</div>
	</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
<form action="" method="POST">
  <div class="form-group">
    <label for="name">Name on Card</label>
    <input type="text" class="form-control"name="name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="cardno">Credit Card Number</label>
    <input type="number" class="form-control" name="cardno" placeholder="Enter Your Card Number">
  </div>
  <div class="form-group">
    <label for="expires">Expires</label>
    <input type="date" class="form-control" name="expires" placeholder="Enter Expires">
  </div>
  <div class="form-group">
    <label for="cvv">CVV</label>
    <input type="number" class="form-control" name="cvv" placeholder="Enter CVV">
  </div>
  <div class="form-group">
	<label for="amountpaid">Amount Paid</label>
	<input type="number" class="form-control"name="amountpaid" placeholder="Enter Amount Paid">
</div>
 
<button type="submit" name="savedetails"class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-4">
	<img src="image/Visa.jpg" height="150"/>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>