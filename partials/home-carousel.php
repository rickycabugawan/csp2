<?php 
	require 'connection.php';
		$home_carousel_items=array(
            95 => 'assets\img\hero\hero.jpg',
            22 => 'assets\img\hero\pixel.jpg',
            7 => 'assets\img\hero\iphone4.jpg'
            );
?>


<!-- carousel -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
	  <div class="carousel-inner">
	    <div class="carousel-item">
	      <?php
				$home_carousel_sql_query = join(",",array_keys($home_carousel_items));
				$sql = "SELECT * FROM productlist  WHERE id=22";
				$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result)){
				$home_carousel_index = array_search($row['id'],array_keys($home_carousel_items))+1;
				?>
			      <img class="d-block w-100" src="<?php echo $home_carousel_items[$row['id']] ?>">
					<div class="carousel-caption <?php echo 'item'.$home_carousel_index ?>">
				      <span class="hero-brand"><?php echo $row['manufacturer'] ?></span>
				      <span class="hero-item-name"><?php echo str_replace($row['manufacturer'],"",$row['productname']) ?></span>
				      <span class="hero-item-price"><span class="only">only </span><?php echo "₱".number_format($row['price'],2) ?></span>
				      <button class="btn btn-danger btn-lg">shop now</button>
				  	</div>
				 <?php
				}
		 ?>
	    </div>
	    <div class="carousel-item">
	    	<?php
				$home_carousel_sql_query = join(",",array_keys($home_carousel_items));
				$sql = "SELECT * FROM productlist  WHERE id=95";
				$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result)){
				$home_carousel_index = array_search($row['id'],array_keys($home_carousel_items))+1;
				?>
			      <img class="d-block w-100" src="<?php echo $home_carousel_items[$row['id']] ?>">
					<div class="carousel-caption <?php echo 'item'.$home_carousel_index ?>">
				      <span class="hero-brand"><?php echo $row['manufacturer'] ?></span>
				      <span class="hero-item-name"><?php echo str_replace($row['manufacturer'],"",$row['productname']) ?></span>
				      <span class="hero-item-price"><span class="only">only </span><?php echo "₱".number_format($row['price'],2) ?></span>
				      <button class="btn btn-danger btn-lg">shop now</button>
				  	</div>
				 <?php
				}
		 ?>
	    </div>
	    <div class="carousel-item active">
	      <?php
				$home_carousel_sql_query = join(",",array_keys($home_carousel_items));
				$sql = "SELECT * FROM productlist  WHERE id=7";
				$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result)){
				$home_carousel_index = array_search($row['id'],array_keys($home_carousel_items))+1;
				?>
			      <img class="d-block w-100" src="<?php echo $home_carousel_items[$row['id']] ?>">
					<div class="carousel-caption <?php echo 'item'.$home_carousel_index ?>">
				      <span class="hero-brand"><?php echo $row['manufacturer'] ?></span>
				      <span class="hero-item-name"><?php echo str_replace($row['manufacturer'],"",$row['productname']) ?></span>
				      <span class="hero-item-price"><span class="only">only </span><?php echo "₱".number_format($row['price'],2) ?></span>
				      <button class="btn btn-danger btn-lg">shop now</button>
				  	</div>
				 <?php
				}
		 ?>
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