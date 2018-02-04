<?php 
session_start();
require 'connection.php';

if (isset($_SESSION['userid'])){

	$userid = $_SESSION['userid'];
	$itemindex = $_POST['index'];
	$itemquantity = $_POST['quantity'];



	$sql = "SELECT * FROM cart WHERE user_id = $userid AND product_id = $itemindex";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$existingquant = $row['quantity'];
		$newquant = $row['quantity']+$itemquantity;
		$sql = "UPDATE cart SET quantity = $newquant WHERE user_id = $userid AND product_id = $itemindex";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	else {		
		$sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($userid,$itemindex,$itemquantity)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}

}

?>