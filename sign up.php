<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>sign up</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signup</title>
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
<link href="lcss/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="shree balaji enterprise"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="ljs/jquery.min.js"></script>
<script src="ljs/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<?php include 'header.php'; ?>
<div class="wrap">
	<h1><span> Signup</h1>			
	<div class="main-content">
		<div class="sap_tabs">	
			 
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 
				  <ul>
					  <li class="resp-tab-item" aria-controls="tab_item" role="tab"><span>REGISTRATION FORM
					</span>
					  
				  </ul>		
				  <!---->

				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="register">
						<form  action="checkuser.php" method="post" enctype="multipart/form-data">

						<input placeholder="Enter Your First name" type="text" name="txt_fn" required="username is required">									
						<input placeholder="Enter Your Last name" type="text" name="txt_ln" required="last name is required">
						<br>
         	           <input type="radio" name="gender" value="male"> Male

  <span class="checkmark"></span>
					   
                       <input type="radio" name="gender" value="female"> Female
                       <br>
					   
				    <input placeholder="Enter Your Email Id" type="text" name="txt_email" required="username is required">								
                    <input placeholder="Enter Your Mobile no" type="text" name="txt_mnum"><br>
					<input placeholder="Enter Your Password" type="password" name="txt_pass" required="password is required">
						
				    <input type="submit" value="Sign up">
				  	</div>
			 <?php 
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
        ?>
		
                    <br>
          Already Registered.
          <a href="login.php">
              Login
          </a>
      

	</form>
	
	</div>
	</div>
</body>
</html>