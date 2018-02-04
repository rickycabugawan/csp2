<div class="register-container text-secondary p-4 m-md-5">
	<h5 class="register-header text-uppercase text-light mb-lg-4">Account registration successful</h5>
	<div class="register-sub mb-3 mb-lg-5">You will be redirected to the <a class="text-danger" href="login.php">homepage</a> automatically in <span id="seconds">5</span> seconds<span id="dots">.</span></div>
	</div>
</div>

<script type="text/javascript">
	var timer = 5;

	setInterval(function(){
			$('#seconds').html(timer);
			timer--;
			$('#dots').append('.');
		},1000)

	setTimeout(function() {
           location.href='index.php'},6000)
	

</script>