<?php 
session_start();
require 'connection.php';

if (isset($_SESSION['userid'])){

	$cartindex = $_POST['cartindex'];

	$sql = "DELETE FROM cart WHERE id = $cartindex";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));

}

?>