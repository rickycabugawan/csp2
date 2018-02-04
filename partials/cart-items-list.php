<?php 


if (isset($_SESSION['userid'])){

	require 'connection.php';
	$user_id=$_SESSION['userid'];
	$sql = "SELECT COUNT(product_id) FROM cart WHERE user_id = $user_id";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

	$cart_totalitems = $row[0];

	if ($cart_totalitems != 0) {
			
	require 'connection.php';
	$cartuserid = $_SESSION['userid'];

	$sql="SELECT cart.id AS cart_id, img, productname, manufacturer, price, quantity, stock, (price-price*(sale_percent/100*sale)) as finalprice FROM cart JOIN productlist ON cart.product_id = productlist.id WHERE user_id = $cartuserid";

	$result = mysqli_query($conn,$sql);
	
	?>
	<div class="cart-container text-secondary p-2 px-lg-5 py-lg-3">
		<div class="cart-table">
			<h4 class="cart-header text-light text-uppercase">shopping cart</h4>
			<table class="">
			  <tr class="text-light table table-striped">
			    <th>Image</th>
			    <th class="d-none d-md-table-cell d-lg-table-cell">Product Name</th> 
			    <th class="d-none d-md-none d-lg-table-cell">Brand</th>
			    <th>Quantity</th>
			    <th class="d-none d-md-table-cell d-lg-table-cell">Unit Price</th>
			    <th class="d-none d-md-table-cell d-lg-table-cell">Total</th>
			  </tr>
			  	<?php 

			  	while($row = mysqli_fetch_assoc($result)){

			  		$totalprice = $row['finalprice']*$row['quantity'];
			  	 ?>
			  <tr id="row-<?php echo $row['cart_id'] ?>">
			    <td>
			    	<img class="cart-img px-2 py-1 px-lg-4 py-lg-2" src="<?php echo $row['img'] ?>">
			    	<span class="d-md-none"><?php echo $row['productname'] ?></span>
			    </td>
			    <td class="d-none d-md-table-cell d-lg-table-cell"><?php echo $row['productname'] ?></td> 
			    <td class="d-none d-md-none d-lg-table-cell"><?php echo $row['manufacturer'] ?></td>
			    <td>
			    	<div class="cart-item-quantity-box mb-3 m-md-0">
				    	<input class="cart-item-quantity" id="<?php echo $row['cart_id'] ?>" type="number" min="1" max="<?php echo $row['stock'] ?>" name="change-quantity" value="<?php echo $row['quantity'] ?>">
				    	<button class="reload text-primary" data-max='<?php echo $row['stock'] ?>' data-index='<?php echo $row['cart_id'] ?>'><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></button>
				    	<button class="trash text-danger" data-index='<?php echo $row['cart_id'] ?>'><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
			    	</div>
			    	<span class="d-md-none"><span class="total-price">Total: ₱</span><?php echo number_format($totalprice,2) ?></span>
			    </td>
			    <td class="d-none d-md-table-cell d-lg-table-cell total-price"><span>₱</span><?php echo number_format($row['finalprice'],2) ?></td>
			    <td class="d-none d-md-table-cell d-lg-table-cell total-price"><span>₱</span><?php echo number_format($totalprice,2) ?></td>
			  </tr>

			  	<?php 
				}
			   	?>
			</table>
		</div>
	</div>
	<?php
	}
	else {
		?>
		<div class="cart-container text-secondary p-2 px-lg-5 py-lg-3">
			<div class="cart-table">
				<h4 class="cart-header text-light text-uppercase">Your shopping cart is empty. <a class="text-secondary" href="shop.php">Shop Now</a>.</h4>
				
			</div>
		</div>
		<?php
	}
}
elseif(!isset($_SESSION['userid'])){
?>
	<div class="cart-container text-secondary p-2 px-lg-5 py-lg-3">
		<div class="cart-table">
			<h4 class="cart-header text-light text-uppercase">you must <a class="text-secondary" href="login.php">login</a> to view your cart.</h4>
			
		</div>
	</div>
<?php
}
?>
