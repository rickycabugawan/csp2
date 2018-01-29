
<?php
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/nouislider.css'>";
		echo"<link rel='stylesheet' type='text/css' href='assets/css/shop.css'>";
	}

	function add_js(){
		echo "<script type='text/javascript' src='assets/js/nouislider.min.js'></script>";
	}

	function page_title(){
		echo "Shop";
	}

	function page_content(){
		require "partials/shop-filter.php";
	}

 ?>

<?php require"template.php" ?>