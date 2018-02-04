<?php 
session_start();
require 'connection.php';

if ((isset($_SESSION['userid'])) && ($_SESSION['role'] == 'admin')){

	$id = $_POST['id'];

	$sql = "DELETE FROM productlist WHERE id = $id";
	
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
}

?>