<?php
	session_start();
	
	require_once "includes/session.php";
    require_once "includes/ssignupdbconnect.php";

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
		<link rel = "stylesheet" href = "market.css" />
		<title>Admin Module</title>
	</head>
	<body>
	<h1>Admin Module</h1>
	<hr />
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Myshopper</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	 <li class="nav-item active">
         <a class="nav-link" href="proccess/signout.php"title="Sign Out">Sign Out</a>
       </li>
    </ul>
	<div class = "text-black mr-sm-2">
				<h5> 
				<img src= "image/account.jpg"width ="50" height="50"/>
				
					<?php
					if(isset($_SESSION["control"])){
						print "Hello " . $_SESSION["control"]["AdminName"];
						 }
					?> 
				</h5>
			</div>
  </div>
</nav>
	<div class="container">
        <!-- Example row of columns -->

      <div class="row">
       
            <div class="col-md-3">
                <a href="addproducts.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><img src = "image/addproduct.jpg" /><br/>
                    Add New Product
                </a>
            </div><br />
			<div class="col-md-3">
                <a href="deleteproduct.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><img src= "image/updateproduct.png"/><br/>
                    Delete Product
                </a>
            </div><br />
			<div class="col-md-3">
                <a href="updateproducts.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><img src= "image/deleteproduct.png"/><br/>
                    Update Product
                </a>
            </div><br />
			<div class="col-md-3">
                <a href="view_customers_msg.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><img src= "image/viewmessage.jpg"width ="220" height="220"/><br/>
                    View Messages
                </a>
            </div><br />
			<div class="col-md-3">
                <a href="view_prod.php" class="btn btn-sq-lg btn-primary">
                    <i class="fa fa-user fa-5x"></i><img src= "image/viewprod.jpg"width ="220" height="220"/><br/>
                    View Products
                </a>
            </div><br />
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