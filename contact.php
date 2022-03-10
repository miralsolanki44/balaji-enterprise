<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact</title>
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

	                     <div class="contact-form">
                       <h2> <span>Contact us</span> </h2> 
			   </div>
			   </div>
			   
    <div class="contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h3><span>Feedback </span> </h3>
						<form action="checkfeedback.php" method="post">
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="name" name="name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="email" name="email" autofocus required>
                                </div>
								
								<div class="col-lg-6">
								    <input type="text" placeholder="mobile no" maxlength="10" name="mobileno pattern="[0-9]{10}" required title="must be numeric value">
                                 </div>
								 
                                <div class="col-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    
                                    <button>Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				                <div class="col-lg-6">
                    <div class="contact-page-info">
                        <h3>Address</h3>
                        <ul class="border-bottom">
                            <li><i class="fa fa-home"></i> "SHREE BALAJI ENTERPRISE",Hasnvadi main road,near Amarnath temple, Opp polybond.Rajkot </li>
                            <li><i class="fa fa-envelope"></i> balajienterpsise.com </li>
                            <li><i class="fa fa-phone"></i> (0281) 45678910</li>
                        </ul>
                    </div>
					
                </div>
            </div>
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.2828675127225!2d70.8026656147201!3d22.267272249720452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13ff47372783d18d%3A0x633ddaa29459eea7!2sBalaji+Enterprise!5e0!3m2!1sen!2sin!4v1535711702202" width="1000" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>
    </div>

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
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
	
    <script src="assets/js/scripts.js "></script>
</body>

</html>