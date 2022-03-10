<?php 
require 'conn/dbconnect.php';

session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$p_id=$_REQUEST['p_id'];

//$catnm=$_POST["cat_nm"];
$pronm=$_POST["txt_pro_nm"];
$prodec=$_POST["txt_pro_dec"];
$himg=$_POST['himg'];

$target_dir = "images/";

if(empty($_FILES["pro_image"]["name"]))
{	
	echo "ok";
}


$target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $imageFileType;
echo "<br>";

    		if (file_exists($target_file)) {
    			
    			//echo "<br>Sorry, file already exists.";
 	   			header("location:productview.php?msg=Sorry, file already exists.");
        		
				$uploadOk = 0;
			}else{


			if ($uploadOk == 0) {
   				 echo "<br>Sorry, your file was not uploaded.";
				 
				header("location:productview.php?msg=Sorry, your file was not uploaded.");
        			
			} else {
    				
    			if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file)) {
        			
					echo "<br>File Successfully Uploaded";
        			
					header("location:productview.php?msg=Sorry, there was an error uploading your file");
        			
					unlink($himg);
        			
        			//echo "The file ". basename( $_FILES["pro_image" ]["name"]). " has been uploaded.";
        
    			} else {
					
					header("location:productview.php?msg=Sorry, there was an error uploading your file");
        			echo "<br>Sorry, there was an error uploading your file.";
    			}
			}

			if($uploadOk != 0){
				
				$qry = "UPDATE product SET  p_name = '".$pronm."', p_decs = '".$prodec."', p_img = '".$target_file."' WHERE p_id ='".$p_id."'";
				
				$rs = mysqli_query($conn,$qry);
				if($rs)
				{
					echo "<br>Product Update Successfully";
    				header("location:productview.php?msg=Product Sucessfully Added");
					
				}
				else{

					echo "<br>product not added";
    				header("location:productview.php?msg=Product Sucessfully Not Added");
				}
			}
			else
			{
				echo "<br>product not add";
			}

		}




?>