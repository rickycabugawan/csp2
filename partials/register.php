<div class="register-container text-secondary p-4 m-md-5">
	<h5 class="register-header text-uppercase text-light mb-lg-4">register account</h5>
	<div class="register-sub mb-3 mb-lg-5">If you already have an account with us, please login at the <a class="text-danger" href="account.php">login page</a>.</div>
	<form class="reg-form">
		<div class="personal-details">
			<h6 class="personal-details-header text-uppercase text-light">your personal details</h6>
			<div class="personal-reg-box">
				<label>First Name</label>
				<input class="text-secondary p-2" type="text" name="reg-firstname" placeholder="First Name" required>
			</div>
			<div class="personal-reg-box">
				<label>Last Name</label>
				<input class="text-secondary p-2" type="text" name="reg-lastname" placeholder="Last Name" required>
			</div>
			<div class="personal-reg-box">
				<label>Address</label>
				<textarea class="text-secondary p-2" name="reg-address" class="reg-address-input" placeholder="Address" required></textarea>
			</div>
		</div>
		<div class="login-details">
			<h6 class="login-details-header text-uppercase text-light">your login details</h6>
			<div class="login-reg-box">
				<label>Username</label>
				<input class="text-secondary p-2" type="text" name="reg-username" placeholder="Username" required>
			</div>
			<div class="login-reg-box">
				<label>Password</label>
				<input class="text-secondary p-2" type="password" name="reg-password" placeholder="Password" required>
			</div>
			<div class="policy-box">
				<span><input type="checkbox" name="policy"> I have read and agree to the <a class="text-danger" href="#">Privacy Policy</a>.</span>
				<button class="btn btn-danger px-lg-5 py-lg-2 text-uppercase ">Register</button>
			</div>
		</form>

	</div>
</div>