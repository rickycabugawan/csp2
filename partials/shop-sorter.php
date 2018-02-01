<?php 
	$sortby_array = array(
		"name_asc"=>"Name(A-Z)",
		"name_desc"=>"Name(Z-A)",
		"price_asc"=>"Price(Low > High)",
		"price_desc"=>"Price(High > Low)",
		"sale_percent_desc"=>"Sale Price",
	);

	$page_array = array(12,24,36);

	require "connection.php";

	$query_os="";
	$query_minprice="0";
	$query_maxprice="50000";
	$query_manufacturer="";
	$query_sort="";
	$query_limit="LIMIT 12";
	$pages = 12;

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
		$pages = $_GET['page'];
	}

	$sql="SELECT COUNT(*) FROM productlist WHERE $query_os $query_manufacturer price BETWEEN $query_minprice AND $query_maxprice $query_sort $query_limit";
	$result = mysqli_query($conn,$sql);

	$totalfilteritems = mysqli_fetch_array($result)[0];



?>


<div class="shop-sorter text-secondary px-3 pb-3 pb-md-1 pt-3 mb-lg-3 mb-2">
	<div class="shop-sorter-sort">
		<label>Sort By:</label>
		<select class="sortby">

			<?php 
				foreach ($sortby_array as $key => $value) {
					if (isset($_GET['sortby']) && $key == $_GET['sortby']) {
					echo "<option value='$key' selected>$value</option>";
					}
					else{
					echo "<option value='$key'>$value</option>";
					}
				}
			 ?>
		</select>
	</div>
	<div class="shop-sorter-show">
		<label>Show:</label>
		<select class="page">
			<?php 
				foreach ($page_array as $value) {
					if (isset($_GET['page']) && $value == $_GET['page']) {
					echo "<option value='$value' selected>$value</option>";
					}
					else{
					echo "<option value='$value'>$value</option>";
					}
				}
			 ?>
		</select>
	</div>	
	<div class="pageInfo pb-2"> <?php

	$pstart = 1;
	$pend = $pages;

	if ($pend > $totalfilteritems){$pend = $totalfilteritems;}

	$totalpages = ceil($totalfilteritems/$pages);

	if (isset($_GET['p'])) {
		$pend = $pages*$_GET['p'];
		$pstart = $pend-$pages+1;
		
	if ($pend > $totalfilteritems){$pend = $totalfilteritems;}

	}
	 echo "Displaying ".$pstart."-".$pend." of ".$totalfilteritems; 


	 ?>
	 	
	</div>
	<div class="pageNavigator">
		<label>Page:</label>
		<select class="p">
			<?php 

				// echo $pages;
				
				

				for ($i=1; $i < $totalpages+1; $i++) { 

					if (isset($_GET['p']) && $i == $_GET['p']) {
					echo "<option value='$i' selected>$i</option>";
					}
					else{
					echo "<option value='$i'>$i</option>";
					}
				}


			 ?>
			
		</select>
	</div>
</div>