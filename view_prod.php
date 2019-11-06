<?php
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
    <title>View Products</title>
  </head>
  <body>
  <h1>View Products</h1>
      <div class="container">
	    
	  <table class="table table-striped">
  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Product Name</th>
						  <th scope="col">Product Description</th>
						  <th scope="col">Price</th>
						  <th scope="col">Product ID</th>
						</tr>
  </thead>
  <tbody>
 <?php
$spot_prod = "SELECT * FROM product";
$prod_res = $conn->query($spot_prod);
if ($prod_res->num_rows > 0){
	$no = 1;
	while($prod_rows = $prod_res->fetch_assoc()){
 ?>
<tr>
<th scope="row"><?php print $no; ?></th>
<td><?php print $prod_rows["ProductName"]; ?></td>
<td><?php print $prod_rows["Description"]; ?></td>
<td><?php print $prod_rows["Price"]; ?></td>
<td><?php print $prod_rows["ProductID"]; ?></td>

</tr>
<?php
	$no++;	

}
}

?>
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


