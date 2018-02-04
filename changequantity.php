<?php 
session_start();
require 'connection.php';

if (isset($_SESSION['userid'])){

	$max = $_POST['max'];
	$cartindex = $_POST['cartindex'];
	$itemquantity = $_POST['quantity'];


	if (($itemquantity > 1) && ($itemquantity <= $max)) {
		$sql = "UPDATE cart SET quantity = $itemquantity WHERE id = $cartindex";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	elseif ($itemquantity > $max) {
		$sql = "UPDATE cart SET quantity = $max WHERE id = $cartindex";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	else {
		$sql = "DELETE FROM cart WHERE id = $cartindex";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}

}

?>