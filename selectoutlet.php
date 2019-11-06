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
    <title>E-Songa</title>
  </head>
  <body>
  <h1>Select a transportation solution</h1>
	<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Customer Care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us & More</a>
      </li>
	  <li class="nav-item active">
         <a class="nav-link" href="proccess/signout.php"title="Sign Out">Sign Out</a>
       </li>
    </ul>
                
    
					<div class = "text-black mr-sm-2">
				<h5> 
				<img src= "image/account.jpg"width ="50" height="50"/>
					<?php
					
					if(isset($_SESSION["control"])){
						print "Hello " . $_SESSION["control"]["CustomerName"];
						 }
					?> 
				</h5>
			</div>
  </div>
</nav>
	 <div class="row">
            <div class="col-md-6">
              <div class="card mb-3 shadow-sm">
                <a href ="siginon.php" target = "_BLANK" title="click to order from Siginon" ><img class="card-img-top" src="image/siginon.png" alt="Card image cap" /></a>
                <div class="card-body">
                  <p class="card-text"><b></b></p>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>

             <div class="col-md-6">
              <div class="card mb-3 shadow-sm">
                <a href ="naivas.html" target = "_BLANK" title="click to order from Bollore" ><img class="card-img-top" src="image/bollore.png" alt="Card image cap" /></a>
                <div class="card-body">
                  <p class="card-text"><b></b></p>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card mb-3 shadow-sm">
                <a href ="carrefour.html" target = "_BLANK"title="click to order from Modern Coast" ><img class="card-img-top" src="image/modern.png" alt="Card image cap" /></a>
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text"></p>
                  </div>
                </div>
              </div>
			  

            <div class="col-md-6">
              <div class="card mb-3 shadow-sm">
                <a href ="foodplus.html" target = "_BLANK" title="click to order from Voltic"><img class="card-img-top" src="image/voltic.png" alt="Card image cap" /></a>
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text"></p>
                  </div>
                </div>
              </div>
            </div>
<footer class="container">
		<p style="text-align: center;background-color:#373737;color: #ffffff;">All Rights Reserved &copy 2019 E-Songa. A product of Software Engineering Class 2019 With Faith Siva</p>
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