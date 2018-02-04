<?php 
session_start();
require 'connection.php';


$firstname = htmlspecialchars($_POST['reg-firstname']);
$lastname = htmlspecialchars($_POST['reg-lastname']);
$address = htmlspecialchars($_POST['reg-address']);
$username = htmlspecialchars($_POST['reg-username']);
$password = htmlspecialchars($_POST['reg-password']);
$cpassword = htmlspecialchars($_POST['reg-cpassword']);

// if (!isset($_POST['policy'])){
// 	$_SESSION['errorpolicy'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Warning: You must agree to the Privacy Policy!";
// };

$sql = "SELECT * FROM userlist WHERE username = '$username'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	$_SESSION['errorusername'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Username is already taken";
	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['address'] = $address;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    header('Location: newaccount.php');
}

elseif ((!preg_match('/^[0-9A-Za-z]{4,20}$/', $username)) && (!preg_match('/^[0-9A-Za-z]{4,20}$/', $password))) {
    $_SESSION['errorusername']="<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Username must be between 4 and 20 characters and must not contain special characters";
    $_SESSION['errorpassword']="<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Password must be between 4 and 20 characters and must not contain special characters";
    if ($password != $cpassword) {
		$_SESSION['errorconfirmpassword'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Passwords do not match";
	}

    $_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['address'] = $address;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    header('Location: newaccount.php');
}

elseif (!preg_match('/^[0-9A-Za-z]{4,20}$/', $password)) {
    $_SESSION['errorpassword']="<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Password must be between 4 and 20 characters and must not contain special characters";
    if ($password != $cpassword) {
		$_SESSION['errorconfirmpassword'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Passwords do not match";
	}

    $_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['address'] = $address;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    header('Location: newaccount.php');
}

elseif (!preg_match('/^[0-9A-Za-z]{4,20}$/', $username)) {
    $_SESSION['errorusername']="<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Username must be between 4 and 20 characters and must not contain special characters";

    if ($password != $cpassword) {
		$_SESSION['errorconfirmpassword'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Passwords do not match";
	}

    $_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['address'] = $address;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    header('Location: newaccount.php');
}

elseif ($password != $cpassword) {
	$_SESSION['errorconfirmpassword'] = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i> Passwords do not match";
	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['address'] = $address;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    header('Location: newaccount.php');
	}

else {

	$firstname = mysqli_real_escape_string($conn, $_POST['reg-firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['reg-lastname']);
	$address = mysqli_real_escape_string($conn, $_POST['reg-address']);
	$username = mysqli_real_escape_string($conn, $_POST['reg-username']);
	$password = sha1($_POST['reg-password']);
	$password = mysqli_real_escape_string($conn, $password);
	
	$sql = "INSERT INTO userlist (username, password, firstname, lastname, address, role) VALUES ('$username','$password','$firstname','$lastname','$address','user')";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));


	$sql = "SELECT * FROM userlist WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);


	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['regsuccess'] = 1;
		$_SESSION['userid'] = $row['id'];
		$_SESSION['user'] = $row['firstname'];
		$_SESSION['role'] = $row['role'];
		header('Location: registersuccess.php');
	}
	// $_SESSION['newaccountsuccess'] = "Account Successfully Created. You may now log in."
	// header('Location: newaccountsuccess.php');
}


?>