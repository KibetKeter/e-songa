<?php
	session_start();
	require_once "includes/session.php";
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
    <title>Siginon</title>
  </head>
  <body>
  <h1 style ="text-align: center">Siginon Company
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
  <div class = "shoppingcart">
    <a  href="cart.php" class="btn btn-info btn-lg">
    <span  class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
    </a>
      </div> 
  
  		  
	<div class="container">
	<div class="row">
<?php
    $select_prd = "SELECT * FROM products";
    $prd_res = $conn->query($select_prd);
    if ($prd_res->num_rows > 0){
        while($prd_row = $prd_res->fetch_assoc()){
 ?>           
		
            <div class="col-md-3">
              <div class="card mb-3 shadow-sm">
                <img class="card-img-top" src="image/products/<?php print $prd_row["Photo"]; ?>" width="200" height="200" alt="Card image cap" />
                <div class="card-body">
                  <p class="card-text"><b><?php print $prd_row["ProductName"]; ?></b></p>
                  <p class="card-text">Ksh <?php print $prd_row["Price"];?>/=</p>
				 
				<p><a href="addtocart.php?ProductID=<?php print $prd_row["ProductID"];?>" class="btn btn-primary" name="addtocart" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
<?php } ?>

                </div>
              </div>
            </div>
 <?php
        }         
    else{
        echo 'No data';
    }         
?>			
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
