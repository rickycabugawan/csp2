<?php 
session_start();
$keyword = $_POST['keyword'];
require 'connection.php';

$sql="SELECT * FROM productlist WHERE productname LIKE '%$keyword%' LIMIT 5";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

	while($row = mysqli_fetch_assoc($result)){	

		 // echo $row['productname']."<br>";

		if(($_SESSION['role']) == 'admin'){

		echo "<a class='edit-item-button text-dark' data-index=".$row['id']."  href='#'>".$row['productname']."</a><br>";

		}
		else {

		echo "<a class='view-item-button text-dark' data-index=".$row['id']."  href='#'>".$row['productname']."</a><br>";
		}
		
	}
}
else {
	echo "No items matched";
}
?>