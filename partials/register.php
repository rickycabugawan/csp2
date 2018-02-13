<?php 

$errorusername="";
$errorpassword="";
$errorpolicy="";
$errorconfirmpassword="";

$firstname = "";
$lastname = "";
$address = "";
$username = "";
$password = "";


if (isset($_SESSION['errorusername'])){
	$errorusername=$_SESSION['errorusername'];

	$firstname = "value='".$_SESSION['firstname']."'";
	unset($_SESSION['firstname']);

	$lastname = "value='".$_SESSION['lastname']."'";
	unset($_SESSION['lastname']);

	$address = $_SESSION['address'];
	unset($_SESSION['address']);

	$username = "value='".$_SESSION['username']."'";
	unset($_SESSION['username']);

	$password = "value='".$_SESSION['password']."'";
	unset($_SESSION['password']);

}

if (isset($_SESSION['errorpassword'])){
	$errorpassword=$_SESSION['errorpassword'];

	$firstname = "value='".$_SESSION['firstname']."'";
	unset($_SESSION['firstname']);

	$lastname = "value='".$_SESSION['lastname']."'";
	unset($_SESSION['lastname']);

	$address = $_SESSION['address'];
	unset($_SESSION['address']);

	$username = "value='".$_SESSION['username']."'";
	unset($_SESSION['username']);

	$password = "value='".$_SESSION['password']."'";
	unset($_SESSION['password']);

}

if (isset($_SESSION['errorconfirmpassword'])){
	$errorconfirmpassword=$_SESSION['errorconfirmpassword'];

	$firstname = "value='".$_SESSION['firstname']."'";
	unset($_SESSION['firstname']);

	$lastname = "value='".$_SESSION['lastname']."'";
	unset($_SESSION['lastname']);

	$address = $_SESSION['address'];
	unset($_SESSION['address']);

	$username = "value='".$_SESSION['username']."'";
	unset($_SESSION['username']);

	$password = "value='".$_SESSION['password']."'";
	unset($_SESSION['password']);

}

?>



<div class="register-container text-secondary p-4 m-md-5">
	<h5 class="register-header text-uppercase text-light mb-lg-4">register account</h5>
	<div class="register-sub mb-3 mb-lg-5">If you already have an account with us, please login at the <a class="text-danger" href="login.php">login page</a>.</div>
	<form action="register-authenticate.php" method="post" class="reg-form">
		<div class="personal-details">
			<h6 class="personal-details-header text-uppercase text-light">your personal details</h6>
			<div class="personal-reg-box">
				<label>First Name</label>
				<input class="text-secondary p-2" type="text" <?php echo $firstname ?> name="reg-firstname" placeholder="First Name" required>
				<span class="errormsg-reg text-danger"></span>
			</div>
			<div class="personal-reg-box">
				<label>Last Name</label>
				<input class="text-secondary p-2" type="text" <?php echo $lastname ?> name="reg-lastname" placeholder="Last Name" required>
				<span class="errormsg-reg text-danger"></span>
			</div>
			<div class="personal-reg-box">
				<label>Address</label>
				<textarea class="text-secondary p-2" name="reg-address" class="reg-address-input" placeholder="Address" required><?php echo $address ?></textarea>
			</div>
		</div>
		<div class="login-details">
			<h6 class="login-details-header text-uppercase text-light">your login details</h6>
			<div class="login-reg-box">
				<label>Username</label>
				<input class="text-secondary p-2" type="text" <?php echo $username ?> name="reg-username" placeholder="Username" required>
				<span class="errormsg-reg text-danger"><?php echo $errorusername; unset($_SESSION['errorusername']) ?></span>
			</div>
			<div class="login-reg-box">
				<label>Password</label>
				<input class="text-secondary p-2" type="password" name="reg-password" placeholder="Password" required>
				<span class="errormsg-reg text-danger"><?php echo $errorpassword; unset($_SESSION['errorpassword']) ?></span>
			</div>
			<div class="login-reg-box">
				<label>Confirm Password</label>
				<input class="text-secondary p-2" type="password" name="reg-cpassword" placeholder="Password" required>
				<span class="errormsg-reg text-danger"><?php echo $errorconfirmpassword; unset($_SESSION['errorconfirmpassword']) ?></span>
			</div>
			<div class="policy-box">
				<span><input type="checkbox" id="policy" name="policy" value="1" required=""> <label for="policy">I have read and agree to the <a class="text-secondary" data-toggle="modal" href="#modalPrivacy">Privacy Policy</a>. </label><span class="policyerror text-danger"></span></span>
				<button class="btn btn-danger px-lg-5 py-lg-2 text-uppercase ">Register</button>
			</div>
		</form>

	</div>
</div>