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
    <title>View Messages</title>
  </head>
  <body>
  <h1>View Messages</h1>
      <div class="container_fluid">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
<?php
$messageId = $_GET["Message_id"];
$select_mgs = "SELECT * FROM customer_messages WHERE Message_id = '$messageId' LIMIT 1";
    $msg_res = $conn->query($select_mgs);
    if ($msg_res->num_rows > 0){
        $msg_row = $msg_res->fetch_assoc();
        ?>
            <h2><?php print $msg_row["Subject"]; ?></h2>
           
           <h6>Published by <?php print $msg_row["Customer_Name"]; ?></h6>
            
            <p><?php print $msg_row["Message"]; ?></p>
            
        <?php
                
    }else{
        echo 'No data';
    }         
?>
          </div>
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

