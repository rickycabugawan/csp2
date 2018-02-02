
<div class="shop-items-list">
	<!-- 	<div><img class="shop-banner d-block" src="assets\img\banner\banner1.jpg"></div> -->
		<div class="shop-items-container">
			<?php 
	require 'connection.php';

	$query_os="";
	$query_minprice="0";
	$query_maxprice="50000";
	$query_manufacturer="";
	$query_sort="";
	$query_limit="LIMIT 12";
	$query_p="";
	$page=12;

	if (isset($_GET['os'])){
		$query_os = " os IN ('".join("', '",$_GET['os'])."') AND";
	}

	if (isset($_GET['manufacturer'])){
		$query_manufacturer = " manufacturer IN ('".join("', '",$_GET['manufacturer'])."') AND";
	}

	if (isset($_GET['min-price'])){
		$query_minprice=$_GET['min-price'];
	}

	if (isset($_GET['max-price'])){
		$query_maxprice=$_GET['max-price'];
	}

	if (isset($_GET['sortby'])){

		switch ($_GET['sortby']) {
			case 'name_asc':
					$query_sort="ORDER BY productname ASC";
					break;
			case 'name_desc':
					$query_sort="ORDER BY productname DESC";
					break;
			case 'price_asc':
					$query_sort="ORDER BY price ASC";
					break;
			case 'price_desc':
					$query_sort="ORDER BY price DESC";
					break;
			case 'sale_percent_desc':
					$query_sort="ORDER BY sale_percent DESC";
					break;
			default:
					$query_page="ORDER BY productname ASC";
					break;
		}
	}

	if (isset($_GET['page'])) {
		$query_limit = "LIMIT ".$_GET['page'];
		$page = $_GET['page'];
	}

	if (isset($_GET['p'])) {
		$x = $page*$_GET['p']-$page;
		$query_p = "OFFSET ".$x;
	}


	$sql="SELECT * FROM productlist WHERE $query_os $query_manufacturer price BETWEEN $query_minprice AND $query_maxprice $query_sort $query_limit $query_p";

	// echo $sql;
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		

		?>
			<div class="shop-item">
				<img src="<?php echo $row['img'] ?>">
				<div class="rating">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<h6 class="product-name text-secondary"><?php echo $row['productname'] ?></h6>
				<?php 
					if ($row['sale']) {

						$sale_price = $row['price'] - ($row['price']*$row['sale_percent']/100);
						?>
						<h6 class="product-price text-secondary"><small><s><?php echo "₱".number_format($row['price'],2) ?></s></small><br><span class="text-danger"><?php echo "₱".number_format($sale_price,2) ?></span></h6>
						<?php
					}
					else {
						?>
						<h6 class="product-price text-light"><?php echo "₱".number_format($row['price'],2) ?></h6>
						<?php
					}

				?>
				<div class="item-cta">
					<button class="btn btn-danger">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span class="d-none d-lg-inline">view item</span>
					</button>
					<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
				</div>
			</div><!-- end-shop-item -->
			<?php
			}
		?>
		</div>
</div>