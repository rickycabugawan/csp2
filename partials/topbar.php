<?php 

function cart_totalitems(){
	if (isset($_SESSION['userid'])) {
		require 'connection.php';
		$user_id=$_SESSION['userid'];
		$sql = "SELECT COUNT(product_id) FROM cart WHERE user_id = $user_id";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($result);

		$cart_totalitems = $row[0];

		echo $cart_totalitems;
	}
	else{echo "0";}
}

function cart_totalprice(){
	if (isset($_SESSION['userid'])) {
		require 'connection.php';
		$user_id=$_SESSION['userid'];
		$sql = "SELECT quantity, price, (price-price*(sale_percent/100*sale)) as finalprice FROM cart JOIN productlist ON cart.product_id = productlist.id WHERE user_id = $user_id";
		$result = mysqli_query($conn, $sql);

		$cart_totalprice = 0;
		while($row = mysqli_fetch_assoc($result)){
			$itemtotalprice = $row['quantity']*$row['finalprice'];
			$cart_totalprice+=$itemtotalprice;
		}
		echo number_format($cart_totalprice,2);
	}
	else{echo "0.00";}
}

 ?>

<!-- topbar -->
	<div class="top-bar">

		<div class="top-bar-1 px-lg-5 py-2">
			<div class="top-bar-username text-light py-1 px-md-2">
				<span>Welcome, <span class="username-bar">

				<?php 
					if (isset($_SESSION['userid'])) {

						echo $_SESSION['user'];
					}
					else{echo "Guest";}
				?>
				 	
				</span></span>
			</div>
			<div class="social-bar pt-1 px-3">
				<a href=""><i class="fa fa-facebook text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram text-light" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-google-plus text-light" aria-hidden="true"></i></a>
			</div>
			<div class="top-link">
				<a class="text-light" href="">wishlist<span class="wish-list-val">(0)</span></a>
				<a class="text-light" href="cart.php">shopping cart</a>
			</div>
			<div class="top-link top-link-end	">
				<a class="text-light" href="#">my account</a>
				<?php 
					if (isset($_SESSION['user'])) {
						echo "<a class='text-light' href='logout.php'>Logout <i class='fa fa-sign-out' aria-hidden='true'></i></i></a>";
					}
					else{
						echo "<a class='text-light' href='login.php'>Login <i class='fa fa-sign-in' aria-hidden='true'></i></a>";
					}
				?>
			</div>
		</div>

		<div class="top-bar-2 px-lg-3 text-light py-md-2">

			<form class="form-inline m-3 search-box">
		      <div class="input-group">
		        <input type="text" class="search-bar form-control" placeholder="Search">
		        <div class="input-group-append">
		          <button type="button" class="search-bar-btn btn input-group-text  disabled"><i class="fa fa-search text-secondary" aria-hidden="true"></i></button>
		        </div>
		      </div>
		      <p class="auto-complete bg-light text-dark py-2 pr-3 text-right">
		      	<a class="text-dark" href="">Searching...</a><br>
		     
		      </p>
		    </form>

		    <p class="brand text-light m-0">phone<span>moto</span></p>

		    <div class="top-bar-cta p-3">
		    	<div class="call-us">
		    		<i class="fa fa-phone fa-2x p-2 text-secondary" aria-hidden="true"></i>
		    		<small class="text-secondary">call us now</small>
		    		<p class="m-0">(02)969-6969</p>
		    	</div>
		    	<a class="text-light" href="cart.php">
		    	<div class="shopping-cart">
		    		<i class="fa fa-shopping-basket fa-2x" aria-hidden="true">
		    			<span class="shopping-badge badge badge-pill badge-danger"><?php cart_totalitems(); ?></span>
		    		</i>	
		    		<p class="m-0 text-secondary">cart:</p><span class="total-cart-price">₱ <?php cart_totalprice(); ?></span>
		    	</div>
		    	</a>
		    </div>

		</div>
	</div><!-- end topbar -->