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
      <div class="container-fluid">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
<?php
    $select_mgs = "SELECT * FROM customer_messages";
    $msg_res = $conn->query($select_mgs);
    if ($msg_res->num_rows > 0){
        while($msg_row = $msg_res->fetch_assoc()){
        ?>
            <h2><?php print $msg_row["Subject"]; ?></h2>
           
           <h5>Published by <?php print $msg_row["Customer_Name"]; ?></h5>
           <h6>Email <?php print $msg_row["Email"]; ?></h6>
            
            <p><?php 
			$max_words = 50;
			$msg_fullText = addslashes($msg_row["Message"]);
			$shown_string = implode(' ', array_slice(str_word_count(addslashes($msg_fullText), 2), 0, $max_words)) . ' ... ' ;
			
			print $shown_string;


			?>
			</p>
            
            <p><a class="btn btn-secondary" href="read_more.php?Message_id=<?php print $msg_row["Message_id"]; ?>" role="button">Read more about <?php print $msg_row["Subject"]; ?> &raquo;</a></p>
        <?php
        }         
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


