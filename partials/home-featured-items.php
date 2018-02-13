<!-- featured-items-container -->
	<div class="feature-container px-lg-5 p-3 my-md-3">
		<div class="feature-heading">
			<h5 class="m-0 px-3 px-md-4 px-lg-5 py-lg-3 py-md-2 py-2">Featured Items</h5>
		</div>
		<div class="items-container">
			<?php 
				require 'connection.php';
				$sql = "SELECT * FROM featureditems JOIN productlist ON featureditems.product_id=productlist.id";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
					?>
						<div class="feature-item">
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
								<?php if(isset($_SESSION['role']) && ($_SESSION['role'] == 'admin')){
						?>
						<button class="btn btn-info edit-item-button" data-index="<?php echo $row['id'] ?>">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<span class="d-none d-lg-inline">edit</span>
						</button>
						<button class="btn btn-secondary text-uppercase delete-item-button" data-index="<?php echo $row['id'] ?>"><i class="fa fa-ban" aria-hidden="true"></i><span class="d-none d-lg-inline">delete</span></button>

						<?php
					}
					else {
						?>
						<button class="btn btn-danger view-item-button" data-index="<?php echo $row['id'] ?>">
							<i class="fa fa-eye" aria-hidden="true"></i>
							<span class="d-none d-lg-inline">view item</span>
						</button>
						<button class="btn btn-outline-secondary"><i class="fa fa-heart" aria-hidden="true"></i></button>
						<?php
					}

					?>
							</div>
						</div><!-- end-feature-item -->
					<?php
				}
			 ?>
		</div>
	</div><!-- end-feature-items-container -->