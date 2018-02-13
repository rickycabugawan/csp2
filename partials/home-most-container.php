	

<!-- new-onsale-mostviewed- -->
	<div class="most-container p-2 px-lg-5 py-lg-3 my-md-3" >
		<!-- products -->
		<div class="new-products-container p-3">
			<h5>new products</h5>
			<?php 
				require 'connection.php';
				$sql = "SELECT * FROM productlist ORDER BY release_date DESC LIMIT 4";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="new-product">
					<?php if(isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')){
						?>
						<a class="new-product-img edit-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary edit-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>


						<?php
					}
					else {
						?>
						<a class="new-product-img view-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary view-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>

						<?php
					}

					?>
					<?php 
					if ($row['sale']) {

						$sale_price = $row['price'] - ($row['price']*$row['sale_percent']/100);
						?>
						<h6 class="product-price text-secondary"><small><s><?php echo "₱".number_format($row['price'],2) ?></s></small><br><span class=" text-danger"><?php echo "₱".number_format($sale_price,2) ?></span></h6>
						<?php
					}
					else {
						?>
						<h6 class="product-price text-light"><?php echo "₱".number_format($row['price'],2) ?></h6>
						<?php
					}

					?>
				</div>
				<?php
				}

			?>
		</div><!-- end new products -->
		<!-- onsale -->
		<div class="new-products-container p-3">
			<h5>on sale</h5>
			<?php 
				require 'connection.php';
				$sql = "SELECT * FROM productlist ORDER BY sale_percent DESC LIMIT 4";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="new-product">
					<?php if(isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')){
						?>
						<a class="new-product-img edit-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary edit-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>


						<?php
					}
					else {
						?>
						<a class="new-product-img view-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary view-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>

						<?php
					}

					?>
					<?php 
					if ($row['sale']) {

						$sale_price = $row['price'] - ($row['price']*$row['sale_percent']/100);
						?>
						<h6 class="product-price text-secondary"><small><s><?php echo "₱".number_format($row['price'],2) ?></s></small><br><span class=" text-danger"><?php echo "₱".number_format($sale_price,2) ?></span></h6>
						<?php
					}
					else {
						?>
						<h6 class="product-price text-light"><?php echo "₱".number_format($row['price'],2) ?></h6>
						<?php
					}

					?>
				</div>
				<?php
				}

			?>
		</div><!-- end onsale -->
		<!-- most-viewed -->
		<div class="new-products-container p-3">
			<h5>most viewed</h5>
			<?php 
				require 'connection.php';
				$sql = "SELECT * FROM productlist ORDER BY views DESC LIMIT 4";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="new-product">

					<?php if(isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')){
						?>
						<a class="new-product-img edit-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary edit-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>


						<?php
					}
					else {
						?>
						<a class="new-product-img view-item-button" href="javascript:void(0);" data-index="<?php echo $row['id'] ?>"><img src="<?php echo $row['img'] ?>"></a>
						<a href="javascript:void(0);" class="product-name text-secondary view-item-button" data-index="<?php echo $row['id'] ?>"><?php echo $row['productname'] ?></a>

						<?php
					}

					?>	

					<?php 
					if ($row['sale']) {

						$sale_price = $row['price'] - ($row['price']*$row['sale_percent']/100);
						?>
						<h6 class="product-price text-secondary"><small><s><?php echo "₱".number_format($row['price'],2) ?></s></small><br><span class=" text-danger"><?php echo "₱".number_format($sale_price,2) ?></span></h6>
						<?php
					}
					else {
						?>
						<h6 class="product-price text-light"><?php echo "₱".number_format($row['price'],2) ?></h6>
						<?php
					}

					?>
				</div>
				<?php
				}

			?>
		</div><!-- end mostviewed -->
	</div><!-- end most-container -->