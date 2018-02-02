<?php
	session_start();
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/cart.css'>";
	}

	function add_js(){
		echo "<script type='text/javascript' src='assets/js/cart.js'></script>";
	}

	function page_title(){
		echo "Shop";
	}

	function page_content(){

		require "partials/cart-items-list.php";
	}

 ?>

<?php require"template.php" ?>
