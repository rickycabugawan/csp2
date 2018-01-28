<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Capstone Project 2</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Monoton" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bpp.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<!-- navigation bar -->
	<div class="nav">
		<i class="fa fa-mobile fa-4x" aria-hidden="true"></i>
		<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
		<p>Menu</p>
	</div><!-- end navigation -->

	<div class="nav-icons"><!-- nav-icons -->
		<i class="fa fa-shopping-bag" aria-hidden="true"></i>
		<i class="fa fa-heart" aria-hidden="true"></i>
		<i class="fa fa-search" aria-hidden="true"></i>
	</div><!-- end nav-icons -->

	<!-- top part -->
	<div class="top">
		<!-- hero -->
		<div class="hero">
			<img src="assets\img\hero\iphone3.jpg">
			<div class="hero-label">
				<h1>#phoneMoto</h1>
				<p>Your smartphone shopping destination</p>
				<div class="cta">
					<span class="cta-left">since 2017</span><div class="cta-divider"></div><span class="cta-right">shop now</span>
				</div>
			</div>
		</div><!-- end hero -->
	</div><!-- end top part -->



	<style type="text/css">
		img {
			width: 100%;
		}

		body {
			padding-left: 90px;
		}

		.top {
			display:grid;
			grid-template-columns: 1fr auto;
		}

		.nav {
			position: fixed;
			left:0;
			height: 100vh;
			width: 90px;
			background-color: white;
			box-shadow: 0px 0px 30px lightgrey;
			display: grid;
			grid-template-rows: 1fr auto 1fr;
			justify-items: center;
		}

		i.fa-mobile {
			padding-top: 20px;
		}

		.nav > p {
			text-transform: uppercase;
			font-size: 10px;
			padding-top: 10px;
		}

		.nav-icons {
			position: fixed;
			top: 100px;
			right: 80px;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-gap: 10px;
			justify-items: center;
			align-items: center;
		}

		.nav-icons > i {
			background-color: white;
			padding: 16px;
			box-shadow: 0px 0px 10px lightgrey;
		}

		.nav-icons > i:hover {
			color: green;
		}

		.hero {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1;
		}

		.hero > img {
			grid-column: 1 / -1;
			grid-row: 1 / -1;
		}

		.hero-label {
			grid-column: 2 / -1;
			grid-row: 1 / -1;
			display: grid;
			align-content: center;
			justify-items: center;
		}

		.hero-label > h1 {
			font-size: 120px;
			font-weight: bold;
			font-style: italic;
			font-family: serif;
		}

		.hero-label > p {
			font-size: 20px;
		}

		.cta {
			display: grid;
			grid-template-columns: 1fr auto 1fr;
			grid-gap: 20px;
			justify-content:center;
			align-items: center;
			text-transform: uppercase;
		}

		.cta-divider {
			border-left: 2px solid grey;
			height: 100px;
		}

		.cta-left {
			text-decoration: underline;
			text-underline-position: under;
		}
		.cta-right:hover {
			text-decoration: underline;
			text-underline-position: under;
		}
		


	</style>
	

	<!-- scripts -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
 	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>