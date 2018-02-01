
<div class="shop-filter text-light mr-lg-3">
	<h3 class="px-2">FILTER BY</h3>
	<ul class="accordion">
		<form>
		<li>
			<h5 class="toggle text-uppercase">operating system</h5>
			<ul class=" inner os-box">
			  <?php 
					require 'connection.php';

					$sql = "SELECT os FROM productlist GROUP BY os ORDER BY views";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)){
						?>
						<li class="form-check">
							<input class="form-check-input" type="checkbox" id="<?php echo $row['os'] ?>" name="os[]" value="<?php echo $row['os']; ?>" <?php 
							if (isset($_GET['os']) && in_array($row['os'],$_GET['os']) ) {
								echo "checked";
							}
							 ?>>
							<label class="form-check-label text-secondary text-uppercase" for="<?php echo $row['os'] ?>"><?php echo $row['os'] ?></label>
						</li>
						<?php
					}
				 ?>
			</ul>
		</li>

		<li>
			<h5 class="toggle text-uppercase">price</h5>
			<ul class="inner price-box py-2 px-2">
			  <li>₱ <input class="mb-1" type="number" id="min-price" name="min-price" value="<?php 
							if (isset($_GET['min-price']) ) {
								echo $_GET['min-price'];
							}
							 ?>"> - ₱ <input type="number" id="max-price" name="max-price" value="<?php 
							if (isset($_GET['max-price']) ) {
								echo $_GET['max-price'];
							}
							 ?>"></li>
			  <li id="price-slider"></li>
			</ul>
		</li>

		<li>
			<h5 class="toggle text-uppercase">manufacturer</h5>
			<ul class="inner manufacturer-box">
			
				<?php 
					require 'connection.php';
					$sql = "SELECT manufacturer FROM productlist GROUP BY manufacturer";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)){
						?>
						<li class="form-check">
							<input class="form-check-input" type="checkbox" id="<?php echo $row['manufacturer'] ?>" name="manufacturer[]" value="<?php echo $row['manufacturer'] ?>"<?php 
							if (isset($_GET['manufacturer']) && in_array($row['manufacturer'],$_GET['manufacturer']) ) {
								echo "checked";
							}
							 ?>>
							<label class="form-check-label text-secondary text-uppercase" for="<?php echo $row['manufacturer'] ?>"><?php echo $row['manufacturer'] ?></label>
						</li>
						<?php
					}
				 ?>
			</ul>
		</li>
		<button class="text-uppercase btn btn-lg">Filter</button>
		</form>
		<a class="text-light reset" href="shop.php?"><button class="text-uppercase btn btn-lg btn-danger px-5">Reset</button></a>
	</ul>
</div>

