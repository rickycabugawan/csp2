<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php page_title(); ?> - PhoneMOTO</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Monoton" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bpp.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel='stylesheet' type='text/css' href='assets/css/product-modal.css'>
	<?php add_css(); ?>
	
	
	
</head>
<body>
	<?php require"partials/topbar.php" ?>
	<?php require "partials/nav.php" ?>
	<?php page_content(); ?>
	<?php require "partials/back2top.php" ?>
	<?php require "partials/footer.php" ?>
	<?php require "partials/product-modal.php"; ?>
	<?php require "partials/alert.php" ?>

	
	<!-- scripts -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
 	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/slick.min.js"></script>
 	<?php add_js(); ?>
 	<script type="text/javascript" src="assets/js/script.js"></script>
 	<script type='text/javascript' src='assets/js/product-modal.js'></script>
 	<div></div>
</body>
</html>