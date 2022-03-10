
<?php
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$v_id=$_REQUEST['v_id'];

		$sql1="SELECT * FROM video WHERE v_id=$v_id";
		$rs1=mysqli_query($conn,$sql1);

		$row1=mysqli_fetch_assoc($rs1);

		


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h2> Update video Form</h2>
<form action="checkupdatevideo.php?v_id=<?php echo $v_id;?>" method="post" enctype="multipart/form-data">	
                    
                     video Name  :
                    <input type="text" name="txt_pro_nm" value="<?php echo $row1['v_nm'];?>"><br>
                
                    video  :
                   
                    <input type="file" name="pro_image" value=""><?php echo $row1['v_video'];?><br><br>
                   <video>
               	   <source src="<?php echo $row1['v_video'];?>"  type="video/mp4">
	               </video>	
					
						<!--<source src="admin/<?php echo $row1['v_video'];?>" type="video/mp4">-->
		
					<!--<img src="<?php echo $row1['v_video'];?>" height="100" width="200"><br><br>-->
				    <?php 									
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>
					
					<input type="hidden" name="himg" value="<?php echo $row1['v_video'];?>"/>
                    
					<input type="submit" name="submit"/>
                    <input  type="reset" name="submit"/>
                </form>
                <br><br>
               


                </center>



</body>
</html>