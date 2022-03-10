
<?php
require 'conn/dbconnect.php';

if(empty($_SESSION['un']))

{
		
		
		$sql1="SELECT * FROM video";
		
		$rs1=mysqli_query($conn,$sql1);

}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php include 'header.php'; ?>

    <!-- breadcumb-area start -->
    <div class="breadcumb-area flex-style  black-opacity">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us Company</h2>
	
	                <ul class="d-flex">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-double-right"></i></li>
                        <li><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->

    <!-- about-area start -->
							 
 
	    <div class="featured-area">
        <div class="container">
            <div class="row">
			<?php while($row1=mysqli_fetch_assoc($rs1))
			{?>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="featured-wrap">
                        
                  	<video width="320" height="290"  controls>
                     <source src="admin/<?php echo $row1['v_video'];?>" type="video/mp4">
					   <p>Name:<?php echo $row1['v_nm'];?></p><br>
						                  
						</video>
					</div>
                </div>
			<?php }?>
			
			
</div>						

         
    <!-- about-area end -->

    <!-- service-area start -->
  
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>our manufacturing</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                
                    <div class="service-wrap">
                      <!--  <h3>HOBBING FIXTURE</h3>-->
                        <p>  Gear manufacturing machines are used to perform processes such as hobbing, milling, grinding, lapping, and deburring. A gear is a mechanical machine element, which is used to provide positive transmission of power through the meshing of peripherally arranged teeth with a second gear.
                        </p>
                        <p>There are many variations of passages of an Lorem Ipsum available 
						    but the about majority have suffered.</p>
							<p>We produce more than 6,00,000 quality assured gears & transmission components a month, from our facilities in India and Italy, conforming to German specifications DIN 6 to DIN 9 class of accuracy. We conform to high standards of quality and are ISO 9001 and TS 16949 certified. We have achieved an annual turnover of USD 25 million in a very short span of time by way of

							</p>
                      
                    </div>
                </div>
    <!-- service-area end -->



    <!-- footer-area start -->
    <?php include 'footer.php'; ?>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="assets/js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="assets/js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="assets/js/mailchimp.js"></script>
    <!-- metisMenu.min.js -->
    <script src="assets/js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js "></script>
    <!-- main js -->
    <script src="assets/js/scripts.js "></script>
	
</body>
</html>