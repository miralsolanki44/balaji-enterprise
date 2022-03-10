
<?php
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$p_id=$_REQUEST['p_id'];

		$sql1="SELECT * FROM product WHERE p_id=$p_id";
		$rs1=mysqli_query($conn,$sql1);

		$row1=mysqli_fetch_assoc($rs1);

		


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h2> Update Product Form</h2>
<form action="checkupdateproduct.php?p_id=<?php echo $p_id;?>" method="post" enctype="multipart/form-data">
					
                    
                     Product Name  :
                    <input type="text" name="txt_pro_nm" value="<?php echo $row1['p_name'];?>"><br>
                

                    Producat Description  :
                    <textarea name="txt_pro_dec"><?php echo $row1['p_decs']; ?></textarea><br><br>
                    Product Image  :
                   
                    <input type="file" name="pro_image" value=""><?php echo $row1['p_img'];?><br><br>
                  
					
					<img src="<?php echo $row1['p_img'];?>" height="100" width="200"><br><br>
				    <?php 
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>
					
					<input type="hidden" name="himg" value="<?php echo $row1['p_img'];?>"/>
                    
					<input type="submit" name="submit"/>
                    <input  type="reset" name="submit"/>
                </form>
                <br><br>
               


                </center>



</body>
</html>