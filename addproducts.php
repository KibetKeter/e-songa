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
		<title>Add Products</title>
	</head>
	<body>
	<h1>Add Products</h1>
	<hr />
<form method = "POST" action = "proccess/addproductconn.php" enctype="multipart/form-data" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="product_name">Product Name</label>
		<input placeholder="Enter Product Name" class="form-control form-control-md" name="productname" type="text" required />
	</div><br /><br />
    <div class="form-group">
		<label for="Product_Description">Product Description</label>
		<textarea placeholder="Enter the Product Description" class="form-control form-control-md" name="productdescription" required style="height:170px" ></textarea>
	</div><br /><br />
    <div class="form-group">
		<label for="Product_Photo">Product Photo</label>
		<input placeholder="Upload Product Photo" class="form-control form-control-md" name="productphoto" type="file" />
	</div><br /><br />
	<div class="form-group">
		<label for="price">Product Price</label>
		<input placeholder="Enter Product Price" class="form-control form-control-md" name="price" type="number" required />
	</div><br /><br />
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="saveproduct"  value="Save Product">
	</div>
</form>	
	<footer class="container">
		<p style="text-align: center;background-color:#373737;color: #ffffff;">All Rights Reserved &copy 2019 E-Duka. A product of E-Duka Associates</p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
