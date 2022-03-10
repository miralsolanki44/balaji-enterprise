<?php 
session_start();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
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
    <!-- header-area start -->
		<header class="header-area">
			<div class="header-top">
				<div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-3 col-sm-4">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/b.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-sm-8">
                        <ul class="contact-info d-flex justify-content-end">
                            <li>
                                <span><i class="fa fa-phone"></i>(0281) 45678910</span>
								<span><i class="fa fa-phone"></i> (0281) 45678900</span>
								
                            </li>
							
                            <li>
                                <span><i class="fa fa-envelope"></i> shreebalajienterpsise@gmai.com</span>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-9 d-none d-sm-block">
                        <ul class="mainmenu d-flex justify-content-end">
						    <li><a href="index.php">Home</a></li>
								<li><a href="about.php">about us</a></li>
								
								<li><a href="product.php">product</a></li> 
						
							
                            <li><a href="contact.php">contact</a></li>
							<ul>
								<?php if(empty($_SESSION['un'])){ ?>
								
									<li class="main_nav_item"><a href="login.php">Log In</a></li>
								<?php }else{?>
									<li class="main_nav_item"><a href="logout.php">Log out</a></li>
								<?php }?>
							
                    </ul>
                    </div>
                    <div class="d-block d-sm-none col-4 pull-right">
                        <ul class="menu">
                            <li class="first"></li>
                            <li class="second"></li>
                            <li class="third"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
			
            <div class="responsive-menu-area d-block d-sm-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="metismenu">
                                <li class="sidemenu-items"><a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Home</a>
                                    <ul aria-expanded="false">
                                        <li><a href="index.php">Home Main</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="about.php">about us</a></li>
								
								<li><a href="product.php">product</a></li>
                                <li><a href="contact.php">contact</a></li>
							<ul>
								<?php if(empty($_SESSION['un'])){ ?>
								
									<li class="main_nav_item"><a href="login.php">Log In</a></li>
								<?php }else{?>
									<li class="main_nav_item"><a href="logout.php">Log out</a></li>
								<?php }?>
							
                    </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area end -->
        </div>
        
    </header>
</body>
</html>