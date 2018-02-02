<?php 
session_start();
require 'connection.php';

if (isset($_POST['username'])) {
	$username = $_POST['username']; 
	$password = sha1($_POST['password']); 

	$sql = "SELECT * FROM userlist WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);


	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['userid'] = $row['id'];
		$_SESSION['user'] = $row['firstname'];
		$_SESSION['role'] = $row['role'];
		header('Location: home.php');
		exit();
	}
	else {
		$_SESSION['errormsg']="failed to login. incorrect login credentials.";
		header('Location: account.php');
	}
}
 ?>