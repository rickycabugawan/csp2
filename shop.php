
<?php
	session_start();
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/nouislider.css'>";
		echo"<link rel='stylesheet' type='text/css' href='assets/css/shop.css'>";
		echo"<link rel='stylesheet' type='text/css' href='assets/css/product-modal.css'>";
	}

	function add_js(){
		echo "<script type='text/javascript' src='assets/js/nouislider.min.js'></script>";
		echo "<script type='text/javascript' src='assets/js/product-modal.js'></script>";
	}

	function page_title(){
		echo "Shop";
	}

	function page_content(){
		echo "<div class='shop-container px-lg-4 py-lg-2 p-2'>";
		require "partials/shop-filter.php";
		require "partials/shop-sorter.php";
		require "partials/shop-items-list.php";
		echo "</div>";
		require "connection.php";
		require "partials/product-modal.php";
	}

 ?>
<?php require"template.php" ?>

<script type="text/javascript">
	$('.nav-item:nth-child(2)').addClass('active');
</script>

