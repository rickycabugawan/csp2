<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Monoton" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bpp.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<!-- topbar -->
	<div class="top-bar">

		<div class="top-bar-1 px-lg-5 py-2">
			<div class="top-bar-username text-light py-1 px-md-2">
				<span>Welcome, <span class="username-bar">User</span></span>
			</div>
			<div class="social-bar pt-1 px-3">
				<a href=""><i class="fa fa-facebook text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-google-plus text-light" aria-hidden="true"></i></a>
			</div>
			<div class="top-link">
				<a class="text-light" href="">wishlist<span class="wish-list-val">(0)</span></a>
				<a class="text-light" href="">my account</a>
			</div>
			<div class="top-link top-link-end	">
				<a class="text-light" href="">shopping cart</a>
				<a class="text-light" href="">checkout</a>
			</div>
		</div>

		<div class="top-bar-2 px-lg-5 text-light py-md-2">

			<form class="form-inline m-3">
		      <div class="input-group">
		        <input type="text" class="form-control text-secondary" id="inlineFormInputGroup" placeholder="Search">
		        <div class="input-group-append">
		          <button type="button" class="btn input-group-text"><i class="fa fa-search text-secondary" aria-hidden="true"></i></button>
		        </div>
		      </div>
		    </form>

		    <p class="brand text-light m-0">phone<span>moto</span></p>

		    <div class="top-bar-cta p-3">
		    	<div class="call-us">
		    		<i class="fa fa-phone fa-2x p-2 text-secondary" aria-hidden="true"></i>
		    		<small class="text-secondary">call us now</small>
		    		<p class="m-0">(02)969-6969</p>
		    	</div>
		    	<div class="shopping-cart">
		    		<i class="fa fa-shopping-basket fa-2x" aria-hidden="true">
		    			<span class="shopping-badge badge badge-pill badge-danger">0</span>
		    		</i>	
		    		<p class="m-0 text-secondary">cart:</p><span class="total">₱ 98.00</span>
		    	</div>
		    </div>

		</div>
	</div><!-- end topbar -->


	<!-- navigation bar -->
	<nav class="navbar navbar-expand-md navbar-dark sticky-top">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand d-md-none d-lg-none mx-auto pr-5" href="#">Menu</a>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link active" href="#">Home</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Shop
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Browse All</a>
	          <a class="dropdown-item" href="#">Shop by Brand</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Promos</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About Us</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Blog</a>
	      </li>
	    </ul>
	  </div>
	</nav><!-- end navigation bar -->

	<!-- carousel -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
	  <div class="carousel-inner">
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets\img\hero\hero.jpg" alt="First slide">
		    <div class="carousel-caption item1">
		      <span class="hero-brand">Samsung</span>
		      <span class="hero-item-name">Galaxy S8</span>
		      <span class="hero-item-price"><span class="only">only </span>₱39,300.00</span>
		      <button class="btn btn-danger btn-lg">shop now</button>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets\img\hero\pixel.jpg" alt="Second slide">
	      <div class="carousel-caption item2">
		      <span class="hero-brand">Google</span>
		      <span class="hero-item-name">Pixel</span>
		      <span class="hero-item-price"><span class="only">only </span>₱24,600.00</span>
		      <button class="btn btn-danger btn-lg">shop now</button>
		  </div>
	    </div>
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="assets\img\hero\iphone4.jpg" alt="Third slide">
	      <div class="carousel-caption item3">
		      <span class="hero-brand">Apple</span>
		      <span class="hero-item-name">Iphone X</span>
		      <span class="hero-item-price"><span class="only">only </span>₱45,800.00</span>
		      <button class="btn btn-danger btn-lg">shop now</button>
		  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true" hidden></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true" hidden></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div><!-- end carousel -->

	<!-- featured-items-container -->
	<div class="feature-container px-lg-5 p-3 my-md-3">
		<div class="feature-heading">
			<h5 class="m-0 px-3 px-md-4 px-lg-5 py-lg-4 py-md-2 py-3">Featured Items</h5>
		</div>
		<div class="items-container">
			<div class="feature-item">
				<img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg">
				<div class="rating">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<h6 class="product-name text-secondary">Apple Iphone X</h6>
				<h6 class="product-price text-light">₱58,500.00</h6>
				<div class="item-cta">
					<button class="btn btn-danger">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
						<span class="d-none d-lg-inline">add to cart</span>
					</button>
					<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
				</div>
			</div><!-- end-feature-item -->
			<div class="feature-item">
				<img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg">
				<div class="rating">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<h6 class="product-name text-secondary">Apple Iphone X</h6>
				<h6 class="product-price text-light">₱58,500.00</h6>
				<div class="item-cta">
					<button class="btn btn-danger">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
						<span class="d-none d-lg-inline">add to cart</span>
					</button>
					<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
				</div>
			</div><!-- end-feature-item -->
			<div class="feature-item">
				<img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg">
				<div class="rating">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<h6 class="product-name text-secondary">Apple Iphone X</h6>
				<h6 class="product-price text-light">₱58,500.00</h6>
				<div class="item-cta">
					<button class="btn btn-danger">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
						<span class="d-none d-lg-inline">add to cart</span>
					</button>
					<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
				</div>
			</div><!-- end-feature-item -->
			<div class="feature-item">
				<img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg">
				<div class="rating">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<h6 class="product-name text-secondary">Apple Iphone X</h6>
				<h6 class="product-price text-light">₱58,500.00</h6>
				<div class="item-cta">
					<button class="btn btn-danger">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
						<span class="d-none d-lg-inline">add to cart</span>
					</button>
					<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
				</div>
			</div><!-- end-feature-item -->
		</div>
	</div><!-- end-feature-items-container -->

	<!-- brand carousel -->
	<div class="brand-carousel px-lg-5 p-2 p-md-4" dir="rtl">
	  <div><img class="d-block" src="assets\img\brand\apple.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\samsung.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\asus.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\lg.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\google.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\nokia.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\sony.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\htc.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\oppo.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\vivo.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\motorola.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\blackberry.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\xiaomi.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\meizu.jpg"></div>
	  <div><img class="d-block" src="assets\img\brand\microsoft.jpg"></div>
	</div><!-- end brand-carousel -->

	<!-- new-onsale-mostviewed- -->
	<div class="most-container p-2 px-lg-5 py-lg-3 my-md-3" >
		<!-- products -->
		<div class="new-products-container p-3">
			<h5>new products</h5>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-x.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone X</a>
				<h6 class="product-price text-light">₱58,500.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone 8 Plus</a>
				<h6 class="product-price text-light">₱45,900.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\nokia\nokia-6-2018.jpg"></a>
				<a href="" class="product-name text-secondary">Nokia 6</a>
				<h6 class="product-price text-light">₱11,990.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\sony\sony-xperia-xa2-ultra-.jpg"></a>
				<a href="" class="product-name text-secondary">Sony Xperia XA2</a>
				<h6 class="product-price text-light">₱19,300.00</h6>
			</div>
		</div><!-- end new products -->
		<!-- onsale -->
		<div class="new-products-container p-3">
			<h5>on sale</h5>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-x.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone X</a>
				<h6 class="product-price text-light">₱58,500.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone 8 Plus</a>
				<h6 class="product-price text-light">₱45,900.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\nokia\nokia-6-2018.jpg"></a>
				<a href="" class="product-name text-secondary">Nokia 6</a>
				<h6 class="product-price text-light">₱11,990.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\sony\sony-xperia-xa2-ultra-.jpg"></a>
				<a href="" class="product-name text-secondary">Sony Xperia XA2</a>
				<h6 class="product-price text-light">₱19,300.00</h6>
			</div>
		</div><!-- end onsale -->
		<!-- most-viewed -->
		<div class="new-products-container p-3">
			<h5>most viewed</h5>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-x.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone X</a>
				<h6 class="product-price text-light">₱58,500.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\apple\apple-iphone-8-plus-new.jpg"></a>
				<a href="" class="product-name text-secondary">Apple Iphone 8 Plus</a>
				<h6 class="product-price text-light">₱45,900.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\nokia\nokia-6-2018.jpg"></a>
				<a href="" class="product-name text-secondary">Nokia 6</a>
				<h6 class="product-price text-light">₱11,990.00</h6>
			</div>
			<div class="new-product">
				<a class="new-product-img" href=""><img src="assets\img\products\sony\sony-xperia-xa2-ultra-.jpg"></a>
				<a href="" class="product-name text-secondary">Sony Xperia XA2</a>
				<h6 class="product-price text-light">₱19,300.00</h6>
			</div>
		</div><!-- end mostviewed -->
	</div><!-- end most-container -->

	<!-- back2top button -->
	<button class="back2top btn btn-danger">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</button><!-- endback2top button -->

	<!-- footer -->
	<div class="footer text-secondary px-4 pt-4">
		<!-- footer-contact -->
		<div class="footer-contact pb-3">
			<h5>contact information</h5>
			<div class="footer-contact-inner">
				<h6>address</h6>
				<span>3rd Floor Caswynn Building, No. 134 Timog Avenue, Sacred Heart</span>
				<span>Quezon City</span>
			</div>
			<div class="footer-contact-inner">
				<h6>phone</h6>
				<span>(02)969-6969</span>
			</div>
			<div class="footer-contact-inner">
				<h6>email</h6>
				<span>support@phonemoto.com</span>
				<span>sales@phonemoto.com</span>
			</div>
			<div class="footer-socialbar">
				<button class="btn btn-dark"><i class="fa fa-facebook text-light" aria-hidden="true"></i></a></button>
				<button class="btn btn-dark"><i class="fa fa-twitter text-light" aria-hidden="true"></i></a></button>
				<button class="btn btn-dark"><i class="fa fa-instagram text-light" aria-hidden="true"></i></a></button>
				<button class="btn btn-dark"><i class="fa fa-google-plus text-light" aria-hidden="true"></i></a></button>
			</div>
		</div><!-- end footer contact -->

		<!-- footer-newsletter -->
		<div class="footer-newsletter py-3 py-md-0 pb-md-3">
			<h5>newsletter</h5>
			<span>Get all the latest information on Events, Sales and Offers. Sign up for our newsletter today.</span>
			<form class="form-inline">
		      <div class="input-group">
		        <input type="text" class="form-control bg-light" id="inlineFormInputGroup" placeholder="Email address here">
		        <div class="input-group-append">
		          <button type="button" class="btn btn-danger text-uppercase">Signup</button>
		        </div>
		      </div>
		    </form>
		</div>
		<!-- footer-info -->
		<div class="footer-info py-3">
			<div class="footer-infobox">
				<h5>my account</h5>
				<a href="">Sign In</a>
				<a href="">View Cart</a>
				<a href="">My Wishlist</a>
				<a href="">Track My Order</a>
				<a href="">Help</a>
			</div>

			<div class="footer-infobox">
				<h5>information</h5>
				<a href="">Delivery Information</a>
				<a href="">Privacy Policy</a>
				<a href="">Terms and Conditions</a>
				<a href="">Disclaimer</a>
				<a href="">Contact Us</a>
			</div>

			<div class="footer-infobox">
				<h5>customer services</h5>
				<a href="">Shipping &amp; Returns</a>
				<a href="">Secure Shopping</a>
				<a href="">International Shipping</a>
				<a href="">Affliates</a>
				<a href="">Contact</a>
			</div>

			<div class="footer-infobox">
				<h5>payment &amp; shipping</h5>
				<a href="">Terms of Use</a>
				<a href="">Payment Methods</a>
				<a href="">Shipping Guide</a>
				<a href="">Locations We Ship To</a>
				<a href="">Estimated Delivery Time</a>
			</div>
		</div><!-- end footer info -->

		<!-- bottom-footer -->
		<div class="footer-bottom py-2">
			<span>Ricky Cabugawan &copy; 2018</span>
		</div>

	</div>
	<!-- scripts -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
 	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/slick.min.js"></script>
 	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>