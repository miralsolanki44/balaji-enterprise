
<?php
require 'conn/dbconnect.php';
session_start();
if(isset($_SESSION['un']))
{
   header("location:main.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SHREE BALAJI ENTERPRISE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<style>
    input[type=text]
    {
      
      border: none;
      border-bottom:2px solid blue;
      outline-width: 0px;
    }

.form-control {
    background: none !important;
    border: 1px solid #1b1919 !important;
    border-radius: 20px !important;
    box-shadow: none !important;
}

  </style>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><img src="images/logo3.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form action="loginprocess.php" method="post">
      <p>
		<input type="text"  name="login" class="form-control" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}">
		<input type="password" name="password"  class="form-control" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		
		<?php 
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>
        <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
          
        </div>
		
	</form>
  </div>
   <div class="copy_layout login">
      
   </div>
</body>
</html>
