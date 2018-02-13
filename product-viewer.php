<?php 
session_start();
$view_index = $_POST['index'];
require 'connection.php';

$sql="SELECT * FROM productlist WHERE id = $view_index";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){

?>
	<div class='close-button-container'>
       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <div class='modal-img-container'>
    	<img class='modal-img px-4 py-3 px-md-5 py-md-4' src='<?php echo $row['img'] ?>'>
    </div>

    <div class='modal-info-box'>
    	<h4 class='modal-info-name text-dark text-uppercase'><?php echo $row['productname'] ?></h4>
    	<div class='text-muted'>Brand: <?php echo $row['manufacturer'] ?></div>
        <div class='text-muted'>OS: <?php echo $row['os'] ?></div>
    	<div class='d-none d-md-block text-muted'><?php echo nl2br($row['description']) ?></div>
    	<div class='text-muted'>Stock: <?php echo $row['stock'] ?></div>
    </div>
    <div class='modal-price-box'>
    	<span class='text-uppercase text-muted'>price</span>
        <?php 
                if ($row['sale']) {

                    $sale_price = $row['price'] - ($row['price']*$row['sale_percent']/100);
                    ?>
                    <h3 class='modal-price text-muted m-0'><small><s><?php echo '₱'.number_format($row['price'],2) ?></s></small><br class="d-md-none"><span class='text-danger'><?php echo '₱'.number_format($sale_price,2) ?></span></h3>
                    <?php
                }
                else {
                    ?>
                    <h3 class='modal-price text-dark m-0'><?php echo '₱'.number_format($row['price'],2) ?></h3>
                    <?php
                }

            ?>
    </div>

    <div class='modal-addtocart-box'>
        <?php  
        if (isset($_SESSION['userid'])){
        ?>
        <div class='quantitybox'>
            <label class=' p-2 m-0 text-uppercase'>Qty</label>
            <button class='btn btn-outline-secondary qty-btn-left'><i class='fa fa-minus' aria-hidden='true'></i></button>
            <input class='input-quantity p-2' type='number' name='itemquantity' value="1" min="1" max="<?php echo $row['stock'] ?>" readonly>
            <button class='btn btn-outline-secondary qty-btn-right'><i class='fa fa-plus' aria-hidden='true'></i></button>
        </div>


    	<button class='btn btn-danger mb-3 mb-lg-0 text-uppercase addtocart-item-button' data-index='<?php echo $row['id'] ?>'><i class='fa fa-shopping-cart pr-2' aria-hidden='true'></i>Add to Cart</button>
        <?php
        }
        else{
            ?>
            <a class='text-light' href='login.php'><button class="btn btn-info text-uppercase">Login to add to cart <i class='fa fa-sign-in' aria-hidden='true'></i></button></a
            <?php
        }
        ?>

    </div>

    <script type="text/javascript">

        var min = parseInt($('.input-quantity').attr('min'));
        var max = parseInt($('.input-quantity').attr('max'));
        var newval =parseInt($('.input-quantity').val());

        $(".qty-btn-left").click(function(){

            if(newval > min ){
                newval--;
            }
            $('.input-quantity').val(newval);

        })

        $(".qty-btn-right").click(function(){
            if(newval < max ){
                newval++;
            }
          $('.input-quantity').val(newval)
        })


        $(".addtocart-item-button").click(function(){
            var index = $('.addtocart-item-button').data('index');
            var quantity = $('.input-quantity').val();
            var name = $('.modal-info-name').html();
            $('.alert-text').html(" You added "+name+" ("+quantity+") to your shopping cart.")

            $.post('addtocart.php',{
                index : index,
                quantity : quantity
            },function(data){

            $('.success-add').slideDown();
            setTimeout(function(){  $('.success-add').fadeOut(); }, 3000);
            })
            $('.product-modal').modal('hide');
            // $(".shopping-cart").load(location.href+" .shopping-cart>*","");
            $(".shopping-cart").load(window.location.href+" .shopping-cart")
            $(".cart-container").load(window.location.href+" .cart-container");
            

        })
    </script>
    
<?php
}
?>



