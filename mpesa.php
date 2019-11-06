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
    <title>M-Pesa</title>
  </head>
  <body>
    <h1>M-Pesa
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
			<p style="font-size:20px;"><b>Below are the steps to follow to make your payment using M-Pesa:</b></P><br /><br />
			<p>1.Go to the M-pesa Menu</p>
			<p>2.Select Pay Bill</p>
			<p>3.Enter Business No. 250821</p>
			<p>4.Enter Account No (Where Account Number is your ID number)</p>
	<?php
$Subtotal = 0;
foreach ($_SESSION["itemId_itemQty"] AS $ProductID => $itemQty){ 
	$CartItem = "SELECT * FROM products WHERE ProductID = '$ProductID' LIMIT 1";
	
	$CartItem_res = $conn->query($CartItem);
	$CartItem_row = $CartItem_res->fetch_assoc();
}
?>
			<p>5.Enter the Amount(<?php print 'Ksh ' . number_format ($Subtotal, 2) . ' /= '; ?>)</p>
			<p>6.Enter your M-Pesa PIN then send</p>
			<p>7.Fill the following form</p>
		</div>
	<div class="col-md-4">
		<img src="image/M-Pesa.jpeg" height="150"/>
		<form action="process/paymentconn.php" method= "POST"/>
			<div class="form-group">
				<label for="amountpaid">Amount Paid</label>
				<input type="number" class="form-control"name="amountpaid" placeholder="Enter Amount Paid">
			</div>
			<div class="form-group">
				<label for="mpesacode">Mpesa Code</label>
				<input type="text" class="form-control" name="mpesacode" placeholder="Enter the Mpesa Code">
			</div>
			<div class="form-group">
				<label for="date">Date</label>
				<input type="date" class="form-control" name="date" placeholder="Enter the Mpesa Code">
			</div>
			 <div class="form-group">
				<input class="btn btn-primary" type="submit" name="savepayment"  value="Submit">
			</div>
			</form>
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