<?php
require 'conn/dbconnect.php';
include 'deshboard.php';
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

?>
<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <center><h2> Add video Form</h2>
                       
                  <form action="checkvideo.php" method="post" enctype="multipart/form-data">
         
                    
                     video Name  :
                    <input type="text" name="txt_pro_nm"><br><br>
               
                    Product video  :
                    <input type="file" name="pro_image"><br>
                 
				 <?php 
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>
                    <input type="submit" name="submit"/>
                    <input  type="reset" name="submit"/>
                </form>
                <br><br>
                <a href="viewvideo.php">View video.</a>
                </center>




</body>
</html>
<?php include 'last.php';?>
