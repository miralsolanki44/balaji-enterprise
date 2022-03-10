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

	 <center><h2> Add Product Form</h2>
                       
                  <form action="checkproduct.php" method="post" enctype="multipart/form-data">
         
                    
                     Product Name  :
                    <input type="text" name="txt_pro_nm"><br><br>
                

                    Producat Description  
                    <textarea name="txt_pro_dec"></textarea><br>
                    Product Image  :
                    <input type="file" name="pro_image" video><br>
                   <!-- Producat Price  :
                    <input type="text" name="txt_pro_price"><br>-->
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
                <a href="productview.php">View Product</a>
                </center>




</body>
</html>
<?php include 'last.php';?>
