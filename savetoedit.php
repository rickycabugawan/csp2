<?php 
session_start();
require 'connection.php';

if ((isset($_SESSION['userid'])) && ($_SESSION['role'] == 'admin')){


	function br2nl($string)
	{
	    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
	} 

	$id = $_POST['id'];
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $manufacturer = mysqli_real_escape_string($conn, $_POST['manufacturer']);
    $os = mysqli_real_escape_string($conn, $_POST['os']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    $description = br2nl($_POST['description']);
    $description = mysqli_real_escape_string($conn, $description);

    $stock = mysqli_real_escape_string($conn, $_POST['stock']);
    $sale = mysqli_real_escape_string($conn, $_POST['sale']);
    $sale_percent = mysqli_real_escape_string($conn, $_POST['sale_percent']);
    $views = mysqli_real_escape_string($conn, $_POST['views']);
    $release_date = mysqli_real_escape_string($conn, $_POST['release_date']);

	$sql = "UPDATE productlist SET img = '$img', productname = '$productname', manufacturer = '$manufacturer', os = '$os', price = $price, description = '$description', stock = $stock, sale = $sale, sale_percent = $sale_percent, views = $views, release_date = '$release_date' WHERE id = $id";
	
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
}

?>