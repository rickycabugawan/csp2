<?php
	session_start();
	
	function add_css(){
	}
	function add_js(){
		echo "<script type='text/javascript' src='assets/js/nouislider.min.js'></script>";
	}
	
	function page_title(){
		echo "Home";
	}

	function page_content(){
		require "partials/home-carousel.php";
		require "partials/home-featured-items.php";
		require "partials/brand-carousel.php";
		require "partials/home-most-container.php";
	}

 ?>

<?php require"template.php" ?>

<script type="text/javascript">
	$('.nav-item:first-child').addClass('active');
</script>