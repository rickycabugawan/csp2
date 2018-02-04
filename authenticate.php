<?php 
session_start();
require 'connection.php';

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']); 
	$password = sha1($_POST['password']);
	$password = mysqli_real_escape_string($conn, $password); 

	$sql = "SELECT * FROM userlist WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);


	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['userid'] = $row['id'];
		$_SESSION['user'] = $row['firstname'];
		$_SESSION['role'] = $row['role'];
		header('Location: index.php');
	}
	else {
		$_SESSION['errormsg']="<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Warning: No match for Username and/or Password";
		header('Location: login.php');
	}
}
 ?>