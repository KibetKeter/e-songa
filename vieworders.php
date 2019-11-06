<?php
session_start();
    require_once "includes/ssignupdbconnect.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel = "stylesheet" href = "market.css"/>
    <title>View Orders</title>
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
	  </nav>
  </head>
  <body>
  <h1>View Orders</h1>
      <div class="container">
	    
	  <table class="table table-striped">
  <thead>
	<tr>
		 <th scope="col">No.</th>
		<th scope="col">Customer Name</th>
		<th scope="col">Customer Email</th>
		<th scope="col">Customer Phone No.</th>
		<th scope="col">Delivery Address</th>
		<th scope="col">Order ID</th>
		<th scope="col">Order Items</th>
		
	</tr>
  </thead>
  <tbody>
 <?php
$spot_ord = "SELECT * FROM orders";
$ord_res = $conn->query($spot_ord);
if ($ord_res->num_rows > 0){
	$no = 1;
	while($ord_rows = $ord_res->fetch_assoc()){
 ?>
<tr>
<th scope="row"><?php print $no; ?></th>
<td><?php print $ord_rows["CustomerName"]; ?></td>
<td><?php print $ord_rows["Email"]; ?></td>
<td><?php print $ord_rows["Phone_No"]; ?></td>
<td><?php print $ord_rows["DeliveryAddress"]; ?></td>
<td><?php print $ord_rows["OrderNo"]; ?></td>
<?php
	$no++;	

}
}

?>

<?php
foreach ($_SESSION["itemId_itemQty"] AS $ProductID => $itemQty){ 
	$CartItem = "SELECT * FROM product WHERE ProductID = '$ProductID' LIMIT 1";
	
	$CartItem_res = $conn->query($CartItem);
	$CartItem_row = $CartItem_res->fetch_assoc();
?>

<td><?php print $CartItem_row["ProductName"]; ?></td>
<td><?php print $itemQty; ?></td>
<?php }
?>
</tr>

  </tbody>
</table>
      </div> <!-- /container -->
       
        </div>
      </div>
<footer class="container">
		<p style="text-align: center;background-color:#373737;color: #ffffff;">All Rights Reserved &copy 2018 MYSHOPPER. A product of MYSHOPPER Associates</p>
	</footer>
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>


