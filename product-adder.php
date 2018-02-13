<?php 
session_start();
// $view_index = $_POST['index'];
// require 'connection.php';

// $sql="SELECT * FROM productlist WHERE id = $view_index";
// $result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_assoc($result)){

?>
	<div class='close-button-container'>
       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <div class='modal-img-container'>
    	<i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
    </div>

    <div class='modal-info-box editor-box'>

        <div class='modal-info-name text-dark'>img_directory: <input type="text" id="img" placeholder='Enter img directory'></div>

    	<div class='modal-info-name text-dark'>product_name: <input type="text" id="productname" placeholder='Enter item name'></div>
        <div class='d-none d-md-block text-muted'>item_description:<br><textarea id="description" cols="50" rows="5" class="text-muted">Enter item description here</textarea></div>
        
    </div>
    <div class='modal-price-box'>
    	<div class='text-muted'>manufacturer: <input type="text" id="manufacturer" placeholder='Enter manufacturer'></div>
        <div class='text-muted'>operating system:<input type="text" id="manufacturer" placeholder='Enter operating system'></div>
    	<div class='text-muted'>stock: <input type="number" id="stock" placeholder="Enter item stock"></div>

        <div class='text-muted'>price(₱): <input type="number" id="price" placeholder="Enter item price"></div>

        <div class='text-muted'>sale_flag (boolean): <input type="number" id="sale" placeholder="Enter 1: sale, 0:not sale"></div>

        <div class='text-muted'>sale_percent(%): <input type="number" id="sale_percent" placeholder="Enter sale percentage"></div>

        <div class='text-muted'>product_views: <input type="number" id="views" placeholder="Enter product views"></div>
        <div class='text-muted'>release:(yyyy-mm-dd) <input type="data" id="release_date" placeholder="Enter item release date"></div>
    </div>

    <div class='modal-addtocart-box'>
        <?php  
        if (isset($_SESSION['userid'])){
        ?>
        
         <?php if($_SESSION['role'] == 'admin'){
                ?>
                <div class="text-danger">*Do not leave any field blank</div>
                <button class='btn btn-info mb-3 mb-lg-0 text-uppercase savetoedit-item-button' data-index='<?php echo $row['id'] ?>'><i class="fa fa-floppy-o pr-2" aria-hidden="true"></i>Add item to db</button>

                <?php
            }
        }     
        ?>
    </div>

    <script type="text/javascript">

        $(".savetoedit-item-button").click(function(){
            // var id = $(this).data('index');
            var img = $('#img').val()
            var productname = $('#productname').val()
            var manufacturer = $('#manufacturer').val()
            var os = $('#os').val()
            var price = $('#price').val()
            var description = $('#description').val()
            var stock = $('#stock').val()
            var sale = $('#sale').val()
            var sale_percent =$('#sale_percent').val()
            var views = $('#views').val()
            var release_date = $('#release_date').val()


            $.post('addtodb.php',{
                // id : id,
                img : img,
                productname : productname,
                manufacturer : manufacturer,
                os : os,
                price : price,
                description : description,
                stock : stock,
                sale : sale,
                sale_percent : sale_percent,
                views : views,
                release_date : release_date
            },function(data){
            console.log(data);
            $('.alert-text').html(" Item successfully added to database.")
            $('.success-add').slideDown();
            setTimeout(function(){  $('.success-add').fadeOut(); }, 2000);
            })
            $('.product-modal').modal('hide');
            $("#maincarousel").load(window.location.href+" #maincarousel");
            $(".feature-container").load(window.location.href+" .feature-container");
            $(".most-container").load(window.location.href+" .most-container");
            $(".shop-items-list").load(window.location.href+" .shop-items-list");
        })
    </script>

    <style type="text/css">
        .editor-box div {
            display: grid;
            justify-items:stretch;
            align-items: stretch;
        }
    </style>
    
<?php
// }
?>



