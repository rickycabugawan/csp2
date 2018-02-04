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

    <div class='modal-info-box editor-box'>

        <h4 class='modal-info-name text-dark'>Are you sure you want to delete this item from the database?</h4>
        <div class='modal-info-name text-dark'>product_id: <?php echo $row['id'] ?></div>
    	<div class='modal-info-name text-dark'>product_name: <?php echo $row['productname'] ?></div>
    </div>
    <div class='modal-addtocart-box'>
        <?php  
        if (isset($_SESSION['userid'])){
        ?>
        
         <?php if($_SESSION['role'] == 'admin'){
                ?>
                <button class='btn btn-danger mb-3 mb-lg-0 text-uppercase savetodelete-item-button' data-index='<?php echo $row['id'] ?>'><i class="fa fa-trash pr-2" aria-hidden="true"></i>delete from db</button>

                <?php
            }
        }     
        ?>
    </div>

    <script type="text/javascript">

        $(".savetodelete-item-button").click(function(){
            var id = $(this).data('index');

            $('.alert-text').html(" Item ID: "+id+" database entry has been deleted.")

            $.post('savetodelete.php',{
                id : id,

            },function(data){
            console.log(data);
            $('.success-add').slideDown();
            setTimeout(function(){  $('.success-add').fadeOut(); }, 2000);
            })
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
            align-content: center;
        }

        .modal-info-box {
            grid-row: 2 / span 2;
        }
    </style>
    
<?php
}
?>