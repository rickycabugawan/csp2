<?php 

$errormsg="";

if (isset($_SESSION['errormsg'])){
	$errormsg=$_SESSION['errormsg'];

}

 ?>
<div class="account-container text-light p-4">
	<h5 class="account-header text-uppercase">Account Login</h5>
	<div class="new-customer">
		<p class="text-uppercase text-light">new customer</p>
		<p>Register Account</p>
		<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
		<a class="continue-reg-btn" href="newaccount.php"><button class="btn btn-danger text-uppercase">Continue</button></a>
	</div>

	<div class="returning-customer">
		<p class="text-uppercase text-light">returning customer</p>
		<p>I am a returning customer</p>
		<form method="post" class="login-box" action="authenticate.php">
			<label class="mb-0 text-secondary" for="username"><small>Username</small></label>
			<input class="text-secondary p-2" type="text" name="username" id="username" placeholder="Username" required>
			<span class="username-error-box text-danger"></span>

			<label class="mb-0 text-secondary" for="password"><small>Password</small></label>
			<input class="text-secondary p-2" type="password" name="password" id="password" placeholder="Password" required>
			<span class="password-error-box text-danger"><?php echo $errormsg; unset($_SESSION['errormsg']) ?></span>

			<button class="login-btn btn btn-danger text-uppercase mt-3 px-4">Login</button>
		</form>

	</div>

</div>