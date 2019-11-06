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
    <title>Payment</title>
  </head>
  <body>
    <h1>Payment Method
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
<p style="font-size:20px;"><b>Choose the Payment Method you would like;</b></P>
	<div class="row">
		<div class="col-md-6">
			<div class="card mb-3 shadow-sm">
				<a href ="mpesa.php" target = "_BLANK" title="click to pay with M-Pesa" ><img class="card-img-top" src="image/M-Pesa.jpeg" alt="Card image cap" /></a>
            </div>
		</div>
		<div class="col-md-6">
			<div class="card mb-3 shadow-sm">
				<a href ="paypal.php" target = "_BLANK" title="click to pay with PayPal" ><img class="card-img-top" src="image/paypal-logo.png"width="270" height="270" alt="Card image cap" /></a>
            </div>
		</div>
		<div class="col-md-6">
			<div class="card mb-3 shadow-sm">
				<a href ="visa.php" target = "_BLANK" title="click to pay with Visa" ><img class="card-img-top" src="image/Visa.jpg" alt="Card image cap" /></a>
            </div>
		</div>
		<div class="col-md-6">
			<div class="card mb-3 shadow-sm">
				<a href ="mastercard.php" target = "_BLANK" title="click to pay with Mastercard" ><img class="card-img-top" src="image/mastercard.jpg"width="300" height="300" alt="Card image cap" /></a>
            </div>
		</div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>