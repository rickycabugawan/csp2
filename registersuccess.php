<?php
	session_start();
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/account.css'>";
	}

	function add_js(){
		echo "<script type='text/javascript' src='assets/js/account.js'></script>";
	}

	function page_title(){
		echo "Register";
	}

	function page_content(){
		if (isset($_SESSION['regsuccess'])){
			require "partials/registration-success.php";
			unset($_SESSION['regsuccess']);
		}	
	}

 ?>
<?php require"template.php" ?>