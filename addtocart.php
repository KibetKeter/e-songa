<?php

session_start();

	$ProductID = addslashes($_GET["ProductID"]);
	$itemQty = 1;

	if((isset($_SESSION["itemId_itemQty"])) AND (array_key_exists($ProductID, $_SESSION["itemId_itemQty"]))){
		
			$new_value = $_SESSION["itemId_itemQty"][$ProductID] + $itemQty;
			
			
			$_SESSION["itemId_itemQty"][$ProductID] = $new_value;
			
			$_SESSION["itemId_itemQty_tmp1"] = $_SESSION["itemId_itemQty"];

	}else{

		unset($_SESSION["ProductID"]);
		$_SESSION["ProductID"] = $ProductID;
		
		unset($_SESSION["itemQty"]);
		$_SESSION["itemQty"] = $itemQty;
		
		$_SESSION["array_itemId"] = array($_SESSION["ProductID"]);
		$_SESSION["array_itemQty"] = array($_SESSION["itemQty"]);

		if(!isset($_SESSION["array_itemId_final"])){
			$_SESSION["array_itemId_final"] = array();
		}
		$_SESSION["array_itemId_alt"] = array_merge($_SESSION["array_itemId_final"], $_SESSION["array_itemId"]);

		if(!isset($_SESSION["array_itemQty_final"])){
			$_SESSION["array_itemQty_final"] = array();
		}
		$_SESSION["array_itemQty_alt"] = array_merge($_SESSION["array_itemQty_final"], $_SESSION["array_itemQty"]);

		$_SESSION["array_itemId_final"] = $_SESSION["array_itemId_alt"];
		$_SESSION["array_itemQty_final"] = $_SESSION["array_itemQty_alt"];
		
		$itemId_array = $_SESSION["array_itemId_alt"];
		$itemQty_array = $_SESSION["array_itemQty_alt"];

		$_SESSION["itemId_itemQty"] = array_combine($itemId_array, $itemQty_array);
	
	}
	header("Location: siginon.php#$ProductID");
	exit();	

	// print_r($_SESSION["itemId_itemQty"]);
	
?>
