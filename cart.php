<?php 
session_start();
 require_once "includes/ssignupdbconnect.php";
 // session_destroy();
?>
 <!DOCTYPE html>
<html  lang="en">
	<head>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel = "stylesheet" href = "cart.css" />
		<title>Shopping Cart</title>
	</head>
	<body>
	<h1>Shopping Cart
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
	<hr />
<div class="container">
	<div class="row">
	  <table class="table">
	  	<tr>
	  		<th>NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
			
	  	</tr>
<?php
$no = 1;
$Subtotal = 0;
foreach ($_SESSION["itemId_itemQty"] AS $ProductID => $itemQty){ 
	$CartItem = "SELECT * FROM products WHERE ProductID = '$ProductID' LIMIT 1";
	
	$CartItem_res = $conn->query($CartItem);
	$CartItem_row = $CartItem_res->fetch_assoc();
?>
  	
	  	<tr>
	  		<td><?php print $no; ?>
			<td><?php print $CartItem_row["ProductName"]; ?><td>
			</td>
	  		<td><?php print number_format ($CartItem_row['Price'], 2); ?></td>
	  		<td><a href="delcart.php?remove=">Remove</a>
	  	</tr>
	<div class="one-eight text-center">
		<div class="display-tc">
			<form action = "processes/quick_change_stock.php" method = "POST">
				<input type="text" onBlur = "this.form.submit();" id="itemQty" name="itemQty" class="form-control input-number text-center" value="<?php print $itemQty; ?>" min="1" max="100">
				<input type = "hidden" name = "origin_file" value = "<?php print basename($_SERVER['PHP_SELF']); ?>" />
									<input type = "hidden" name = "ProductID" value = "<?php print $ProductID; ?>" />
			</form>
		</div>
	</div>

		<tr>
			<td><strong>Total Price</strong></td>
			<?php $total_per_item = $CartItem_row['Price']*$itemQty; print number_format ($total_per_item, 2); $Subtotal += $total_per_item; ?>
			</td>
		</tr>

	  </table>
<?php } 

$no++;
?>
	<form action="#">
		<div class="row form-group">
			<div class="col-md-6">
				<input type="submit" onClick="parent.location='tuskys.php'" value="Back to Shopping" class="btn btn-primary">
			</div>
			<div class="col-md-6">
				<input type="submit" onClick="parent.location='payment.php'" value="Checkout Items" class="btn btn-primary">
			</div>
		</div>
	</form>
	</div>
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
