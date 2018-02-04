<?php
	session_start();
	
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/account.css'>";
	}

	function add_js(){
		echo "<script type='text/javascript' src='assets/js/account.js'></script>";
	}

	function page_title(){
		echo "Account";
	}

	function page_content(){
		require "partials/login-partial.php";
	}

 ?>
<?php require"template.php" ?>

<!-- <script type="text/javascript">
	$('.nav-item:nth-child(2)').addClass('active');
</script> -->