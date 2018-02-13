<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php page_title(); ?> - PhoneMOTO</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Monoton" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bpp.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel='stylesheet' type='text/css' href='assets/css/product-modal.css'>
	<?php add_css(); ?>
	
	
	
</head>
<body>
	<?php require"partials/topbar.php" ?>
	<?php require "partials/nav.php" ?>
	<?php page_content(); ?>
	<?php require "partials/back2top.php" ?>
	<?php require "partials/footer.php" ?>
	<?php require "partials/product-modal.php"; ?>
	<?php require "partials/alert.php" ?>
        <!-- copyright-modal -->
          <div class="modal fade" id="myModalDisclaimer">
            <div class="modal-dialog">
              <div class="modal-content1 bg-light">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Copyright Disclaimer</h4>
                  <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                </div>
                <div class="modal-body">
                  No copyright infringement is intended. This is only for educational purposes and not for profit. Some asset/s used are not owned by the developer/s unless otherwise stated; the credit goes to the owner.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info ml-auto mr-auto" data-dismiss="modal">I Understand</button>
                </div>
        
              </div>
            </div>
          </div><!-- /.copyright-modal -->
          <!-- privacy-modal -->
                  <div class="modal fade" id="modalPrivacy">
                    <div class="modal-dialog">
                      <div class="modal-content2 bg-light">
                        <div class="modal-header">
                          <h4 class="modal-title"><i class="fa fa-lock" aria-hidden="true"></i></i></i> Privacy Policy</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>We are committed to protecting your privacy
                          We collect the minimum amount of information about you that is commensurate with providing you with a satisfactory service. This policy indicates the type of processes that may result in data being collected about you. Your use of this website gives us the right to collect that information. 
                          </p>
                          <div class="text-center"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.privacy-modal -->
	
	<!-- scripts -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
 	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/slick.min.js"></script>
 	<?php add_js(); ?>
 	<script type="text/javascript" src="assets/js/script.js"></script>
 	<script type='text/javascript' src='assets/js/product-modal.js'></script>
 	<div></div>
</body>
</html>