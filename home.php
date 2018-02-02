
<?php
	function add_css(){
		echo"<link rel='stylesheet' type='text/css' href='assets/css/product-modal.css'>";
	}
	function add_js(){
		echo "<script type='text/javascript' src='assets/js/nouislider.min.js'></script>";
		echo "<script type='text/javascript' src='assets/js/product-modal.js'></script>";
	}
	
	function page_title(){
		echo "Home";
	}

	function page_content(){
		require "partials/home-carousel.php";
		require "partials/home-featured-items.php";
		require "partials/brand-carousel.php";
		require "partials/home-most-container.php";
		require "partials/product-modal.php";
	}

 ?>

<?php require"template.php" ?>

<script type="text/javascript">
	$('.nav-item:first-child').addClass('active');
</script>